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

Route::get('/', 'SurveyController@home');
Route::get('/survey/new', 'SurveyController@new');
Route::get('/survey/{survey}', 'SurveyController@detail');

Route::post('/survey/create', 'SurveyController@create');

Route::post('/survey/{survey}/questions', 'QuestionsController@store');
Route::get('/questions/{question}/edit', 'QuestionsController@edit');

Route::patch('/questions/{question}', 'QuestionsController@update');