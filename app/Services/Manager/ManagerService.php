<?php

namespace App\Services\manager;

use App\Models\User;
use App\Services\Print\PrintService;
use App\Services\User\UserService;

class ManagerService

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
     * Get all managers in school.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllmanagers()
    {
        return $this->user->getUsersByRole('manager')->load('teacherRecord');
    }

    /**
     * Create a new manager.
     *
     * @param collection $record
     *
     * @return void
     */
    public function createManager($record)
    {
        $record['role_type'] = "manager" ;
        $manager = $this->user->createUser($record);
        $manager->assignRole('manager');
    }

    /**
     * Update a manager.
     *
     * @param User                    $manager
     * @param array|object|collection $records
     *
     * @return void
     */
    public function updateManager(User $manager, $records)
    {
        $this->user->updateUser($manager, $records, 'manager');
    }

    /**
     * Delete manager.
     *
     * @param User $manager
     *
     * @return void
     */
    public function deleteManager(User $manager)
    {
        $this->user->deleteUser($manager);
    }
    /**
     * approve manager.
     *
     * @param User $manager
     *
     * @return void
     */
    public function approveManager(User $manager)
    {
        $this->user->approveUser($manager);
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
