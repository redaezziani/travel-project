<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Trip;
use App\Models\User;
use Livewire\Attributes\Validate; 
use Livewire\Component;

class CreateBooking extends Component
{   #[Validate('required')]
    public $trip_id;
    #[Validate('required')]
    public $user_id;

    public function createBooking()
    {
    
        $this->validate([
            'trip_id' => 'required',
            'user_id' => 'required',
        ]);
        Booking::create([
            'trip_id' => $this->trip_id,
            'user_id' => $this->user_id,
        ]);

        // lets refreach the page
        $this->trip_id = '';
        $this->user_id = '';
        session()->flash('message', 'Booking created successfully.');

        redirect()->route('admin.bookings.index');
    }
    public function render()
    {
        $users = User::all();
        $trips = Trip::all();
        return view('livewire.create-booking', [
            'users' => $users,
            'trips' => $trips,
        ]);
    }
}
