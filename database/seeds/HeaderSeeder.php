<?php

use Illuminate\Database\Seeder;

use App\Header;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $header = new Header;
        $header->description = 'Amarres de Amor. Abre Caminos. Endulzamientos.
        Y Más…';
        $header->user_id = 1;
        $header->save();
    }
}
