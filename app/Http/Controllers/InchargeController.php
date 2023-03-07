<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Incharge\InchargeService;
use Illuminate\Http\Request;

class InchargeController extends Controller
{
    /**
     * inchargeService variable.
     *
     * @var \App\Services\incharge\inchargeService
     */
    public InchargeService $incharge;

    public function __construct(InchargeService $incharge)
    {
        $this->incharge = $incharge;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function roleAssign()
    {
        $this->authorize('viewAny', [User::class, 'incharge']);

        return view('pages.incharge.index');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', [User::class, 'incharge']);

        return view('pages.incharge.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', [User::class, 'incharge']);

        return view('pages.incharge.create');
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
        $this->authorize('create', [User::class, 'incharge']);
        $this->incharge->createincharge($request);

        return back()->with('success', 'office Incharge Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param User $incharge
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $incharge)
    {
        $this->authorize('view', [$incharge, 'incharge']);

        return view('pages.incharge.show', compact('incharge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $incharge
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $incharge)
    {
        $this->authorize('update', [$incharge, 'incharge']);

        return view('pages.incharge.edit', compact('incharge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $incharge
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $incharge)
    {
        $this->authorize('update', [$incharge, 'incharge']);
        $this->incharge->updateincharge($incharge, $request->except('_token', '_method'));

        return back()->with('success', 'incharge Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $incharge
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $incharge)
    {
        $this->authorize('delete', [$incharge, 'incharge']);
        $this->incharge->deleteincharge($incharge);

        return back()->with('success', 'incharge Deleted Successfully');
    }
}
