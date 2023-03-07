<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\ScheduleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        Schedule::updateOrCreate(
           
            [
                'slug'        => 'Morning Session',
                'school_id'   =>'1' , 
                'time_in'     => '09:00:00',
                'time_out'    => '18:00:00',
                
            ]
        );

        $permissions = [
            ["user_id"  => '1',  'schedule_id' => '1',],
            ["user_id"  => '2',  'schedule_id' => '1',],
            ["user_id"  => '3',  'schedule_id' => '1',],
            ["user_id"  => '4',  'schedule_id' => '1',],
            ["user_id"  => '5',  'schedule_id' => '1',],
            ["user_id"  => '6',  'schedule_id' => '1',],
            ["user_id"  => '7',  'schedule_id' => '1',],
            ["user_id"  => '8',  'schedule_id' => '1',],
            ["user_id"  => '9',  'schedule_id' => '1',],
            ["user_id"  => '10', 'schedule_id' => '1',],
            ["user_id"  => '11', 'schedule_id' => '1',],
            ["user_id"  => '12', 'schedule_id' => '1',],
            ["user_id"  => '13', 'schedule_id' => '1',],
            
            ] ;


        foreach ($permissions as $permission) {
            ScheduleUser::updateOrCreate(
                ['user_id' => $permission['user_id']],
                $permission
            );
        }
    }
}
