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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'FrontController@index')->name('home');
Route::get('/contact', 'FrontController@contact')->name('contact');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
    Route::get('/plan', 'PlanController@index')->name('plans.index');
    Route::get('/plan/{plan}', 'PlanController@show')->name('plans.show');
    Route::post('subscription', 'SubscriptionController@create')->name('subscription.create');

});

