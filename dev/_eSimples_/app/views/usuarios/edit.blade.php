@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Cadastros', 'Usuários' ]) }}
@stop

  {{ Form::model($usuario, [
      'method' => 'PATCH',
      'route' => ['usuarios.update', $usuario->id] ]) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::delete_button( 'usuarios.destroy' , "&#xf00d; Excluir", $usuario->id ) }}
  {{ Form::exit_button( 'usuarios.index', "&#xf112; Voltar" ) }}
@stop

@section('title', 'Alerar/Excluir Usuário')

@section('content')
   @include('usuarios.partials.form')

  {{ Form::close() }}
@stop
