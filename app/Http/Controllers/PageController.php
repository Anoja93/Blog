<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function create(){
        return view('page.create');
    }

    public function store(Request $request){

        $status = ($request->has('status'))?1:0;
        $request->merge(['status'=>$status]);

        $input = $request->all();
        Page::create($input);
        return redirect('pages');

    }

    public function show($id){

        //return view('post.show', ['name' => 'Anoja', 'id' =>$id]);
        return view('page.show', ['id' =>$id]);

    }

    public function edit($id){
        return view('page.edit',['id' =>$id]);
    }

    public function index(){

        $pages = Page::all();
        return view('page.index')->with('pages',$pages);
        //return view('post.index');
    }

    
}