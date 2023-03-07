<?php

namespace App\Services\ClassTeacher;

use App\Models\TeacherRecord;
use App\Models\User;
use App\Services\Print\PrintService;
use App\Services\User\UserService;

class ClassTeacherService
{
    /**
     * User service variable.
     *
     * @var UserService
     */
    public userService $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    /**
     * Get all classteachers in school.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllclassteachers()
    {
        
        return $this->user->getUsersByRole('classteacher')->load('teacherRecord');
    }

    /**
     * Create a new classteacher.
     *
     * @param collection $record
     *
     * @return void
     */
    public function createclassteacher($record)
    {
        $record['role_type'] = "classteacher" ; 
        $classteacher = $this->user->createUser($record);
        TeacherRecord::updateOrCreate(
            [
                'user_id' => $classteacher->id,
                'type'    =>"class_teacher",
                
            ]
        );

        $classteacher->assignRole('classteacher');
    }

    /**
     * Update a classteacher.
     *
     * @param User                    $classteacher
     * @param array|object|collection $records
     *
     * @return void
     */
    public function updateclassteacher(User $classteacher, $records)
    {
        $this->user->updateUser($classteacher, $records, 'classteacher');
    }

    /**
     * Delete classteacher.
     *
     * @param User $classteacher
     *
     * @return void
     */
    public function deleteclassteacher(User $classteacher)
    {
        $this->user->deleteUser($classteacher);
    }

    /**
     * Print a uset profiel.
     *
     * @param string $name
     * @param string $view
     * @param array  $data
     *
     * @return mixed
     */
    public function printProfile(string $name, string $view, array $data)
    {
        return PrintService::createPdfFromView($name, $view, $data);
    }
}
