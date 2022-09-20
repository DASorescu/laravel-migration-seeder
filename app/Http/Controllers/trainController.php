<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainController extends Controller
{
    public function index(){
        return view('trains.index');
    }

    public function today(){
        return view('trains.today');
    }
}
