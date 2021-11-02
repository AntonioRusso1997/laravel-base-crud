@extends('layouts.app')
@section('content')
    <div class="container w-100">
        <h1 class="text-white mt-3">{{$comic['title']}} -> DETAILS:</h1>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="{{$comic['thumb']}}" class="img-fluid h-100" alt="{{$comic['title']}} Thunb">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title">{{$comic['title']}}</h5>
                <p class="card-text">{{$comic['description']}}</p>
                <p class="card-text"><small class="text-muted">Series: {{$comic['series']}}</small></p>
                <p class="card-text"><small class="">Sale date: {{$comic['sale_date']}}</small></p>
                <p class="card-text"><small class="text-muted">Type: {{$comic['type']}}</small></p>
                <p class="card-text"><b class="fs-3">Price: {{$comic['price']}} $</b></p>
              </div>
            </div>
          </div>
        </div>
        
    </div>
@endsection