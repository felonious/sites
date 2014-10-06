@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Cadastros' ]) }}
@stop

@section('menu')
  {{ Form::create_button( 'gestaoTarefas.create' , '&#xf067; Incluir' ) }}
  {{ Form::print_button( 'gestaoTarefas.show' , '&#xf02f; Imprimir', 0 ) }}
  {{ Form::exit_button( 'home_path' , '&#xf015; Fechar' ) }}
  {{ Form::search_button( 'pesquisar', "&#xf002;" ) }}
@stop

@section('title', 'Gestão de Tarefas' )

@section('content')
<table id="data-table" class="table table-striped table-hover col-md-12">
  <thead>
    <tr>
      <th>Titulo</th>
      <th>Responsavel / Destinatário</th>
      <th>Criado em</th>
      <th>Prioridade</th>
      <th>Situação</th>
      <th>Lembrar em</th>
      <th>Palavra Chave</th>
    </tr>
  </thead>

  <tbody>

    @foreach ( $tarefas as $tarefa )

    <tr>
      <td>
        {{ Form::route_link( 'gestaoTarefas.edit',
            $tarefa->titulo , $tarefa->id ) }}
      </td>
      <td>
          {{ Form::route_link( 'gestaoTarefas.edit',
            $tarefa->usuario->name , $tarefa->id ) }}
      </td>
      <td class="text-center">
        {{ Form::route_link( 'gestaoTarefas.edit',
            $tarefa->getCreatedAtAttribute() , $tarefa->id ) }}
      </td>
      <td>
        {{ Form::route_link( 'gestaoTarefas.edit',
            $tarefa->prioridade->nome , $tarefa->id ) }}
      </td>
      <td>
          {{ Form::route_link( 'gestaoTarefas.edit',
            $tarefa->situacao->nome , $tarefa->id ) }}
      </td>
      <td>
        {{ Form::route_link( 'gestaoTarefas.edit',
            $tarefa->getlembrarEmAttribute() , $tarefa->id ) }}
      </td>
      <td>
        {{ Form::route_link( 'gestaoTarefas.edit',
            $tarefa->palavra_chave , $tarefa->id ) }}
      </td>
    </tr>

    @endforeach

  </tbody>
</table>
@stop

@section('bottom')
  @include('._layouts.partials.form.selectFilter')

  <div class="pagination-sm pull-right">
  {{ $tarefas->links() }}
  </div>
@stop

@section('search')
<table class="table">
  <thead >
    <tr>
      <th>Pesquisa</th>
    </tr>
  </thead>

  <tbody  >
    <tr style="border-bottom: 0px ">
      <td>
      Título:
      {{ Form::text_field( 'titulo') }}
      </td>
    </tr>
    <tr>
      <td class="text-right">
          {{ Form::submit_button( 'enviar', "&#xf0c7; Enviar" ) }}
      </td>
    </tr>
  </tbody>
</table>
@stop




