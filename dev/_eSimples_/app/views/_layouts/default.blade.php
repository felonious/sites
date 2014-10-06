<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>éSimples</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<link href="/assets/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
	<link href="/assets/css/style.css" rel="stylesheet" />
	<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" rel="stylesheet" id="theme" />
 	<link href="/assets/plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet" />
     <!--[if lte IE 7]><script src="/assets/plugins/simple-line-icons/icons-lte-ie7.js"></script><![endif]-->
    <!-- hacking to put incon in submit button -->
    <style>
      .fa-input {
        font-family: FontAwesome, 'Open Sans', "Helvetica Neue",Helvetica,Arial,sans-serif;
      }
    </style>
	<!-- ================== END BASE CSS STYLE ================== -->
</head>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in">
    <span class="spinner"></span>
	</div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

    @include('_layouts.partials.header')

    @include('_layouts.partials.sidebar')


		<!-- begin #content -->
		<div id="content" class="content">

		  <div class="row">
        <div class="col-md-12">

          @include('flash::message')

          @yield('content')

        </div>
      </div>

		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->

	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery-1.8.2/jquery-1.8.2.min.js"></script>
	<script src="/assets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap-3.2.0/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets/plugins/jquery.tablesorter.min.js"></script>
	<script src="/assets/plugins/jquery.mask.min.js"></script>
	<script src="/assets/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

</body>
</html>
