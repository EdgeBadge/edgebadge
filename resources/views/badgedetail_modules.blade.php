@extends('badgedetail')

@section('headline_three')

 <div class="col-sm-12 ebs-header"><b>Fachname</b></div>
  <hr class="col-sm-12 ebs-headrow" />

@endsection

@section('badgedetail')
<div>
        <div class="col-xs-12 ebs-image">
          <div class="col-xs-8 col-xs-offset-3 col-sm-6 col-sm-offset-4 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3">
            <img src="images/badge.png" width="190" class="ebs-badgeimg-big"/>
          </div>
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-0 col-lg-6 ebs-badgedetail pull-center">
            <span class="ebs-lbl ebs-detailtitle">BADGENAME</span><br />
            <span class="ebs-lbl ebs-subject">Fach</span><br />
            <span class="ebs-lbl">Ausgestellt am: DD.MM.YYYY</span><br />
            <span class="ebs-lbl">Ausgestellt von: Max Mustermann</span><br />
            <button type="button" class="btn ebs-btn ebs-download">Download</button>
          </div>
        </div>
      </div>
      <br />
      <div class="col-xs-12 text-left">
        <span class="ebs-lbl">AUSSTELLUNGSKRITERIUM</span><br />

        <div class="ebs-desc text-left">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
        </div>
        <span class="ebs-lbl">BESCHREIBUNG</span><br />
        <div class="ebs-desc text-left">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
        </div>
      </div>
@endsection