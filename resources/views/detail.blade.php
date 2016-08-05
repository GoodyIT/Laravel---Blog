@extends('layout')

@section('content')
  <div class="card">
      <div class="card-content">
      <span class="card-title"> {{ $survey->title }}</span>
      <p>
        About Survey: {{ $survey->description }}
      </p>

      <div class="divider" style="margin:20px 0px;"></div>
      <p class="flow-text">Related Questions</p>
      <ul class="collapsible popout" data-collapsible="accordion">
          @foreach ($survey->questions as $question)
        <li style="box-shadow:none;">
          <div class="collapsible-header">{{ $question->title }}</div>
          <div class="collapsible-body">
            <div style="margin:5px; padding:10px;">
              Content will be here to update
              <br/>
              <a href="">Update</a>
            </div>
          </div>
        </li>
          @endforeach
      </ul>
      <div class="divider"></div>
      <h2 class="flow-text">Add Question</h2>
      <div class="divider"></div>

      <form method="POST" action="{{ $survey->id }}/questions" id="boolean">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="input-field col s12">
            <select class="browser-default" name="question_type" id="question_type">
              <option value="" disabled selected>Choose your option</option>
              <option value="text">Text</option>
              <option value="checkbox">Checkbox</option>
              <option value="radio">Radio Buttons</option>
            </select>
          </div>        
          <div class="input-field col s12">
            <input name="title" id="title" type="text">
            <label for="title">Question</label>
          </div>          
          <div class="input-field col s12">
            <input name="option_name" id="option_name" type="text">
            <label for="option_name">Options</label>
          </div>
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light">Submit</button>
          </div>
        </div>
        </form>
    </div>
  </div>
@stop