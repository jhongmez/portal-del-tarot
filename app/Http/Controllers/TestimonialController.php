<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\TestimonialRequest;

class TestimonialController extends Controller
{
    // Proteger la ruta con el middleware
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonials = Testimonial::all();
        return view('testimonials.index')->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        //
        // dd($request->all());
        $testimonial = new Testimonial;
        $user        = new User;
        $testimonial->description = $request->description;
        $testimonial->nameAuthor  = $request->nameAuthor;
        $testimonial->user_id     = request()->user()->id;

        // // Guardar encabezado y mostrar mensaje
        if($testimonial->save()) {
            return redirect('testimonials')->with('message', 'El testimonio fue adicionado con exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view ('testimonials.edit')->with('testimonial', $testimonial);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        //
        // dd($request->all());
        $testimonial->description  = $request->description;
        $testimonial->nameAuthor   = $request->nameAuthor;

        if($testimonial->save()) {
            return redirect('testimonials')->with('message', 'El Testimonio fue Modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        if($testimonial->delete()) {
            return redirect('testimonials')->with('message', 'El testimonio fue Eliminado con Exito!');
        } 
    }

    // Ordenar Testimonios de home 
    // public function list_testimonials() {
    //     $testimonials = Testimonial::orderBy('id', 'desc')->get();
    //     return view('welcome')->with('testimonials', $testimonials);
    // }
}
