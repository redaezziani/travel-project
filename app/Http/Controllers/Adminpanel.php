<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class Adminpanel extends Controller
{
    public function index()
    {
         #lets get the trips and bookings and users and comments and likes
        $trips = Trip::all();
        $bookings = Booking::paginate(5);
        $users = User::all();
        $comments = Comment::all();
        $likes = Like::all();


        return view('admin.dashboard', compact('trips', 'bookings', 'users', 'comments', 'likes'));
    }
}
