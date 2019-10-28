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

Route::get('/','HomeController@index');
Route::get('check/{name}','CategoryController@check');

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () { 
        Route::get('register','Auth\RegisterController@getRegister')->name('register');
        Route::post('register','Auth\RegisterController@register')->name('register');

        Route::get('login','Auth\LoginController@getLogin')->name('login');
        Route::post('login','Auth\LoginController@login')->name('login');

        Route::get('logout','Auth\LoginController@logout')->name('logout');
    });
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () { 
            Route::get('home','HomeController@dashBoard')->name('home');

            Route::get('category','CategoryController@getCategory')->name('category');
            Route::post('category','CategoryController@createCategory')->name('createCategory');

            Route::post('categoryCheck','CategoryController@checkCategory')->name('checkCategory');
        });
    });
   
});


// //Public Routes
// Route::get('/images/category={category}','HomeController@getImages');
// Route::get('/contact','HomeController@getImage');
// Route::get('/replycontact','HomeController@getImage');


// //Admin Routes
// Route::get('/admin/login','HomeController@getImage');
// Route::get('/admin/logout','HomeController@getImage');
// Route::get('/admin/forgotpassword','HomeController@getImage');
// Route::get('/admin/resetpassword','HomeController@getImage');
// Route::get('/admin/category/create','HomeController@getImage');


// //LookBook
// Route::get('/admin/lookbook/create','HomeController@getImage');
// Route::get('/admin/lookbook/delete','HomeController@getImage');
// Route::get('/admin/lookbook/edit','HomeController@getImage');
// Route::get('/admin/lookbook/post/ownerId={lookbookId}','HomeController@getImage');

// //Commisioned /Retouched Images
// Route::get('/admin/commissioned/post','HomeController@getImage');


// //Post Images
// Route::get('/admin/images/post','HomeController@getImage');
// Route::get('/admin/images/edit','HomeController@getImage');
// Route::get('/admin/images/delete/image={imageId}','HomeController@getImage');