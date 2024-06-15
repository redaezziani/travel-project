<?php


namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class TripsSearch extends Component
{
    #[Url()]
    public $cat = ''; 
    use WithPagination;
    public $search = '';
    public function render()
    {
       
        $results = [];
        // get also the catergory of the trip by get all the categories from trip.categorie column
        //

        $categories = \App\Models\Trip::select('category')->distinct()->paginate(8);
        if (strlen($this->search) > 0) {
            
           // serach in the name or price or destination of the trip
            $results = \App\Models\Trip::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%')
                ->orWhere('destination', 'like', '%' . $this->search . '%')
                ->paginate(8);
        } 
        else {

            $results = \App\Models\Trip::paginate(8);
        }

        if (strlen($this->cat) > 0) {
            if ($this->cat == 'all') {
                $results = \App\Models\Trip::paginate(8);
            } else
                // search in the category of the trip
                $results = \App\Models\Trip::where('category', $this->cat)->paginate(8);
        }
         

        return view('livewire.trips-search', ['results' => $results,'categories' => $categories]);
    }
}
