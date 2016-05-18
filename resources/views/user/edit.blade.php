@extends('layouts.master')


@section('content')

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2" style="margin-top:20px; margin-bottom: 18px;">
        <div class="col-md-10 col-md-offset-1">
                <div class="headingClass"><h3>Edit Profile</h3></div>
                <div class="panelBodyClass" style="padding-top: 10px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('user/edit') }}">
                        {!! csrf_field() !!}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" name="name" value="{{ Auth::user()->name }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxClass" name="email" value="{{ Auth::user()->email }}" placeholder="Enter E-Mail Address" disabled />

                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                      <label class="col-md-4 control-label labelClass ">Batch</label>
                        <div class="col-md-3">
                                <select class="form-control textboxClass"  name="batch" value="{{ old('batch') }}" required>
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
                            <label class="col-md-4 control-label labelClass">Contact No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" value="{{ Auth::user()->contact }}" name="contact" required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-user"></i> Update Profile
                                </button>
                            </div>
                        </div>

                </form>

        </div>
    </div>
</div>

@endsection