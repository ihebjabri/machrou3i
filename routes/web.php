<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');


Route::resource('/posts', App\Http\Controllers\PostController::class); 

//Route::get('/livewire-posts' , [App\Http\Controllers\PostController::class, 'index_livewire']);


Route::get('livewire/posts', App\Http\Livewire\Posts::class ); 

//Route::get('livewire/posts/create', 'create_post'); 