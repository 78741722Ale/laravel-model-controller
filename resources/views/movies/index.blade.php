@extends('layouts.app')

@section('content')
<!-- Ora qui posso mettere il mio contenuto -->

<div class="container-fluid flex_cent p-0 h-100">
    <div class="row w-75 gap-3 flex-wrap flex_cent m-0 h-75">
        <!-- Questa la col da ripetere in for-Each -->
        @foreach ($movies as $movie)
        <div class="col-2 p-0 flex_cent">
            <div class="card border-0 w-100">
                <!-- Title -->
                <!-- Recupero dati con {{nome del singolo -> nome attributo (solitamente in #attributes) }} -->
                <h6 class="mb-2">Title : <strong>{{$movie->title}}</strong></h6>
                <!-- Original Title -->
                <h6>Original Title : <strong>{{$movie->original_title}}</strong></h6>
                <!-- Original Title -->
                <p>Nationality : <strong>{{$movie->nationality}}</strong></p>
                <!-- Date -->
                <p>Date : <strong>{{$movie->date}}</strong></p>
                <!-- Vote -->
                <p>Date : <strong>{{$movie->vote}}</strong></p>
            </div>
        </div>
        @endforeach
    </div>
</div>






<!-- <ul>
    @foreach ($movies as $movie)
    <li>{{$movie->title}}</li>
    @endforeach
</ul> -->

@endsection
