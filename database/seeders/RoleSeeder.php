<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::upsert(
            [
            ['guard_name'=>'web' , 'name' => 'super-admin'],
            ['guard_name'=>'web' , 'name' => 'super-admin1'],
            ['guard_name'=>'web' , 'name' => 'local-super-admin'],
            ['guard_name'=>'web' , 'name' => 'sub-super-admin'],
            ['guard_name'=>'web' , 'name' => 'manager'],
            ['guard_name'=>'web' , 'name' => 'principle'],
            ['guard_name'=>'web' , 'name' => 'incharge'],
            ['guard_name'=>'web' , 'name' => 'admin'],
            ['guard_name'=>'web' , 'name' => 'classteacher'],
            ['guard_name'=>'web' , 'name' => 'teacher'],
            ['guard_name'=>'web' , 'name' => 'student'],
            ['guard_name'=>'web' , 'name' => 'parent'],
            ['guard_name'=>'web' , 'name' => 'accountant'],
            ['guard_name'=>'web' , 'name' => 'librarian'],
            ['guard_name'=>'web' , 'name' => 'applicant'],
            
            ],
            ['name']
            
        );

   
        
    }
}
