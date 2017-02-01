@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:50px;">
        <div class="col-md-8 col-md-offset-2">
            <div class="written-data" style="text-align: center; font-size: 20px;">Register free! or <a href="{{url('/auth/google')}}"><img src="{{asset('/images/web/1x/btn_google_signin_dark_pressed_web.png')}}" class="image-logo" alt=""></a>
</div>
            <br>
            <div class="panel panel-default">
                <div class="headingClass">Register</div>
                <div class="panel-body panelBodyClass" style="padding-top: 40px">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" name="name" value="{{ old('name') }}" placeholder="Should Have Atleast 2 characters">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxClass" name="email" value="{{ old('email') }}" placeholder="Enter E-Mail Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxClass" name="password" placeholder="Should contain atleast 6 characters" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxClass" name="password_confirmation" placeholder="Re-Enter Password" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="form-group{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Branch</label>

                            <div class="col-md-6">
                                <select name="branch_id" class="form-control textboxClass" id="branch_id" value="{{ old('branch_id') }}" required>
                                <option value="">-- Branch --</option>

                                @foreach(\App\Branch::all() as $branch)
                                @if(($branch->id!=50)&&($branch->id!=60))
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                @endif
                                @endforeach
                                </select>
                                @if ($errors->has('branch_id'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('branch_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('college_id') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label labelClass">College</label>
                        <div class="col-md-6">
                                <select name="college_id" class="form-control textboxClass" id="college_id" value="{{ old('college_id') }}" required>
                                <option value="">-- College --</option>
                                @foreach(\App\College::all() as $college)
                                <option value="{{ $college->id }}">{{ $college->name }}</option>
                                @endforeach
                                </select>
                                @if ($errors->has('college_id'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('college_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                      <label class="col-md-4 control-label labelClass">Select Batch</label>
                        <div class="col-md-3">
                                <select class="form-control textboxClass"  name="batch" value="{{ old('batch') }}" required>
                                <option selected="selected">-- Batch --</option>
                                @for($i=\Carbon\Carbon::now()->format('Y');$i>= \Carbon\Carbon::now()->format('Y')-4;$i--)
                                <option value ="{{ $i }}">{{ $i }}-{{ $i+4 }}</option>
                                @endfor
                                </select>
                                @if ($errors->has('batch'))
                                    <span class="help-block">
                                    <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span>{{ $errors->first('batch') }}</strong>                                    </span>
                                @endif
                        </div>
                    </div>

                            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Contact No<font color="red">*</font></label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" placeholder="Enter your contact number" name="contact" required>
                                <p class="col-md-offset-1"style="color:red; font-size:13px;">Contact No. is not a compulsory field although it is recommended.</p>
                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-user"></i> Join Us!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
