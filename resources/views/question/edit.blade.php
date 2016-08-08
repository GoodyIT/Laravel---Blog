@extends('layout')

@section('content')
<form method="POST" action="/question/{{ $question->id }}/update">
  {{ method_field('PATCH') }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <h2 class="flow-text">Edit Question Title</h2>
   <div class="row">
    <div class="input-field col s12">
      <textarea id="title" name="title" class="materialize-textarea">{{ $question->title }}</textarea>
      <label for="title">Question</label>
    </div>
    <div class="input-field col s12">
    <button class="btn waves-effect waves-light">Update</button>
    </div>
  </div>
</form>
@stop