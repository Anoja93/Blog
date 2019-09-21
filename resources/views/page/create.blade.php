@extends('layouts.app')

        @section('content')

            <div class="panel panel-default">
                <div class="panel panel-heading">Page Add</div>
                <div class="panel-body">

                    @component('components.alert')
                        <strong>Success!</strong>Record Saved Successfully!
                    @endcomponent

                    <form action="{{ url('pages') }}" method="post">

                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                         <label>Publish</label>
                            <input type="checkbox" checked value="1" name="status" class="form-control"/>    
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        @endsection

        @section('js')
            <h4>Some Content</h4>
        @endsection
