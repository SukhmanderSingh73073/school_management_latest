<?php

namespace App\Services\School;

use App\Exceptions\ResourceNotEmptyException;
use App\Models\School;
use App\Models\Semester;
use App\Services\User\UserService;
use Illuminate\Support\Str;

class SchoolService
{
    /**
     * @var UserService
     */
    public $user;

    /**
     * User service constructor.
     *
     * @param UserService $user
     */
    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

     /**
     * Get all schools.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getSchoolsByCode($code)
    {
        return School::where('code' , $code)->first();
    }
    /**
     * Get all schools.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllSchools()
    {
        return School::all();
    }

    /**
     * Get a school by id.
     *
     * @param int $id
     *
     * @return \App\Models\School
     */
    public function getSchoolById($id)
    {
        return School::find($id);
    }

    /**
     * Create school.
     *
     * @param array $record
     *
     * @return App\Models\School
     */
    public function createSchool($record)
    {
        $record['code'] = $this->generateSchoolCode();
        $school = School::create($record);

        $data['academic_year_id'] = auth()->user()->school->academicYear->id;
        $data['school_id'] = auth()->user()->school->id;
        $semester = Semester::create([
            'name'             => "Sem 1" ,
            'school_id'        => $school->id ,
            'academic_year_id' => $data['academic_year_id'] ,
        ]);
        return $school;
    }

    /**
     * Update school.
     *
     * @param School $school
     * @param $records
     *
     * @return App\Models\School
     */
    public function updateSchool(School $school, $records)
    {
        $school->name = $records['name'];
        $school->address = $records['address'];
        $school->initials = $records['initials'];
        $school->phone = $records['phone'];
        $school->owner_name = $records['owner_name']??null;
        $school->email = $records['email'];
        $school->state = $records['state'];
        $school->district = $records['district'];
        $school->tehsil = $records['tehsil'];
        $school->status = $records['status'];
        try {
            $school->code = $records['code'];
        } catch (\Throwable $th) {
            
        }
        $school->save();
    }

    /**
     * Set authenticated user's school.
     *
     * @param int $id
     *
     * @return void
     */
    public function setSchool(School $school)
    {
        auth()->user()->school_id = $school->id;
        auth()->user()->save();
    }

    /**
     * Generate school code.
     *
     * @return string
     */
    public function generateSchoolCode()
    {
        return Str::random(10);
    }

    /**
     * Delete school.
     *
     * @param School $school
     *
     * @return void
     */
    public function deleteSchool(School $school)
    {
        if ($school->users->count('id')) {
            throw new ResourceNotEmptyException('Remove all users from this school and make sure school is not set for any super admin');

            return;
        }
        $school->delete();
    }
        /**
     * look school.
     *
     * @param array $record
     *
     * @return App\Models\School
     */
    public function lockSchool($record)
    {
        $school_info =School::where('id',(int) $record['id'])->first();
        if($school_info->is_lock==0){
            $school_info->is_lock=true;
            $school_info->save();
        }
        return $school_info;
    }
}
