<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->delete();
        DB::table('admin')->insert([
            'id'         => 1,
            'first_name' => 'John',
            'last_name'  => 'Smith',
            'email'      => 'admin@admin.com',
            'password'   =>  bcrypt('123456'),
        ]);
    }
}