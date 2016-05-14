{{-- @extends('layouts.messagelayout') --}}

{{-- @section('content') --}}
    <div class="col-md-6">
    @if($threads->count() > 0)
        <h1>{!! $thread->subject !!}</h1>

        @foreach($thread->messages as $message)
        @if($message->user->id===Auth::user()->id)
            <div class="media" style="text-align:left;">
                <a style="text-align:right;" href="#">
                    {{-- <img src="//www.gravatar.com/avatar/{!! md5($message->user->email) !!}?s=64" alt="{!! $message->user->name !!}" class="img-circle"> --}}
                    {{ $message->user->name }}
                </a>
                <div class="media-body">
                    <p>{!! $message->body !!}</p>
                    <div class="text-muted"><small>Posted {!! $message->created_at->diffForHumans() !!}</small></div>
                </div>
            </div>
        @else
        <div class="media" style="text-align:right;">
                <a style="text-align:right;" href="#">
                    {{-- <img src="//www.gravatar.com/avatar/{!! md5($message->user->email) !!}?s=64" alt="{!! $message->user->name !!}" class="img-circle"> --}}
                {{ $message->user->name }}
                </a>
                <div class="media-body">
                    <p>{!! $message->body !!}</p>
                    <div class="text-muted"><small>Posted {!! $message->created_at->diffForHumans() !!}</small></div>
                </div>
            </div>
        @endif
        @endforeach
        @if((Auth::user()->id)===$user)
        <h2>Send Message</h2>
        @else
        <h2>Reply</h2>
        @endif
        {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
        <!-- Message Form Input -->
        <div class="form-group">
            {!! Form::textarea('message', null, ['class' => 'form-control','style' => 'width:100%;height:100px;']) !!}
        </div>

        @if($users->count() > 0)
            <input type="hidden" name="recipients[]" value="{!! $users !!}"> 
        @endif

        <!-- Submit Form Input -->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
        @else
        <div align="center">No Messages</div>
        @endif
    </div>
{{-- @stop --}}