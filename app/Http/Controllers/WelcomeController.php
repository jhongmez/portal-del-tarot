<?php

namespace App\Http\Controllers;

use App\Header;
use App\Service;
use App\Testimonial;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function list_data() {
        $headers      = Header::all();
        $services     = Service::all();
        $testimonials = Testimonial::all();
        return view('welcome')->with('headers', $headers)
                              ->with('testimonials', $testimonials)
                              ->with('services', $services);
    }
}
