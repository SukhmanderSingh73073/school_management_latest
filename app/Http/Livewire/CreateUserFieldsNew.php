<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateUserFieldsNew extends Component
{ 
    public string $role = 'User';
    public string $applicant_role_type = 'applicant_student';
    public function render()
    {
        return view('livewire.create-user-fields-new');
    }
}
