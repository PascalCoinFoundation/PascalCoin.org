@extends('layouts.main')

@section('body-id')
    projects
@endsection

@section('content')

    <!-- FullScreen -->
    <div class="intro-header intro-subheader">

        <div id="slider_container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="breadcrumb-title">Projects</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Projects</li>
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
                        <p>A list of community driven projects for PascalCoin.</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    @foreach($projects as $project)
        <div class="row">

        <div id="infinite" class="col-sm-12 text-center whitepapers1">
            <div class="single-feature">
                <div class="whitepapers_icon">
                    <div class="whitepapers_rotate whitepapers_rotate1"></div>
                </div>
                <div class="whitepapers_description">
                    <h3 class="Securehead">{{$project->title}}</h3>
                    <div class="midarrow"></div>
                    <p>@parsedown($project->description)</p>
                    <p><a href="{{$project->url}}" class="button plink pull-right"><i class="fa fa-link" aria-hidden="true"></i> Project homepage</a></p>
                </div>
            </div>
        </div>
        </div>
    @endforeach
    </div>
@endsection