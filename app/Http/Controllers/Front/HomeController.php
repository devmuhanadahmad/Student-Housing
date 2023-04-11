<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $room=Room::latest()->get();
        $room2=Room::latest()->get();
        $room3=Room::all();
        return view('home',compact('room3','room','room2'));
     }
}
