<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MovieController@index')->name('movies.index');
Route::get('/movie/{movie}','MovieController@show')->name('movies.show');

Route::get('/actors','ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}','ActorsController@index');
Route::get('/actors/{actor}','ActorsController@show')->name('actors.show');