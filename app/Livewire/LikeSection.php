<?php

namespace App\Livewire;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeSection extends Component
{
    public $trip;

    public $isLiked;

    public $likeCount;

    public function mount($trip)
    {
        $this->trip = $trip;
        $this->isLiked = $this->trip->likes()->where('user_id', Auth::id())->exists();
        $this->likeCount = $this->trip->likes()->count();
    }

    public function toggleLike()
    {
        if ($this->isLiked) {
            Like::where('trip_id', $this->trip->id)
                ->where('user_id', Auth::id())
                ->delete();
            $this->isLiked = false;
            $this->likeCount--;
        } else {
            Like::create([
                'trip_id' => $this->trip->id,
                'user_id' => Auth::id(),
            ]);
            $this->isLiked = true;
            $this->likeCount++;
        }
    }

    public function render()
    {
        return view('livewire.like-section', [
            'isLiked' => $this->isLiked,
            'likeCount' => $this->likeCount,
        ]);
    }
}
