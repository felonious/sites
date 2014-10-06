@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações' ]) }}
@stop

@section('menu')
  {{ Form::create_button( 'estruturaDRE.create' , '&#xf067; Incluir' ) }}
  {{ Form::print_button( 'estruturaDRE.show' , '&#xf02f; Imprimir', 0 ) }}
  {{ Form::exit_button( 'home_path' , '&#xf015; Fechar' ) }}
  {{ Form::search_button( 'pesquisar', "&#xf002;" ) }}
@stop

@section('title', 'Tipos de Documentos')

@section('content')
<table id="data-table" class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Grupo do DRE</th>
      <th>Operação</th>
      <th>Ordem</th>
    </tr>
  </thead>

  <tbody>

    @foreach ( $estruturaDRE as $estrutura )

    <tr>
      <td>
        {{ Form::route_link( 'estrutura.edit',
            $estrutura->grupoDRE->nome , $estrutura->id ) }}
      </td>
      <td>
          {{ Form::route_link( 'estrutura.edit',
            $estrutura->operacoes->nome , $estrutura->id ) }}
      </td>
      <td class="text-right">
        {{ Form::route_link( 'estrutura.edit',
            $estrutura->ordem , $estrutura->id ) }}
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

@include('._layouts.partials.form.selectFilter')

<div class="pagination pull-right">
  {{ $estruturaDRE->links() }}
</div>

@stop


