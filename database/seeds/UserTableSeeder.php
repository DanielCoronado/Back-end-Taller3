<?php

use Illuminate\Database\Seeder;

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

        	'name' => 'Daniel',
        	'email' => 'danielcoronado@hotmail.cl',
        	'password' => bcrypt('daniel1994'),

        ]);
    }
}
