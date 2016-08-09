<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Survey;
use App\Answer;
use App\Http\Requests;

class AnswerController extends Controller
{
  public function store(Request $request, Survey $survey) 
  {
    $arr = $request->all();
    $arr['user_id'] = Auth::id();
    $arr['survey_id'] = $survey->id;
    $newAnswer = $survey->answers()->create([
      'answer'=>json_encode($request->all()),
      ]);
    return Redirect::to("/");
  }
}
