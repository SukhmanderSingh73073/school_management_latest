<?php

namespace App\Services\Attandance;

use App\Models\Schedule;
use App\Services\School\SchoolService;

class AttandanceService
{
    /**
     * @var SchoolService
     */
    public $schoolService;

    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    /**
     * Get all academic years.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllScheduler()
    {
        return Schedule::where('school_id', auth()->user()->school_id)->get();
    }


    /**
     * Get all academic years.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getStudentAttendance()
    {
        return Schedule::where('school_id', auth()->user()->school_id)->get();
    }
    
    /**
     * Get academic year by Id.
     *
     *@param int $id
     *
     * @return App\Models\Schedule
     */
    public function getScheduleById($id)
    {
        return Schedule::where('id', $id)->first();
    }

    /**
     * Create academic year.
     *
     * @param array|Collection $records
     *
     * @return Schedule
     */
    public function createSchedule($records)
    {
        $records['school_id'] = auth()->user()->school_id;
        $Schedule = Schedule::create([
            'school_id'    => $records['school_id'],
            'slug'         => $records['slug'],
            'time_in'      => $records['time_in'],
            'time_out'     => $records['time_out'],
        ]) ;
    }

    /**
     * Update Academic Year.
     *
     * @param Schedule     $Schedule
     * @param array|Collection $records
     *
     * @return void
     */
    public function updateSchedule(Schedule $Schedule, $records)
    {
        $Schedule->start_year = $records['start_year'];
        $Schedule->stop_year = $records['stop_year'];
        $Schedule->save();
    }

    /**
     * Delete an academic year.
     *
     * @param Schedule $Schedule
     *
     * @return void
     */
    public function deleteSchedule(Schedule $Schedule)
    {
        $Schedule->delete();
    }

    /**
     * Set academic year as current.one in school.
     *
     * @param int $ScheduleId
     * @param int $schoolId
     *
     * @return void
     */
    public function setSchedule($ScheduleId, $schoolId = null)
    {
        if (!isset($schoolId)) {
            $schoolId = auth()->user()->school_id;
        }
        $school = $this->schoolService->getSchoolById($schoolId);
        $school->academic_year_id = $ScheduleId;
        //set semester id to null
        $school->semester_id = null;
        $school->save();
    }
}
