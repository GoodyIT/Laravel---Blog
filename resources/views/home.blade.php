@extends('layout')

@section('content')
<ul class="collection with-header">
    <li class="collection-header">
        <h2 class="flow-text">Recent Surveys
            <span style="float:right;"><a href="/survey/new">Create new</a>
            </span>
        </h2>
    </li>
@forelse ($surveys as $survey)
  <li class="collection-item">
    <div><a href="survey/{{ $survey->id }}">{{ $survey->title}}</a>
        <a href="survey/view/{{ $survey->id }}" class="secondary-content"><i class="material-icons">send</i></a>
        <a href="survey/{{ $survey->id }}" class="secondary-content"><i class="material-icons">edit</i></a>
    </div>
    </li>
@empty
    <p class="flow-text center-align">Nothing to show</p>
@endforelse
</ul>

@stop