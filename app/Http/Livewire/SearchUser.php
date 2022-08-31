<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{
    public $searchUser = '';

    public function render()
    {
        $users = User::where('email', 'like', '%'. $this->searchUser .'%')->get();
        return view('screens.backend.livewire.search-user', ['users' => $users]);
    }
}
