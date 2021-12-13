<?php

use Illuminate\Database\Seeder;

use App\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $test = new Testimonial;
        $test->description = 'Lorem ipsum dolor setme in';
        $test->nameAuthor  = 'Estela';
        $test->user_id     = 1;
        $test->created_at  = now();
        $test->save();
        
    }
}
