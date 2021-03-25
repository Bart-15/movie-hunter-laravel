@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($popularMovies as $movie)
                        <x-movie-card :movie='$movie' :genres="$genres"/>
             @endforeach
        </div>
    </div>

    <div class="container mx-auto py-24 pt-16">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Now Playing Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($nowPlayingMovies as $movie)
                <x-movie-card :movie='$movie'/>
            @endforeach
        </div>
    </div>
@endsection