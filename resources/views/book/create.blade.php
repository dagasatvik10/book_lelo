@extends('layouts.app')

@section('content')
    {!! Form::open(['method' => 'POST','files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name','Title') !!}
        {!! Form::text('name','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Pics') !!}
        @for($i=1;$i<=6;$i++)
            {!! Form::file('pic'.$i) !!}
        @endfor
    </div>
    <div class="form-group">
        {!! Form::label('type','Type') !!}
        {!! Form::select('type',['books' => 'Books','notes' => 'Notes'],'books',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('author','Author Name') !!}
        {!! Form::text('author','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('publication','Publication') !!}
        {!! Form::text('publication','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('publication_year','Publication Year') !!}
        {!! Form::number('publication_year','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('branch','Branch') !!}
        <select name='branch' class='form-control'>
            @foreach(App\Branch::all() as $branch)
            <option value={{ $branch->id }}>{{ $branch->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {!! Form::label('year','Course Year') !!}
        {!! Form::number('year','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('no_of_pages','No. of Pages') !!}
        {!! Form::number('no_of_pages','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::textarea('description','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price','Price') !!}
        {!! Form::number('price','',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Post',['class' => 'form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
