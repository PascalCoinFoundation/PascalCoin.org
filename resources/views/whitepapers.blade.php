@extends('layouts.main')

@section('body-id')
    whitepapers
@endsection


@section('content')
<!-- FullScreen -->
<div class="intro-header intro-subheader">

    <div id="slider_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3 class="breadcrumb-title">Whitepapers</h3>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Whitepapers</li>
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
                    <p>Want a more indepth understanding of PascalCoin? Below you can download the Whitepapers which go into greater detail on the inner workings of PascalCoin, including the groundbreaking SafeBox technology.</p>
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
                        <h3 class="section-heading">Whitepaper Download</h3>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                    <p class="text-center">
                        <a class="version" href="/PascalCoinWhitePaperV2.pdf" target="_blank">Download Whitepaper V2<span>version 2.1, June 2017</span></a>
                        <a class="version" href="/PascalCoin White Paper - EN.pdf" target="_blank">Download Whitepaper V1 <span>version 1.0 July 2016 </span></a>
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
                    <h3 class="section-heading">Extended Information</h3>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
            </div>

            <div class="col-sm-12">
                <div class="row">

                    @foreach($contents as $content)
                    <div class="col-sm-12 text-center whitepapers2">
                        <a id="wp_{{$content->id}}"></a>
                        <div class="single-feature">
                            <div class="whitepapers_icon">
                                <div class="whitepapers_rotate whitepapers_rotate2" style="background-image: url('{{asset('storage/' . $content->icon)}}')"></div>
                            </div>
                            <div class="whitepapers_description">
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