<?php

namespace App\Http\Livewire;

use App\Services\Attandance\AttandanceService;
use Livewire\Component;

class ListSchedulesTable extends Component
{
    public $schedules;

    public function mount(AttandanceService $schoolService)
    {
        $this->schedules = $schoolService->getAllScheduler() ;
    }

  
    public function render()
    {
        return view('livewire.list-schedules-table');
    }
}
