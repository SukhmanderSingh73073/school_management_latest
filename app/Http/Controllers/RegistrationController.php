<?php

namespace App\Http\Controllers;

use App\Events\AccountStatusChanged;
use App\Http\Requests\RegistrationRequest;
use App\Models\School;
use App\Services\AccountApplication\AccountApplicationService;
use App\Services\User\UserService;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    /**
     * Account application service instance.
     *
     * @var AccountApplicationService
     */
    public AccountApplicationService $accountApplicationService;

    /**
     * User service instance.
     *
     * @var UserService
     */
    public UserService $userService;

    public function __construct(AccountApplicationService $accountApplicationService, UserService $userService)
    {
        $this->accountApplicationService = $accountApplicationService;
        $this->userService = $userService;
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(RegistrationRequest $request)
    {
       // dd($request->all()) ;
       $school_code = $request->school_code ;
       $stringLength = Str::length($school_code);
       $dd_type ="staff" ;
       if($stringLength == 10){
        $dd_type ="student" ;
       }

        $school = School::where('id' , $request->school_id)->first() ;
        if (is_null($school)){
            return back()->with('failed', 'Please enter a valid school code');
        }
        $request['school_id'] = $school->id;
        $request['role_type'] = 'applicant';

        
        $user = $this->userService->createUser($request);
        $user->assignRole('applicant');
        $accountApplication = $this->accountApplicationService->createAccountApplication($user->id, $request->role,$dd_type) ;
        $status = 'Application Received';
        $reason = 'Application has been received, we would reach out to you for further information';
        $accountApplication->setStatus($status, $reason);
        //dispatch event
        AccountStatusChanged::dispatch($user, $status, $reason);

        return back()->with('success', 'Registration complete, you would recieve an email to verify your account');
    }
}
