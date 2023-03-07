<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditInchargeForm extends Component
{
    public User $incharge;

    public function render()
    {
        return view('livewire.edit-incharge-form');
    }
}
