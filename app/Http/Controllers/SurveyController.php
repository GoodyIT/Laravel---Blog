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

  public function detail(Survey $survey) 
  {
    return view('detail', compact('survey'));
   }
}
