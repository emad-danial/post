@extends('master1')
@section('content')


    <h1 class="title"> About Page 2</h1>

    @foreach($cities as $city)

        <h1>{{$city}}</h1>
    @endforeach


@endsection