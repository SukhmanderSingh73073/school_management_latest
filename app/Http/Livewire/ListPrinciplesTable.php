<?php

namespace App\Http\Livewire;

use App\Services\Principle\PrincipleService;
use Livewire\Component;

class ListPrinciplesTable extends Component
{
    public $principles;

    public function mount(PrincipleService $principleService)
    {
        $this->principles = $principleService->getAllprinciples();
    }

    public function render()
    {
        return view('livewire.list-principles-table');
    }
}
