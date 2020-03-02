@extends('layout')

@section('page-title','Blog Content')

@section('page-content')
<div class="container col-sm-12">
    <h1>{{ $blog->title }}</h1>
    <div>{{ $blog->content }}</div>
    <div>
        <a class="float-left" href="/blog/{{ $blog->id }}/edit">Edit</a>
        <a class="float-right" href="/blog" >Back</a>
    </div>
</div>

@endsection