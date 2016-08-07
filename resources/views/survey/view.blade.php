@extends('layout')

@section('content')
  <div class="card">
      <div class="card-content">
      <span class="card-title"> Start taking Survey</span>
      <p>
        Survey theme: {{ $survey->title }} <br/>
        About Survey: {{ $survey->description }}
      </p>

      <div class="divider" style="margin:20px 0px;"></div>
          {!! Form::open(array('action'=>array('SurveyController@complete_survey', $survey->id))) !!}
          @forelse ($survey->questions as $question)
            <p class="flow-text">{{ $question->title }}</p>
                @if($question->question_type === 'text')
                  <div class="input-field col s12">
                    <input id="answer" type="text" name="user_answer">
                    <label for="answer">Answer</label>
                  </div>
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

              <div class="divider" style="margin:10px 10px;"></div>
          @empty
            <span class='flow-text center-align'>Nothing to show</span>
          @endforelse
        {{ Form::submit('Submit Survey', array('class'=>'btn waves-effect waves-light')) }}
        {!! Form::close() !!}
    </div>
  </div>
@stop