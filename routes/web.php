<?php

Route::get('/', [
    'uses' => 'NameController@index',
    'as'    => '/',
    ]);

Route::get('/boys', [
    'uses' => 'NameController@boys',
    'as'    => 'boys',
]);

Route::get('/girls', [
    'uses' => 'NameController@girls',
    'as'    => 'girls',
]);

//Route::get('/login', [
//    'uses' => 'NameController@login',
//    'as'    => 'login',
//]);

Route::get('/namedetails/{name_id}', [
    'uses' => 'NameController@namedetails',
    'as'    => 'namedetails',
]);
Route::get('/boys/{alphabate}', 'NameController@boysalphabate');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Insert Name
Route::get('/name/view', 'NameController@nameview');
Route::post('/name/insert', 'NameController@nameinsert');
