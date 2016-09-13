<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style type="text/css">
        	@yield('styling')
        	#header{
        		color:white;
        		font-size: 20px;

        	}
        </style>
        <script type="text/javascript">
            @yield('scripting')
        </script>
        
    </head>
    <body>
    <div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid" id="header">
					@yield('page_heading')
			</div>
		</nav>	
      @yield('content')
    </div>
    </body>
</html>
