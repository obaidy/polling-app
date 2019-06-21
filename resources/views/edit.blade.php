@extends('layouts.app')


@section('content')

<div class="container">
    <form method="post" action="{{ action('CreateController@update', $poll->id) }}">
        @csrf
        <div class="form-group">
            <label>Question</label>
            <input type="text" name="question" class="form-control" value="{{ $poll->question }}">
        </div>

        @foreach($options as $option)
        <div class="form-group">
            <label>Question</label>
            <input type="text" name="option[]" class="form-control" value="{{ $option->name }}">
        </div>
        @endforeach
        <button type="submit">Submit</button>
    </form>
</div>



@endsection