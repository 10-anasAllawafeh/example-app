@extends('layouts.master')

@section('title')
    add Movie
@endsection

@section('content')
    <div class="container row justify-content-center my-5 py-5">
        <div class="col-4 offset-5">Add Movie Data</div>
        <div class="col-4 offset-3">
            <form action="add-data" method="POST" class="form-group">
                @csrf
                <label for="name">Movie Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <label for="description">Movie Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
                <label for="genre">Movie Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
                <label for="trailer">Movie trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer" required>
                <button type="submit" class="btn offset-5 mt-5" style="border:1px solid red ;color:red">Add</button>
            </form>
        </div>
    </div>
@endsection