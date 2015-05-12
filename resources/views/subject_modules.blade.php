@extends('subject')

@section('headline_two')

 <div class="col-sm-12 ebs-header"> <a href="{{ URL::to('schueler') }}"><button class="ebs-sort" style="margin-left:0px; margin-right: 8px;"><</button></a><b>{{ $multi['fachname'] }}</b><div class="pull-right"><button class="ebs-sort pull-right">Aa</button><button class="ebs-sort glyphicon glyphicon-calendar pull-right"></button></div></div>
  <hr class="col-sm-12 ebs-headrow" />

@endsection

@section('badge')
@for($j = 0; $j < count($multi['badgename']); $j++)
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ebs-singlebadge" style="margin-bottom:35px;">
      <div style="margin-bottom:10px">
        <a href="{{ URL::to('badgedetail') }}"><img src="images/badge.png" width="120" class="ebs-lbl ebs-badgeimg" data-badgename="" data-date="12.12.2012" /></a>
      </div>
      <span class="ebs-lbl ebs-badgetitle">{{ $multi['badgename'][$j] }}<span>
      </div>
@endfor
@endsection