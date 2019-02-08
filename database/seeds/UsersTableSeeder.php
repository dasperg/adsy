<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Employee
        $user = new User();
        $user->role_id = Role::EMPLOYEE;
        $user->name = 'Employee';
        $user->email = 'employee@example.com';
        $user->password = bcrypt('TurboEmployee');
        $user->save();

        // Maganer
        $user = new User();
        $user->role_id = Role::MANAGER;
        $user->name = 'Manager';
        $user->email = 'manager@example.com';
        $user->password = bcrypt('TurboManager');
        $user->save();
    }
}
