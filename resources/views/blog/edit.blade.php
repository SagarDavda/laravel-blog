@extends('layout')

@section('page-title','Create Blog')

@section('page-content')
<div class="container col-sm-12">
  <h1>Change Blog Contents</h1>
<form class="form-horizontal" action="/blog/{{ $blog->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
      <label class="control-label col-sm-2" for="title">Title: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" placeholder="Blog Title" name="title" value="{{ $blog->title }}">
      </div>
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : "" }}">
      <label class="control-label col-sm-2" for="content">Content: </label>
      <div class="col-sm-10">          
          <textarea class="form-control" name="content" placeholder="Blog Content">{{ $blog->content }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">          
          
      </div>
    </div>
    @if ($errors->any())
    <div class="form-group">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="alert-danger text-left">
          <ul>
          @foreach ($errors->all() as $error)
            <li><p>{{ $error }}</p></li> 
          @endforeach
          </ul>
        </div>
      </div>
    </div>
    @endif
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Save</button>
      </div>
    </div>
  </form>
  <form method="POST" action="/blog/{{ $blog->id }}">
    @method('DELETE')
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="content">&nbsp;</label>
      <div class="col-sm-10">          
          <button type="submit" class="btn btn-default">Delete</button>
      </div>
    </div>
  </form>
</div>

@endsection