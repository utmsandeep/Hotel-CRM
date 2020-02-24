<?php

namespace App\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Tenant\Admin\Role;
use Seeder\Tenant\RoleSeederClass;
use Seeder\Tenant\StaffSeeder;
use Seeder\Tenant\FoodSeeder;
use Seeder\Tenant\EquipmentSeeder;

class ChainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
       $this->call([

//            //RoleSeederClass::class,
            StaffSeeder::class,
            FoodSeeder::class,
            EquipmentSeeder::class

       ]);
   }
}
