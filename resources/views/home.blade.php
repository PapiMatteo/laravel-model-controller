@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-2 gy-3">
            @foreach ($movies as $movie)
                 <div class="col">
                    <div class="card">
                        <img src="{{ $movie->image }}" alt="">
                        <h3 class="text-center">{{ $movie->title }}</h3>
                        <p class="text-center">{{ $movie->original_title }}</p>
                        <p class="danger text-center">{{ $movie->vote }}</p>
                    </div>
                </div>
            @endforeach
           
        </div>
    </div>
@endsection