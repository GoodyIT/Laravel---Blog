<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
  public function home() 
  {
    // $surveys = DB::table('survey')-> get();
    $surveys = Survey::get();
    return view('home', compact('surveys'));
  }

  public function create(Request $request, Survey $survey) {
    $survey->create([
      'title'=>$request->title,
      'description'=>$request->description
      ]);
    return back();
  }

  public function new() {
    return view('survey.new');
  }

  public function detail(Survey $survey) 
  {
    return view('detail', compact('survey'));
   }
}
