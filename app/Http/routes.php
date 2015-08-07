<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', 'HomeController@index' );
Route::get('/register', 'HomeController@register');
Route::post('/upload', 'HomeController@upload');

Route::get( 'pages/{id}', 'PagesController@show' );
Route::post( 'comment/store', 'CommentsController@store' );

Route::get( 'auth/login', 'Auth\AuthController@getLogin' );
Route::post( 'auth/login', 'Auth\AuthController@postLogin' );
Route::get( 'auth/logout', 'Auth\AuthController@getLogout' );

Route::group( ['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {

        Route::get( '/', 'AdminHomeController@index' );

        //resource means the methods of url are consistent with that of controllers
        Route::resource( 'pages', 'PagesController' );
        Route::resource( 'comments', 'CommentsController' );
    } );

Route::get( '/fuck/{who}', function($who){
    // return 'fuck --> '.$who;
    $pages = App\Models\Page::paginate(1);

    return $pages;
});










