<?php

namespace App\Http\Livewire;

use App\Models\Timetable;
use App\Models\TimetableTimeSlot;
use App\Models\Weekday;
use App\Services\Timetable\TimetableService;
use Livewire\Component;

class ShowTimetable extends Component
{
    public Timetable $timetable;
    public $weekDays;
    public $subjects;
    public $customItems;
    public bool $disableEmitCellInformationDetail = true;

    /**
     * Determine if to show the timetable.
     *
     * @var bool
     */
    public bool $showDescription = true;

    public function mount(TimetableService $timetableService)
    {
        $this->timeSlots = $this->timetable->timeSlots->sortBy('start_time')->load('weekdays');
        $this->weekdays = Weekday::where('id' , "1")->get();
        $this->subjects = $this->timetable->load('myClass')->MyClass->subjects;
        $this->customItems = $timetableService->getAllCustomTimetableItem();
    }

    public function emitCellInformationDetail(TimetableTimeSlot $timeSlot, Weekday $weekday)
    {
        $this->emit('timetableCellClicked', ['timeSlot' => $timeSlot, 'weekday' => $weekday]);
    }

    public function render()
    {
        return view('livewire.show-timetable');
    }
}
