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
        DB::table('users')->insert([
            'id'         => 2,
            'username'   => 'test',
            'first_name' => 'Test',
            'last_name'  => 'John',
            'email'      => 'test@test.com',
            'password'   =>  bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'id'         => 3,
            'username'   => 'test1',
            'first_name' => 'Test1',
            'last_name'  => 'Mike',
            'email'      => 'test1@test.com',
            'password'   =>  bcrypt('123456'),
        ]);
    }
}