<!doctype html>
<!-- [if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
	<! [endif]-->
	<!-- [if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en">
	<! [endif]-->
	<!-- [if IE 8]> <html class="no-js lt-ie9" lang="en">
	<! [endif]-->
	<!-- [if gt IE 8]><!--> <html class="no-js" lang="en"><!--<! [endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Sitter List</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::script('/js/underscore.js') }}
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
	{{ HTML::script('/js/backbone.js') }}
	{{ HTML::script('/js/main.js') }}
	{{ HTML::style('/css/default.css') }}
	
</head>
<body>
<div id="wrapper" style="margin-left: auto;margin-right: auto;width:80%">	

	<nav>
		@yield('nav')
		{{ HTML::link('/', 'Home') }}	
		</nav>
		
		
<div class="content">
	@yield('content')
</div>

<div class="sidebar" style="float:right;">
	@yield('list')
</div>

<footer style="clear:both;">
	@yield('footer')
</footer>
</div>

@yield('dropform')
</body>
</html>