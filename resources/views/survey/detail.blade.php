@extends('layout')

@section('content')
  <div class="card">
      <div class="card-content">
      <span class="card-title"> {{ $survey->title }}</span>
      <p>
        About Survey: {{ $survey->description }}
      </p>

      <div class="divider" style="margin:20px 0px;"></div>
      <p class="flow-text center-align">Related Questions</p>
      <ul class="collapsible popout" data-collapsible="accordion">
          @forelse ($survey->questions as $question)
          <li style="box-shadow:none;">
            <div class="collapsible-header">{{ $question->title }}</div>
            <div class="collapsible-body">
              <div style="margin:5px; padding:10px;">
                  {!! Form::open() !!}
                    @if($question->question_type === 'text')
                      {{ Form::text('title')}}
                    @elseif($question->question_type === 'textarea')
                    <div class="input-field col s12">
                      <textarea id="textarea1" class="materialize-textarea" name="user_answer"></textarea>
                      <label for="textarea1">Textarea</label>
                    </div>
                    @elseif($question->question_type === 'radio')
                      @foreach($question->option_name as $key=>$value)
                        <p style="margin:0px; padding:0px;">
                          <input name="{{ $value }}"" type="radio" id="{{ $key }}" />
                          <label for="{{ $key }}">{{ $value }}</label>
                        </p>
                      @endforeach
                    @elseif($question->question_type === 'checkbox')
                      @foreach($question->option_name as $key=>$value)
                      <p style="margin:0px; padding:0px;">
                        <input type="checkbox" id="something{{ $key }}" name="{{ $value }}" />
                        <label for="something{{$key}}">{{ $value }}</label>
                      </p>
                      @endforeach
                    @endif 
                  {!! Form::close() !!}
              </div>
            </div>
          </li>
          @empty
            <span class='center-align'>Nothing to show. Add questions below.</span>
          @endforelse
      </ul>
      <h2 class="flow-text">Add Question</h2>
      <form method="POST" action="{{ $survey->id }}/questions" id="boolean">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="input-field col s12">
            <select class="browser-default" name="question_type" id="question_type">
              <option value="" disabled selected>Choose your option</option>
              <option value="text">Text</option>
              <option value="textarea">Textarea</option>
              <option value="checkbox">Checkbox</option>
              <option value="radio">Radio Buttons</option>
            </select>
          </div>                
          <div class="input-field col s12">
            <input name="title" id="title" type="text">
            <label for="title">Question</label>
          </div>  
          <!-- this part will be chewed by script in init.js -->
          <span class="form-g"></span>

          <div class="input-field col s12">
          <button class="btn waves-effect waves-light">Submit</button>
          </div>
        </div>
        </form>
    </div>
  </div>
@stop