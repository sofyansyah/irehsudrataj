<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/onepage-scroll.css')}}">
	<link rel="stylesheet" href="{{asset('css/style1.css')}}"> <!-- Resource style -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/OpensSans.css')}}">
    <link rel="stylesheet" href="{{asset('css/GibsonReguler.css')}}">
    <link rel="stylesheet" href="{{asset('css/madita.css')}}">

    @yield('css')
      
    </head>
        <body>
            
    @yield('content')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="{{asset('js/jquery.onepage-scroll.js')}}"></script>
    
<script>
	  $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: true
      });
		});
		
	</script>

    @yield('js')
        </body>
</html>