<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;
/*
protected $fillable = [
        'user_id',
        'trip_id',
    ];
 protected $fillable = [
        'name',
        'description',
        'price',
        'seats',
        'supervisor',
        'image',
        'destination',
        'category',
        'is_featured',
        'is_started',
        'start_date',
        'end_date',
    ];

*/
class BookingTable extends Component
{
    use WithPagination;
    public $search = '';
    
    public function deleteBooking($BookingId)
    {
        $trip = Booking::find($BookingId);
        $trip->delete();
        session()->flash('message', 'Trip deleted successfully.');
    }
    public function render()
    {
        $results = [];

        if (strlen($this->search) > 0) {
            #search for the booking that has trips name or destination or user name
            $results = Booking::whereHas('trip', function($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('destination', 'like', '%' . $this->search . '%');
            })->orWhereHas('user', function($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->paginate(8);
        }
        
        else {
            $results = Booking::paginate(8);
        }
        return view('livewire.booking-table', [
            'results' => $results
        ]);
    }
}
