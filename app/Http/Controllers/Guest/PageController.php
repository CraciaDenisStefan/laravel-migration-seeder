<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
class PageController extends Controller
{
    public function index(){

        $all_trains = Train::all();
        $trains_today = Train::whereDate('data_partenza','>=',today())->orderBy('orario_partenza', 'asc')->get();

      
        return view('home', compact('all_trains'),compact('trains_today'));
    }
}
