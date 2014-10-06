@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações', 'Contas' ]) }}
@stop

  {{ Form::model($conta, [
      'method' => 'PATCH',
      'route' => ['contas.update', $conta->id] ]) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::delete_button( 'contas.destroy' , "&#xf00d; Excluir", $conta->id ) }}
  {{ Form::exit_button( 'contas.index', "&#xf112; Voltar" ) }}
@stop

@section('title', 'Alerar/Excluir Conta')

@section('content')

   @include('contas.partials.form')

  {{ Form::close() }}

@stop
