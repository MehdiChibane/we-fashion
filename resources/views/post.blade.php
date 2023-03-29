@extends('default')
@section('title')
    Listes des articles
@endsection

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item"><a href="{{route('detailsPost',['id'=>$post->id])}}">{{$post->title}}</a>  | <a href="{{route('deletePost',['id'=>$post->id])}}">Supprimer</a> </li>
        @endforeach
    </ul>
@endsection
