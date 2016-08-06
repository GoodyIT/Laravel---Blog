<?php

Route::get('/', 'SurveyController@home');

Route::get('/survey/new', 'SurveyController@new_survey');
Route::get('/survey/{survey}', 'SurveyController@detail_survey');
Route::get('/survey/view/{survey}', 'SurveyController@view_survey');
Route::get('/survey/answers/{survey}', 'SurveyController@view_survey_answers');

Route::post('/survey/view/{survey}/completed', 'SurveyController@complete_survey');
Route::post('/survey/create', 'SurveyController@create');
Route::post('/survey/{survey}/questions', 'QuestionsController@store');

Route::get('/questions/{question}/edit', 'QuestionsController@edit');
Route::patch('/questions/{question}', 'QuestionsController@update');