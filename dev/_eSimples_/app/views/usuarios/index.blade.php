@extends('_layouts.forms')

@section('breadcrumb')
  {{ Form::breadcrumb([ 'Cadastros' ]) }}
@stop

@section('menu')
  {{ Form::create_button( 'usuarios.create' , '&#xf067; Incluir' ) }}
  {{ Form::print_button( 'usuarios.show' , '&#xf02f; Imprimir', 0 ) }}
  {{ Form::exit_button( 'home_path' , '&#xf015; Fechar' ) }}
  {{ Form::search_button( 'pesquisar', "&#xf002;" ) }}
@stop

@section('title', 'Usuários')

@section('content')
  <table id="table"
      class="table table-striped table-hover pull-left">
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>

    <tbody class="tbody">

    @foreach ( $usuarios as $usario )

    <tr>
      <td>
        {{ Form::route_link( 'usuarios.edit',
          $usario->username , $usario->id ) }}
      </td>
      <td>
        {{ Form::route_link( 'usuarios.edit',
            $usario->name , $usario->id ) }}
      </td>
      <td>
        {{ Form::route_link( 'usuarios.edit',
          $usario->email , $usario->id ) }}
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

@include('._layouts.partials.form.selectFilter')

<div class="pagination pull-right">
  {{ $usuarios->links() }}
</div>

@stop


