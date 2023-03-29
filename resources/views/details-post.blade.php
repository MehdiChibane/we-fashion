@extends('default')
@section('title')
    Details de l'article
@endsection

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
    <h1>Titre : {{$post->title}}</h1>
    <p>Content : {{$post->content}}</p>
@endsection
