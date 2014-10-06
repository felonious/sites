<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">

  <!-- begin sidebar scrollbar -->
  <div data-scrollbar="true" data-height="100%">
    <!-- begin sidebar user -->
    <ul class="nav">
      <li class="nav-profile">
        <span class="navbar-logo"></span> éSimples</a>
      </li>
    </ul>
    <!-- end sidebar user -->

    <!-- begin sidebar nav -->
    <ul class="nav">
      <li class="has-sub">

        <a href="javascript:;">
          <b class="caret pull-right"></b>
          <i class="fa fa-align-left"></i>
          <span>Menu Principal</span>
        </a>

        <ul class="sub-menu">
          @include('._layouts.partials.menu.cadastros')
          <li class="divider"></li>
          @include('._layouts.partials.menu.operacoes')
          <li class="divider"></li>
          @include('._layouts.partials.menu.financeiro')
          <li class="divider"></li>
          @include('._layouts.partials.menu.impressos')
          <li class="divider"></li>
          @include('._layouts.partials.menu.configuracoes')
        </ul>

      </li>

      <!-- begin sidebar minify button -->
      <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
      <!-- end sidebar minify button -->

    </ul>
    <!-- end sidebar nav -->
  </div>
  <!-- end sidebar scrollbar -->
</div>

<div class="sidebar-bg"></div>
<!-- end #sidebar -->
