@extends('templet.master')
@section('contentt')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('img/contact-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Add Post Hir</h1>
                        <span class="subheading">Have A New Post</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h1>Want to Add Post !!</h1>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->

                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->





                <form action="/add" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Title</label>
                            <input type="text" class="form-control" placeholder="title" name="title" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Content</label>
                            <textarea placeholder="content" name="contentpost" id="article-ckeditor" required data-validation-required-message="Please enter your name.">

                            </textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Writer</label>
                            <input type="text" class="form-control" placeholder="writer" name="writer_name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <h3>Post Image</h3>
                            <label>Post Image</label>
                            <input type="file" class="form-control" placeholder="image" name="image_name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>


@endsection