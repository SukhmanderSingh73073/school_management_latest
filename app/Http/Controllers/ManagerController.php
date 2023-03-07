<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Manager\ManagerService;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * ManagerService variable.
     *
     * @var \App\Services\Manager\ManagerService
     */
    public ManagerService $manager;

    public function __construct(ManagerService $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function roleAssign()
    {
        $this->authorize('viewAny', [User::class, 'manager']);

        return view('pages.manager.index');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', [User::class, 'manager']);

        return view('pages.manager.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', [User::class, 'manager']);

        return view('pages.manager.create');
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
        $this->authorize('create', [User::class, 'manager']);
        $this->manager->createManager($request);

        return back()->with('success', 'manager Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param User $manager
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $manager)
    {
        $this->authorize('view', [$manager, 'manager']);

        return view('pages.manager.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $manager
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $manager)
    {
        $this->authorize('update', [$manager, 'manager']);

        return view('pages.manager.edit', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $manager
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $manager)
    {
        $this->authorize('update', [$manager, 'manager']);
        $this->manager->updateManager($manager, $request->except('_token', '_method'));

        return back()->with('success', 'manager Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $manager
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $manager)
    {
        $this->authorize('delete', [$manager, 'manager']);
        $this->manager->deleteManager($manager);

        return back()->with('success', 'manager Deleted Successfully');
    }

     /**
     * approve the specified resource from storage.
     *
     * @param User $manager
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function approve(User $manager)
    {
        $this->authorize('approve', [$manager, 'manager']);
        $this->manager->approveManager($manager);

        return back()->with('success', 'manager Deleted Successfully');
    }



}
