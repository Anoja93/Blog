@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            All Posts
            <a href="{{ url('posts/create') }}" class="btn btn-success">+</a>
        </div>
    </div>

    <div class="container">
  <h2>Posts Table</h2>

  <table class="table table-striped">
    <tr>
      <th>ID</th> <th>Photo</th> <th>Title</th> <th>Status</th> <th>Options</th>
    </tr>
    @foreach($posts as $post)

    <tr>
        <td> {{ $post->id }} </td>
        <td><img src="{{ url($post->photo) }}" width='100'/></td>
        <td> {{ $post->title }} </td>
        <td>
            @if($post->status)
              <span class="label label-success">
                Published
              </span>
            @else
              <span class="label label-danger">
                Unpublished
              </span>
            @endif
        </td>
        <td>
            <a href="{{ url('posts/'.$post->id) }}" class="btn btn-info">SHOW</a>
            <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-warning">EDIT</a>
            <a href="{{ url('posts/'.$post->id) }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </table>
</div>

 @endsection
