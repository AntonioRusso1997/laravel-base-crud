@extends('layouts.app')
@section('content')
    <div class="container w-100">
        <h1 class="text-white mt-3">ADD A NEW COMIC</h1>
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('comics.store') }}" method="post">
          @csrf
          @method('POST')

          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" placeholder="Enter comic description"></textarea>
              {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Enter comic description"> --}}
          </div>
          <div class="form-group">
              <label for="thumb">Thumb</label>
              <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter comic thumb">
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input type="text" name="price" class="form-control" id="price" placeholder="Enter comic Price">
          </div>
          <div class="form-group">
              <label for="series">Series</label>
              <input type="text" name="series" class="form-control" id="series" placeholder="Enter comic series">
          </div>
          <div class="form-group">
              <label for="sale_date">Sale Date</label>
              <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter comic sale date">
          </div>
          <div class="form-group">
              <label for="type">Type</label>
              <input type="text" name="type" class="form-control" id="type" placeholder="Enter comic type">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        </div>
        
    </div>
@endsection