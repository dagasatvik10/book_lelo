@extends('layouts.master')

@section('content')
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
        <div class="page-header headingClass col-md-12">
        <h3>Post Ad for Free!</h3>
        <br>
         @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
        <li style="list-style:none; color:red; font-size:16px; font-weight:none;">{!! $error !!}</li>
        @endforeach
        </ul>
        @endif
        </div>
        <div class="panelBodyClass col-md-12"  style="margin-top:-20px;"> 
            {!! Form::open(['action' => 'BookController@store', 'method' => 'POST','files' => true]) !!}
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('name','Title',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::text('name','',['class' => 'form-control textboxClass', 'style' => '']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('type','Type', ['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::select('type',['books' => 'Books','notes' => 'Notes'],'books',['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                {!! Form::label('name','Pics', ['class' => 'labelClass']) !!}
                </div>
                <div class="col-md-10">
                @for($i=1;$i<=6;$i++)
                    {!! Form::file('pic'.$i) !!}
                @endfor
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('author','Author Name',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::text('author','',['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('publication','Publication',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::text('publication','',['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('publication_year','Publication Year',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::text('publication_year','',['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('branch','Branch',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">
                    <select name='branch' class='form-control textboxClass'>
                        @foreach(App\Branch::all() as $branch)
                        <option value={{ $branch->id }}>{{ $branch->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('year','Course Year',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::select('year',['1','2','3','4'],['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('no_of_pages','No. of Pages',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::number('no_of_pages','',['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('description','Description',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::textarea('description','',['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4">{!! Form::label('price','Price',['class' => 'labelClass']) !!}</div>
                <div class="col-md-10">{!! Form::number('price','',['class' => 'form-control textboxClass']) !!}</div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-2"><br>{!! Form::submit('Post Ad!',['class' => 'form-control textboxClass submit-button']) !!}<br></div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
