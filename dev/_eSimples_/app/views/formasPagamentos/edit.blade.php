@extends('_layouts.forms')

@section('breadcrumb',
   Form::breadcrumb([ 'Configurações', 'Formas de Pagamentos' ]) )

  {{ Form::model($formaPagamento, [
      'method' => 'PATCH',
      'route' => ['formasPagamentos.update', $formaPagamento->id] ]) }}

@section('menu')
  {{ Form::save_button( 'gravar', "&#xf0c7; Gravar" ) }}
  {{ Form::delete_button( 'formasPagamentos.destroy' , "&#xf00d; Excluir", $formaPagamento->id ) }}
  {{ Form::exit_button( 'formasPagamentos.index', "&#xf112; Voltar" ) }}
@stop

@section('title', 'Alerar/Excluir Forma de Pagamento' )

@section('content')
   @include('formasPagamentos.partials.form')

  {{ Form::close() }}
@stop
