@extends('layouts.master')

@section('sidebar')
     @parent
     Formulario de usuario
@stop

@section('content')
        {{ HTML::link('usuarios', 'volver'); }}
        <h1>Crear Usuario</h1>
        {{ Form::open(array('url' => 'usuarios/crear')) }}
            {{Form::label('nombre', 'Nombre')}}
            {{Form::text('nombre','',array('class' => 'form-control')) }}
            {{Form::label('apellido', 'Apellido')}}
            {{Form::text('apellido', '',array('class' => 'form-control')) }}
            {{Form::submit('Save', array('class' => 'btn btn-primary btn-lg" href="#" role="button')) }}
        {{ Form::close() }}
@stop