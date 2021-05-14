@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Criar nova Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nome:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nome da role']) !!}
                    @error('name')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <strong>Permissões</strong>
                @error('permissions')
                    <div><small class="text-danger"><strong>{{ $message }}</strong></small></div>
                @enderror
                @foreach($permissions as $permission)
                    <div class="pl-4">
                        <label>
                            {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!} 
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
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