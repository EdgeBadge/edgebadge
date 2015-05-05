@extends('master_schueler')

@section('content')

<div class="col-sm-12 ebs-header"> <a href="{{ URL::to('schueler') }}"><button class="ebs-sort" style="margin-left:0px; margin-right: 8px;"><</button></a><b>Profil</b><div class="pull-right"><button class="ebs-sort pull-right">Aa</button><button class="ebs-sort glyphicon glyphicon-calendar pull-right"></button></div></div>
<hr class="col-sm-12 ebs-headrow" />

<div>
	<div class="col-xs-12 ebs-image">
		<div class="col-xs-8 col-sm-6 col-md-3 col-lg-3">
			<img src="images/badge.png" width="190" class="ebs-badgeimg-big"/>
		</div>
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-0 col-lg-6 ebs-badgedetail">
			<span class="ebs-lbl ebs-detailtitle">{{ $schuelerName }}</span><br />
			<span class="ebs-lbl ebs-subject" style="font-size:22px;">{{ $class }}</span><br />
		</div>
	</div>
</div>
<br />
<div class="col-xs-12 text-left">
	<span class="ebs-lbl">MAIL</span><br />

	<div class="ebs-desc text-left">
		{{ $mail }}
	</div>
	<span class="ebs-lbl">BIOGRAPHIE</span><br />
	<div class="ebs-desc text-left">
		{{ $beschreibung }}
	</div>

	<button type="button" class="btn ebs-btn ebs-delete">Profil löschen</button>
</div>
@endsection
