@extends('master_schueler')

@section('content')

@yield('headline')

<div class="row">

<!-- @for($i = 0; $i < 8; $i++)
@yield('fachbox')
@endfor -->

@yield('fachbox')
</div>

@endsection
