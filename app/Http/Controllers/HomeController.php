<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::where('departure_station', date('Y-m-d'))->get();
        dd($trains);
        return view('home');
    }
}
