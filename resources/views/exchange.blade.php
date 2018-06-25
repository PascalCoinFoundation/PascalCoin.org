@extends('layouts.main')

@section('body-id')
    rpc
@endsection

@section('content')

    <!-- FullScreen -->
    <div class="intro-header intro-subheader">
        <div class="pasc-bg"></div>

        <div id="slider_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">Exchange Integration Guide</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Exchange Integration Guide</li>
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
                        <!--h3 class="section-heading">Projects</h3-->
                        <p>Simplified Exchange Integration Guide</p>
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
                            {!! $exchange !!}
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection