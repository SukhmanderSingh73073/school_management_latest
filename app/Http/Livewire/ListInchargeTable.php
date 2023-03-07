<?php

namespace App\Http\Livewire;

use App\Services\Incharge\InchargeService;
use Livewire\Component;

class ListInchargeTable extends Component
{
    public $incharges;

    public function mount(InchargeService $managerService)
    {
        $this->incharges = $managerService->getAllIncharges();
    }

    public function render()
    {
        return view('livewire.list-incharge-table');
    }
}
