@extends('layouts.app')

@section('content')
<h1>Edit Todo</h1>

<form method="POST" action="/todos/{{ $todo->id }}">
    @csrf

    @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="title" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter title" value="{{ $todo->title }}">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="content" class="form-control" name="content" id="content" placeholder="content" value="{{ $todo->content }}">
  </div>
  <div class="form-group">
  <label for="due">Due</label>
    <input type="due" class="form-control" name="due" id="due" placeholder="due" value="{{ $todo->due }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection