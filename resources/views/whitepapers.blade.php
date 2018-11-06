<?php
$dtGroup = 'get_started';
?>
@extends('layouts.main')

@section('body-id')
    whitepapers
@endsection


@section('content')
<!-- FullScreen -->
<div class="intro-header intro-subheader">
    <div class="pasc-bg"></div>

    <div id="slider_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3 class="breadcrumb-title">@dt($dtGroup, 'page_title', 'Whitepapers')</h3>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">@dt($dtGroup, 'bc_home', 'Home')</a></li>
                        <li class="active">@dt($dtGroup, 'bc_page', 'Whitepapers')</li>
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
                    <!--h3 class="section-heading">Whitepapers</h3-->
                    <p>@dt($dtGroup, 'page_teaser', 'Want a more indepth understanding of PascalCoin? Below you can download the Whitepapers which go into greater detail on the inner workings of PascalCoin, including the groundbreaking SafeBox technology.')</p>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-section-a" style="padding: 0">

    <div class="content-section-s" style="border-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <h3 class="section-heading">@dt($dtGroup, 'whitepaper_download_title', 'Whitepaper Download')</h3>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                    <p class="text-center">
                        <a class="version" href="/PascalCoinWhitePaperV2.pdf" target="_blank">@dt($dtGroup, 'whitepaper_v2_btn_w1', 'Download Whitepaper V2')<span>@dt($dtGroup, 'whitepaper_v2_btn_w2', 'version 2.1, June 2017')</span></a>
                        <a class="version" href="/PascalCoin White Paper - EN.pdf" target="_blank">@dt($dtGroup, 'whitepaper_v1_btn_w1', 'Download Whitepaper V1') <span>@dt($dtGroup, 'whitepaper_v1_btn_w2', 'version 1.0 July 2016')</span></a>
                    </p>
                    </div>
                </div>
            </div>
        </div>

<div id="whatis" class="content-section-b" style="border-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a id="reliable"></a>

                <div class="abouthead">
                    <h3 class="section-heading">@dt($dtGroup, 'whitepaper_ex_title', 'Extended Information')</h3>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
            </div>

            <div class="col-sm-12">
                <div class="row">

                    @foreach($contents as $content)
                    <div class="col-sm-12 text-center whitepapers2">
                        <h3 id="wp_{{$content->id}}" style="visibility: hidden"></h3>
                        <div class="single-feature">
                            <div class="whitepapers_icon">
                                <div class="whitepapers_rotate whitepapers_rotate2" style="background-image: url('{{asset('storage/' . $content->icon)}}')"></div>
                            </div>
                            <div class="whitepapers_description md">
                                <h3 class="Securehead">{{$content->title}}</h3>
                                <div class="midarrow"></div>
                                <p>
                                    @parsedown($content->content)
                                </p>
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