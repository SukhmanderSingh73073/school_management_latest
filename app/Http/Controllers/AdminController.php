<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Admin\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $admin;

    public function __construct(AdminService $admin)
    {
        $this->admin = $admin;
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.index');
    }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminCreateProfile()
    {
        $type_data = '1';
        return view('pages.admin.createprofile' , compact('type_data'));
        // return view('pages.admin.createprofile' ,['type_data' => '1'])->with(['type_data' => '1']) ;
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionAdmins()
    {
        
        return view('pages.admin.index');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAdmins()
    {
        
        return view('pages.admin.index');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAdmins()
    {
        return view('pages.admin.index');
    }


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionAdmin()
    {
        return view('pages.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function abc()
    {
      //  dd("dfd") ; 
        return view('pages.admin.create');
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
        $this->authorize('create', [User::class, 'admin']);
        $this->admin->createAdmin($request);

        return back()->with('success', 'Admin Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param User $admin
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {
        $this->authorize('view', [$admin, 'admin']);

        return view('pages.admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $admin
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        
        $this->authorize('update', [$admin, 'admin']);

        return view('pages.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User                     $admin
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        $this->authorize('update', [$admin, 'admin']);
        $this->admin->updateAdmin($admin, $request->except('_token', '_method'));

        return back()->with('success', 'Admin Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $admin
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $this->authorize('delete', [$admin, 'admin']);
        $this->admin->deleteAdmin($admin);

        return back()->with('success', 'Admin Deleted Successfully');
    }
}
