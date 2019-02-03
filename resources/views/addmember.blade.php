@extends('master1')
@section('content')

    <form action="/add" method="post">

        {{csrf_field()}}
        <h1 class="title"> member name</h1> <input type="text" name="name" placeholder="Name"><br>
        <input type="submit" name="submit" value="Add">

    </form>
<br><br><br>

    {!! Form::open(['url' => 'foo/bar']) !!}

    {{Form::text('text','',['class'=>'form-control','placeholder'=>'your name'])}}
<br>
    {{Form::textarea('content','',['cols'=>'120','rows'=>'2','placeholder'=>'content'])}}<br>
    {{Form::password('besho','',['class'=>'form-control','placeholder'=>'yourname'])}}
    {!! Form::close() !!}


@endsection