@extends('layouts.main')

@section('body-id')
    pips
@endsection

@section('content')

    <!-- FullScreen -->
    <div class="intro-header intro-subheader">

        <div id="slider_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">PascalCoin Improvement Proposals</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">PascalCoin Improvement Proposals</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-b"style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <!--h3 class="section-heading">Projects</h3-->
                        <p>PascalCoin Improvement Proposals</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                    </div>
            </div>
        </div>
    </div>

    <div class="content-section-b" style="padding: 0">
    <div class="container">
        <div class="single-feature">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
            </thead>
        @foreach($pips as $pip)
                <tr onclick="window.location.href='{{route('pip', ['pip' => $pip['pip_no']])}}';" style="cursor: pointer;">
                    <td><a href="{{route('pip', ['pip' => $pip['pip_no']])}}">{{$pip['pip']}}</td>
                    <td>{{$pip['title']}}</td>
                    <td>{{$pip['status']}}</td>
                    <td>{{$pip['created']}}</td>
                </tr>
        @endforeach
        </table>
        </div>
    </div>
    </div>
@endsection