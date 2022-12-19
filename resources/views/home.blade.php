@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4">
        @include('components.slider')
    </div>
    <div class="d-flex flex-wrap justify-content-center col-8">
        @foreach ($movies as $key => $movie)
            <div class="card" style="width: 18rem;">
                <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('singlemovie', ['id' => $movie->id]) }}">{{ $movie->title }}</a></h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->date }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
