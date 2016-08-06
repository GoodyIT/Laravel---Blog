<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Question;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Http\Requests;

class QuestionsController extends Controller
{
    public function store(Request $request, Survey $survey) {
      // return request()->all();
      // $survey->questions()->save(
      //   new Question(['body'=>$request->body])
      // );

      // return $request->all();

      $survey->questions()->create([
        'question_type' => $request->question_type,
        'title'=>$request->title,
        // 'option_name'=> $request->option_name,
        // TODO: this stores into db as string array, requiring
        // unserializing. Store as actual array.
        'option_name'=>Input::get('option_name'),
        ]);
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
