<?php

namespace App\Livewire;
/*
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
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

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}

*/
use Livewire\Component;
use App\Models\Trip;

class BentoGrid extends Component
{
    public function render()
    {
        $lastTrip = Trip::latest()->first();
        // get the most popular two trips based on the number of likes

        $mostPopularTrips = Trip::withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->take(2)
            ->get();

       
        return view('livewire.bento-grid', compact('lastTrip', 'mostPopularTrips'));
    }
}
