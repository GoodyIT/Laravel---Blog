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
          @forelse ($survey->questions as $question)
            <p class="flow-text">{{ $question->title }}</p>
              {!! Form::open(array('action'=>array('SurveyController@complete_survey', $survey->id))) !!}
                @if($question->question_type === 'text')
                  {{ Form::text('title')}}
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
              {{ Form::submit('I am done!', array('class'=>'btn waves-effect waves-light')) }}
              {!! Form::close() !!}
          @empty
            <span class='flow-text center-align'>Nothing to show</span>
          @endforelse
    </div>
  </div>
@stop