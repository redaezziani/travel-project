<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user', 'trip')->latest()->paginate(10);
        $users = User::all();
        $trips = Trip::all();
        return view('admin.bookings.index', compact('bookings', 'users', 'trips'));
    }

    public function store (Request $request)
    {

        // first check if the trip and the user exists and also the trip has enough seats and not started
        $trip = Trip::find($request->trip_id);
        $user = User::find($request->user_id);

        if (!$trip || !$user) {
            return redirect()->back()->with('error', 'Trip or User not found');
        }

        if ($trip->seats < $request->seats) {
            return redirect()->back()->with('error', 'Not enough seats');
        }

        if ($trip->is_started) {
            return redirect()->back()->with('error', 'Trip has already started');
        }

        // now we can create the booking
        $validatedData = $request->validate([
            'user_id' => 'required',
            'trip_id' => 'required',
        ]);

        Booking::create($validatedData);

        return redirect()->route('admin.bookings.index')->with('success', 'Booking created successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully.');
    }
}

