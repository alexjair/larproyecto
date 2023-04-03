@extends('templade') 

@section('content')

    <h1>Listado</h1>
    @foreach ($posts as $post)
    <p>
        <strong>{{ $post->id}}</strong>
        <a href="{{route('post', $post->slug)}}">
            {{$post->title}}
        </a>
        <br>
        <span> {{$post->user->name}}
    </p>
    @endforeach

    {{$posts->links()}}
@endsection




