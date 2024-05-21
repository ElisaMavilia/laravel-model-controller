@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container py-4">
    <h1>Movies</h1>
        
    @foreach ($movies as $movie)
        <div class="card">
            
            <div class="card-body">
            
            </div>
    </div>
    @endforeach
</main>

@endsection
