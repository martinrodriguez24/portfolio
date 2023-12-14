<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostCategoryController;
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

Route::get('/', function () {
    return view('home');
});

// Post model
// Get
Route::get('/blog', PostController::class . '@index')->name('posts.index');
Route::get('/blog/{slug}', PostController::class . '@show')->name('post.show');
// Create
Route::get('/blog/post/create', PostController::class . '@create')->name('post.create');
Route::post('/blog', PostController::class . '@store')->name('post.store');
// Update
Route::get('/blog/post/{post}/edit', PostController::class . '@edit')->name('post.edit');
Route::put('/blog/post/{post}', PostController::class . '@update')->name('post.update');
// Delete
Route::delete('/blog/post/{post}', PostController::class . '@destroy')->name('post.destroy');


// Category model
// Get
Route::get('/blog/category', CategoryController::class . '@index')->name('category.index');
Route::get('/blog/category/{slug}', CategoryController::class . '@show')->name('category.show');
// Create
Route::get('/blog/category/create', CategoryController::class . '@create')->name('category.create');
Route::post('/blog/category', CategoryController::class . '@store')->name('category.store');
// Update
Route::get('/blog/category/{slug}/edit', CategoryController::class . '@edit')->name('category.edit');
Route::put('/blog/category/{slug}', CategoryController::class . '@update')->name('category.update');
// Delete
Route::delete('/blog/category/{slug}', CategoryController::class . '@destroy')->name('category.destroy');


// Define route to handle attaching a category to a post
Route::post('/posts/{post}/categories', PostCategoryController::class .'@attachCategory')->name('posts.attachCategory');
