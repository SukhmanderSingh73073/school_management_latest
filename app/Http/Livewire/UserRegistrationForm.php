<?php

namespace App\Http\Livewire;

use App\Services\School\SchoolService;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserRegistrationForm extends Component
{
    public $applicant_type ="student";
    public $roles;
    public $schools;
    public $schoolName;
    public $schoolData;
    

    public function mount(SchoolService $schoolService)
    {
       
        $this->schools = $schoolService->getAllSchools();
        $this->roles = Role::whereIn('name', [ 'student'])->get();
        // $this->roles = Role::whereIn('name', ['teacher', 'student', 'parent'])->get();
   }

    // public function onCodeChange(String $code)
    // {
    //     $this->schoolData =  $this->service->getSchoolsByCode($code);
    // }
    public function render()
    {
        return view('livewire.user-registration-form');
    }
}
