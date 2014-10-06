@extends('_layouts.report')

@section('content')

  @include('._layouts.partials.form.menuImprimir',
    array(
      'name' => 'Lista de Formas de Pagamentos',
      'now' => $now
    )
  )

  <div class="table-responsive">
    <table id="myTable"  class="tablesorter table table-bordered table-condensed table-hover table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th class="align-right">Quantidade Parcelas</th>
          <th class="align-right">Parcelas sem Juros</th>
          <th class="align-right">% Juros</th>
          <th class="align-right">Taxa</th>
          <th class="align-right">% Desconto ã Vista</th>
        </tr>
      </thead>

      <tbody>

      @foreach ( $formasPagamentos as $formaPagamento )

        <tr>
          <td>
           {{ $formaPagamento->nome }}
          </td>
          <td class="align-right">
           {{ $formaPagamento->quantidade_maxima_parcelas }}
          </td>
          <td class="align-right">
           {{ $formaPagamento->quantidade_parcelas_sem_juros }}
          </td>
          <td class="align-right">
           {{ $formaPagamento->percentual_juros }}
          </td>
          <td class="align-right">
           {{ $formaPagamento->valor_fixo_taxa }}
          </td>
          <td class="align-right">
           {{ $formaPagamento->percentual_desconto_a_vista }}
          </td>
       </tr>

      @endforeach

      </tbody>
    </table>

    <div class="menos25px">
      {{ $formasPagamentos->count() }} registro(s)
    </div>
  </div>

@stop


