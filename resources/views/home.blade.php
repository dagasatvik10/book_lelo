@extends('layouts.app')

{{--@section('nav-bar')--}}
{{--<li><a href = "{{ url('edit_profile') }}">Edit Profile</a></li>--}}
{{--@endsection--}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($books as $book)
                        <li>
                            {{ $book->name }} &nbsp
                            <a class="btn btn-primary" href={{ route('show',['id' => $book->id]) }}>
                               show
                            </a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
