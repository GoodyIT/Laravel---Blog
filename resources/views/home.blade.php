@extends('layout')

@section('content')
<ul class="collection with-header">
    <li class="collection-header">
        <h2 class="flow-text">Recent Surveys
            <span style="float:right;"><a href="/survey/new">Create new</a>
            </span>
        </h2>
    </li>
<<<<<<< HEAD
    @forelse ($surveys as $survey)
      <li class="collection-item">
        <div><a href="survey/{{ $survey->id }}">{{ $survey->title}}</a>
            <a href="survey/view/{{ $survey->id }}" title="Take Survey" class="secondary-content"><i class="material-icons">send</i></a>
            <a href="survey/{{ $survey->id }}" title="Edit Survey" class="secondary-content"><i class="material-icons">edit</i></a>
            <a href="survey/answers/{{ $survey->id }}" title="View Survey Answers" class="secondary-content"><i class="material-icons">textsms</i></a>
        </div>
        </li>
    @empty
        <p class="flow-text center-align">Nothing to show</p>
    @endforelse
    </ul>
=======
@forelse ($surveys as $survey)
  <li class="collection-item">
    <div><a href="survey/{{ $survey->id }}">{{ $survey->title}}</a>
        <a href="survey/view/{{ $survey->id }}" title="Take Survey" class="secondary-content"><i class="material-icons">send</i></a>
        <a href="survey/{{ $survey->id }}" title="Edit Survey" class="secondary-content"><i class="material-icons">edit</i></a>
        <a href="survey/answers/{{ $survey->id }}" title="View Survey Answers" class="secondary-content"><i class="material-icons">textsms</i></a>
    </div>
    </li>
@empty
    <p class="flow-text center-align">Nothing to show</p>
@endforelse
</ul>
>>>>>>> a0d1bdbc07412008758393143008f529f206d0e5

@stop