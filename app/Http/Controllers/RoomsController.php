<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::all();

        return view('rooms.index', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (Auth::check()) {
            $room = Room::create([
                'name'=>$request->input('name'),
                'price'=>$request->input('price'),
                'user_id' => Auth::user()->id,
                'hotel_id'=>$request->input('hotel_id'),
                'facility_id'=>$request->input('facility_id'),
                'room_thumbnail' => $request->file('room_thumbnail')->store('upload', 'public')
            ]);

            if ($room) {
                return redirect()->route('hotels.show', ['hotel' => $room->hotel_id])
                ->with('success', 'Room added successfully');
            }
        }

        return back()->withInput()->with('errors', 'Error adding a new Room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
        $room = Room::find($room->id);

        return view('rooms.edit', ['room'=>$room]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
        $roomUpdate = Room::where('id', $room->id)
                            ->update([
                                'name'=>$request->input('name'),
                                'price'=>$request->input('price'),
                                'user_id' => Auth::user()->id,
                                'hotel_id'=>$request->input('hotel_id'),
                                'facility_id'=>$request->input('facility_id'),
                                'room_thumbnail' => $request->file('room_thumbnail')->store('upload', 'public')
                            ]);

        if($roomUpdate) {
            return redirect()->route('rooms.show', ['room'=> $room->id])
            ->with('success', 'Room updated successfully');
        }

        //redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
