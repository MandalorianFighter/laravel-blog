@extends('layouts.app')

@section('title', 'Articles')

@section('header', 'All articles')

@section('content')

@foreach ($articles as $article)
<p>{{ $article->name }} - Created at: {{$article->created_at}}</p>
@endforeach
@endsection
