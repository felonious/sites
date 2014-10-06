@extends('_layouts.forms')

@section('breadcrumb' )
  {{ Form::breadcrumb([ 'Configurações', 'Estrutura do DRE' ]) }}
@stop

  {{ Form::open(['route' => 'estruturaDRE.store']) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::exit_button( 'estruturaDRE.index' , "&#xf112; Voltar" ) }}
@stop

@section('title', 'Incluir Estrutura do DRE' )

@section('content')
   @include('estruturaDRE.partials.form')

  {{ Form::close() }}
@stop
