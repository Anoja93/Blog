@extends('layouts.app')

@section('content')

    <form action="{{ url('posts/'.$post->id) }}" method="POST">
        @method('PUT')
         @csrf

        <div class="form-group">
        <label>Id</label>
            <input type="text" class="form-control" name="id" value={{$post->id}} readonly>
        </div>

        <div class="form-group">
        <label>Title</label>
            <input type="text" class="form-control" name="title" value={{ $post->title }}>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $post->description }}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Update</button>

        </div>


    </form>


@endsection
