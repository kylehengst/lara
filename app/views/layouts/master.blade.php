<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>{{ $title }}</title>
		{{ Basset::show('bootstrapper.css') }}
		{{ Basset::show('bootstrapper.js') }}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('flexslider/flexslider.css') }}
		{{ HTML::script('flexslider/jquery.flexslider.js') }}
		
		<style>
			
			#carousel{
				background-image: url('http://ussc.edu.au/ussc/assets/template/images/slideshow-bg.gif');
				border-bottom: 7px solid #444;
				background-color: #444;
				background-position: bottom;
				background-repeat: repeat-x;
				color: white;
				font-size: 16px;
			}
			#carousel li{
				
			}
			#carousel li a{
				padding: 20px;
				display: block;
				height: 160px;
				overflow: hidden;
				text-decoration: none;
				color: white;
			}
			#carousel h2{
				font-size: 16px;
				margin: 0;
				padding: 0 0 10px 0;
				font-weight: bold;
			}	
			#carousel p{
				margin: 0;
				padding: 0;
				font-size: 11px;
				font-weight: normal;
			}
			#carousel li.flex-active-slide{
				background-color: black;
				background-image: url('http://ussc.edu.au/ussc/assets/template/images/slideshow-btn-on.gif');
				background-repeat: repeat-x;
				background-position: bottom;
			}
			
		</style>
		
    </head>
    <body>
		{{--@include('layouts.nav')--}}
		@yield('content')
		
    </body>
</html>
