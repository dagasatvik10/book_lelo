@extends('layouts.master')
<style>
    .textArea{
        resize: vertical;
    }
</style>

@section('content')
    <div class="row margin-auto col-lg-10 col-lg-offset-1">
        <h4 class="written-data" style="text-align: center;">Update your book so it becomes easy to sell!</h4>
        <div class=" headingClass col-md-12">
            <h3>Edit your Book!</h3>
        </div>
        <div class="panelBodyClass col-md-12">
        {!! Form::open(['route' => ['book.update',$book->id],'method' => 'PUT']) !!}
            <br><br>
        <div class="form-group">
            {!! Form::label('name','Title',['class' => 'labelClass']) !!}
            {!! Form::text('name',$book->name,['class' => 'form-control textboxClass']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type','Type',['class' => 'labelClass']) !!}
            {!! Form::select('type',['books' => 'Books','notes' => 'Notes'],$book->type,['class' => 'form-control textboxClass']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('author','Author Name',['class' => 'labelClass']) !!}
            {!! Form::text('author',$book->author,['class' => 'form-control textboxClass']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publication','Publication',['class' => 'labelClass']) !!}
            {!! Form::text('publication',$book->publication,['class' => 'form-control textboxClass']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publication_year','Publication Year',['class' => 'labelClass']) !!}
            {!! Form::number('publication_year',$book->publication_year,['class' => 'form-control textboxClass']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('branch','Branch',['class' => 'labelClass']) !!}
            <select name='branch' class='form-control textboxClass'>
                @foreach(App\Branch::all() as $branch)
                    <option value={{ $branch->id }}>{{ $branch->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {!! Form::label('year','Course Year',['class' => 'labelClass']) !!}
            {!! Form::select('year',['1' => '1st','2' => '2nd','3' => '3rd','4' => '4th'],$book->year,['class' => 'form-control textboxClass']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','Description',['class' => 'labelClass']) !!}
            {!! Form::textarea('description',$book->description,['class' => 'form-control textboxClass textArea']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price','Price',['class' => 'labelClass']) !!}
            {!! Form::number('price',$book->price,['class' => 'form-control textboxClass']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update',['class' => 'form-control btn submit-button']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
@stop
