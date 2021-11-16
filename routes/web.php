<?php

// namespace App\Http\Controllers;

use App\Models\Category;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Farhan Fadil",
        "email" => "farhan972015@gmail.com"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        "active" => "categories",
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('blog', [
//         "active" => "categories",
//         'title' => $category->name,
//         'posts' => $category->posts->load('author', 'category')
//         // 'category' => $category->name
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('blog', [
//         'title' => 'User Posts',
//         'posts' => $author->posts->load('author', 'category')
//     ]);
// });