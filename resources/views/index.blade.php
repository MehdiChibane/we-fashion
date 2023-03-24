@extends('default')
@section('title')
    Page d'accueil
@endsection

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')
    <ul>
        @foreach($comments as $comment)
            <li><a href="{{route('details',['id'=>$comment->id])}}">Nom : {{$comment->name}}</a>
                |
                <a href="{{route('delete',['id'=>$comment->id])}}" >Supprimer</a></li>
        @endforeach
    </ul>
@endsection
