<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CommentsSection extends Component
{
    #[Validate('required')]
    public $trip_id;
    #[Validate('required')]
    public $content;

    public $trip;

    public function mount($trip)
    {
        $this->trip_id = $trip->id;
        $this->trip = $trip;
    }

    public function createComment()
    {
        $this->validate([
            'content' => 'required',
        ]);

        Comment::create([
            'trip_id' => $this->trip_id,
            'user_id' => Auth::id(),
            'content' => $this->content,
        ]);

        // Clear the input fields
        $this->content = '';
        session()->flash('message', 'Comment added successfully.');
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);

        if (Auth::user()->role === 'admin' || $comment->user_id === Auth::id()) {
            $comment->delete();
            session()->flash('message', 'Comment deleted successfully.');
        } else {
            session()->flash('error', 'You do not have permission to delete this comment.');
        }
    }

    public function render()
    {
        $comments = Comment::with(['user', 'trip'])->where('trip_id', $this->trip_id)->get();

        return view('livewire.comments-section', [
            'comments' => $comments,
        ]);
    }
}
