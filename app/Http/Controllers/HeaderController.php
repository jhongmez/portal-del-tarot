<?php

namespace App\Http\Controllers;

use App\Header;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\HeaderRequest;

class HeaderController extends Controller
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
        $headers = Header::all();
        return view('headers.index')->with('headers', $headers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('headers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderRequest $request)
    {
        //
        // dd($request->user_id);
        $header = new Header;
        $user   = new User;
        $header->description = $request->description;
        $header->user_id     = request()->user()->id;

        // // Guardar encabezado y mostrar mensaje
        if($header->save()) {
            return redirect('headers')->with('message', 'El encabezado fue adicionado con exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        //
        return view('headers.edit')->with('header', $header);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(HeaderRequest $request, Header $header)
    {
        //
        // dd($request->all());
        $header->description  = $request->description;

        if($header->save()) {
            return redirect('headers')->with('message', 'El Encabezado fue Modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
        if($header->delete()) {
            return redirect('headers')->with('message', 'El Encabezado fue Eliminado con Exito!');
        } 
    }
}
