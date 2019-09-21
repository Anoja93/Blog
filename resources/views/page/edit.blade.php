@extends('layouts.app')

@section('content')

    <form action="page/update" method="post">
       
         @csrf

        <div class="form-group">
        <label>Id</label>
            <input type="text" class="form-control" name="id" value={{$id}} readonly>
        </div>

        <div class="form-group">
        <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label>Content</label>
            <textarea name="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success">

        </div>

        
    </form>


@endsection