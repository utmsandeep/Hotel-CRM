<?php

namespace Seeder\Tenant;

use Illuminate\Database\Seeder;
use App\Model\Tenant\Equipment;
use Illuminate\Support\Facades\Hash;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::insert([

            ['name' => 'A.C.'],
            ['name' => 'fridge'],
            ['name' => 'Lift'],
            ['name' => 'LCD'],
            ['name' => 'Ceiling FAN']

        ]);
    }
}
