@extends('layout')

@section('page-title','Contact Me')

@section('page-content')

<h1>Here are blogs written by Me!</h>
<br>
@foreach($blogs as $blog)
{{ $blog->title  }} : {{ $blog->content  }}
<br>
@endforeach

@endsection