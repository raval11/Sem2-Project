<?php

namespace App\Http\Controllers;
use App\Models\PriceModel;
use App\Models\PaymentModel;
use App\Models\UserEventPayment;
use Illuminate\Http\Request;
use App\Models\Userdata;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\events;

class PriceController extends Controller
{
    public function ShowPlane(){

        $planesDetails  = PriceModel::get();
        return view('planePage',compact('planesDetails'));
    }


    public function PaymentPlaneShow($id){
        $user_id  = request()->session()->get('user_id');
            if($user_id){
                return view('PaymentCard',compact('id'));
            }else{
                return redirect('SingUp');
            }
        }
    public function PaymentPlane($id){

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Make Payment',
                        ],
                        'unit_amount' => 300,
                    ],
                    'quantity' => 1,
                    ]
                ],
                'mode'  => 'payment',
                'success_url' => route('home'),
                'cancel_url' => route('dashboard'),
        ]);
        if($session){
            $user_id  = request()->session()->get('user_id');
            // $priceData = PriceModel::where('planeid',$id)->first();

            $paymentData = new PaymentModel;
            $paymentData->user_id = $user_id;
            $paymentData->planeid  = $id;

            $result =  $paymentData->save();
            if($result){
                $upadtedData =  DB::table('user_data')
                ->where('user_id', $user_id)
                ->update(['Role' => 'organizer']);

                    if($upadtedData){
                        Session::put('Role', 'organizer');
                        return redirect('/')->with('donePayment','Your Payment is Done,Now You are an Organizer');
                    }else{
                        return redirect('/')->with('donePayment','Fail Payment');
                    }
            }else{
                return redirect('/')->with('donePayment','Fail Payment');
            }

        }else{
            return redirect('/')->with('donePayment','Fail Payment');
        }
    }

    public function showCard($id){
        return view('UserEventPayment',compact('id'));
    }
    public function EventPayment($id){
            $event_data = events::where('event_id',$id)->get()->first();
            $ticket_price = $event_data->ticket_price;
            $user_id  = request()->session()->get('user_id');

            \Stripe\Stripe::setApiKey(config('stripe.sk'));

            $session = \Stripe\Checkout\Session::create([
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => 'Make Payment',
                            ],
                            'unit_amount' => $ticket_price,
                        ],
                        'quantity' => 1,
                        ]
                    ],
                    'mode'  => 'payment',
                    'success_url' => route('home'),
                    'cancel_url' => route('dashboard'),
            ]);

            if($session){

                $priceModelData = new UserEventPayment;
                $priceModelData->user_id = $user_id;
                $priceModelData->event_id = $id;
                $priceModelData->price = $ticket_price;

                $result = $priceModelData->save();
                if($result){
                    return redirect('/')->with('donePayment','Your Payment is Done,Now Your Ticket Purchese');
                }else{
                    return redirect('/')->with('donePayment','Fail Payment');
                }
            }else{
                return redirect('/')->with('donePayment','Fail Payment');
            }
    }

}
