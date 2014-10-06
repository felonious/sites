@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações', 'Plano de Contas' ]) }}
@stop

  {{ Form::model($conta, [
      'method' => 'PATCH',
      'route' => ['tiposDocumentos.update', $conta->id] ]) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::delete_button( 'planoContas.destroy' , "&#xf00d; Excluir", $tipoDocumento->id ) }}
  {{ Form::exit_button( 'planoContas.index', "&#xf112; Voltar" ) }}
@stop

@section('title', 'Alterar/Excluir Conta')

@section('content')

  @include('planoContas.partials.form')

  {{ Form::close() }}

@stop
