@extends('layout')

@section('content')
  <div class="card">
      <div class="card-content">
      <span class="card-title"> {{ $survey->title }}</span>
      <p>
        {{ $survey->help }}
      </p>
      <ul>
      @foreach ($survey->questions as $question)
        <li>{{ $question->body }}</li>
      @endforeach
      </ul>
      <div class="divider"></div>
      <h2 class="flow-text">Add Question</h2>
      <form action="#">
        <div class="row">
          <div class="col s12 m4">
            <p>
              <input name="myselect" type="radio" id="text" />
              <label for="text">Text</label>
            </p>
          </div>          
          <div class="col s12 m4">
            <p>
              <input name="myselect" type="radio" id="choice" />
              <label for="choice">Single Choice</label>
            </p>
          </div>          
          <div class="col s12 m4">
            <p>
              <input name="myselect" type="radio" id="multianswer" />
              <label for="multianswer">Multiple Choice</label>
            </p>
          </div>
        </div>
      </form>
      <div class="divider"></div>
      <form method="POST" action="{{ $survey->id }}/questions" id="boolean">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
         <div class="input-field col s12">
            <input placeholder="Placeholder" name="title" id="title" type="text" class="validate">
            <label for="title">Title</label>
          </div>       
          <div class="input-field col s12">
            <input placeholder="True" name="true" id="true" type="text" class="validate">
            <label for="true">True</label>
          </div>        
          <div class="input-field col s12">
            <input placeholder="False" name="false" id="false" type="text" class="validate">
            <label for="false">False</label>
          </div>
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light">Submit</button>
          </div>
        </div>
        </form>
    </div>
  </div>
@stop