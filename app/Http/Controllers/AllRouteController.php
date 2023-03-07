<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllRouteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function commingSoon()
    {
        return view('pages.common.soon');
    }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewSelfAttendance()
    {
        return view('pages.common.soon');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function staffAttendance()
    {
        return view('pages.common.soon');
    }
    
}
