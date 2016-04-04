<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->whereIn('id',[1,2,3])->delete();
        DB::table('users')->insert([
            'id'         => 1,
            'username'   => 'admin',
            'first_name' => 'John',
            'last_name'  => 'Smith',
            'role'       => 'admin',
            'email'      => 'admin@admin.com',
            'password'   =>  bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'id'         => 2,
            'username'   => 'test',
            'first_name' => 'Test',
            'last_name'  => 'TestL',
            'role'       => 'user',
            'email'      => 'test@test.com',
            'password'   =>  bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'id'         => 3,
            'username'   => 'test1',
            'first_name' => 'Test1',
            'last_name'  => 'TestL1',
            'role'       => 'user',
            'email'      => 'test1@test.com',
            'password'   =>  bcrypt('123456'),
        ]);
    }
}