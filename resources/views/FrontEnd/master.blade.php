
<!DOCTYPE html>
<html>
<head>
<title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('public/FrontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/FrontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/FrontEnd/css/smoke.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->

<script src="{{asset('public/FrontEnd/js/jquery.min.js')}}"></script>
<!-- //js -->
<!-- cart -->
<script src="{{asset('public/FrontEnd/js/simpleCart.min.js')}}"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('public/FrontEnd/js/bootstrap-3.1.1.min.js')}}"></script>
<script src="{{asset('public/FrontEnd/js/smoke.min.js')}}"></script>
<!-- //for bootstrap working -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="{{asset('public/FrontEnd/css/jquery.countdown.css')}}" />
<!-- //timer -->
<!-- animation-effect -->
<link href="{{asset('public/FrontEnd/css/animate.min.css')}}" rel="stylesheet"> 
<script src="{{asset('public/FrontEnd/js/custom.js')}}"></script>
<script src="{{asset('public/FrontEnd/js/wow.min.js')}}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>
<!-- header -->
@include('FrontEnd.include.header')

@include('FrontEnd.include.menu')
<!-- //header -->
@yield('mainContent')
<!-- footer -->
@include('FrontEnd.include.footer')
<!-- //footer -->
</body>
</html>