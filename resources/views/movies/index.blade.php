@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main class="container py-4">
<h1>Movies</h1>

<div class="container">

    <div class="row">
    @foreach ($movies as $movie)
        <div class="col-12 col-md-4 col-lg-3 mb-3">
                <div class="card">
                    <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->language}}</p>
                        <small>{{$movie->vote}}</small>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
   
</div>

</main>

@endsection