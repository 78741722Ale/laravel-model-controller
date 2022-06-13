@extends('layouts.app')

@section('content')
<!-- Ora qui posso mettere il mio contenuto -->
<ul>
    @foreach ($movies as $movie)
    <li>{{$movie->title}}</li>
    @endforeach
</ul>

@endsection
