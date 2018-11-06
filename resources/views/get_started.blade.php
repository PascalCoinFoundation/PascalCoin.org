<?php
$dtGroup = 'get_started';
?>
@extends('layouts.main')

@section('body-id')
    get_started
@endsection

@section('content')

<!-- FullScreen -->
<div class="intro-header intro-subheader">
    <div class="pasc-bg"></div>

    <div id="slider_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3 class="breadcrumb-title">@dt($dtGroup, 'page_title', 'Get Started')</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">@dt($dtGroup, 'bc_home', 'Home')</a></li>
                        <li class="active">@dt($dtGroup, 'bc_page', 'Get Started')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



</div>

<div id="whatis" class="content-section-b" style="border-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="abouthead">
                    <!--h3 class="section-heading">Get Started</h3-->
                    <p>@dt($dtGroup, 'page_teaser', 'So you\'re interested in PascalCoin? There\'s a few things you should know before you get started.')</p>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    @foreach($contents as $content)
                    <div class="col-sm-12 text-center get_started1">
                        <h3 id="wp_{{$content->id}}" style="visibility: hidden"></h3>
                        <div class="single-feature">
                            <div class="get_started_icon">
                                <div class="get_started_rotate get_started_rotate1" style="background-image: url('{{asset('storage/' . $content->icon)}}')"></div>
                            </div>
                            <div class="get_started_description md">
                                <h3 class="Securehead">{{$content->title}}</h3>
                                <div class="midarrow"></div>
                                @parsedown($content->content)
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>

    </div>
</div>

@endsection
