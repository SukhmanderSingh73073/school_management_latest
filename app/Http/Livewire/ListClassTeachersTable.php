<?php

namespace App\Http\Livewire;

use App\Services\ClassTeacher\ClassTeacherService;
use Livewire\Component;

class ListClassTeachersTable extends Component
{
    public $classteachers;

    public function mount(ClassTeacherService $teacherService)
    {
        $this->classteachers = $teacherService->getAllclassteachers();
    }

    public function render()
    {
        
        return view('livewire.list-class-teachers-table');
    }
}
