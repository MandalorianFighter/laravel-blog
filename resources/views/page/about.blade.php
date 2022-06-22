@extends('layouts.app')

@section('title', 'About Blog')

@section('header', 'About Blog')

@section('content')
<p>Experiments with Laravel</p>
<h2>Creator</h2>
@foreach ($creator as $key=>$value) 
<p>{{ $key }}: {{ $value }}</p>
@endforeach
<p>Tags: {{ implode(', ', $tags) }}.</p>
@endsection
