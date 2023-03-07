<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $teacher = User::updateOrCreate(
            [
            'name'              => 'Singara Singh',
            'email'             => 'singara@principle.com',
            'password'          => Hash::make('Qwerty@123'),
            'school_id'         => 1,
            'address'           => 'teacher street',
            'birthday'          => '22/04/04',
            'nationality'       => 'india',
            'state'             => 'punjab',
            'city'              => 'moga',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'aadhaar_number'    => '567654432',
            'caste'             => 'GENERAL',
            'fname'             => 'Test Father',
            'mname'             => 'Test Mother',
            'f_occupation'      => 'FARMER',
            'm_occupation'      => 'FARMER',
            'previous_school'    => "Test School",
            'sub_caste'         => 'General',
            'status'            => 'ACTIVE',
            'phone'             => '7300000000' ,
            'role_type'         => 'teacher',
        ]);

        $teacher->assignRole('teacher');
    }
}
