@extends('main')

@section('title', '| Homepage')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="">Thank you for visiting</p>
            <p><a class="btn btn-primary btn-lg" href="#">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- end of header .row -->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>SIDE BAR</h2>
        </div>
    </div>

@endsection