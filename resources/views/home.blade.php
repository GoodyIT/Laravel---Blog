@extends('layout')

@section('content')
            <ul class="collection with-header">
                <li class="collection-header">
                    <h2 class="flow-text">Recent Surveys
                        <span style="float:right;"><a href="#">Create new</a>
                        </span>
                    </h2>
                </li>
            @foreach ($surveys as $survey)
              <a href="survey/{{ $survey->id }}" class="collection-item">{{ $survey->title }}</a>
            @endforeach
            </ul>

@stop