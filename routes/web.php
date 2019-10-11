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
Route::get('/api','HomeController@getImage');

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        
        Route::get('register','Auth\RegisterController@getRegister')->name('register');
        Route::post('register','Auth\RegisterController@registerTutor')->name('register');

        // Route::get('login','Auth\LoginController@getTutorLoginForm')->name('login');
        // Route::post('login','Auth\LoginController@loginTutor')->name('login');

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