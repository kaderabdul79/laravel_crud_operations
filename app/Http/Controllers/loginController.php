<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function Login(){
         return view('layout.login');
    }
    public function LoginVerify(Request $req){
       $a = $req->username;
       $b = $req->password;
        if($a == $b){
            return redirect('/home');
        } echo $error;
        //  return view('layout.login');
    }
}
