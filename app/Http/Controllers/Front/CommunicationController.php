<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Communication;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Communication::latest()->simplepaginate(7, '*', 'page');
        return view('admin.communication.index', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'=>'required|string|min:3|max:255',
            'phone'=>'required',
            'notes'=>'required|string'
         ]);
         Communication::create($request->all());
         return redirect()->route('home')->with('succes', __("تم ارسال الرسالة بنجاح"));


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Communication::findOrFail($id);

        $order->delete();

        return redirect()->route('communication.index');
    }
}
