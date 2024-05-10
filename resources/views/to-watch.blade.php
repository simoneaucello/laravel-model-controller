@extends('layout.main')

@section('content')
    <h1 class="my-5">Film più votati</h1>
    <div class="d-flex flex-wrap justify-content-around  ">

        @foreach ($movies as $movie)
            <div class="card my-3" style="width: 18rem;">
                <img src="{{ $movie->cover_image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $movie->nationality }}</li>
                    <li class="list-group-item">{{ $movie->date }}</li>
                    <li class="list-group-item">{{ $movie->vote }}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Scheda film</a>
                    <a href="#" class="card-link">Guarda</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
