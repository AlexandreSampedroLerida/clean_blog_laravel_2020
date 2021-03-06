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

// VIEW COMPOSERS ------------------------------------------------------
  View::composer('pages._menu', function($view){
  $view->with('pages', App\Models\Page::orderBy('tri', 'asc')->get()); //Page::all()
  });

  View::composer('posts._index', function($view){
  $view->with('posts', App\Models\Post::orderBy('datePublication', 'desc')->take(10)->get());
  });

  View::composer('tags._index', function($view){
  $view->with('tags', App\Models\Tag::orderBy('nom', 'asc')->get());
  });

// ROUTE DES PAGES -----------------------------------------------------
use App\Http\Controllers\PagesController;
  Route::get('/', [PagesController::class, 'show'])->name('homepage');
  Route::get('pages/{id}/{slug}', [PagesController::class, 'show'])
    ->where([
      'id'   => '[1-9][0-9]*',
      'slug' => '[a-z0-9][a-z0-9\-]*'
    ])
    ->name('pages.show');
//Route::resource('pages', PagesController::class)->only(['index', 'show']);

// ROUTE DES POSTS -----------------------------------------------------
use App\Http\Controllers\PostsController;
 Route::get('/posts/{post}/{slug}', [PostsController::class, 'show'])
    ->where([
       'post' => '[1-9][0-9]*',
       'slug' => '[a-z0-9][a-z0-9\-]*'
     ])
    ->name('posts.show');


// ROUTE DES TAGS -----------------------------------------------------
use App\Http\Controllers\TagsController;
 Route::get('/tags/{tag}/{slug}', [TagsController::class, 'show'])
  ->where([
    'tag'   => '[1-9][0-9]*',
    'slug' => '[a-z0-9][a-z0-9\-]*'
  ])
  ->name('tags.show');
