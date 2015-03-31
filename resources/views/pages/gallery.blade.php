@extends('app')

@section('content')

<h1>Gallery</h1>

	    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail " href="{{ asset('img/photo-1.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo one" >
                    <img class="img-responsive" src="{{ asset('img/photo-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-2.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo two">
                    <img class="img-responsive" src="{{ asset('img/photo-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-3.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo three">
                    <img class="img-responsive" src="{{ asset('img/photo-3.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-4.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo four">
                    <img class="img-responsive" src="{{ asset('img/photo-4.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-5.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo five">
                    <img class="img-responsive" src="{{ asset('img/photo-5.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-6.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo six">
                    <img class="img-responsive" src="{{ asset('img/photo-6.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-7.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo seven">
                    <img class="img-responsive" src="{{ asset('img/photo-7.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-8.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo eight">
                    <img class="img-responsive" src="{{ asset('img/photo-8.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-9.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo nine">
                    <img class="img-responsive" src="{{ asset('img/photo-9.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-10.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo ten">
                    <img class="img-responsive" src="{{ asset('img/photo-10.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-11.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo eleven">
                    <img class="img-responsive" src="{{ asset('img/photo-11.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ asset('img/photo-12.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Photo twelve">
                    <img class="img-responsive" src="{{ asset('img/photo-12.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <hr>

    </div>
    <!-- /.container -->

@stop