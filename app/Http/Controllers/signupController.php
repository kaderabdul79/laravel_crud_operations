<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class signupController extends Controller
{
    public function signup(Request $req){
        return view('layout.signup');
    }
    public function signupValidate(Request $req){
        $username = $req->username;
        $password = $req->password;
        $cpassword = $req->cpassword;
        $email = $req->email;
        $address = $req->address;
        $validation = Validator::make($req->all(), ['username' => 'required',
                                    'password' => 'required']);
        if($validation->fails()){
           return redirect('/')->with('errors', $validation->errors()); 
        }
        return redirect()->route('login.LoginVerify');
    }
}
