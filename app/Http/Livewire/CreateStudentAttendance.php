<?php

namespace App\Http\Livewire;

use App\Services\Attandance\AttandanceService;
use Livewire\Component;

class CreateStudentAttendance extends Component
{
    public $data;

    public function mount(AttandanceService $schoolService)
    {
        $this->data = $schoolService->getStudentAttendance() ;
    }


    public function render()
    {
        return view('livewire.create-student-attendance');
    }
}
