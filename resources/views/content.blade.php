@extends('layouts.main')


@section('meta_keywords')
    {{$content->meta_keywords}}
@endsection
@section('page_title')
    {{$content->title}}
@endsection


@section('meta_description')
    {{$content->meta_description}}
@endsection

@section('body-id')
    content
@endsection

@section('content')

    <!-- FullScreen -->
    <div class="intro-header intro-subheader">
        <div class="pasc-bg"></div>

        <div id="slider_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">{{$content->title}}</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('pips')}}">{{$content->title}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-b" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <p>{{$content->teaser}}</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-b" style="padding: 0">
        <div class="container">
            <div class="row">

                <div id="infinite" class="col-sm-12">
                    <div class="single-feature">
                        <div class="md">
                            @parsedown($content->content)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection