<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class Trips extends Controller
{
    public function index()
    {
        $trips = Trip::latest()->paginate(10);
        return view('welcome', compact('trips'));
    }
}
