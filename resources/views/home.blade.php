@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h1>DC-COMICS REPO</h1>
    <div class="card-header text-center mb-3 bg-white">
        <h1> {{ $Comic->title }}</h1>
    </div>
    <div class="card-body">
        <p> {{ $Comic->description}}   </p>
        
@endsection