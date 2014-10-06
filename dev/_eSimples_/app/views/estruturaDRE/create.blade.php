@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações', 'Tipos de Documentos' ]) }}
@stop

  {{ Form::open(['route' => 'tiposDocumentos.store']) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::exit_button( 'tiposDocumentos.index' , "&#xf112; Voltar" ) }}
@stop

@section('title', 'Incluir Tipo de Documento')

@section('content')

   @include('tiposDocumentos.partials.form')

  {{ Form::close() }}

@stop
