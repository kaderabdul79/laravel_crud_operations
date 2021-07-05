<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function Logout(){
        return view('layout.login');
    }
}
