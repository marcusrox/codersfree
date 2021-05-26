@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Criar nova Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
               @include('admin.roles.partials.form')
                <div>
                    {!! Form::submit('Criar Role', ['class' => 'btn btn-primary mt-2']) !!}
                </div>
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