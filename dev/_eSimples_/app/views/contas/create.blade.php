@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações', 'Contas' ]) }}
@stop

  {{ Form::open(['route' => 'contas.store']) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::exit_button( 'contas.index' , "&#xf112; Voltar" ) }}
@stop

@section('title', 'Incluir Conta' )

@section('content')
   @include('contas.partials.form')

  {{ Form::close() }}
@stop
