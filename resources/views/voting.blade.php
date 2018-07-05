@extends('layouts.main')

@section('body-id')
    voting
@endsection


@section('content')

    <!-- FullScreen -->
    <div class="intro-header intro-subheader">
        <div class="pasc-bg"></div>

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


    <div id="sb-site">
        <div class="boxed">
            <iframe src="https://www.pascalexplorer.com/Voting/Embed" frameborder="0" scrolling="yes" style="width: 100%; min-height: 60vh;" ></iframe>
        </div>
    </div>
@endsection