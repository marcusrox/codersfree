@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Atualizar Usuário</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>Nome:</h5>
            <p class="form-control">{{ $user->name }}</p>

            <h5>Lista de Roles</h5>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            @foreach($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }} 
                    </label>
                </div>  
            @endforeach
            {!! Form::submit('Atribuir Tole', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop