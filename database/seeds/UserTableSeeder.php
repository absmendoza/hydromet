<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_head = Role::where('name', 'Head')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->firstname = 'Visitor';
        $user->lastname = 'Visitor';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitorvisitor');
        $user->save();
        $user->roles()->attach($role_user); // attach a role to a user

        $head = new User();
        $head->firstname = 'Head';
        $head->lastname = 'Head';
        $head->email = 'head@example.com';
        $head->password = bcrypt('headhead');
        $head->save();
        $head->roles()->attach($role_head); // attach a role to a user

        $admin = new User();
        $admin->firstname = 'Admin';
        $admin->lastname = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('adminadmin');
        $admin->save();
        $admin->roles()->attach($role_admin); // attach a role to a user
    }
}
