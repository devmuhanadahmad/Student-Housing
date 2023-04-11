<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Communication;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $order=Order::count();
        $message=Communication::count();
        return view('dashboard',compact('order','message'));
    }
}
