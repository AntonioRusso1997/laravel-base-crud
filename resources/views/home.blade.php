@extends('layouts.app')
@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white fs-1">COMICS HOME</h1>
        <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-warning btn-lg text-danger fs-2">Comics List</button></a>

    </div>
@endsection
