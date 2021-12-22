@extends('layouts.app')

@section('title', 'Portal del Tarot - Lista de Servicios')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Lista de Servicios</h2>
            <hr>
            <a href="{{ url('services/create') }}" class="btn btn-success">
                Agregar un nuevo servicio
            </a>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->description }}</td>
                            <td>
                                <img src="{{ asset($service->image) }}" alt="" width="200">
                            </td>
                            <td>
                                <a href="{{ url('services/'.$service->id.'/edit') }}" class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                                <form action="{{ url('services/'.$service->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-delete btn-sm">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection