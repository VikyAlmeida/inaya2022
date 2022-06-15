<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portefeuille - Free One Page Website Template</title>

<!-- Stylesheets -->
<link type="text/css" href="../../../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">
<link type="text/css" href="../../../icons/font-awesome/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href="../../../icons/rondo/style.css" rel="stylesheet">
<link type="text/css" href="../../../css/theme.css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/vendor/fonts/boxicons.css" />
<script src="../../../clima/app.js"></script>
<script src="{{ asset('../../../js/app.js') }}"></script>
@stack('styles')
</head>

<body style="background-color:#fff">
    @include('cust.establishment.layouts.partials.header')
    @yield('slogan')
    @yield('publications')
    @yield('comment')
    @yield('contact')
<!--Scripts--> 
@stack('scripts')
<script src="../../../scripts/jquery-1.10.2.min.js"></script> 
<script src="../../../bootstrap/js/bootstrap.min.js"></script> 
<script src="../../../scripts/jquery.smooth-scroll.min.js"></script> 
<script src="../../../scripts/mixitup/jquery.mixitup.min.js"></script> 
<script src="../../../scripts/theme.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
</body>