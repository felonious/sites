<li class="has-sub">

  <a href="javascript:;">
    <b class="caret pull-right"></b>
    <b class="fa fa-wrench"></b>
    Configurações
  </a>

  <ul class="sub-menu">
    <li>{{ link_to_route('contas.index', 'Contas') }}</li>
    <li>{{ link_to_route('tiposDocumentos.index', 'Tipos de documentos') }}</li>
    <li>{{ link_to_route('formasPagamentos.index', 'Formas de Pagamentos') }}</li>
    <li>{{ link_to_route('planoContas.index', 'Plano de Contas') }}</li>
    <li>{{ link_to_route('estruturaDRE.index', 'Extrutura do DRE') }}</li>

    <li class="divider"></li>

       <li class="has-sub">
         <a href="javascript:;">
           <b class="caret pull-right"></b>
           Gerais
         </a>
{{--
         <ul class="sub-menu">
          <li>{{ link_to_route('configuracoes_empresas.index', 'Empresa') }}</li>
          <li>{{ link_to_route('configuracoes_produtos.index', 'Produtos') }}</li>
          <li>{{ link_to_route('configuracoes_impressos.index', 'Impressos') }}</li>
         </ul>
 --}}
       </li>
  </ul>
</li>
