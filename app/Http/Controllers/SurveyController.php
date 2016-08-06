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

  public function new() {
    return view('survey.new');
  }

  public function detail(Survey $survey) 
  {
    return view('detail', compact('survey'));
   }
}
