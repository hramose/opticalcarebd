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
        DB::table('roles')->insert([
        	'slug' => 'admin',
        	'name' => 'admin',
        	]);
        DB::table('roles')->insert([
        	'slug' => 'manager',
        	'name' => 'manager',
        	]);
        DB::table('roles')->insert([
        	'slug' => 'customer',
        	'name' => 'customer ',
        	]);
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "root@admin.io",
            'password' => bcrypt("rootfahim"),
            ]);
        DB::table('role_users')->insert([
            'user_id' => 1,
            'role_id' =>1,
            ]);
        DB::table('activations')->insert([
            'user_id' => 1,
            'code' => str_random(10),
            'completed' => 1,
            ]);
    }
}
