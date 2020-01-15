<?php
namespace Seeder\Tenant;
use Illuminate\Database\Seeder;
use DB;
use App\Model\Tenant\Admin\Role;
class RoleSeederClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'Admin' , 'description'=>'This is admin role']);
    }
}
