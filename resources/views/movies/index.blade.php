@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <!-- Popular movies -->
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-lime-600 text-lg font-semibold">
                Most popular movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!-- End popular movies-->

        <!-- Now playing movies -->
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-lime-600 text-lg font-semibold">
                Now playing movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie"/>
                @endforeach
            </div>
        </div> <!-- End now playing movies -->
    </div>
@endsection
