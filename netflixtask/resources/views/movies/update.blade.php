@extends('layouts.master')

@section('title')
    update Movie
@endsection

@section('content')
    <div class="container row justify-content-center my-5 py-5">
        <div class="col-4 offset-5">Update Movie Data</div>
        <div class="col-4 offset-3">
            <form action="{{url('/update/id/'.$movie->id)}}" method="POST" class="form-group">
                @csrf
                @method('put')
                <label for="name">Movie Name</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{$movie->name}}">
                <label for="description">Movie Description</label>
                <input type="text" class="form-control" id="description" name="description" required value="{{$movie->description}}">
                <label for="genre">Movie Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required value="{{$movie->genre}}">
                <label for="trailer">Movie Trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer" required value="{{$movie->trailer}}">
                <label for="picture">Movie Picture</label>
                <input type="text" class="form-control" id="picture" name="picture" required value="{{$movie->picture}}">
                <button type="submit" class="btn offset-5 mt-5" style="border:1px solid red ;color:red">Add</button>
            </form>
        </div>
    </div>
@endsection