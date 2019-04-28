<!DOCTYPE html>
<html>
<head>
	<title>Laravel Ecommerce Project</title>
	@include('partials.styles')
</head>
<body>

	<div class="wrapper">
		<!-- Navigation Start -->
		@include('partials.nav')
		<!-- Navigation End -->
		<!-- Start Sidebar + Content  -->
		@yield('content')
		<!-- End Sidebar + Content  -->
		@include('partials.footer')
	</div>
	@include('partials.scripts')
</body>
</html>
