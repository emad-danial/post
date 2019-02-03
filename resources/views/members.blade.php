@extends('master1')
@section('content')

    <table class="table">

        <tr>
            <th>Member Name</th>

        </tr>

    @foreach($members as $member)
        <tr>
            <td> <div class="title" >{{$member->member_name}}</div></td>
            <td> <a href="delete/{{$member->id}}">Delete </a></td>
            <td> <a href="edit/{{$member->id}}">Edit </a></td>
        </tr>
    @endforeach

    </table>
@endsection