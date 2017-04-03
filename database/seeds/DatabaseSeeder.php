<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

          DB::table('users')->insert([
            'username' => 'unithead',
            'name' => 'U Head',
            'email' => 'unit@head.com',
            'password' => Hash::make('unithead'),
        ]);
    }
}
