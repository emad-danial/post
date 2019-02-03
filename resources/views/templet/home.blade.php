@extends('templet.master')
@section('contentt')

    <!-- Page Header -->
<header class="masthead"  style="background-image: url('{{asset('img/home-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Emad Danial</h1>
                    <span class="subheading">A Blog Theme by Emad Danial </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">

            @foreach($posts as $post)

                <div class="row">
                   <div class="col-lg-7 ">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                {{$post->title}}
                            </h2>
                            <h3 class="post-subtitle">
                                {!! $post->content !!}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">{{$post->writer_name}}</a>
                            on {{$post->created_at}}</p>

                        <a class="btn btn-danger" href="delete/{{$post->id}}">Delete </a>
                        <a class="btn btn-primary" href="edit/{{$post->id}}">Edit </a>

                    </div>
                   </div>
                    <div class="col-lg-5" >

                        <div class="img-rounded">
                            <img src="img/{{$post->image_name}}" alt="emad" width="300px" height="300px" style="border-radius: 20px">
                        </div>

                    </div>
                </div>
                <br>
                <hr style="border-top: 3px solid #bbb;">
                <br>
            @endforeach

            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

@endsection
