<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function store(Request $request){

         

        //Post photo uploading
        if($request->hasFile('photo')){
            $photoFile = $request->file('photo');
            $path = 'storage';
            $fileName = $photoFile->getClientOriginalName();

            $photoFile->move($path, $fileName);
        }else{
            $path = 'storage';
            $fileName = 'default.png';
        }

        $status = ($request->has('status'))?1:0;
        $request->merge(['status'=>$status]);
        $request->merge(['user_id'=> Auth::user()->id]);

        $input = $request->all();
        $input['photo'] = $path."/".$fileName;

        Post::create($input);
        return redirect('posts');

    }

    public function update(Request $request){

        $input = $request->all();

        if($request->hasFile('photo')){
            $photoFile = $request->file('photo');
            $path = 'storage';
            $fileName = $photoFile->getClientOriginalName();

            $photoFile->move($path, $fileName);
            $input['photo'] = $path."/".$fileName;
        }

        $status = ($request->has('status'))?1:0;
        $request->merge(['status'=>$status]);

        //$input = $request->all();


        $post = Post ::find($request->input('id'));
        $post->update($input);
        return redirect('posts');

    }

    public function show($id){
            $post = Post::find($id);
            return view('post.show')->with('post',$post);
          //  return view('post.show', ['id' =>$id]);

        //return view('post.show', ['name' => 'Anoja', 'id' =>$id]);
    }

    public function edit($id){
        $post = Post::find($id);
        return view('post.edit')->with('post',$post);
       // return view('post.edit',['id' =>$id]);
    }



    public function index(){

        $posts = Post::all();
        return view('post.index')->with('posts',$posts);
        //return view('post.index');
    }


}
