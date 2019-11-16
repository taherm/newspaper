<?php

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

use App\Http\Controllers\HomeController;

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/post/{id}', 'HomeController@showpost')->name('posts.show');;
    Route::get('/test', function () {
        // $user = App\User::find(1);
        $user = App\User::find(1)->categories;
        dd($user);
        return view('frontend.post', compact('categories'));
    });
    Route::get('language/{locale}', 'HomeController@changeLanguage')->name('language.change');
    Route::get('/category/{id}', 'HomeController@category')->name('category.posts');
    Route::get('/search_results', 'HomeController@search_results')->name('search');
});



Route::group(['namespace' => 'Admin'], function () {

    Route::get('/admin', function () {
        return view('backend.index');
    })->middleware('auth');

    Route::get('/posts', function () {
        return view('backend.posts.index');
    });

    Route::resource('admin/post', 'PostController')->middleware('auth');
    Route::resource('admin/ad', 'AdController')->middleware('auth');
    Route::resource('admin/category', 'CategoryController')->middleware('auth');
    Route::resource('admin/user', 'UserController')->middleware('auth');
});
Auth::routes();
