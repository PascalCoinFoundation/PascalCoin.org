@extends('layouts.main')

@section('body-id')
    team_members
@endsection


@section('content')
<!-- FullScreen -->
<div class="intro-header intro-subheader">
    <div class="pasc-bg"></div>

    <div id="slider_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3 class="breadcrumb-title">Team Members</h3>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Team Members</li>
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
                    <p>Meet the Pascal Team</p>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.team-card {
  margin-bottom: 70px;
}
.team-card-lg + .team-card-sm {
  clear:left;
}
.team-card-img {
  width: 100%;
  border-radius: 50%;
}
.team-card-links a img {
  width:16px;
  height:16px;
}
  @media (min-width:1200px){
    .auto-clear .col-lg-1:nth-child(12n+1){clear:left;}
    .auto-clear .col-lg-2:nth-child(6n+1){clear:left;}
    .auto-clear .col-lg-3:nth-child(4n+1){clear:left;}
    .auto-clear .col-lg-4:nth-child(3n+1){clear:left;}
    .auto-clear .col-lg-6:nth-child(odd){clear:left;}
  }
@media (min-width:992px) and (max-width:1199px){
  .auto-clear .col-md-1:nth-child(12n+1){clear:left;}
  .auto-clear .col-md-2:nth-child(6n+1){clear:left;}
  .auto-clear .col-md-3:nth-child(4n+1){clear:left;}
  .auto-clear .col-md-4:nth-child(3n+1){clear:left;}
  .auto-clear .col-md-6:nth-child(odd){clear:left;}
}
@media (min-width:768px) and (max-width:991px){
  .auto-clear .col-sm-1:nth-child(12n+1){clear:left;}
  .auto-clear .col-sm-2:nth-child(6n+1){clear:left;}
  .auto-clear .col-sm-3:nth-child(4n+1){clear:left;}
  .auto-clear .col-sm-4:nth-child(3n+1){clear:left;}
  .auto-clear .col-sm-6:nth-child(odd){clear:left;}
}
@media (max-width:767px){
  .auto-clear .col-xs-1:nth-child(12n+1){clear:left;}
  .auto-clear .col-xs-2:nth-child(6n+1){clear:left;}
  .auto-clear .col-xs-3:nth-child(4n+1){clear:left;}
  .auto-clear .col-xs-4:nth-child(3n+1){clear:left;}
  .auto-clear .col-xs-6:nth-child(odd){clear:left;}
}
</style>

<div class="content-section-a">
    <div class="container">
        @foreach(array('team_lg', 'team_sm') as $type)
        <div class="row auto-clear">
        @foreach($$type as $item)
            @if($item->large_format)
            <div class="col-xs-6 col-md-4 col-lg-3 team-card team-card-lg">
            @else
            <div class="col-6 col-md-3 col-lg-2 team-card team-card-sm">
            @endif
                @if($item->picture)
                <img src="{{asset('storage/'.$item->picture)}}" class="team-card-img">
                @else
                <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 -256 1792 1792">
                    <g transform="matrix(1,0,0,-1,197.42373,1300.6102)">
                    <path fill="#999" d="M 1408,131 Q 1408,11 1335,-58.5 1262,-128 1141,-128 H 267 Q 146,-128 73,-58.5 0,11 0,131 0,184 3.5,234.5 7,285 17.5,343.5 28,402 44,452 q 16,50 43,97.5 27,47.5 62,81 35,33.5 85.5,53.5 50.5,20 111.5,20 9,0 42,-21.5 33,-21.5 74.5,-48 41.5,-26.5 108,-48 Q 637,565 704,565 q 67,0 133.5,21.5 66.5,21.5 108,48 41.5,26.5 74.5,48 33,21.5 42,21.5 61,0 111.5,-20 50.5,-20 85.5,-53.5 35,-33.5 62,-81 27,-47.5 43,-97.5 16,-50 26.5,-108.5 10.5,-58.5 14,-109 Q 1408,184 1408,131 z m -320,893 Q 1088,865 975.5,752.5 863,640 704,640 545,640 432.5,752.5 320,865 320,1024 320,1183 432.5,1295.5 545,1408 704,1408 863,1408 975.5,1295.5 1088,1183 1088,1024 z"/>
                    </g>
                </svg>
                @endif
                <div class="card-body">
                    <h4 class="card-title">{{$item->name}}<h4>
                    <p class="card-text">{{$item->title}}</p>
                </div>
                <div class="team-card-links">
                  @if($item->github)
                  <a href="{{$item->github}}" target="_blank" title="View {{$item->name}} on GitHub"><img src="{{asset('/images/brands/github-brands.svg')}}" /></a>
                  @endif
                  @if($item->linkedin)
                  <a href="{{$item->linkedin}}" target="_blank" title="View {{$item->name}} on LinkedIn"><img src="{{asset('/images/brands/linkedin-brands.svg')}}" /></a>
                  @endif
                  @if($item->stackoverflow)
                  <a href="{{$item->stackoverflow}}" target="_blank" title="View {{$item->name}} on StackOverflow"><img src="{{asset('/images/brands/stack-overflow-brands.svg')}}" /></a>
                  @endif
                  @if($item->xing)
                  <a href="{{$item->xing}}" target="_blank" title="View {{$item->name}} on Xing"><img src="{{asset('/images/brands/xing-square-brands.svg')}}" /></a>
                  @endif
                </div>
            </div>
        @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection