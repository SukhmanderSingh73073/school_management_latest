<?php

namespace Database\Seeders;

use App\Models\MyClass;
use Illuminate\Database\Seeder;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyClass::firstOrcreate([
            'id'             => 1,
            'name'           => '6',
            'class_group_id' => 1,
        ]);

       

        // MyClass::firstOrcreate([
        //     'id'             => 2,
        //     'name'           => '7',
        //     'class_group_id' => 1,
        // ]);

      
        // MyClass::firstOrcreate([
        //     'id'             => 3,
        //     'name'           => '8',
        //     'class_group_id' => 1,
        // ]);

        // MyClass::firstOrcreate([
        //     'id'             => 4,
        //     'name'           => '9',
        //     'class_group_id' => 2,
        // ]);
       
        // MyClass::firstOrcreate([
        //     'id'             => 5,
        //     'name'           => '10',
        //     'class_group_id' => 2,
        // ]);

       

        // MyClass::firstOrcreate([
        //     'id'             => 6,
        //     'name'           => '11',
        //     'class_group_id' => 3,
        // ]);
        // MyClass::firstOrcreate([
        //     'id'             => 7,
        //     'name'           => '12',
        //     'class_group_id' => 3,
        // ]);



    }
}
