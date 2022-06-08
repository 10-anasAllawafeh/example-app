@extends('layouts.master')

@section('title')
    view Movie
@endsection

@section('content')
<div class="container offset-4">
<iframe width="420" height="315" src="{{$movie->trailer}}"></iframe></div>
@endsection