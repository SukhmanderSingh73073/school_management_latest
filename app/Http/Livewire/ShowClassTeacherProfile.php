<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowClassTeacherProfile extends Component
{
    public User $classteacher;

    public function render()
    {
        return view('livewire.show-class-teacher-profile');
    }
}
