@extends('layouts.app')

@section('title',$article->name)

@section('header',$article->name)

@section('content')
<div>{{$article->body}}</div>
@endsection
