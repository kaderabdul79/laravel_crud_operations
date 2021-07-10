<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class signupController extends Controller
{
    public function signup(Request $request){
        return view('layout.signup');
    }
    public function signupValidate(Request $request){
        // $username = $req->username;
        // $password = $req->password;
        // $cpassword = $req->cpassword;
        // $email = $req->email;
        // $address = $req->address;
        //using model to insert data
        $User = new User;

        $User->name = $request->username;
        $User->password= $request->password;
        $User->confirm_password = $request->cpassword;
        $User->email = $request->email;
        $User->address= $request->address;
        
        $validation = Validator::make($request->all(), ['username' => 'required',
                                    'password' => 'required']);
        if($validation->fails()){
           return redirect('/')->with('errors', $validation->errors()); 
        }
        
        $User->save();
        return redirect()->route('login.LoginVerify');
    }
}
