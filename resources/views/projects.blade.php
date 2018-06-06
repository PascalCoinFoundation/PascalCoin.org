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
                        <h3 class="breadcrumb-title">Community Projects</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Community Projects</li>
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
    <div class="content-section-b" style="padding: 0">

    <div class="container">
        <div class="single-feature">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
            </tr>
            </thead>
            @foreach($projects as $project)
                <tr onclick="window.location.href='{{route('pip', ['pip' => $project['pip_no']])}}';" style="cursor: pointer;">
                    <td><a href="{{route('project', ['project' => $project->id])}}">{{$project->title}}</td>
                    <td>Pascal</td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
    </div>
@endsection