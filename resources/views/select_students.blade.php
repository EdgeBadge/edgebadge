@extends('badge_ausstellen_teacher')

@section('select-students')
	<div class="container-fluid">
	  <div class="row">
	  	<div class="container-fluid">
        <ul id="switch_student_class" class="list-inline">
          <li><a class="btn" id="btn_search_student" href="#">SCH&Uuml;LER</a></li>
          <li><a class="btn" id="btn_search_class" href="#">KLASSE</a></li>
        </ul>
       	</div>
      </div>
      <div class="row">
	    <div class="container-fluid">
	      <input type="text" class="form-control" id="ta_search" placeholder="Max Mustermann">        
	    </div>
	  </div>
      <div class="row">
      	<div class="container-fluid">
          Ausgew&auml;hlte Sch&uuml;ler/Klassen
		</div>        
      </div>
      <button class="btn ebt-btn ebt-btn-next pull-right">Ausstellen</button>
	</div>

@stop	   