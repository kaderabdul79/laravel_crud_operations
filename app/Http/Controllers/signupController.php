<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function signup(){
        return view('layout.signup');
    }
    public function signupValidate(Request $req){
        $username = $req->username;
        $password = $req->password;
        $cpassword = $req->cpassword;
        $email = $req->email;
        $address = $req->address;
        return redirect('/login');
    }
}
