<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div class="container">

            @foreach($posts as $post)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="class-header">
                                    <h3>{{ $post->title }}</h3>
                                </div>
                                <div class="card-body">
                                    <img src="{{ url($post->photo) }}" width="800" class="img img-responsive img-thumbnail">
                                    <hr/>
                                    {{ $post->description }}
                                    <br/>
                                    Post ON : {{ $post->created_at }}
                                    <br/>
                                    Post Id: {{ $post->user_id }}
                                    <br/>
                                    Owner Name : {{ $post->user->name }}
                                    <br/>
                                    Owner Email : {{ $post->user->email }}
                                    <br/>
                                    Since : {{date('Y', strtotime($post->user->created_at)) }}
                                    <br/>
                                    Ago :
                                    <br/>
                                    <h5>Comments</h5>
                                    @foreach($post->comments As $comment)
                                        <div class="card">
                                            <div class="card-body">
                                                <p>{{ $comment->text }}</p>
                                                <span>{{ $comment->created_at }}</span>
                                                <br/>
                                                <span style="position:absolute; right:10px; bottom:10px;">{{ $comment->like_count }}</span>
                                                <img src="{{ $comment->user->photo }}" class="avatar"/>
                                                {{ $comment->user->name }}
                                            </div>
                                        </div>
                                    @endforeach
                                    <hr/>

                                    <form action="{{ url('comments') }}" method="post">
                                        @csrf
                                        <input hidden name="post_id" value="{{ $post->id }}" type="text"/>
                                        <input style="width: 90% ;height:80px" type="text" placeholder="Enter your Comment" name="text" id=""/>
                                        <button type="submit" class="btn btn-warning">Comment</button>

                                    </form>
                                </div>
                            </div>
                            <br/>
                        </div>
                    </div>
            @endforeach
        </div>
    </body>
</html>
