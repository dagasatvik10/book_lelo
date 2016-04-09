@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['route' => 'book.store','method' => 'POST','files' => true]) !!}
        <div class="form-group">
            {!! Form::label('name','Title') !!}
            {!! Form::text('name',$book->name,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type','Type') !!}
            {!! Form::select('type',['books' => 'Books','notes' => 'Notes'],$book->type,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('author','Author Name') !!}
            {!! Form::text('author',$book->author,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publication','Publication') !!}
            {!! Form::text('publication',$book->publication,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publication_year','Publication Year') !!}
            {!! Form::number('publication_year',$book->publication_year,['class' => 'form-control']) !!}
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
            {!! Form::select('year',['1st' => '1st','2nd' => '2nd','3rd' => '3rd','4th' => '4th'],$book->year,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','Description') !!}
            {!! Form::textarea('description',$book->description,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price','Price') !!}
            {!! Form::number('price',$book->price,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Post',['class' => 'form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
