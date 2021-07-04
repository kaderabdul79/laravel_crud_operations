<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function goHome(){
        return view('users.home');
    }
    public function createUser(){
        return view('users.newUser');
    }
    public function newUserVerify(){
        return view('users.userDetails');
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
