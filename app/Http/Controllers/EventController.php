<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    //

    public function EventDetails($id){
        $event_data = events::where('event_id', $id)->first();
        return view('Events.EventDetails',compact('event_data'));
    }
    public function CreateEventShow()
    {
        $event_data = Events::get();
        return view('Events.CreateEvents', compact('event_data'));
    }

    public function CreateEvent(Request $request)
    {
        try {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            $uuid = Str::uuid();
            $uniqueId = substr(str_replace('-', '', $uuid), 0, 18);

            $event = new Events;
            $event->event_id = $uniqueId;
            $event->event_name = $request->event_name;
            $event->user_id = $request->session()->get('user_id');
            $event->category = $request->category;
            $event->city = $request->city;
            // $event->total_sets = $request->total_sets;
            $event->ticket_price = $request->ticket_price;
            $event->description = $request->description;
            $event->start_date = $request->start_date;
            // $event->starting_time = $request->starting_time;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                if ($file->isValid()) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move(public_path('images'), $filename);
                    $event->image = 'images/' . $filename;
                }
            }

            // dd($event);
            $result = $event->save();
            // dd($result);

            if ($result) {
                return redirect()->back()->with('success', 'Event created successfully.');
            } else {
                return redirect()->back()->with('fail', 'Something went wrong while creating the event.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deletEvent($id){
        events::where('event_id',$id)->delete();
        return redirect()->back();
    }


    public function updateEventShow($id){
        try {
            $event_data = events::where('event_id', $id)->first();
            return view('Events.EditEvent',compact('event_data'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Event not found.');
        }
    }

    public function updateEvent($id,Request $request){

    try{
            $event = events::where('event_id',$id)->first();
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:204800',
            ]);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                if ($file->isValid()) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move(public_path('images'), $filename);
                    $event->image = 'images/' . $filename;

                    $dataToUpdate = [
                        'event_name' => $request['event_name'],
                        'category' => $request['category'],
                        'city' => $request['city'],
                        'ticket_price' => $request['ticket_price'],
                        'description' => $request['description'],
                        'start_date' => $request['start_date'],
                        'image' => 'images/' . $filename,
                        'user_id' =>request()->session()->get('user_id')
                    ];

                    $result = DB::table('events')
                        ->where('event_id',$id)
                        ->update($dataToUpdate);

                        if($result){
                            return redirect('dashboard');
                        }


                } else {
                    throw new Exception('Invalid file uploaded.');
                }
            }

            // if($data){
            //     return  redirect("dashboard");
            // }else{
            //     return redirect()->back();
            // }


    }catch(Exception $e){
            return redirect()->back()->with('error',  $e->getMessage());
    }

    }

}



