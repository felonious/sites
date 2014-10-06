@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações', 'Estrutura do DRE' ]) }}
@stop

  {{ Form::model($tipoDocumento, [
      'method' => 'PATCH',
      'route' => ['estruturaDRE.update', $estruturaDRE->id] ]) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::delete_button( 'estruturaDRE.destroy' , "&#xf00d; Excluir", $tipoDocumento->id ) }}
  {{ Form::exit_button( 'estruturaDRE.index', "&#xf112; Voltar" ) }}
@stop

@section('title', 'Alterar/Excluir Estrutura do DRE')

@section('content')

  @include('estruturaDRE.partials.form')

  {{ Form::close() }}

@stop
