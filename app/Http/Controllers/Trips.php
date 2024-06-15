<?php

namespace App\Http\Controllers;

use App\Models\DestinationImage;
use App\Models\Trip;
use Illuminate\Http\Request;

class Trips extends Controller
{
    public function index()
    {
        $trips = Trip::latest()->paginate(6);
        return view('welcome', compact('trips'));
    }
    // add the function that send to the /filter route
    public function filter(Request $request)
    {
        $trips =  Trip::latest()->paginate(6);
        return view('filter', compact('trips'));
    }

    public function show($id)
    {
        // get the trip by id and send it to the trip view and get the comments and likes of the trip and destination images
        $trip = Trip::find($id);
        $trip->comments = $trip->comments()->with('user')->latest()->paginate(5);
        $trip->likes = $trip->likes()->with('user')->latest()->paginate(5);
        $trip->likes_count = $trip->likes->where('like', 1)->count();
        $trip->destination_images = DestinationImage::where('trip_id', $trip->id)->get();
        return view('trip', compact('trip'));

    }
}
