<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $input = $request->all();
        Contact::create($input);
        return redirect('contacts');

    }

    /*public function show($id){

        //return view('post.show', ['name' => 'Anoja', 'id' =>$id]);
        return view('post.show', ['id' =>$id]);

    }

    public function edit($id){
        return view('post.edit',['id' =>$id]);
    }*/

    public function index(){

        $contacts = Contact::all();
        return view('contact.index')->with('contacts',$contacts);
        //return view('post.index');
    }

    
}