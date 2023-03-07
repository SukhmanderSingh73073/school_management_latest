<?php

namespace App\Services\principle;

use App\Models\User;
use App\Services\Print\PrintService;
use App\Services\User\UserService;

class PrincipleService

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
     * Get all principles in school.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllprinciples()
    {
        return $this->user->getUsersByRole('principle')->load('teacherRecord');
    }

    /**
     * Create a new principle.
     *
     * @param collection $record
     *
     * @return void
     */
    public function createprinciple($record)
    {
        $record['role_type'] = "principle" ; 
        $principle = $this->user->createUser($record);
        $principle->assignRole('principle');
    }

    /**
     * Update a principle.
     *
     * @param User                    $principle
     * @param array|object|collection $records
     *
     * @return void
     */
    public function updateprinciple(User $principle, $records)
    {
        $this->user->updateUser($principle, $records, 'principle');
    }

    /**
     * Delete principle.
     *
     * @param User $principle
     *
     * @return void
     */
    public function deleteprinciple(User $principle)
    {
        $this->user->deleteUser($principle);
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
