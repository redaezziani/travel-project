<?php

namespace App\Livewire;

use App\Models\Trip;
use Livewire\Component;
use Livewire\WithPagination;

class TripsTable extends Component
{
    use WithPagination;
    public $search = '';
    
    public function deleteTrip($tripId)
    {
        $trip = Trip::find($tripId);
        $trip->delete();
        session()->flash('message', 'Trip deleted successfully.');
    }

    public function render()
    {
        $results = [];
        if (strlen($this->search) > 0) {
            $results = Trip::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('destination', 'like', '%' . $this->search . '%')
                ->paginate(8);
        } 
        else {
            $results = Trip::paginate(8);
        }
        return view('livewire.trips-table', [
            'results' => $results
        ]);
    }
}
