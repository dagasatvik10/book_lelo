@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
            </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit_profile') }}">
                        {!! csrf_field() !!}


                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}" required>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
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
<!-- 
                    <div class="form-group{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select name="branch_id" class="form-control" id="branch_id" value="{{ old('branch_id') }}" required>
                                <option value="">----SELECT BRANCH----</option>
                                @foreach($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                @endforeach
                                </select>
                                @if ($errors->has('branch_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('college_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">College</label>

                        <div class="col-md-6">
                                <select name="college_id" class="form-control" id="college_id" value="{{ old('college_id') }}" required>
                                <option value="">----SELECT COLLEGE----</option>
                                @foreach($colleges as $college)
                                <option value="{{ $college->id }}">{{ $college->name }}</option>
                                @endforeach
                                </select>
                                @if ($errors->has('college_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('college_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <div class="form-group{{ $errors->has('start_year') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Start year</label>

                            <div class="col-md-6">
                                <select class="form-control"  name="start_year" value="{{ old('start_year') }}" required>
                                <option selected="selected">{{ Auth::user()->start_year }}</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y') }}">{{ \Carbon\Carbon::now()->format('Y') }}</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y')-1 }}">{{ \Carbon\Carbon::now()->format('Y')-1 }}</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y')-2 }}">{{ \Carbon\Carbon::now()->format('Y')-2 }}</option>
                                <option value ="{{ \Carbon\Carbon::now()->format('Y')-3 }}">{{ \Carbon\Carbon::now()->format('Y')-3 }}</option>
                                </select>
                                @if ($errors->has('start_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Course Duration</label>

                            <div class="col-md-6">
                                <select class="form-control" min="1" max="4" name="duration" value="{{ old('duration') }}" required>
                                <option selected="selected">{{ Auth::user()->end_year-Auth::user()->start_year }}</option>
                                <option value="1">1 year</option>
                                <option value="2">2 years</option>
                                <option value="3">3 years</option>
                                <option value="4">4 years</option>
                                </select>
                                @if ($errors->has('duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                            
                            <textarea class="form-control" value="{{ Auth::user()->address }}" name="address" cols="50" rows="10" id="address">{{ Auth::user()->address }}</textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
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
                                    <i class="fa fa-btn fa-user"></i>Join Us!
                                </button>
                            </div>
                        </div>

                </form>
                </div>
        </div>
    </div>
</div>

@endsection