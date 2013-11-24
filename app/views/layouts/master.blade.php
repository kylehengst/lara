<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>{{ $title }}</title>
		{{ Basset::show('bootstrapper.css') }}
		{{ Basset::show('bootstrapper.js') }}
		{{ HTML::style('css/style.css') }}
    </head>
    <body>
		@include('layouts.nav')
		@yield('content')
		
		{{ Typography::lead('Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.'); }}
		
    </body>
</html>
