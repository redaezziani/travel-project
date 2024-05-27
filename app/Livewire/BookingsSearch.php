<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class BookingsSearch extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        $results = [];
        // get the search results from the bookings that have the trip name and the user name with pagination
        if (strlen($this->search) > 1) {
            $results = \App\Models\Booking::whereHas('trip', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->orWhereHas('user', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->paginate(5);
        }
        else{
            $results = \App\Models\Booking::paginate(5); 
        }
        return view('livewire.bookings-search', [
            'results' => $results
        ]);
    }
}
