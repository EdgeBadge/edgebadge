@extends('masterteacher')

@section('content')
	
	<div id="ebt-badge-ausstellen">
  	  <div class="container-fluid">  	
  		<div class="row">
  		  <div class="container-fluid">
	  	    <h1>Badge ausstellen</h1>
	  	  </div>
	  	</div>
	  	<div class="row">
	  		<div class="container-fluid">
	  			<h5>Wählen Sie Ihre Badge aus welche Sie ausstellen wollen</h5>
	  		</div>
	  	</div>
        <div class="row badge_auswahl_ausstellen text-center">      
		  <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
		    <img src="images/badge2.png" width="80" />
            <h4>Judentum</h4>
            Fach: Religion
		  </div></div>
		  <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
		    <img src="images/badge3.png" width="80" />
            <h4>Christentum</h4>
            Fach: Religion
		  </div></div>
		  <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
		    <img src="images/badge.png" width="80" />        
            <h4>Jesus-Badge</h4>
            Fach: Religion
		  </div></div>		          
		  <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
            <img src="images/badge.png" width="80" />          
            <h4>Buddhismus</h4>
            Fach: Religion
		  </div></div>
          <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
     	    <img src="images/badge4.png" width="80" />
            <h4>Zertifikat</h4>
            Fach: Religion
		  </div></div>
          <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
            <img src="images/badge3.png" width="80" />
            <h4>Sinnus</h4>
            Fach: Mathe
          </div></div>
          <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
            <img src="images/badge4.png" width="80" />
            <h4>Cosinus</h4>
            Fach: Mathe
          </div></div>
          <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
            <img src="images/badge2.png" width="80" />
            <h4>Tangens</h4>
            Fach: Mathe
          </div></div>
		  <div class="col-lg-2 col-md-3 col-sm-6"><div class="ebt-panel">
		    <img src="images/badge2.png" width="80" />
            <h4>Pythagoras</h4>
            Fach: Mathe
		  </div></div>		              
	    </div>
	    <a href="{{ URL::to('select-students') }}" class="btn ebt-btn ebt-btn-next pull-right">Weiter</a>	    
	  </div>
	  @yield('select-students')
  	</div>

 @stop