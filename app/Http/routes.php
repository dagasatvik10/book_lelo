<?php

Route::group(['middleware' => 'web'],function(){
    Route::auth();
    Route::get('/{search?}',['uses'  => 'HomeController@index','as' => 'home']);
    Route::get('book/{id}',['uses' => 'HomeController@show','as' => 'show']);
    Route::post('search',['uses' => 'HomeController@search','as' => 'search']);
    Route::post('/{search?}',['uses' => 'HomeController@index','as' => 'book_sort']);
});

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
    Route::get('user/book/{id}/edit',['as' => 'book.edit','uses' => 'BookController@edit']);
    Route::post('user/book/{id}/edit',['as' => 'book.update','uses' => 'BookController@update']);
    Route::delete('user/book/{id}/delete',['as' => 'book.delete','uses' => 'BookController@delete']);
});


Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::post('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});