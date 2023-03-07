<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApproveModel extends Component
{
    public $modal_id;
    public $button_label = 'Approve';
    public $action;
    public $item_name;
    public $button_class;
    public $delete_message;

    public function render()
    {
        return view('livewire.approve-model');
    }
}
