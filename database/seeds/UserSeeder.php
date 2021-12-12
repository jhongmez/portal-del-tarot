<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'       => 'Jhon Gomez',
            'email'      => 'johnsoft@gmail.com',
            'password'   => bcrypt('admin'),
            'created_at' => now()
        ]);
    }
}
