@extends('layouts.main')

@section('title', 'Home')

@section('main')
<h1>ciao ciao</h1>
<div class="container mt-4">
    
    <form method="POST" action="{{route('comics.update', $comic)}}" novalidate>
        
        @csrf
        @method('put')
       

        <div class="row">
            
            {{-- title --}}
            <div class="col-3">
                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title', $comic->title) }}" required>
                </div>
                <input type="submit" value="SALVA">
            </div>
        </div>
    </form>
</div>

@endsection