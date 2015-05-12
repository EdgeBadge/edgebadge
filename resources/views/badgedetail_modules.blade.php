@extends('badgedetail')

@section('headline_three')

 <div class="col-sm-12 ebs-header"> <a href="{{ URL::to('subject') }}"><button class="ebs-sort" style="margin-left:0px; margin-right: 8px;"><</button></a><b>{{ $fach }}</b></div>
  <hr class="col-sm-12 ebs-headrow" />

@endsection

@section('badgedetail')
<div>
        <div class="col-xs-12 ebs-image">
          <div class="col-xs-12 col-sm-offset-2 col-sm-4 col-md-3 col-lg-3">
            <img src="images/badge.png" width="190" class="ebs-badgeimg-big"/>
          </div>
          <div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-6 ebs-badgedetail">
            <span class="ebs-lbl ebs-detailtitle">{{ $badgename }}</span><br />
            <span class="ebs-lbl ebs-subject">{{ $fach }}</span><br />
            <span class="ebs-lbl ebs-ausstell">Ausgestellt am: {{ $ausstellungsDatum }}</span><br />
            <span class="ebs-lbl ebs-ausstell">Ausgestellt von: {{ $ausstellungsLehrer }}</span><br />
            <button type="button" class="btn ebs-btn ebs-download">Download</button>
          </div>
        </div>
      </div>
      <br />
      <div class="col-xs-12 col-sm-offset-2 text-left">
        <span class="ebs-lbl ebs-krit">AUSSTELLUNGSKRITERIUM</span><br />

        <div class="ebs-desc text-left">
          {{ $ausstellungsKrit }}
        </div>
        <span class="ebs-lbl ebs-besch">BESCHREIBUNG</span><br />
        <div class="ebs-desc text-left">
         {{ $beschreibung }}
        </div>
      </div>
@endsection