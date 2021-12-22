<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;


class ServiceController extends Controller
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
        $services = Service::all();
        return view('services.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        //
        // dd($request->all());
        $service = new Service;
        $user    = new User;

        $service->title       = $request->title;
        $service->description = $request->description;
        $service->user_id     = request()->user()->id;

        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/services'), $file);
            $service->image = 'images/services/'.$file;
        }

        if($service->save()) {
            return redirect('services')->with('message', 'El Servicio: '.$service->title.' fue adicionado con exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
        return view ('services.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        //
        // dd($request->all());
        $service->description  = $request->description;
        $service->title        = $request->title;

        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/services'), $file);
            $service->image = 'images/services/'.$file;
        }

        if($service->save()) {
            return redirect('services')->with('message', 'El Servicio: '.$service->title.' fue Modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
        if($service->delete()) {
            return redirect('services')->with('message', 'El Servicio fue Eliminado con Exito!');
        } 
    }
}
