@extends('layouts.app')

@section('content')

    <div class="container">
  <h2>Contacts Table</h2>

  <table class="table table-striped">
    <tr>
      <th>ID</th>  <th>Name</th> <th>Email</th> <th>Options</th>
    </tr>
    @foreach($contacts as $contact)

    <tr>
        <td> {{ $contact->id }} </td>
        <td> {{ $contact->name }} </td>
        <td> {{ $contact->email }} </td>
        <td>
            <a href="{{ url('contacts/'.$contact->id) }}" class="btn btn-info">SHOW</a>
            <a href="{{ url('contacts/'.$contact->id.'/edit') }}" class="btn btn-warning">EDIT</a>
            <a href="{{ url('contacts/'.$contact->id) }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </table>
</div>

 @endsection