<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditManagerForm extends Component
{
    public User $manager;

    public function render()
    {
        return view('livewire.edit-manager-form');
    }
}
