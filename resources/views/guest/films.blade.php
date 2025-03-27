@extends('layouts.guest')

@section('title', 'Guest - Films')

@section('content')
    <div class="container">
        <h2 class="mb-4">Available Films</h2>
        <div class="row">
            @foreach($films as $film)
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="poster-frame">
                            @if($film->poster)
                                <img src="{{ asset('storage/' . $film->poster) }}" class="card-img-top img-fluid"
                                     alt="Film Poster">
                            @else
                                <div class="coming-soon">
                                    <p>Coming Soon</p>
                                </div>
                            @endif
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $film->title }}</h5>
                            <p class="card-text">{{ Str::limit($film->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .poster-frame {
            width: 350px;
            height: 400px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .poster-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .coming-soon {
            width: 100%;
            height: 100%;
            background-color: white;
            color: #333;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            text-transform: uppercase;
        }
    </style>
@endsection
