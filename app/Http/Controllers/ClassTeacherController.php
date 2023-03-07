<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\ClassTeacher\ClassTeacherService;
use Illuminate\Http\Request;

class ClassTeacherController extends Controller
{
    /**
     * classteacherService variable.
     *
     * @var \App\Services\classteacher\classteacherService
     */
    public ClassTeacherService  $classteacher;

    public function __construct(ClassTeacherService $classteacher)
    {
        $this->classteacher = $classteacher;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function roleAssign()
    {
        $this->authorize('viewAny', [User::class, 'classteacher']);

        return view('pages.classteacher.index');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', [User::class, 'classteacher']);
        return view('pages.classteacher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', [User::class, 'classteacher']);

        return view('pages.classteacher.create');
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
        $this->authorize('create', [User::class, 'classteacher']);
        $this->classteacher->createclassteacher($request);
      
        return back()->with('success', 'classteacher Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param User $classteacher
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $classteacher)
    {
        $this->authorize('view', [$classteacher, 'classteacher']);

        return view('pages.classteacher.show', compact('classteacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $classteacher
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $classteacher)
    {
        $this->authorize('update', [$classteacher, 'classteacher']);

        return view('pages.classteacher.edit', compact('classteacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $classteacher
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $classteacher)
    {
        $this->authorize('update', [$classteacher, 'classteacher']);
        $this->classteacher->updateclassteacher($classteacher, $request->except('_token', '_method'));

        return back()->with('success', 'classteacher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $classteacher
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $classteacher)
    {
        $this->authorize('delete', [$classteacher, 'classteacher']);
        $this->classteacher->deleteclassteacher($classteacher);

        return back()->with('success', 'classteacher Deleted Successfully');
    }
}
