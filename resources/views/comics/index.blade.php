@extends('layouts.app')
@section('content')
    <div class="container w-100">
        <h1 class="text-white mt-3">COMICS LIST:</h1>
        <div class="row w-100 d-flex flex-wrap gy-5">
            @foreach ($comics as $comic)
            <div class="card col-3">
                <img class="card-img-top w-100" src="{{$comic['thumb']}}" alt="{{$comic['title']}} thumb">
                <div class="card-body">
                  <h5 class="card-title">{{$comic['title']}}</h5>
                  <p class="card-text">{{$comic['series']}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$comic['price']}} $</li>
                </ul>
                <div class="card-body">
                  <a href="{{ route('comics.show', $comic['id']) }}" class="card-link">More Details</a>
                  <a href="{{ route('comics.show', $comic['id']) }}" class="card-link">Modify</a>
                  <a href="{{ route('comics.show', $comic['id']) }}" class="card-link">Delete</a>
                </div>
            </div>                
            @endforeach
        </div>
    </div>
@endsection