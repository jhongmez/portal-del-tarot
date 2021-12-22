@extends('layouts.app')

@section('title', 'Portal del Tarot - Lista de usuarios')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Lista de Encabezados</h2>
            <hr>
            <a href="{{ url('headers/create') }}" class="btn btn-success">
                Agregar un nuevo encabezado
            </a>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($headers as $header)
                        <tr>
                            <td>{{ $header->id }}</td>
                            <td>{{ $header->description }}</td>
                            <td>
                                <a href="{{ url('headers/'.$header->id.'/edit') }}" class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                                <form action="{{ url('headers/'.$header->id) }}" method="POST" class="d-inline">
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