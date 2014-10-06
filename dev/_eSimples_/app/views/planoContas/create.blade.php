@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações', 'Plano de Contas' ]) }}
@stop

  {{ Form::open(['route' => 'planoContas.store']) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::exit_button( 'planoContas.index' , "&#xf112; Voltar" ) }}
@stop

@section('title', 'Incluir Conta')

@section('content')

   @include('planoContas.partials.form')

  {{ Form::close() }}

@stop
