<?php

namespace App\Http\Livewire;

use App\Services\MyClass\MyClassService;
use App\Services\Student\StudentService;
use Livewire\Component;

class ListStudentsTable extends Component
{
    public $students;
    public $classes;
    

    public function mount(StudentService $studentService ,  MyClassService $myClassService)
    {
        if (!isset($this->students)) {
            $this->students = $studentService->getAllActiveStudents()->sortBy('name')->load('studentRecord', 'studentRecord.myClass', 'studentRecord.section');
        } else {
            $this->students = $this->students->loadMissing('studentRecord', 'studentRecord.myClass', 'studentRecord.section');
        }

        $this->classes = $myClassService->getAllClasses();
    }

    public function render()
    {
        return view('livewire.list-students-table');
    }
}
