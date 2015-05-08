@extends('masterteacher')

@section('content')

	<div id="ebt-badge-erstellen">
	  <div class="container-fluid">	  	
  		<div class="row">
  			<div class="container-fluid bg-white">
	  			<h1>Badge erstellen</h1>
	  		</div>
	  	</div>
	  	<div class="row">
  			<div class="container-fluid">
	  			<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  			consequat.</h5>
	  		</div>
	  	</div>
		<form role="form" action="" method="post" class="ebt-erstell-form">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<input type="text" class="ebt-textfield-badgename" placeholder="Geben Sie den Badgenamen ein...">
				</div>
				<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2">
					<div class="dropdown">
					  <button class="btn btn-default dropdown-toggle" type="button" id="xxx" data-toggle="dropdown" aria-expanded="false">
						Unterrichtsfach <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="xxx">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Fach1</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Fach2</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Fach3</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Fach4</a></li>
					  </ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				  Beschreibung:
				  <textarea class="ebt-textarea"></textarea>
				</div>

				<div class="col-md-6">
				  Ausstellungskriterium:
				  <textarea class="ebt-textarea"></textarea>
				</div>
			</div>
			<div class="container-fluid row">
				<div class="badge-selection-area row">
					<div class="col-md-7 col-sm-12 preview-badge">     
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="ebt-panel">
								<img src="images/badge2.png" width="100" />
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="ebt-panel">
								<img src="images/badge.png" width="100" />
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="ebt-panel">
								<img src="images/badge2.png" width="100" />
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="ebt-panel">
								<img src="images/badge3.png" width="100" />
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="ebt-panel">
								<img src="images/badge3.png" width="100" />
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="ebt-panel">
								<img src="images/badge3.png" width="100" />
							</div>
						</div>
						<div class="clearfix visible-xs-block"></div>
					</div>
					<div class="col-md-5 col-sm-12 selected-badge">     
						<div class="col-sm-12">
							<div class="ebt-panel">
								<img src="images/badge2.png" width="236" />
							</div>
						</div>					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container-fluid">
					<button class="btn ebt-btn ebt-btn-next pull-right">Erstellen</button>
				</div>
			</div>
		</form>
  	  </div>
    </div>

@stop