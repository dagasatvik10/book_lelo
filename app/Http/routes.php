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

    Route::auth();
    Route::get('/',['uses'  => 'HomeController@index','as' => 'home']);
    Route::get('book/{id}',['uses' => 'HomeController@show','as' => 'show']);


Route::group(['middleware' =>'auth'],function(){
    // Show and Edit User details
    Route::get('/user',['as' => 'user.show','uses' => 'UserController@show']);
    Route::get('/user/edit',['as' => 'user.edit','uses' => 'UserController@edit']);
    Route::post('/user/edit',['as' => 'user.update','uses' => 'UserController@update']);
    Route::get('/user/deleteconfirm',['as'=>'user.deleteconfirm','uses' => 'UserController@deleteconfirm']);    
    Route::post('/user/delete',['as'=>'user.delete','uses' => 'UserController@delete']);

    // Create book post,edit book post,delete book post
    Route::get('user/book/create',['as' => 'book.create','uses' => 'BookController@create']);
    Route::post('user/book',['as' => 'book.store','uses' => 'BookController@store']);
    Route::get('user/book',['as' => 'book.index','uses' => 'BookController@index']);
    //Route::get('user/book/{id}',['as' => 'book.show','uses' => 'BookController@show']);
    Route::get('user/book/{id}/edit',['as' => 'book.edit','uses' => 'BookController@edit']);
    Route::post('user/book/{id}/edit',['as' => 'book.update','uses' => 'BookController@update']);
    Route::delete('user/book/{id}/delete',['as' => 'book.delete','uses' => 'BookController@delete']);
});


