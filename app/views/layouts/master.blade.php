<html>
<head>
<title>Intranet @yield('title')</title>
{{ HTML::style('bs/css/bootstrap.css') }}
{{ HTML::style('bs/css/bootstrap-theme.min.css') }}
{{ HTML::script('bs/js/bootstrap.min.js') }}
 
</head>
    <body>
        @section('sidebar')
            Intranet Ocupando Laravel 4
           	<?php 
			if (Auth::check()){
			Auth::logout();
			?>
    		{{ Form::open(array('url' => 'login')) }}
            {{Form::submit('Cerrar Sesion', array('class' => 'btn btn-primary btn-lg" href="#" role="button')) }}
        	{{ Form::close() }}
			<?php }else{
    		// no hay usuario 
			}
			?> 
        @show

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>