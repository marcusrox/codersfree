@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>Sucesso!</strong> {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a href="{{ route('admin.roles.create') }}">Criar Curso</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td width="10px">{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px"><a class="btn btn-sm btn-secondary" href="{{ route('admin.roles.edit', $role)}}">Edit</a></td>
                            <td width="10px">
                                <form action="{{ route('admin.roles.destroy', $role) }}">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4">Nenhum registro</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop