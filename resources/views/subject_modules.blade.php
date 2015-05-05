@extends('subject')

@section('headline_two')

 <div class="col-sm-12 ebs-header"><b>{{ $fachname }}</b><div class="pull-right"><button class="ebs-sort pull-right">Aa</button><button class="ebs-sort glyphicon glyphicon-calendar pull-right"></button></div></div>
  <hr class="col-sm-12 ebs-headrow" />

@endsection

@section('badge')
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ebs-singlebsadge">
      <div class="ebs-distance">
        <img src="images/badge.png" width="120" class="ebs-lbl ebs-badgeimg" data-badgename="" data-date="12.12.2012" />
      </div>
      <span class="ebs-lbl ebs-badgetitle">{{ $badgename }}<span>
      </div>

@endsection