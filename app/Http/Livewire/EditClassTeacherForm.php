<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditClassTeacherForm extends Component
{
    public User $classteacher;

    public function render()
    {
        return view('livewire.edit-class-teacher-form');
    }
}
