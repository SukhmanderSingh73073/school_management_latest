<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use App\Models\Schedule;
use App\Models\User;
use App\Services\Admin\AdminService;
use App\Services\Attandance\AttandanceService;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public $admin;

    public function __construct(AttandanceService $admin)
    {
        $this->admin = $admin;
    }
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStudent()
    {

        return view('pages.attandance.attendance.index')->with(['users' => User::all()]);
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkStore()
    {
        //return view('pages.attandance.attendance.index');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentAttendance()
    {
       // dd('dfgd') ;
        return view('pages.attandance.attendance.index')->with(['users' => User::all()]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attendanceSchedules()
    {
        return view('pages.attandance.schedules.index');
    }



      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.attandance.schedules.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create', [Schedule::class, 'principle']);

        return view('pages.attandance.schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->authorize('create', [Schedule::class, 'principle']);
        $this->admin->createSchedule($request);

        return back()->with('success', 'Schedule Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Schedule $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $principle)
    {
        //$this->authorize('view', [$principle, 'principle']);

        return view('pages.attandance.schedules.show', compact('principle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Schedule $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $principle)
    {
        //$this->authorize('update', [$principle, 'principle']);

        return view('pages.attandance.schedules.edit', compact('principle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Schedule                     $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $principle)
    {
        $this->authorize('update', [$principle, 'principle']);
        $this->admin->updateSchedule($principle, $request->except('_token', '_method'));

        return back()->with('success', 'Schedule Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Schedule $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $principle)
    {
        $this->authorize('delete', [$principle, 'principle']);
        $this->admin->deleteSchedule($principle);

        return back()->with('success', 'principle Deleted Successfully');
    }



    
}
