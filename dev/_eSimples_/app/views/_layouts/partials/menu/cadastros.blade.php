<li class="has-sub">

  <a href="javascript:;">
    <i class="caret pull-right"></i>
    <i class="fa fa-list-alt"> </i>
    Cadastros
  </a>

  <ul class="sub-menu">
    <li><a href="javascript:;">Clientes</a></li>
    <li><a href="javascript:;">Fornecedores</a></li>
    <li><a href="javascript:;">Transportadoras</a></li>

    <li class="has-sub">
      <a href="javascript:;">
        <i class="caret pull-right"></i> Produtos
      </a>
      <ul class="sub-menu">
        <li><a href="javascript:;">Produtos</a></li>
        <li><a href="javascript:;">Categorias</a></li>
      </ul>
    </li>

    <li><a href="javascript:;">Serviços Prestados</a></li>
    <li>{{ link_to_route('gestaoTarefas.index', 'Gestão de Tarefas') }}</li>
    <li>{{ link_to_route('usuarios.index', 'Usuários') }}</li>
  </ul>
</li>