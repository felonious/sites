@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações', 'Tipos de Documentos' ]) }}
@stop

  {{ Form::model($tipoDocumento, [
      'method' => 'PATCH',
      'route' => ['tiposDocumentos.update', $tipoDocumento->id] ]) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::delete_button( 'tiposDocumentos.destroy' , "&#xf00d; Excluir", $tipoDocumento->id ) }}
  {{ Form::exit_button( 'tiposDocumentos.index', "&#xf112; Voltar" ) }}
@stop

@section('title', 'Alterar/Excluir Tipo de Documento')

@section('content')

  @include('tiposDocumentos.partials.form')

  {{ Form::close() }}

@stop
