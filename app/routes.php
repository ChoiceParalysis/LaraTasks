<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);

Route::post('tasks', 'TasksController@store');

Route::get('{username}/tasks/', 'UsersController@index');

Route::get('{username}/tasks/{id}', ['as' => 'user.task.show', 'uses' => 'UsersController@show']);
