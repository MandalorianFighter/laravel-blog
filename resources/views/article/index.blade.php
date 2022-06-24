@extends('layouts.app')

@section('title', 'Articles list')

@section('header', 'Articles list')

@section('content')
{{Form::open(['url' => route('articles'), 'method' => 'GET'])}}
    {{Form::text('q', $q)}}
    {{Form::submit('Find!')}}
{{Form::close()}}
    @foreach ($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach

{{ $articles->links() }}
<style>
    .w-5{
        display: none;
    }
</style>
@endsection
