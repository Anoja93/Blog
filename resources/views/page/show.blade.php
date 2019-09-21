@extends('layouts.app')

 @section('content')
 
    <div class="container">
      <h2>My Page</h2>
      <div class="panel panel-default">
        <div class="panel-body">Page Viewer</div>
        <div class="panel-body">

          @component('components.alert')
            <strong>Notice!</strong>You Dont have permission to delete!
          @endcomponent

          <h2>Post Name Here</h2>
          <hr/>
          <p> Post Content Here</p>
          <a href="pages/{{$id}}/edit" class="btn btn-warning">Edit</a>
        </div>
      </div>
    </div>

  @endsection

