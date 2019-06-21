@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    You are logged in!

                    @foreach($polls as $poll)
                    <div>{{ $poll->question }}
                    {!! Form::open(['post' => 'VoteController@index']) !!}
                        @foreach($options as $option)
                            @if($poll->id == $option->poll_id)
                                 <?= Form::submit($option->name) ?>
                            @endif
                        @endforeach
                        {!! Form::close() !!}
                        
                    </div>
                    <br>
                    @endforeach

                    <a href="{{ action('CreateController@index') }}">Create new poll</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
