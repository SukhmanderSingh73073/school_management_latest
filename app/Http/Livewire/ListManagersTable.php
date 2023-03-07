<?php

namespace App\Http\Livewire;

use App\Services\Manager\ManagerService;
use Livewire\Component;

class ListManagersTable extends Component
{
    public $managers;

    public function mount(ManagerService $managerService)
    {
        $this->managers = $managerService->getAllmanagers();
    }

    public function render()
    {
        return view('livewire.list-managers-table');
    }
}
