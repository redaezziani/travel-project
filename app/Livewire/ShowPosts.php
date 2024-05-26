<?php
namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class ShowPosts extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];
    public $readyToLoad = false;
 
    public function loadComments()
    {
        $this->readyToLoad = true;
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Build the query
        $query = Comment::where('content', 'like', '%' . $this->search . '%')
            ->orWhereHas('user', function($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('trip', function($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            });

        // Log the SQL query
        Log::info('Query: ' . $query->toSql());

        // Execute the query with pagination
        $comments = $query->paginate(10);

        return view('livewire.show-posts', [
            'comments' => $this->readyToLoad ? $comments : [],
        ]);
    }
}

