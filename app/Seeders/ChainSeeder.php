<?php

namespace App\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Tenant\Admin\Role;
use Seeder\Tenant\RoleSeederClass;

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

        RoleSeederClass::class,

    	]);
    }
}
