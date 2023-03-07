<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Principle\PrincipleService;
use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    /**
     * principleService variable.
     *
     * @var \App\Services\principle\principleService
     */
    public PrincipleService $principle;

    public function __construct(PrincipleService $principle)
    {
        $this->principle = $principle;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function roleAssign()
    {
        $this->authorize('viewAny', [User::class, 'principle']);

        return view('pages.principle.index');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', [User::class, 'principle']);

        return view('pages.principle.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', [User::class, 'principle']);

        return view('pages.principle.create');
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
        $this->authorize('create', [User::class, 'principle']);
        $this->principle->createprinciple($request);

        return back()->with('success', 'principle Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param User $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $principle)
    {
        $this->authorize('view', [$principle, 'principle']);

        return view('pages.principle.show', compact('principle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $principle)
    {
        $this->authorize('update', [$principle, 'principle']);

        return view('pages.principle.edit', compact('principle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $principle)
    {
        $this->authorize('update', [$principle, 'principle']);
        $this->principle->updateprinciple($principle, $request->except('_token', '_method'));

        return back()->with('success', 'principle Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $principle
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $principle)
    {
        $this->authorize('delete', [$principle, 'principle']);
        $this->principle->deleteprinciple($principle);

        return back()->with('success', 'principle Deleted Successfully');
    }
}
