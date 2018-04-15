<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Jobs\UploadImage;

class HotelsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotel::all();

        $hotels = Hotel::paginate(8);

        return view('hotels.index', ['hotels' => $hotels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hotels.create');
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
            $hotel = Hotel::create([
                'name'=>$request->input('name'),
                'address'=>$request->input('address'),
                // 'hotel_thumbnail'=>$request->input('hotel_thumbnail'),
                'star_rating'=>$request->input('star_rating'),
                'description'=>$request->input('description'),
                'user_id' => Auth::user()->id,

                'hotel_thumbnail' => $request->file('hotel_thumbnail')->store('upload', 'public')
            ]);

            if ($hotel) {
                return redirect()->route('hotels.show', ['hotel' => $hotel->id])
                ->with('success', 'Hotel added successfully');
            }
        }

        return back()->withInput()->with('errors', 'Error adding a new Hotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
        // $hotel = Hotel::where('id', $hotel->id)->first();
        $hotel = Hotel::find($hotel->id);

        return view('hotels.show', ['hotel'=>$hotel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
        $hotel = Hotel::find($hotel->id);

        return view('hotels.edit', ['hotel'=>$hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //save data
        $hotelUpdate = Hotel::where('id', $hotel->id)
                            ->update([
                                'name'=>$request->input('name'),
                                'address'=>$request->input('address'),
                                // 'hotel_thumbnail'=>$request->input('hotel_thumbnail'),
                                'star_rating'=>$request->input('star_rating'),
                                'description'=>$request->input('description'),

                                // 'hotel_thumbnail' => $request->file('hotel_thumbnail')->store('upload', 'public')
                            ]);

                            if ($request->file('hotel_thumbnail')) {
                                $request->file('hotel_thumbnail')->move(storage_path() . '/uploads', $fileId = uniqid(true));

                                $this->dispatch(new UploadImage($hotel, $fileId));
                            }

        if($hotelUpdate) {
            return redirect()->route('hotels.show', ['hotel'=> $hotel->id])
            ->with('success', 'Hotel updated successfully');
        }

        //redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }

}
