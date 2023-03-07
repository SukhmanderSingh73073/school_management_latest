<?php

namespace App\Services\Incharge;

use App\Models\User;
use App\Services\Print\PrintService;
use App\Services\User\UserService;

class InchargeService

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
     * Get all incharges in school.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllIncharges()
    {
        return $this->user->getUsersByRole('incharge')->load('teacherRecord');
    }

    /**
     * Create a new incharge.
     *
     * @param collection $record
     *
     * @return void
     */
    public function createincharge($record)
    {
        $record['role_type'] = "incharge" ; 
        $incharge = $this->user->createUser($record);
        $incharge->assignRole('incharge');
    }

    /**
     * Update a incharge.
     *
     * @param User                    $incharge
     * @param array|object|collection $records
     *
     * @return void
     */
    public function updateincharge(User $incharge, $records)
    {
        $this->user->updateUser($incharge, $records, 'incharge');
    }

    /**
     * Delete incharge.
     *
     * @param User $incharge
     *
     * @return void
     */
    public function deleteincharge(User $incharge)
    {
        $this->user->deleteUser($incharge);
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
