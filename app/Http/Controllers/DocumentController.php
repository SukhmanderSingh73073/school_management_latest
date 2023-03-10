<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolSetRequest;
use App\Http\Requests\SchoolStoreRequest;
use App\Http\Requests\SchoolUpdateRequest;
use App\Models\School;
use App\Services\School\SchoolService;

class DocumentController extends Controller
{
    /**
     * @var SchoolService
     */
    public $school;

    /**
     * DocumentController constructor.
     *
     * @param SchoolService $school
     */
    public function __construct(SchoolService $school)
    {
        $this->school = $school;
        $this->authorizeResource(School::class, 'school');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.school.index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionSchool()
    {
        return view('pages.school.index');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SchoolStoreRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolStoreRequest $request)
    {
        $data = $request->except('_token');
        $this->school->createSchool($data);

        return back()->with('success', __('School created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        $data['school'] = $school;

        return view('pages.school.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $data['school'] = $school;

        return view('pages.school.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SchoolUpdateRequest $request
     * @param School              $school
     *
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolUpdateRequest $request, School $school)
    {
        $data = $request->except('_token', '_method');
        $this->school->updateSchool($school, $data);

        return back()->with('success', __('School updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $this->school->deleteSchool($school);

        return back()->with('success', __('School deleted successfully'));
    }

    /**
     * Get settings for authenticated user's school.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function settings()
    {
        return redirect()->route('schools.edit', ['school' => auth()->user()->school_id]);
    }

    /**
     * Set the school.
     *
     * @param SchoolSetRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setSchool(SchoolSetRequest $request)
    {
        $this->authorize('setSchool', School::class);

        $schoolId = $request->input('school_id');
        $school = School::findOrFail($schoolId);

        $this->school->setSchool($school);

        return back()->with('success', __('School set successfully'));
    }
}
