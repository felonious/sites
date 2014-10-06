@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações' ]) }}
@stop

@section('menu')
  {{ Form::create_button( 'planoContas.create' , '&#xf067; Incluir' ) }}
  {{ Form::print_button( 'planoContas.show' , '&#xf02f; Imprimir', 0 ) }}
  {{ Form::exit_button( 'home_path' , '&#xf015; Fechar' ) }}
  {{ Form::search_button( 'pesquisar', "&#xf002;" ) }}
@stop

@section('title', 'Plano de Contas')

@section('content')
  <table id="data-table" class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Classificação</th>
      <th>Descrição</th>
      <th>Estrutura DRE</th>
    </tr>
  </thead>

  <tbody>

  @foreach ( $contas as $conta )

  <tr>
    <td>
      {{ Form::route_link( 'planoContas.edit',
          $conta->classificacao , $conta->id ) }}
    </td>
    <td>
      {{ Form::route_link( 'planoContas.edit',
          $conta->descricao , $conta->id ) }}
    </td>
    <td>
        {{ Form::route_link( 'planoContas.edit',
          $conta->grupoDRE->nome , $conta->id ) }}
    </td>
  </tr>

  @endforeach

  </tbody>
</table>

@include('._layouts.partials.form.selectFilter')

<div class="pagination pull-right">
  {{ $contas->links() }}
</div>

@stop


