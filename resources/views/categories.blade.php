@extends('layouts.main')

@section('container')
<h1>Post Categories</h1>
<div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4">
        <div class="card bg-dark text-white mt-3">
            <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" class="card-img-top" alt="{{ $category->category }}">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4">
                <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white" style="background-color:rgba(0, 0, 0, 0.5) ">{{ $category->name }}</a></h5>
              {{-- <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a> --}}
            </div>
          </div>
        </div>
        @endforeach
</div>

@endsection