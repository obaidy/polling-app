@extends('layouts.app')


@section('content')
{!! Form::open(['post' => 'CreateController@store']) !!}
<div>Write your question: </div>
{{ Form::text('question') }}


<div>Write some options: </div>
{{ Form::text('option1') }}
{{ Form::text('option2') }}
{{ Form::text('option3') }}
{{ Form::text('option4') }}
{{ Form::text('option5') }}



<br>
{{Form::submit('Submit') }}





{!! Form::close() !!}
@endsection