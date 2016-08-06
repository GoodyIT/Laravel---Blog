<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SurveyController extends Controller
{
  public function home() 
  {
    // $surveys = DB::table('survey')-> get();
    $surveys = Survey::get();
    return view('home', compact('surveys'));
  }

  public function create(Request $request, Survey $survey) {
    $surveyItem = $survey->create([
      'title'=>$request->title,
      'description'=>$request->description
      ]);
    return Redirect::to("/survey/{$surveyItem->id}");
  }

  # create a brand new survey
  public function new_survey() {
    return view('survey.new');
  }

  # retrieve detail page and add questions here
  public function detail_survey(Survey $survey) 
  {
    #TODO: store form submissions are array not array string
    $survey->option_name = unserialize($survey->option_name);
    return view('survey.detail', compact('survey'));
  }

  # view survey publicly and complete survey
  public function view_survey(Survey $survey) 
  { 
    $survey->option_name = unserialize($survey->option_name);
    return view('survey.view', compact('survey'));
  }
}
