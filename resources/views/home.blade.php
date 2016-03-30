@extends('layouts.app')

@section('content')
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class="my_carousel" src="{{ URL::asset('bootstrap/img/slide.jpg') }}"   >
                </div>
                <div class="item">
                    <img class="my_carousel"  src="{{ URL::asset('bootstrap/img/slide1.jpg') }}" alt="...">
                </div>
                <div class="item">
                    <img  class="my_carousel" src="{{ URL::asset('bootstrap/img/slide2.jpg') }}" alt="...">
                </div>
                <div class="item">
                    <img  class="my_carousel" src="{{ URL::asset('bootstrap/img/slide3.jpg') }}" alt="...">
                </div>
                <div class="item">
                    <img  class="my_carousel"  src="{{ URL::asset('bootstrap/img/slides4.jpg') }}" alt="...">
                    <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Dashboard</div>--}}
                    {{--<div class="panel-body">--}}
                        <br><br>

                @role('owner')

                <h3>You are Owner site. You have a privelidge to.</h3>
                <li><a href="{{ url('/admin/post') }}"><h4>Create Post</h4></a></li>
                            <li><a href="{{ url('/admin/post') }}"> <h4> Edite Post </h4> </a></li>
                @endrole
                        @role('admin')
                        <h3>You are Administrator. You have a privelidge to.</h3>
                            <li><a href="{{ url('/admin/user') }}"><h4>Manage Users </h4>   </a></li>
                            <li><a href="{{ url('/admin/post') }}"><h4>Create Post</h4></a></li>
                            <li><a href="{{ url('/admin/post') }}"> <h4> Delete Post </h4></a></li>
                            <li><a href="{{ url('/admin/post') }}"> <h4> Edite Post </h4> </a></li>

                        @endrole
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection
