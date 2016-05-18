@extends('layouts.master')

@section('content')

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 margin-auto">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading headingClass" style="font-size:14px; font-weight:bold;">Please enter your current Password to confirm Deletion of Profile</div>
                <div class="panel-body panelBodyClass">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/delete') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label labelClass">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxClass" name="password" placeholder="Current Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
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
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                @if(!empty($message))
                                <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-trash-o"></i> Delete Profile
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
    </div>
@endsection