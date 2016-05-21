{{-- @extends('layouts.messagelayout') --}}
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Overlock">

@section('content')
    <style type="text/css" media="screen">     
    .submit-button{
        background: #03085D;
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        color: deepskyblue;
    }
    .submit-button:hover{
        color:white;
    }    
    .textboxClass{
        border-color: seagreen;
        border-radius: 5px;
        color:seagreen;
        width:80%;

    }
    .textboxClass:focus{
        box-shadow: 2px 0px 4px seagreen,-2px 0px 4px seagreen,0px 2px 4px seagreen,0px -2px 4px seagreen   ;
    }    
    </style>
    <div class="col-md-6">
    @if($threads->count() > 0)
        <h1>{!! $thread->subject !!}</h1>

        @foreach($thread->messages as $message)
         @if($message->user['id']===Auth::user()->id)
            <div class="media" style="text-align:left; font-family:'Overlock', serif; border:2px solid deepskyblue; background-color:#B6D9FA; padding-left:15px; width:70%; border-radius:4px; ">
                <a style="font-size:20px; font-weight:bold; color:dodgerblue; text-decoration:none; cursor:default;" href="#">
                    {{ $message->user->name }}
                </a>
                <div class="media-body">
                    <p style="font-size:17px; color:black;">{!! $message->body !!}</p>
                    <div class="text-muted"><small>Posted {!! $message->created_at->diffForHumans() !!}</small></div>
                </div>
            </div>
        @else
        <div class="media" style="text-align:right; font-family:'Overlock', serif; border:2px solid seagreen; background-color:lightgreen; padding-right:15px; border-radius:4px; margin-left:30%;">
                <a style="font-size:20px; font-weight:bold; color:seagreen; text-decoration:none; cursor:default;" href="#">
                {{ $message->user['name'] }}
                </a>
                <div class="media-body">
                    <p style="font-size:17px; color:black;">{!! $message->body !!}</p>
                    <div class="text-muted"><small>Posted {!! $message->created_at->diffForHumans() !!}</small></div>
                </div>
            </div>
        @endif
        @endforeach
        @if((Auth::user()->id)===$user)
        <h3 style="color:seagreen">Reply</h3>
        @else
        <h2>Reply</h2>
        @endif
        {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
        <!-- Message Form Input -->
        <div class="form-group">
            {!! Form::textarea('message', null, ['class' => 'form-control textboxClass','style' => 'width:100%;height:100px; resize:none;']) !!}
        </div>

        @if($users->count() > 0)
            <input type="hidden" name="recipients[]" value="{!! $users !!}"> 
        @endif

        <!-- Submit Form Input -->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn submit-button form-control']) !!}
        </div>
        {!! Form::close() !!}
        @endif
    </div>
@stop