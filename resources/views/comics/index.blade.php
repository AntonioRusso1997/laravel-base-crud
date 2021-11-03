@extends('layouts.app')
@section('content')
    <div id="index-container" class="container w-100">
        <h1 class="text-white mt-3">COMICS LIST:</h1>
        <div class="row w-100 d-flex flex-wrap">
            @foreach ($comics as $comic)
            <div class="card">
              <div class="card__image-container">
                <img class="card__image" src="{{$comic['thumb']}}" alt="{{$comic['title']}} thumb">
             </div>
               
               <svg class="card__svg" viewBox="0 0 800 500">
         
                 <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"/>
                 <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"/>
               </svg>
             
              <div class="card__content">
                <h1 class="card__title text-uppercase">{{$comic['title']}}</h1>
              <p>{{$comic['series']}}</p>
              <p class="fs-4 text-white">{{$comic['price']}} $</p>
              <div class="button-wrap w-100 d-flex justify-content-between align-items-center">
                <a class="btn btn-outline-primary fw-bold" data-mdb-ripple-color="dark" href="{{ route('comics.show', $comic['id']) }}" class="card-link">Details</a>
                <a class="btn btn-outline-warning fw-bold" data-mdb-ripple-color="dark" href="{{ route('comics.edit', $comic['id']) }}" class="card-link">Edit</a>
                <form onclick="return confirm('Vuoi veramente eliminarlo?')" method="post" action="{{ route('comics.destroy', $comic['id']) }}">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-danger fw-bold" data-mdb-ripple-color="dark" type="submit">Delete</button>
                </form>
              </div>
             </div>
           </div>
            @endforeach
        </div>
    </div>
  
@endsection