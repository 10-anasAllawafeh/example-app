@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif  
    <div class="row justify-content-center">
        <div class="col-2 mt-5">
            <button class="btn"><a href="{{url('add')}}">Add New Movie</a></button>
        </div>
    </div>
    @foreach ($movies as $movie)
       @if ($movie->destroy == 1)
            @continue
       @else 
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://freesvg.org/img/hotpopcornmovie.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><a href="{{url("/store/id/$movie->id")}}">{{$movie->name}}</a></h5>
                <p class="card-text">{{$movie->description}}</p>
                <a href="{{url("edit/id/$movie->id")}}" class="btn btn-warning">Edit</a>
                <a href="{{url("delete/id/$movie->id")}}" class="btn btn-primary">Delete</a>
             </div>
        </div>
       @endif   
    @endforeach
    </div>
@endsection
