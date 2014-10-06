@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Cadastros', 'Gestão de Tarefas' ]) }}
@stop

  {{ Form::model($tarefa, [
      'method' => 'PATCH',
      'route' => ['gestaoTarefas.update', $tarefa->id] ]) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::delete_button( 'gestaoTarefas.destroy' , "&#xf00d; Excluir", $tarefa->id ) }}
  {{ Form::exit_button( 'gestaoTarefas.index', "&#xf112; Voltar" ) }}
@stop

@section('title', 'Alterar/Excluir Tarefa' )

@section('content')
  @include('gestaoTarefas.partials.form')

  {{ Form::close() }}
@stop
