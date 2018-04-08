<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
    	if (!$request->q) {
    		return redirect('/');
    	}

    	$hotels = Hotel::search($request->q)->take(5)->get();

    	return view('search.index', [
    		'hotels' => $hotels
    	]);
    }
}
