<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class trainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('trains.index',compact('trains'));
    }

    public function today(){
        return view('trains.today');
    }
}
