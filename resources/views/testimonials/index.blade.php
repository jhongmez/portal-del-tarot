@extends('layouts.app')

@section('title', 'Portal del Tarot - Lista de Testimonios')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Lista de Testimonios</h2>
            <hr>
            <a href="{{ url('testimonials/create') }}" class="btn btn-success">
                Agregar un nuevo testimonio
            </a>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descripcion</th>
                        <th>Nombre Autor</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $test)
                        <tr>
                            <td>{{ $test->id }}</td>
                            <td>{{ $test->description }}</td>
                            <td>{{ $test->nameAuthor }}</td>
                            <td>
                                <a href="{{ url('testimonials/'.$test->id.'/edit') }}" class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                                <form action="{{ url('testimonials/'.$test->id) }}" method="POST" class="d-inline">
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