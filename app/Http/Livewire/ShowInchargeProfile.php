<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowInchargeProfile extends Component
{
    public User $incharge;

    public function render()
    {
        return view('livewire.show-incharge-profile');
    }
}
