<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Sergio Luiz Dobri">

  <title>éSimples</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]>
  <script
      src="//getbootstrap.com/assets/js/ie8-responsive-file-warning.js"></script>
  <![endif]-->
  <script
      src="//getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script
      src="//getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script
      src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script
      src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body style="margin-top: 10pz; color: #000; background-color: #fff">

<div class="container">
  <div class="row">

    @yield('content')

  </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- https://github.com/Mottie/tablesorter -->
<script src="/js/jquery.tablesorter.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
