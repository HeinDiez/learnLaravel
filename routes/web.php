<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

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

// Route::get('/insert',  function () {
//     DB::insert('insert into posts(title, body) values(?,?)', ['Javascript', 'Learning Javascript is nice sa eyes.']);
// });

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
    $posts = Post::all();
    return $posts;
    
    // foreach($posts as $post) {
    //     return $post->title;
    // }
});