<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditPrincipleForm extends Component
{
    public User $principle;

    public function render()
    {
        return view('livewire.edit-principle-form');
    }
}
