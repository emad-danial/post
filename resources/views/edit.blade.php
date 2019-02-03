@extends('master1')
@section('content')

<h1>edit hir</h1>

    <form action="/update/{{$id->id}}" method="post">

        {{csrf_field()}}
        <h1 class="title"> member name </h1> <input type="text" name="member_name" placeholder="Name" value="{{$id->member_name}}" ><br>
        <input type="submit" name="submit" value="Add">

    </form>


@endsection