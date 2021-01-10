<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
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
    $container = new App\Models\Container();
    $container -> bind('example', function () {
        return new App\Models\Example();
    });

    $example= $container->resolve('example');

    $example->go();

    // return view('welcome');
});

Route::get('/ev', function () {
    return ["foo" => "bar"];
});

Route::get("/test", function() {
    $name = request('name');
    return view('test', [
        "name" => $name]
    );
});

Route::get('/posts/{post}', [PostsController::class,'show']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/simple', function () {
    return view('simple');
});

Route::get('/about', function () {
    $articles = App\Models\Article::latest()->get();
    return view ('about', [
        'articles' => $articles
    ]);
});

Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::post('/articles',[ArticlesController::class, 'store']);
Route::put('/articles/{article}', [ArticlesController::class, 'update']);
Route::delete('/articles/{article}',[ArticlesController::class, 'destroy']);
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
