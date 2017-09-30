<!DOCTYPE html>
<html>
<head>
	<title>My Website - @yield('page_title')</title>

	<style type="text/css">
		header {width: 100%; background: #ffff00;}
		main {font-size: 20px;}
		footer {width: 100%; background: #ccc;}
	</style>
</head>
<body>
	<header>
		<h1>My Website</h1>
	</header>

	<main>
		@yield('content')
	</main>

	<footer>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact US</a></li>
			<li><a href="#">About Us</a></li>
		</ul>

		<hr>
		Copyrights reserved 2017
	</footer>
</body>
</html>