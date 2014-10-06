@extends('_layouts.default')

@section('content')

  @include('._layouts.partials.form.menuImprimir',
    array(
      'name' => 'Plano de Contas',
      'now'  => $now
    )
  )

  <div class="table-responsive">
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
      {{ $conta->classificacao }}
    </td>
    <td>
      {{ $conta->descricao }}
    </td>
    <td>
      {{ $conta->grupoDRE->nome }}
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


