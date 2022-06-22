@extends('layouts.app')

@section('title', 'Published Articles Rating')

@section('header', 'Articles Rating')

@section('content')
@foreach ($published as $article)
<p>Title - {{ $article->name }}. Likes count: {{ $article->likes_count }}.</p>
@endforeach
@endsection
