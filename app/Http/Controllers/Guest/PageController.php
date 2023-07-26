<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
class PageController extends Controller
{
    public function index(){

        $all_trains = Train::all();
     

      
        return view('home', compact('all_trains'));
    }
}
