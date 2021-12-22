@extends('layouts.app')

@section('title', 'Portal del Tarot - Lista de usuarios')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Lista de Usuarios</h2>
            <hr>
            <a href="{{ url('users/create') }}" class="btn btn-success">
                Agregar un nuevo usuario
            </a>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <form action="{{ url('users/'.$user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-delete btn-sm">
                                        <i class="fa fa-trash"></i>
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