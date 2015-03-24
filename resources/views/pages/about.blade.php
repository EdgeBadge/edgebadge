@extends('app');

@section('content');




<h1>About Me! </h1>

@if (count ($people))
<h3>People I Like:</h3>

<ul>
    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach
</ul>
@endif

    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>

@stop;