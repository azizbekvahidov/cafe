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
    return view('auth.login');
});
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', 'AdminController@index');
Route::get('/superadmin', 'SuperAdminController@index');

    //Measure
    Route::group(['prefix' => 'measures', 'as' => 'measures.'], function(){
       Route::get('/',               ['as' => 'index',   'uses'  => 'MeasureController@index']);
       Route::get('create',          ['as' => 'create',  'uses'  => 'MeasureController@create']);
       Route::post('store',          ['as' => 'store',   'uses'  => 'MeasureController@store']);
       Route::get('edit/{id}',       ['as' => 'edit',    'uses'  => 'MeasureController@edit']);
       Route::post('update/{id}',    ['as' => 'update',  'uses'  => 'MeasureController@update']);
       Route::get('destroy/{id}',    ['as' => 'destroy', 'uses'  => 'MeasureController@destroy']);
    });
    //Categories
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function(){
        Route::get('/',                ['as' => 'index',  'uses'  => 'CategoryController@index']);
        Route::get('create',           ['as' => 'create', 'uses'  => 'CategoryController@create']);
        Route::post('store',           ['as' => 'store',  'uses'  => 'CategoryController@store']);
        Route::get('edit/{id}',        ['as' => 'edit',   'uses'  => 'CategoryController@edit']);
        Route::post('update/{id}',     ['as' => 'update', 'uses'  => 'CategoryController@update']);
        Route::get('destroy/{id}',     ['as' => 'destroy','uses'  => 'CategoryController@destroy']);
});

    //Products
    Route::group(['prefix' => 'products', 'as' => 'products.'], function(){
        Route::get('/',               ['as' => 'index',  'uses' => 'ProductController@index']);
        Route::get('create',          ['as' => 'create', 'uses' => 'ProductController@create']);
        Route::post('store',          ['as' => 'store',  'uses' => 'ProductController@store']);
        Route::get('edit/{id}',       ['as' => 'edit',   'uses' => 'ProductController@edit']);
        Route::post('update/{id}',    ['as' => 'update', 'uses' => 'ProductController@update']);
        Route::get('destroy/{id}',    ['as' => 'destroy','uses' => 'ProductController@destroy']);
        Route::get('show',            ['as' => 'show',   'uses' => 'ProductController@show']);
    });

    //Menu
    Route::group(['prefix' => 'menu', 'as' => 'menu.'], function(){
        Route::get('/',               ['as' => 'index',  'uses' => 'MenuCategoryController@index']);
        Route::get('create',          ['as' => 'create', 'uses' => 'MenuCategoryController@create']);
        Route::post('store',          ['as' => 'store',  'uses' => 'MenuCategoryController@store']);
        Route::get('edit/{id}',       ['as' => 'edit',   'uses' => 'MenuCategoryController@edit']);
        Route::post('update/{id}',    ['as' => 'update', 'uses' => 'MenuCategoryController@update']);
        Route::get('destroy/{id}',    ['as' => 'destroy','uses' => 'MenuCategoryController@destroy']);
        Route::get('show',            ['as' => 'show',   'uses' => 'MenuCategoryController@show']);
    });


