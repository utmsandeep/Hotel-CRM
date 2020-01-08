<?php

use Illuminate\Database\Seeder;
use App\Model\super_admin\website\Business;
//use DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::insert(["name"=>"test"]);
    }
}
