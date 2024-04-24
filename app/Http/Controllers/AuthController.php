<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function index(){
        return view("Auth.login");
    }
    public function login(Request $request){
        $credentials = $request->only('Email', 'Password');
        $user = Userdata::where('Email', $request['Email'])->first();
        if($user){
            if( $user && Hash::check($request['Password'], $user->Password)){
                Session::put('Role', $user->Role);
                Session::put('user_id', $user->user_id);
                Session::put('Role', $user->Role);

                $value = request()->session()->get('Role');
                $value2 = request()->session()->get('user_id');
                echo "This is a Role ",$value;
                echo "This is a Id" , $value2;
                return view("OrganizerDeshboard");

            }else{
                echo "Password Wrongs";
             }
        }else{
                echo "User not found";
                // return view("Auth.login");
        }



    }
    public function Registartion(Request $request){
        $uuId = Str::uuid();
        $uuidWithoutHyphens = str_replace('-', '',  $uuId);
        $uniqueId = substr($uuidWithoutHyphens, 0, 18);

        $user = new Userdata;
        // $user->user_id = $uniqueId;
        $user->Name = $request['Name'];
        $user->User_Name = $request['User_Name'];
        $user->Email =$request['Email'];
        $user->Phone = $request['Phone'];
        $user->Password = Hash::make($request['Password']);
        $user->City = $request['City'];
        $user->Role = $request['Role'];
        $result = $user->save();

        if($result){
            return back()->with('success','You have registered successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }

    }

    public function Registartion_View(){
        return view("Auth.singUp");
    }

    public function ChangePassword_View(){
            return view("Auth.ChangePassword");
    }

    public function ChangePassword(Request $request){
        $user_id = request()->session()->get('user_id');
        $user = Userdata::where('user_id', $user_id)->first();

        if($user){
            if( $user && Hash::check($request['oldPassword'], $user->Password)){

                $newPassword = Hash::make($request['newPassword']);
                Userdata::where('user_id', $user_id)->update(['Password' => $newPassword]);
                echo "Passwoed Chnaghe SuccessFull";

            }else{
                echo "Password is wrong";
            }
        }else{
            echo "User Not Found";
        }
    }

    public function ForgotPassword_View(){
        return view("Auth.ForgotPassword");
    }

    public function ForgotPassword(Request $request){
        $user = Userdata::where('Email',$request['Email'])->first();
        if($user){

            $tital = "Forgot Password";
            $body = "Your Opt";

            Userdata::where('Email', $request['Email'])->update(['remember_token' => Str::random(40)]);
            Mail::to($request['Email'])->send(new ForgotPasswordMail($title, $body));
            echo "Email Sent Successfully";
        }else{
            echo "User Not Found";
        }
    }

    public function ResetPassword_view(){
        return view("Auth.confirm-password");
    }

}
