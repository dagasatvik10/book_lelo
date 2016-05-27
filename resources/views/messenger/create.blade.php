@extends('layouts.master')

@section('content')
<div class="fuc">
    
<h1>Send message</h1>
{!! Form::open(['route' => 'messages.store']) !!}
<div class="col-md-6">
    <!-- Subject Form Input -->
    <div class="form-group">
        {!! Form::label('subject', 'Subject', ['class' => 'labelClass control-label']) !!}
        {!! Form::text('subject', null, ['class' => 'textboxClass form-control']) !!}
    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        {!! Form::label('message', 'Message', ['class' => 'labelClass control-label']) !!}
        {!! Form::textarea('message', null, ['class' => 'textboxClass form-control']) !!}
    </div>
     <input type="hidden" name="recipients[]" value="{!! $users !!}">
    <!-- Submit Form Input -->
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn submit-button form-control']) !!}
    </div>
</div>

</div>
{!! Form::close() !!}
@stop