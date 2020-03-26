<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ URL::asset('front/img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="NISC GROUP">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	
              <title>NISC GROUP® </title>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="description" content="Nisc project">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/styles/bootstrap4/bootstrap.min.css') }}">
              <link href="{{ URL::asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
              <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
              <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
              <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/plugins/OwlCarousel2-2.2.1/animate.css') }}">
              <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/styles/main_styles.css') }}">
              <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/styles/responsive.css') }}">
            </head>
         <body>

<div class="super_container">

@yield('cont')
</div>
	
<script src="{{ URL::asset('front/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('front/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ URL::asset('front/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('front/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ URL::asset('front/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ URL::asset('front/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ URL::asset('front/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ URL::asset('front/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ URL::asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ URL::asset('front/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('front/plugins/easing/easing.js') }}"></script>
<script src="{{ URL::asset('front/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ URL::asset('front/js/custom.js"></script>
			 
			 <!-- WhatsHelp.io widget -->
             <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+254743951108", // WhatsApp number
            call_to_action: "Chat with customer care", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
	
	 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var  
s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cab39a653f1e453fb8cb47b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>