@extends('master_schueler')

@section('content')

@yield('headline_two')

@for($i = 0; $i < 15; $i++)
@yield('badge')
@endfor

@endsection