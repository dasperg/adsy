<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Common user (employee)
        $role = new Role();
        $role->name = Role::EMPLOYEE;
        $role->save();

        // Manager
        $role = new Role();
        $role->name = Role::MANAGER;
        $role->save();
    }
}
