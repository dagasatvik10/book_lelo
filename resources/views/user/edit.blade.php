@extends('layouts.master')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
            </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('user/edit') }}">
                        {!! csrf_field() !!}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Enter E-Mail Address" disabled />

                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                      <label class="col-md-4 control-label ">Batch</label>
                        <div class="col-md-3">
                                <select class="form-control"  name="batch" value="{{ old('batch') }}" required>
                                <option selected="selected" value="">--Batch--</option>
                                @for($i=\Carbon\Carbon::now()->format('Y');$i>= \Carbon\Carbon::now()->format('Y')-4;$i--)
                                <option value ="{{ $i }}">{{ $i }}-{{ $i+4 }}</option>
                                @endfor
                                </select>
                                 @if ($errors->has('batch'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('batch') }}</strong>                                  
                                    </span>
                                @endif 
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ Auth::user()->contact }}" name="contact" required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Update Profile
                                </button>
                            </div>
                        </div>

                </form>

                </div>
        </div>
    </div>
</div>

@endsection