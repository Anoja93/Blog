@extends('layouts.app')

        @section('content')

            <div class="panel panel-default">
                <div class="panel panel-heading">Contact Us</div>
                <div class="panel-body">

                    @component('components.alert')
                        <strong>Success!</strong>Record Saved Successfully!
                    @endcomponent

                    <form action="{{ url('contacts') }}" method="post">

                        @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Your Level
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">HighL</a></li>
                                    <li><a href="#">Medium</a></li>
                                    <li><a href="#">Low</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        @endsection

        @section('js')
            <h4>Some Content</h4>
        @endsection
