@extends('layouts.app')

@section('title', 'Articles list')

@section('header', 'Articles list')

@section('content')
<i>{{ $success }}</i>
<p><a href="{{ route('articles.create') }}">Create an Article</a></p>
<h2>Find an Article</h2>
{{Form::open(['url' => route('articles.index'), 'method' => 'GET'])}}
    {{Form::text('q', $q)}}
    {{Form::submit('Find!')}}
{{Form::close()}}
    @foreach ($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2>
        <p><a href="/articles/{{$article->id}}/edit">Edit an Article</a></p>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach

{{ $articles->links() }}
<style>
    .w-5{
        display: none;
    }
</style>
@endsection
