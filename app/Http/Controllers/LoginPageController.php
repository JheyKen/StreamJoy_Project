<?php

namespace App\Http\Controllers;

// use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class LoginPageController extends Controller
{
    public function first()
        {
            return view('auth.index');
        }

    function signin()
        {
            return view('auth.signin');
        }
        function signup()
            {
                return view('auth.signup');
            }


    public function registerUser(Request $request)
        {
        $request -> validate([
            
            'name'     => 'required', 
            'email'    => 'required | email | unique: users',
            'password' => 'required | min: 8 | max: 12'
        ]);
            $user = new User();
            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> password = Hash::make($request -> password);
            $result = $user -> save();
            if($result)
            {
                return back()->with('success', 'You have Registered Successfully');
            }
            else
            {
                return back()->with('fail', 'Something Wrong');
            }
        }
}