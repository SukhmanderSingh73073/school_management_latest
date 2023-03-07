<?php

namespace Database\Seeders;

use App\Models\ClassGroup;
use Illuminate\Database\Seeder;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassGroup::firstOrcreate([
            'id'        => 1,
            'name'      => 'Middle',
            'school_id' => 1,
        ]);
        ClassGroup::firstOrcreate([
            'id'        => 2,
            'name'      => 'Matrix',
            'school_id' => 1,
        ]);
        ClassGroup::firstOrcreate([
            'id'        => 4,
            'name'      => 'Secondary',
            'school_id' => 1,
        ]);
        ClassGroup::factory()->times(3)->create();
    }
}
