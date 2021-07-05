<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class loginController extends Controller
{
    public function Login(){
         return view('layout.login');
    }
    public function LoginVerify(Request $req){
       $email = $req->email;
       $password = $req->password;
       $getErrors = Validator::make($req->all(), ['email' => 'required',
                                'password' => 'required']);
       if($getErrors->fails()){
         return redirect('/login')->with('errors', $getErrors->errors()); 
       }
        return redirect()->route('home.goHome');
    }
}
