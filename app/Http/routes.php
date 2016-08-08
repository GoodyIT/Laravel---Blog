<?php

Route::get('/', 'SurveyController@home'); // List all surveys

Route::get('/survey/new', 'SurveyController@new_survey');
Route::get('/survey/{survey}', 'SurveyController@detail_survey');
Route::get('/survey/view/{survey}', 'SurveyController@view_survey');
Route::get('/survey/answers/{survey}', 'SurveyController@view_survey_answers');

Route::get('/survey/{survey}/edit', 'SurveyController@edit');
Route::patch('/survey/{survey}/update', 'SurveyController@update');

Route::post('/survey/view/{survey}/completed', 'SurveyController@complete_survey');
Route::post('/survey/create', 'SurveyController@create');

// Questions related
Route::post('/survey/{survey}/questions', 'QuestionController@store');

Route::get('/question/{question}/edit', 'QuestionController@edit');
Route::patch('/question/{question}/update', 'QuestionController@update');
Route::auth();