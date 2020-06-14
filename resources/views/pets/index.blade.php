@extends('layouts.layout', [
    'title' => 'Pets'
])

@section('content')

    @foreach($pets as $p)
        <div class="pets">
            <h2>{{ $p->name }}</h2>
            <img class="pets--photo" src="/img/{{ $p->photo }}">
            <p>Breed: {{ $p->breed }}</p>
            <p>Age: {{ $p->age }}</p>
            <p>Weight: {{ $p->weight }}</p>
        </div>
        <br>
    @endforeach

@endsection