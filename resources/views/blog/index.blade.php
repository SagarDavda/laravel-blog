@extends('layout')

@section('page-title','Contact Me')

@section('page-content')

<h2>Here are blogs written by Me!</h2>
<hr/>
@foreach($blogs as $blog)
<h4><a href="/blog/{{ $blog->id }}">{{ $blog->title  }}</a></h4>
<p>{{ $blog->content  }}</p>
<hr/>
@endforeach

@endsection