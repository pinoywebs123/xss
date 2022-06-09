<?php


Route::get('/','CategoryController@index')->name('categories');
Route::post('/','CategoryController@store')->name('categories_store');
Route::get('/delete-category/{id}','CategoryController@delete')->name('categories_delete');

Route::post('/todo','TodoController@store')->name('todo_store');
Route::get('/display-todo/{id}','TodoController@display')->name('todo_display');
Route::get('/delete-todo/{id}','TodoController@delete')->name('todo_delete');
Route::post('/update-todos-status','TodoController@update')->name('todo_update_status');