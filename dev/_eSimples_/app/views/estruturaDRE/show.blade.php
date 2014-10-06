@extends('_layouts.default')

@section('content')

  @include('._layouts.partials.form.menuImprimir',
    array(
      'name' => 'Lista da Estrutura do DRE',
      'now' => $now
    )
  )

  <div class="table-responsive">
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
      {{ $estrutura->grupoDRE->nome }}
    </td>
    <td>
      {{ $estrutura->operacoes->nome }}
    </td>
    <td>
      {{ $estrutura->ordem }}
    </td>
  </tr>

  @endforeach

      </tbody>
    </table>

    <div class="menos25px">
      {{ $estruturaDRE->count() }} registro(s)
    </div>
  </div>

@stop


