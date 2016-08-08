<?php

namespace App\Http\Controllers;
use Auth;
use App\Survey;
use App\Answer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SurveyController extends Controller
{
  public function home() 
  {
    $surveys = Survey::get();
    return view('home', compact('surveys'));
  }

  # Show page to create new survey
  public function new_survey() 
  {
    return view('survey.new');
  }

  public function create(Request $request, Survey $survey) 
  {
    $arr = $request->all();
    // $request->all()['user_id'] = Auth::id();
    $arr['user_id'] = Auth::id();
    $surveyItem = $survey->create($arr);
    return Redirect::to("/survey/{$surveyItem->id}");
  }

  # retrieve detail page and add questions here
  public function detail_survey(Survey $survey) 
  {
    $survey->load('questions.user');
    return view('survey.detail', compact('survey'));
  }
  

  public function edit(Survey $survey) 
  {
    return view('survey.edit', compact('survey'));
  }

  # edit survey
  public function update(Request $request, Survey $survey) 
  {
    $survey->update($request->only(['title', 'description']));
    return redirect()->action('SurveyController@detail_survey', [$survey->id]);
  }

  // public function view_survey_answers(Survey $survey) 
  // {
  //   return view('answers.view', compact(['survey']));
  // }
  
  # view survey publicly and complete survey
  public function view_survey(Survey $survey) 
  { 
    $survey->option_name = unserialize($survey->option_name);
    return view('survey.view', compact('survey'));
  }
  
  public function complete_survey(Request $request, Survey $survey) {
    $newAnswer = $survey->answers()->create([
      'answer'=>json_encode($request->all()),
      ]);
    return Redirect::to("/");
  }




}
