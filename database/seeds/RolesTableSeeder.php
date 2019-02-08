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
        // Common user [1]
        $role = new Role();
        $role->id = Role::EMPLOYEE;
        $role->name = 'Employee';
        $role->save();

        // Manager [2]
        $role = new Role();
        $role->id = Role::MANAGER;
        $role->name = 'Management';
        $role->save();
    }
}
