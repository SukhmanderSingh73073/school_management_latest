<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::firstOrCreate([
            'id'          => 1,
            'name'        => 'Math',
            'short_name'  => 'mat',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'id'          => 2,
            'name'        => 'English',
            'short_name'  => 'eng',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'id'          => 3,
            'name'        => 'Science',
            'short_name'  => 'sc',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
        Subject::firstOrCreate([
            'id'          => 4,
            'name'        => 'Computer',
            'short_name'  => 'cs',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'id'          => 5,
            'name'        => 'Hindi',
            'short_name'  => 'hi',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);
        Subject::firstOrCreate([
            'id'          => 6,
            'name'        => 'Social Study',
            'short_name'  => 'sst',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'id'          => 7,
            'name'        => 'Physical Study',
            'short_name'  => 'phy',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

        Subject::firstOrCreate([
            'id'          => 8,
            'name'        => 'Drawing',
            'short_name'  => 'dr',
            'my_class_id' => 1,
            'school_id'   => 1,
        ]);

    }
}
