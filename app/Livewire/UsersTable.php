<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public $search = '';

    public function deleteUser($id)
    {
        
        User::find($id)->delete();
    }

    public function render()
    {
        $results = [];
        if ($this->search>0) {
            $results = User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->paginate(10);
        } else {
            $results = User::paginate(10);
        }
        return view('livewire.users-table', ['users' => $results]);
    }
}
