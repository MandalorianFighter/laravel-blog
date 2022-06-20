<h1>About Blog</h1>
<p>Experiments with Laravel</p>
<h2>Creator</h2>
@foreach ($creator as $key=>$value) 
<p>{{ $key }}: {{ $value }}</p>
@endforeach
<p>Tags: {{ implode(', ', $tags) }}.</p>
