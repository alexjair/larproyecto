@extends('templade')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>

        {{$post->body}}

    </p>

@endsection
    