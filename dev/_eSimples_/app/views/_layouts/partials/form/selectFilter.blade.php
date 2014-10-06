<div class="pagination pull-left" >
  <form method='GET' id="myForm" >
    {{ Form::select_field('showMany', $perPages , $showMany) }}
  </form>
</div>