<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    // restituisce home
    public function index(){
        return view('home');
    }

}
