<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentController extends Controller{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $request->merge(['status'=>1]);
        $request->merge(['like_count'=>0]);
        $request->merge(['user_id'=>Auth::user()->id]);

        $input = $request->all();

        Comment::create($input);
        return redirect('/');
    }

}
