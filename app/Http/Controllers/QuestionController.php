<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Question;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Http\Requests;

class QuestionController extends Controller
{
    public function store(Request $request, Survey $survey) {
      $arr = $request->all();
      $arr['user_id'] = Auth::id();

      $survey->questions()->create($arr);
      return back();
    }

    public function edit(Question $question) {
      return view('questions.update', compact('question'));
    }

    public function update(Request $request, Question $question) {
      $question->update($request->all());
      return back();
    }

}
