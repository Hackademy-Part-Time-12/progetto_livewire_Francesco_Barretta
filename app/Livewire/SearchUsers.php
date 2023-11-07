<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{

    public $searchUser = "";


    public function render()
    {

        if (!$this->searchUser) {
            $users = User::all();
        } else {
            $users = User::where('name', 'like', '%' . $this->searchUser . '%')
                ->orWhere('email', 'like', '%' . $this->searchUser . '%')
                ->get();
        }

        return view('livewire.search-users', compact('users'));
    }
}

