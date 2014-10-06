@extends('_layouts.report')

@section('content')

  @include('._layouts.partials.form.menuImprimir',
    array(
      'name' => 'Lista de Usuários',
      'now' => $now
    )
  )

  <div class="table-responsive">
    <table id="myTable"  class="tablesorter table table-bordered table-condensed table-hover table-striped">
      <thead>
        <tr>
          <th>Usuários</th>
          <th>Nome</th>
          <th>Email</th>
        </tr>
      </thead>

      <tbody>

      @foreach ( $usuarios as $usuario )

      <tr>
        <td>
         {{ $usuario->username }}
        </td>
        <td>
         {{ $usuario->name }}
        </td>
        <td>
          {{ $usuario->email }}
        </td>
      </tr>

      @endforeach

      </tbody>
    </table>

    <div class="menos25px">
      {{ $usuarios->count() }} registro(s)
    </div>

  </div>

@stop


