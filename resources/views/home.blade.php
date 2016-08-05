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
  <a href="survey/{{ $survey->id }}" class="collection-item">{{ $survey->title }}</a>
@empty
    <p class="flow-text center-align">Nothing to show</p>
@endforelse
</ul>

@stop