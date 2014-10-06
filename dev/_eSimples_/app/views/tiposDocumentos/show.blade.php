@extends('_layouts.default')

@section('content')

  @include('._layouts.partials.form.menuImprimir',
    array(
      'name' => 'Lista de Tipos de Documentos',
      'now' => $now
    )
  )

  <div class="table-responsive">
    <table id="myTable"  class="tablesorter table table-bordered table-condensed table-hover table-striped">
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
          {{ $tipoDocumento->nome }}
        </td>
        <td>
          {{ $tipoDocumento->calculosCusto->nome }}
        </td>
        <td class="align-right">
          {{ $tipoDocumento->valor_custo }}
        </td>
      </tr>

      @endforeach

      </tbody>
    </table>

    <div class="menos25px">
      {{ $tiposDocumentos->count() }} registro(s)
    </div>
  </div>

@stop


