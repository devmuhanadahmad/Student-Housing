<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->simplepaginate(7, '*', 'page');
        return view('admin.order.index', compact('orders'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|min:3|max:255',
            'phone'=>'required',
            'notes'=>'required|string',
            'room_id'=>'required|exists:rooms,id',
            'order_date'=>'required|date'
        ]);
        Order::create($request->all());
        return redirect()->route('home')->with('success', __("تمت عملية الحجز بنجاح "));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $room=Room::all();
        $order = Order::findOrFail($id);
        return view('admin.order.edit', compact('order','room'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'name'=>'required|string|min:3|max:255',
            'phone'=>'required',
            'notes'=>'required|string',
            'room_id'=>'required|exists:rooms,id',
            'order_date'=>'required|date'
        ]);
        $order->update($request->all());
        return redirect()->route('order.index')->with('success', __("Operation accomplished successfully"));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        return redirect()->route('order.index')->with('success', __("Operation accomplished successfully"));
    }
}
