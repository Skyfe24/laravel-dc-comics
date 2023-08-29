@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <div class="card-header text-center mb-3 bg-white">
        <h1> {{ $comic->title }}</h1>
    </div>
    <div class="card-body">
        <p> {{ $comic->description}}   </p>
        

@endsection