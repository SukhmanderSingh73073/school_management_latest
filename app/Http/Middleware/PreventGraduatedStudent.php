<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventGraduatedStudent
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
        //dd(auth()->user()->hasRole('super-admin1')) ; 
        if (!auth()->user()->hasRole('student')) {
            return $next($request);
        }
        if (auth()->user()->studentRecord()->withoutGlobalScopes()->first()->is_graduated == true) {
            session()->flash('danger', 'You cannot access this resource because you have been marked as graduated');

            return redirect('dashboard');
        }

        return $next($request);
    }
}
