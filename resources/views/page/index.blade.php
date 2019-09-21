@extends('layouts.app')

@section('content')

    <div class="container">
  <h2>Posts Table</h2>

  <table class="table table-striped">
    <tr>
      <th>ID</th>  <th>Name</th> <th>Status</th> <th>Options</th>
    </tr>
    @foreach($pages as $page)

    <tr>
        <td> {{ $page->id }} </td>
        <td> {{ $page->name }} </td>
        <td>
           @if($page->status)
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
            <a href="{{ url('pages/'.$page->id) }}" class="btn btn-info">SHOW</a>
            <a href="{{ url('pages/'.$page->id.'/edit') }}" class="btn btn-warning">EDIT</a>
            <a href="{{ url('pages/'.$page->id) }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </table>
</div>

 @endsection