@extends('master_schueler')

@section('content')

@yield('headline')

@for($i = 0; $i < 8; $i++)
@yield('fachbox')
@endfor

@endsection
