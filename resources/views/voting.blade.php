@extends('layouts.main')

@section('body-id')
    voting
@endsection


@section('content')

    <!-- FullScreen -->
    <div class="intro-header intro-subheader">

        <div id="slider_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">Voting</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Voting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <!--h3 class="section-heading">Projects</h3-->
                        <p>PascalCoin Voting results.</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                </div>
            </div>
        </div>
    </div>

    <div id="sb-site">
        <div class="boxed">

            <iframe src="http://www.pascalexplorer.com/Voting/Embed" frameborder="0" scrolling="no" style="width: 100%; height: 3650px;  overflow: hidden;" ></iframe>

        </div>
    </div>
@endsection