@extends('layout.main')

@section('title')
    Home
@endsection
@section('content')
    <h1 class="my-5 text-center text-bg-warning">Tutti i Film</h1>
    <div class="d-flex flex-wrap justify-content-around  ">

        @foreach ($movies as $movie)
            <div class="card my-3" style="width: 18rem;">
                <img src="{{ $movie->cover_image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bolder">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $movie->nationality }}</li>
                    <li class="list-group-item">{{ $movie->date }}</li>
                    <li class="list-group-item">{{ $movie->vote }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('detail-movie', ['id' => $movie->id]) }}" class="card-link fw-bolder">Scheda film</a>
                    <a href="#" class="card-link bg-dark text-white fw-bolder">Trailer</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
