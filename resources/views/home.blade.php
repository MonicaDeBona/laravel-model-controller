@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card my-2 mx-1">
                            <img src="{{ Vite::asset('resources/assets/img/poster-not-available.png') }}" alt="Movie Poster">
                            <div class="card-body text-center">
                                <h4>
                                    {{ $movie->title }}
                                </h4>
                                <h4>
                                    {{ $movie->original_title }}
                                </h4>
                                <p>
                                    {{ $movie->nationality }}
                                </p>
                                <p>
                                    {{ $movie->date }}
                                </p>
                                <p>
                                    {{ $movie->vote }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
