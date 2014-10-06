@extends('_layouts.report')

@section('content')

  @include('._layouts.partials.form.menuImprimir',
    array(
      'name' => 'Lista de Contas',
      'now' => $now
    )
  )

  <div class="table-responsive">
    <table id="myTable"  class="tablesorter table table-bordered table-condensed table-hover table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
        </tr>
      </thead>

      <tbody>

      @foreach ( $contas as $conta )

      <tr>
        <td>
          {{ $conta->nome }}
        </td>
        <td>
          {{ $conta->descricao }}
        </td>
      </tr>

      @endforeach

      </tbody>
    </table>

    <div class="menos25px">
      {{ $contas->count() }} registro(s)
    </div>
  </div>

@stop


