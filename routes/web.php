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

Route::view('/', 'home');

Route::get('post/create', \App\Http\Livewire\PostCreate::class);

Route::get('post/{slug}', \App\Http\Livewire\Post::class);

Route::get('about', \App\Http\Livewire\About::class);

Route::get('auth/register', \App\Http\Livewire\Auth\Register::class);
Route::get('auth/login', \App\Http\Livewire\Auth\Login::class);