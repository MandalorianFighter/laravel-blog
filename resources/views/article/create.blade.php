@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('layouts.app')

@section('title', 'Create Article')

@section('header', 'Create Article')

@section('content')
{{ Form::model($article, ['url' => route('articles.store')]) }}
    @include('article.form')
    {{ Form::submit('Save') }}
{{ Form::close() }}
@endsection
