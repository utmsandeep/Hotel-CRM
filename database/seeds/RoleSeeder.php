<?php

use Illuminate\Database\Seeder;
use App\Model\super_admin\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([

        	['name'=>'Super Admin' , 'description'=>'This is super admin role' , 'is_super'=>true],
        	['name'=>'Market manager' , 'description'=>'This is Market manager role' , 'is_super'=>true],
        	['name'=>'Finance manager' , 'description'=>'This is Finance manager role' , 'is_super'=>true]

        ]);

        Role::insert([
        	['name'=>'Chain Admin' , 'description'=>'This is Chain Admin role' , 'is_super'=>false , 'base'=>1],
        	['name'=>'Cluster manager' , 'description'=>'This is Cluster manager role' , 'is_super'=>false , 'base'=>1],
        	['name'=>'Regional Sales Manager' , 'description'=>'This is Regional Sales Manager role' , 'is_super'=>false , 'base'=>1],

        	['name'=>'General Manager' , 'description'=>'This is General Manager role' , 'is_super'=>false , 'base'=>2],
        	['name'=>'Director Of Sales' , 'description'=>'This is Director Of Sales role' , 'is_super'=>false , 'base'=>2],
        	['name'=>'Finance Manager Hotel' , 'description'=>'This is Finance Manager Hotel role' , 'is_super'=>false , 'base'=>2],
        	['name'=>'Banquet Manager' , 'description'=>'This is Banquet Manager role' , 'is_super'=>false , 'base'=>2],
        	['name'=>'Sales Coordinator' , 'description'=>'This is Sales Coordinator role' , 'is_super'=>false , 'base'=>2]
        ]);
    }
}
