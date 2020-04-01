<?php

use Illuminate\Support\Facades\Route;
Route::view('/','home')->name('home');
Route::view('/contact','contact')->name('contact');
Route::view('/abaout','abaout')->name('abaout');
Route::post('/contact', 'MessageController@store')->name('contact.store');

Route::get('/projects', 'ProjectController@index')->name('projects.index');
Route::view('/projects_create','projects.project_create')->name('projects.create')->middleware('auth');
Route::post('/projects','ProjectController@store')->name('project.store');
Route::post('/projects/{project}','ProjectController@update')->name('project.update');
Route::get('/project/{id}', 'ProjectController@show')->name('projects.show');
Route::get('/project/{id}/editar', 'ProjectController@edit')->name('project.edit');
Route::get('/project/{project}/destroy', 'ProjectController@destroy')->name('project.destroy');



Auth::routes();

