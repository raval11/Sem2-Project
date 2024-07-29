<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use App\Models\passwordReset;
use Illuminate\Support\Carbon;
use App\Models\events;
use Illuminate\Support\Facades\DB;



class AuthController extends Controller
{
    public function index()
    {
        return view("Auth.login");
    }
    public function Logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/')->with('login','Logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Email' => 'required',
            'Password' => 'required'
        ]);

        $user = Userdata::where('Email', $request['Email'])->first();
        if ($user) {
            if ($user && Hash::check($request['Password'], $user->Password)) {
                Session::put('Role', $user->Role);
                Session::put('user_id', $user->user_id);
                Session::put('success', true);

                return redirect("dashboard")->with('login','login successfully');
            } else {
                return redirect("login")->with('login','Your password is a Wrong');
            }
        } else {
            return redirect("SingUp")->withErrors(['Email' =>'login','User Not Found']);
        }
    }
    public function Registartion(Request $request)
    {

        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
            'Name' => 'required',
            'User_Name' => 'required',
            'City' => 'required',
            'Phone' => 'required|digits:10',
        ]);

        $uuId = Str::uuid();
        $uuidWithoutHyphens = str_replace('-', '',  $uuId);
        $uniqueId = substr($uuidWithoutHyphens, 0, 18);
        $user = new Userdata;
        $user->user_id = $uniqueId;
        $user->Name = $request['Name'];
        $user->User_Name = $request['User_Name'];
        $user->Email = $request['Email'];
        $user->Phone = $request['Phone'];
        $user->Password = Hash::make($request['Password']);
        $user->City = $request['City'];
        if ($request['Email'] == 'ravalrudresh482@gmail.com') {
            $user->Role = 'admin';
        } else {
            $user->Role = 'user';
        }

        $result = $user->save();

        if ($result) {
            Session::put('Role', $user->Role);
            Session::put('user_id', $user->user_id);
            Session::put('success', true);
            return view("homepage");
        } else {
            return back()->with('fail', 'Something wrong!');
        }
    }

    public function Registartion_View()
    {

        return view("Auth.singUp");
    }

    public function ChangePassword_View()
    {
        return view("Auth.ChangePassword");
    }

    public function ChangePassword(Request $request)
    {
        $user_id = request()->session()->get('user_id');
        $user = Userdata::where('user_id', $user_id)->first();

        if ($user) {
            if ($user && Hash::check($request['oldPassword'], $user->Password)) {
                $newPassword = Hash::make($request['newPassword']);
                Userdata::where('user_id', $user_id)->update(['Password' => $newPassword]);
                dd("Passwoed Chnaghe SuccessFull");
            } else {
                dd("Password is wrong");
            }
        } else {
            dd("User Not Found");
        }
    }

    public function ForgotPassword_View()
    {
        return view("Auth.ForgotPassword");
    }

    public function updateProfile()
    {
        $user_id = request()->session()->get('user_id');
        $user_data = Userdata::where('user_id', $user_id)->get()->first();
        return view('Auth.UpdateProfile', compact('user_data'));
    }

    public function updateProfileDone(Request $request)
    {
        $user_id = request()->session()->get('user_id');
        // $user = Userdata::where('user_id', $user_id)->get()->first();

        $dataToUpdate = [
            'Name' => $request['Name'],
            'User_Name' => $request['User_Name'],
            'Email' => $request['Email'],
            'Phone' => $request['Phone'],
            'City' => $request['City'],
        ];

        $result = DB::table('User_Data')
            ->where('user_id', $user_id)
            ->update($dataToUpdate);

        if ($result) {

            return redirect('dashboard');
        } else {
        }
        return redirect('dashboard');
    }


    public function DashboardShow()
    {
        $user_id = request()->session()->get('user_id');
        $user_data = Userdata::where('user_id', $user_id)->get();
        $event_data = events::where('user_id', $user_id)->get();
        $userRole = request()->session()->get('Role');
        if ($userRole == 'admin') {
            $all_user_data = Userdata::all();
            return view('Admin.Dashboard', compact('event_data', 'user_data', 'all_user_data'));
        } else {
            return view('Admin.Dashboard', compact('event_data', 'user_data'));
        }
    }
}
