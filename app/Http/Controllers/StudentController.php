<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Models\StudentRecord;
use App\Models\User;
use App\Services\Student\StudentService;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Reader;

class StudentController extends Controller
{
    public $student;
    /**
     * Instance of user service class.
     *
     * @var UserService
     */
    public $userService;

    //construct method which assigns studentService to student variable
    public function __construct(StudentService $student, UserService $userService)
    {
        $this->student = $student;
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', [User::class, 'student']);

        return view('pages.student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', [User::class, 'student']);

        return view('pages.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StudentStoreRequest $request
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StudentStoreRequest $request)
    {
        $file = $request->file('csv');
        if ($file) {
            $path = $request->file('csv')->getRealPath();
            $data = array_map('str_getcsv', file($path));
            $data = saveDataIntoDb($data);
            if(!isset($data['profile_photo'])){
                $data['profile_photo']=null;
            }
            $this->authorize('create', [User::class, 'student']);
            $this->student->createStudent($data);
        return back()->with('success', 'Uploaded Successfully');

        } else {
            $this->authorize('create', [User::class, 'student']);
            $this->student->createStudent($request);
            return back()->with('success', 'Student Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param User $student
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $student)
    {
        $this->userService->verifyUserIsOfRoleElseNotFound($student, 'student');
        $this->authorize('view', [$student, 'student']);
        $data['student'] = $student;
        $studentRecord=StudentRecord::where("user_id",$student->id)->first();
        $student['studentRecord']=$studentRecord;
        return view('pages.student.show', $data);
    }

    /**
     * Print student Profile.
     */
    public function printProfile(User $student)
    {
        $this->userService->verifyUserIsOfRoleElseNotFound($student, 'student');
        $this->authorize('view', [$student, 'student']);
        $data['student'] = $student;

        return $this->student->printProfile($data['student']->name, 'pages.student.print-student-profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $student
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $student)
    {
        $this->userService->verifyUserIsOfRoleElseNotFound($student, 'student');
        $this->authorize('update', [$student, 'student']);
        $studentRecord=StudentRecord::where("user_id",$student->id)->first();
        $student['studentRecord']=$studentRecord;
        $data['student'] = $student;
        return view('pages.student.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $student
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $student)
    {
        $this->userService->verifyUserIsOfRoleElseNotFound($student, 'student');
        $this->authorize('update', [$student, 'student']);
        $data = $request->except('_token', '_method');

        $this->student->updateStudent($student, $data);
        return back()->with('success', 'Student Updated Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $student
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function withdrawUser(Request $request, User $student)
    {
        //change status here
        $student->status = 'WITHDRAW';

      //  dd($student);

        $this->userService->verifyUserIsOfRoleElseNotFound($student, 'student');
        $this->authorize('update', [$student, 'student']);
        $data = $request->except('_token', '_method');
        $this->student->updateStudent($student, $data);
        return back()->with('success', 'Student Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param User $student
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function withdraw(User $student)
    {
        //dd('withdraw') ;

        $this->userService->verifyUserIsOfRoleElseNotFound($student, 'student');
        $this->authorize('delete', [$student, 'student']);
        $this->student->deleteStudent($student);

        return back()->with('success', 'Student Deleted Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param User $student
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $student)
    {
        $this->userService->verifyUserIsOfRoleElseNotFound($student, 'student');
        $this->authorize('delete', [$student, 'student']);
        $this->student->deleteStudent($student);

        return back()->with('success', 'Student Deleted Successfully');
    }
}
