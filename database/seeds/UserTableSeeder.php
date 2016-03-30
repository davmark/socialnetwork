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
            'username'   => 'admin',
            'first_name' => 'John',
            'last_name'  => 'Smith',
            'role'       => 'admin',
            'email'      => 'admin@admin.com',
            'password'   =>  bcrypt('admin'),
        ]);
    }
}