@extends('layouts.app')
@section('content')
    <div id="show-cotainer" class="container w-100">
        <h1 class="text-white mt-3">{{$comic['title']}} -> DETAILS:</h1>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-3">
              <img src="{{$comic['thumb']}}" class="img-fluid h-100" alt="{{$comic['title']}} Thunb">
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <h5 class="card-title text-white fs-3">{{$comic['title']}}</h5>
                <p class="card-text text-muted">{{$comic['description']}}</p>
                <p class="card-text text-muted fs-5">Series: <small class="text-white fs-4">{{$comic['series']}}</small></p>
                <p class="card-text text-muted fs-5">Sale date: <small class="text-white fs-4">{{$comic['sale_date']}}</small></p>
                <p class="card-text text-muted fs-5">Type: <small class="text-white fs-4">{{$comic['type']}}</small></p>
                <p class="card-text text-muted fs-5">Price: <b class="text-white fs-4">{{$comic['price']}} $</b></p>
              </div>
            </div>
          </div>
        </div>
        
    </div>
@endsection