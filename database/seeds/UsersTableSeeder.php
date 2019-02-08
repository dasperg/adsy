<?php

use App\User;
use App\Role;
use Illuminate\Support\Str;
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
        $employeeRole = Role::where('name', Role::EMPLOYEE)->first();
        $managerRole = Role::where('name', Role::MANAGER)->first();

        // Employee
        $user = new User();
        $user->name = Str::title(Role::EMPLOYEE);
        $user->email = 'employee@example.com';
        $user->password = bcrypt('TurboEmployee');
        $user->save();
        $employeeRole->users()->save($user);

        // Maganer
        $user = new User();
        $user->name = Str::title(Role::MANAGER);
        $user->email = 'manager@example.com';
        $user->password = bcrypt('TurboManager');
        $user->save();
        $managerRole->users()->save($user);
    }
}
