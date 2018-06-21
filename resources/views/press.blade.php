@extends('layouts.main')

@section('body-id')
    press
@endsection


@section('content')
<!-- FullScreen -->
<div class="intro-header intro-subheader">

    <div id="slider_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3 class="breadcrumb-title">Press Room</h3>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Press Room</li>
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
                    <div class="press-kit-container">
                        <small>Excited about PascalCoin and want to write about it?<br />
                            <a href="/presskit.zip" target="_blank"><i class="fa fa-cloud-download"></i> Download our press-kit for media assets and more.</a>
                        </small>
                    </div>
                    <p>Find out what others write about PascalCoin.</p>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-section-a">
    @foreach($news as $item)
        <div class="container">
        <a id="news_{{$item->id}}"></a>
        <div class="row press-item">
            <div class="col-sm-2 press-col-image">
                <img src="{{asset('storage/' . $item->source_logo)}}"><br />
                <small>Language: {{$item->language}}</small><br />
                <small>Date: {{$item->pub_date}}</small>
            </div>
            <div class="col-sm-10 press-col-content">
                <h3>{{$item->title}}</h3>
                <p>
                    @parsedown($item->content)
                </p>
                <p class="text-right"><a href="{{$item->source_link}}" target="_blank">Read more on {{$item->source_name}}</a></p>
            </div>
        </div>
        </div>
    @endforeach
</div>
@endsection