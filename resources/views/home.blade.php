@extends('layouts.app')
@section('content')
    <div class="container mt-5 d-flex flex-column align-items-center justify-content-center">
        <img class="w-100" src="https://i.ibb.co/NSzsR6q/boolean-comics.png" alt="Logo boolean.comics">
        <div class="banner-wrap w-100 d-flex justify-content-around align-items-center">
            <a href="{{ route('comics.index') }}"><img class="" src="https://i.ibb.co/mGqTVFJ/banner-list.png" alt="Comics list banner"></a>
            <a href="{{ route('comics.create') }}"><img class="" src="https://i.ibb.co/kSnYQSs/banner-insert.png" alt="Insert a comic banner"></a>            
        </div>

    </div>
@endsection
