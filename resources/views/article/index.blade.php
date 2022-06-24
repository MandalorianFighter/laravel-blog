@extends('layouts.app')

@section('title', 'Articles list')

@section('header', 'Articles list')

@section('content')
    @foreach ($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
