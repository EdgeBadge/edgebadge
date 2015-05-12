@extends('dashboard_schueler')

@section('fachbox')
@for($j = 0; $j < count($multi['fachname']); $j++)
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ebs-distance">
        <div class="ebs-box">
          <span class="ebs-lbl ebs-boxheader">{{ $multi['fachname'][$j] }}</span><br />
          <span class="ebs-lbl ebs-boxsubtitle">{{ $multi['lehrername'][$j] }}</span>
          <hr class="ebs-row">
          <span class="ebs-lbl ebs-boxcontent">{{ $multi['badgesNum'][$j] }}</span><br />
          <span class="ebs-lbl ebs-boxsubcontent">Badges earned</span><br />
          <a href="{{ URL::to('subject') }}"><button class="btn ebs-btn ebs-showbtn" data-subject="" data-teacher="">Anzeigen</button></a>
        </div>
      </div>
@endfor
@endsection

@section('headline')

 <div class="col-sm-12 ebs-header"><b>MEINE FÄCHER</b><div class="pull-right"><button class="ebs-sort pull-right">Aa</button><button class="ebs-sort glyphicon glyphicon-calendar pull-right"></button></div></div>
  <hr class="col-sm-12 ebs-headrow" />

@endsection