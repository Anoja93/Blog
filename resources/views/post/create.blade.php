@extends('layouts.app')

        @section('content')

            <div class="panel panel-default">
                <div class="panel panel-heading">Post Add</div>
                <div class="panel-body">

                    @component('components.alert')
                        <strong>Success!</strong>Record Saved Successfully!
                    @endcomponent

                    <form enctype="multipart/form-data" action="{{ url('posts') }}" method="post">

                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control"></textarea>
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
