<?php

route::get('/',function()
{
  return 'HOME';
});

Route::get('/users/create', 'UserController@create');
Route::post('/users', 'UserController@dataBase');
Route::get('/test', 'UserController@index');
