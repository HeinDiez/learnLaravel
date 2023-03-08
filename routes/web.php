<?php

namespace App\Models;

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\User;

use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes foreach($posts as $post) {
    return $post->title;
} your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about/{id}', function ($id) {
//     return 'about '. $id;
// });

// Route::get('/contact', function () {
//     return 'contact';
// });


// Route::get('/post/{id}', [PostsController:: class, 'show_post']);


// Route::resource('posts', PostsController:: class);

// Route::get('contacts', [PostsController:: class, 'contact']);

Route::get('/insert',  function () {
    DB::insert('insert into posts(title, body) values(?,?)', ['Testing', 'testing is nice sa eyes.']);
});

// Route::get('/read',  function () {
//     $result=DB::select('select * from posts');
//     return $result;
// }); 

// Route::get('/update',  function () {
//     $updated = DB::update('update posts set title = ? where id = ?', ["Using Javascript", 2]);

//     return $updated;
// }); 

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id = ? ', [3]);

//     return $deleted;

// });


Route::get('/all', function() {
    $posts = Post::where('id', 2)->orderBy('id', 'desc')->get();
    return $posts;
    
    // foreach($posts as $post) {
    //     return $post->title;
    // }
});

Route::get('/findmore', function() {
    $posts = Post::where('id', '<', '50')->firstOrFail();
    return $posts;
});

Route::get('/create/{title}/{body}', function($title , $body) {
    // Post::create(['title'=>'title on create method', 'body'=>'Wow it works creating a post on the create method.']);

    // ----or----

    $post = new Post;

    $post->title = $title;
    $post->body = $body;

    $post->save();
});


Route::get('/save', function() {
    Post::where('id', 4)->where('title', 'Testing')->update(['title'=>'new Testing', 'body'=>'I love PHP sample body']);


    // -----or-----
    $post = Post::find(5);

    $post->title = "Using Eloquent";
    $post->body = "Eloquest is to cool. Lets learn this.";

    $post->save();
});

Route::get('/deletedata', function() {
    $post = Post::find(1);

    $post->delete();

    // ----or----

    // Post::destroy([4,5]);

    // -----or----

    // Post::where('id', 4)->delete();


});

Route::get('/softdelete', function() {

    Post::where('id', 6)->delete();
});

Route::get('/retrieve', function() {

    // ** ----- getting will not show trashed items.
    // $post = Post::find(6);
    // return $post;

    // ** ----- Get Trashed items and not trashed items
    // $post = Post::withTrashed()->where('id', 6)->get();
    // return $post;


    // ** ----- Get Trashed items only
    $post = Post::onlyTrashed()->get();
    return $post;
});


Route::get('/restore', function() {

    Post::withTrashed()->where('id', '<', 50)->restore();

});


Route::get('/forcedelete', function() {
    
    Post::where('id', 6)->forceDelete();
});


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationship
|--------------------------------------------------------------------------
|
*/
Route::get('/user/post/{id}', function($id) {
    
    return User::find($id)->comments;

});


Route::get('/post/user/{id}', function($id) {
    
    return Post::find($id)->user;

});

Route::get('/user/role/{id}', function($id) {
    
    return User::find($id)->roles()->orderBy('id', 'desc')->get();

});

Route::get('/getUserRole/{id}', function($id) {
    
    return Role::find($id)->roles()->orderBy('id', 'desc')->get();

});


