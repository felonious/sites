@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações' ]) }}
@stop

@section('menu')
  {{ Form::create_button( 'contas.create' , '&#xf067; Incluir' ) }}
  {{ Form::print_button( 'contas.show' , '&#xf02f; Imprimir', 0 ) }}
  {{ Form::exit_button( 'home_path' , '&#xf015; Fechar' ) }}
  {{ Form::search_button( 'pesquisar', "&#xf002;" ) }}
@stop

@section('title', 'Contas' )

@section('content')
<table id="myTable"  class="tablesorter table table-bordered table-condensed table-hover table-striped ">

  <thead>
    <tr>
      <th>Nome</th>
      <th>Descrição</th>
    </tr>
  </thead>

  <tbody class="tbody">

    @foreach ( $contas as $conta )

    <tr>
      <td>
        {{ Form::route_link( 'contas.edit',
            $conta->nome , $conta->id ) }}
      </td>
      <td>
        {{ Form::route_link( 'contas.edit',
            $conta->descricao , $conta->id ) }}
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


