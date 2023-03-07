<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowManagerProfile extends Component
{
    public User $manager;

    public function render()
    {
        return view('livewire.show-manager-profile');
    }
}
