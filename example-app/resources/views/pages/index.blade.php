@extends('layouts.master')

@section('title')
Home page   
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
            <button class="btn btn-info "><a href="{{url('add-product')}}">Add New Product ?</a></button>
        </div>
    </div>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" width="20px" height="240px" src="{{$product->picture}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="{{url('delete/id/'.$product->id)}}" class="btn btn-danger">Delete</a>
                    <a href="{{url('edit-product/id/'.$product->id)}}" class="btn btn-warning">edit</a>
                    </div>
                </div>
            </div>   
        @endforeach     
    </div>
</div>
@endsection