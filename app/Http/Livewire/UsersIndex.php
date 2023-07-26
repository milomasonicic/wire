<?php

namespace App\Http\Livewire;

use App\Models\User;
use WithPagination;
use Livewire\Component;

class UsersIndex extends Component
{
    public $active = true;
    public $search = '';
    public function render()
    {
        $users=User::where('name', 'like', '%'. $this->search.'%')->where('active', $this->active)->paginate(10);
        return view('livewire.users-index',  [
            'users'=>$users
        ]);
    }
}
