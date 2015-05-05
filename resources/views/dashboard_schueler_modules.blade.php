@extends('dashboard_schueler')

@section('fachbox')

 <div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ebs-box">
        <span class="ebs-lbl ebs-boxheader">{{ $fachname }}</span><br />
        <span class="ebs-lbl ebs-boxsubtitle">{{ $lehrername }}</span>
        <hr class="ebs-row">
        <span class="ebs-lbl ebs-boxcontent">{{ $badgesNum }}</span><br />
        <span class="ebs-lbl ebs-boxsubcontent">Badges earned</span><br />
        <button class="btn ebs-btn ebs-showbtn" data-subject="" data-teacher="">Anzeigen</button>
      </div>
    </div>

@endsection

@section('headline')

 <div class="col-sm-12 ebs-header"><b>MEINE FÄCHER</b><div class="pull-right"><button class="ebs-sort pull-right">Aa</button><button class="ebs-sort glyphicon glyphicon-calendar pull-right"></button></div></div>
  <hr class="col-sm-12 ebs-headrow" />

@endsection