@extends('layouts.master')

@section('content')
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style type="text/css" media="screen">
	.threads-holder{
		height: 800px;
		padding:10px 0px 10px 0px;
		font-family: sans-serif;
	}
	.conversation-holder{
		background-color: white;
		height: 800px;
	}
	.conversation{
		background-color: blue;
		height:550px;
	}
	.message{
		background-color: yellow;
		height: 200px;
	}
	.col-lg-4 {
    width: 18.333%;
}
.col-lg-8 {
    width: 80.667%;
}
	.threads{
		background-color: #f2f2f2;
		border-bottom:1px solid black;
	}
</style>
	<link rel="stylesheet/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

<div class="row">

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 threads-holder">
	<?php $i=1; ?>
	
        @foreach($threads as $thread)
        <div class="col-lg-12 threads">
        <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : '';
        ?>

        <a href="{{ url('messages/'.$thread->id) }}" target="qwerty" style="text-decoration:none;" id="{{ $thread->id }}">
        <div class="media alert {!!$class!!}">
        <h4>{{ $t[$i] }}</h4>
        <?php
        $i++;
        ?>
            <p>{!! $thread->latestMessage->body !!}</p>
            {{-- <p><small><strong>Creator:</strong> {!! $thread->creator()->name !!}</small></p>
            <p><small><strong>Participants:</strong> {!! $thread->participantsString(Auth::id()) !!}</small></p> --}}
        </div>
        </a>
        </div>
        @endforeach
</div>

<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 conversation-holder">

    <iframe id="conversation3" name="qwerty" style="width:100%;height:100%;" frameborder="0" scrolling="yes" src="{{ url('/messages/1') }}">

    </iframe>

</div>

</div>
@stop