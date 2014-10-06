@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Cadastros', 'Gestão de Tarefas' ]) }}
@stop

  {{ Form::open(['route' => 'gestaoTarefas.store']) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::exit_button( 'gestaoTarefas.index' , "&#xf112; Voltar" ) }}
@stop

@section('title', 'Incluir Tarefa' )

@section('content')
  @include('gestaoTarefas.partials.form')

  {{ Form::close() }}
@stop
