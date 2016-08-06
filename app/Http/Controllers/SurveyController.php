<?php

namespace App\Http\Controllers;

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

    public function complete_survey(Request $request, Survey $survey) {
        // return $request->all();
          // TODO: this stores into db as string array, requiring
          // unserializing. Store as actual array.
          // try using json_encode to swallow the $request->all()
        $newAnswer = $survey->answers()->create([
          'answer'=>json_encode($request->all()),
          ]);
        return Redirect::to("/");
      }

  # create a brand new survey
  public function new_survey() 
  {
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

  public function view_survey_answers(Survey $survey) 
  {
    // this returns values nicely
    // encode above saves examples
    // $answers = DB::table('answers')->where('survey_id', $survey->survey_id);
    return view('answers.view', compact(['survey']));
  }
}
