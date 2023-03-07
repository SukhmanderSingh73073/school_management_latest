<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureSuperAdminHasSchoolId
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(auth()->user()->hasRole('super-admin1')) ; 

        if ($request->user()->school_id == null && request()->user()->hasRole('super-admin1')) {
            session()->flash('danger', 'Please set your school of operation first.');

            return redirect()->route('schools.index');
        }

        return $next($request);
    }
}
