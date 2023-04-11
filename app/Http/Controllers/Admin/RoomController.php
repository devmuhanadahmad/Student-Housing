<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::latest()->simplepaginate(7, '*', 'page');
        return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = new Room();
        return view('admin.room.create', compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $request->validate([
            'name'=>'required|string|min:3|max:255',
            'notes'=>'nullable|string',
            'price'=>'integer|required|min:0',
            'space'=>'integer|required|min:0',
            'image'=>'nullable'
           ]);
            $data = $request->except('image');
            if ($request->hasFile('image')) { //check isset image
                $file = $request->file('image'); //return object
                $path = $file->store('project', ['disk' => 'public']);
                $data['image'] = $path;
            }
            Room::create($data);
            return redirect()->route('room.index')->with('success', __("Operation accomplished successfully"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $request->validate([
            'name'=>'required|string|min:3|max:255',
            'notes'=>'nullable|string',
            'price'=>'integer|required|min:0',
            'space'=>'integer|required|min:0',
            'image'=>'nullable'
           ]);
        $old_image = $room->image;
        $data = $request->except('image');
        $request->merge(['slug' => Str::slug($request->post('name'))]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('room', ['disk' => 'public']);
            $data['image'] = $path;
        }
        if ($old_image && isset($data['image'])) {
            Storage::disk('public')->delete($old_image);
        }
        $room->update($data);
        return redirect()->route('room.index')->with('success', __("Operation accomplished successfully"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        if ($room->image) {
            Storage::disk('public')->delete($room->image);
        }
        return redirect()->route('room.index')->with('success', __("Operation accomplished successfully"));
    }}
