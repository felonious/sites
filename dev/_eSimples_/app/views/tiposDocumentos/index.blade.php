@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações' ]) }}
@stop

@section('menu')
  {{ Form::create_button( 'tiposDocumentos.create' , '&#xf067; Incluir' ) }}
  {{ Form::print_button( 'tiposDocumentos.show' , '&#xf02f; Imprimir', 0 ) }}
  {{ Form::exit_button( 'home_path' , '&#xf015; Fechar' ) }}
  {{ Form::search_button( 'pesquisar', "&#xf002;" ) }}
@stop

@section('title', 'Tipos de Documentos')

@section('content')
  <table id="data-table" class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Custo Utilização</th>
      <th class="align-right">Valor Custo</th>
    </tr>
  </thead>

  <tbody>

  @foreach ( $tiposDocumentos as $tipoDocumento )

  <tr>
    <td>
      {{ Form::route_link( 'tiposDocumentos.edit',
          $tipoDocumento->nome , $tipoDocumento->id ) }}
    </td>
    <td>
        {{ Form::route_link( 'tiposDocumentos.edit',
          $tipoDocumento->calculosCusto->nome , $tipoDocumento->id ) }}
    </td>
    <td class="text-right">
      {{ Form::route_link( 'tiposDocumentos.edit',
          $tipoDocumento->valor_custo , $tipoDocumento->id ) }}
    </td>
  </tr>

  @endforeach

  </tbody>
</table>

@include('._layouts.partials.form.selectFilter')

<div class="pagination pull-right">
  {{ $tiposDocumentos->links() }}
</div>
@stop


