<?php

use Illuminate\Database\Seeder;

use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $service = new Service;
        $service->title       = 'Amarres de Amor';
        $service->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $service->user_id     = 1;
        $service->created_at  = now();
        $service->save();

        $service = new Service;
        $service->title       = 'Abre Caminos';
        $service->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $service->user_id     = 1;
        $service->created_at  = now();
        $service->save();

        $service = new Service;
        $service->title       = 'Endulzamientos';
        $service->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $service->user_id     = 1;
        $service->created_at  = now();
        $service->save();

        $service = new Service;
        $service->title       = 'Limpieza espiritual';
        $service->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $service->user_id     = 1;
        $service->created_at  = now();
        $service->save();

    }
}
