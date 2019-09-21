<?php

use App\Http\Controllers\CommentController;
use App\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();
    return view('welcome')->with('posts',$posts);
});


/*Route::get('/post/add',function(){
   // return view('post/add');
    return view('post.add');
});*/

//Route::match(['get','post'],'/posts/create','PostController@create');

//Route::any('posts/create','PostController@create');


//Route::redirect('/posts_add','/post/create');

//Route::view('posts/add','post.create', ['name' => 'Anoja']);  //pass data

/*Route::get('/posts/{id}',function($id){
    echo "Post No : ".$id;
});*/

/*Route::get('/posts/{id}/{name}',function($id, $name){
    echo "Post No : ".$id;
    echo "<hr/>";
    echo "Post Name : ".$name;
});*/

Route::get('posts/create','PostController@create');

Route::get('/posts/{id}' ,'PostController@show');

Route::get('/posts/{id}/edit' ,'PostController@edit');

Route::get('/posts', 'PostController@index');

Route::post('/posts', 'PostController@store');


Route::get('pages/create','PageController@create');

Route::get('/pages/{id}' ,'PageController@show');

Route::get('/pages/{id}/edit' ,'PageController@edit');

Route::get('/pages', 'PageController@index');

Route::post('/pages', 'PageController@store');


Route::get('contacts/create','ContactController@create');

Route::get('/contacts', 'ContactController@index');

Route::post('/contacts', 'ContactController@store');

//updates
Route::put('posts/{id}', 'PostController@update');

Route::put('pages/{id}', 'PageController@update');

//Comments
Route::post('/comments','CommentController@store');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
