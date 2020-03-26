<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="Herry Prasetyo">

	@yield('title')
	@include('components.css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	</head>

<body>
@include('layouts.header')
<!-- /.fixed-header -->


<!-- #color-switcher -->

<div id="wrapper">
	<div class="main-content container">
		
		@yield('content')
		@include('layouts.footer')
	</div>
	<!-- /.main-content -->
</div>
    {{-- @yield('toastSession') --}}
	@include('components.script')
	
    </body>
</html>