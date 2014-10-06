@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Configurações' ]) }}
@stop

@section('menu')
  {{ Form::create_button( 'formasPagamentos.create' , '&#xf067; Incluir' ) }}
  {{ Form::print_button( 'formasPagamentos.show' , '&#xf02f; Imprimir', 0 ) }}
  {{ Form::exit_button( 'home_path' , '&#xf015; Fechar' ) }}
  {{ Form::search_button( 'pesquisar', "&#xf002;" ) }}
@stop

@section('title', 'Formas de Pagamentos' )

@section('content')
<table id="myTable"  class="tablesorter table table-bordered table-condensed table-hover table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th class="align-right">Quantidade Parcelas</th>
      <th class="align-right">Parcelas sem Juros</th>
      <th class="align-right">% Juros</th>
      <th class="align-right">Taxa</th>
      <th class="align-right">% Desconto à Vista</th>
    </tr>
  </thead>

  <tbody>

    @foreach ( $formasPagamentos as $formaPagamento )

    <tr>
      <td>
        {{ Form::route_link( 'formasPagamentos.edit',
            $formaPagamento->nome , $formaPagamento->id ) }}
      </td>
      <td class="align-right">
        {{ Form::route_link( 'formasPagamentos.edit',
            $formaPagamento->quantidade_maxima_parcelas , $formaPagamento->id ) }}
      </td>
      <td class="align-right">
        {{ Form::route_link( 'formasPagamentos.edit',
            $formaPagamento->quantidade_parcelas_sem_juros , $formaPagamento->id ) }}
      </td>
      <td class="align-right">
        {{ Form::route_link( 'tiposDocumentos.edit',
            $formaPagamento->percentual_juros , $formaPagamento->id ) }}
      </td>
      <td class="align-right">
        {{ Form::route_link( 'formasPagamentos.edit',
            $formaPagamento->valor_fixo_taxa , $formaPagamento->id ) }}
      </td>
      <td class="align-right">
        {{ Form::route_link( 'formasPagamentos.edit',
            $formaPagamento->percentual_desconto_a_vista , $formaPagamento->id ) }}
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

@include('._layouts.partials.form.selectFilter')

<div class="pagination pull-right">
  {{ $formasPagamentos->links() }}
</div>

@stop


