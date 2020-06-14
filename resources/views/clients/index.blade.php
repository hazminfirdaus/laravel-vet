@extends('layouts/layout', [
    'title' => 'Clients'
])

@section('content')

    <h1>List of Clients:</h1>
    @foreach($clients as $c)

        <h2>{{ $c->first_name }} {{ $c->surname }}</h2>

    @endforeach

@endsection