<?php
namespace Seeder\Tenant;
use Illuminate\Database\Seeder;
use App\Model\Tenant\Admin;
use Illuminate\Support\Facades\Hash;
class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([

        	['firstname'=>'Mohan' , 'lastname'=>'Rastogi' , 'email'=>'rastogi@gmail.com' , 'password'=>Hash::make(12345678) , 'role'=>5],
        	['firstname'=>'Suraj' , 'lastname'=>'Kanaujia' , 'email'=>'kanaujia@gmail.com' , 'password'=>Hash::make(12345678) , 'role'=>7],
        	['firstname'=>'Bazy' , 'lastname'=>'Mrew' , 'email'=>'mrew@gmail.com' , 'password'=>Hash::make(12345678) , 'role'=>8],
        	['firstname'=>'James' , 'lastname'=>'Mrew' , 'email'=>'jamesmrew@gmail.com' , 'password'=>Hash::make(12345678) , 'role'=>11],
        ]);
    }
}
