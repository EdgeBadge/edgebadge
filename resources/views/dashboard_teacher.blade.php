@extends('masterteacher')

@section('content')

	<div id="ebt-dashboard">
	  <div class="container-fluid">	  	
  		<div class="row">
  			<div class="container-fluid bg-white">
	  			<h1>Dashboard</h1>
	  		</div>
	  	</div>
	  	<div class="row">
  			<div class="container-fluid bg-white margin-bottom">
	  			<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  			consequat.</h5>
	  		</div>
	  	</div>
	  	<div class="row">
  			<div class="container-fluid bg-white">
	  			<ul class="list-inline">
			      <li><a href="#">FÄCHER</a></li>
			      <li><a href="#">ZULETZT AUSGESTELLT</a></li>
			    </ul>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="view-subject">	
	  		@for ($i = 0; $i < 5; $i++)  		
	  			@yield('badge')	
	  		@endfor  			
		  	</div>
	  	</div>
  	</div>

@stop