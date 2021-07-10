<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class homeController extends Controller
{
    public function goHome(){
        return view('users.home');
    }
    public function allUsersList(){
        $alluserlist =  User::all();
        return view('users.allUsersList',['alluserlist'=>$alluserlist]);

    }
    public function createUser(){
        return view('users.newUser');
    }
    public function newUserVerify(Request $req){
        // $username = $req->username;
        // $password = $req->password>;
        // $= $req->;
        // $= $req->;
        // $= $req->;
        return redirect()->route('home.allUsersList');
        // return view('users.allUserList');
    } 
    public function myProfile(){
        // $this->data['name'] = 'Abdul Kader';
        //  $this->data['email'] = "kader@gmail.com";
        // $this->data['address'] = "Dhaka,Bangladesh";
        // $this->data['course'] = ['laravel','React','Vue'];
        return view('users.userProfile');
    }
 
    // public function deleteUser(){
    //     return view('users.home');
    // }
    // public function editUser(){
    //     return view('users.home');
    // }
    // public function detailsAllUser(){
    //     return view('users.home');
    // }
}
