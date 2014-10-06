@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Cadastros', 'Usuários' ]) }}
@stop

  {{ Form::open(['route' => 'usuarios.store']) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::exit_button( 'usuarios.index' , "&#xf112; Voltar" ) }}
@stop

@section('title', 'Incluir Usuários')

@section('content')
  @include('usuarios.partials.form')

  {{ Form::close() }}
@stop
