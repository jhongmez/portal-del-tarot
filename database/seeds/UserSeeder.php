<?php

use Illuminate\Database\Seeder;

// User Model
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usr = new User;
        $usr->name        = 'Jhon Gomez';
        $usr->email       = 'jhonsoft@gmail.com';
        $usr->password    = bcrypt('admin'); //Encriptar
        $usr->created_at  = now(); //Fecha
        $usr->save();

    }
}
