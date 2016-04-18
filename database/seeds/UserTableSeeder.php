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
        DB::table('users')->whereId(1)->delete();
        DB::table('users')->insert([
            'id'         => 1,
            'username'   => 'testtest',
            'first_name' => 'Test',
            'last_name'  => 'John',
            'email'      => 'test@test.com',
            'password'   =>  bcrypt('123456'),
        ]);
    }
}
