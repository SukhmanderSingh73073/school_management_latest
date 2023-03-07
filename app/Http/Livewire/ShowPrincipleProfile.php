<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowPrincipleProfile extends Component
{
    public User $principle;

    public function render()
    {
        return view('livewire.show-principle-profile');
    }
}
