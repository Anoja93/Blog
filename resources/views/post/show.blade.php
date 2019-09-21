@extends('layouts.app')

 @section('content')

    <div class="container">
      <h2>My Post</h2>
      <div class="panel panel-default">
        <div class="panel-body">Post Viewer</div>
        <div class="panel-body">



          <h2>{{ $post->title }}</h2>
          <img src="{{ url($post->photo) }}" width='100'/>
          <hr/>
          <p>{{ $post->description }}</p>

          <a href="posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
        </div>
      </div>
    </div>

  @endsection

