<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
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


Route::get('/post/{id}', [PostsController:: class, 'show_post']);


Route::resource('posts', PostsController:: class);

Route::get('contacts', [PostsController:: class, 'contact']);