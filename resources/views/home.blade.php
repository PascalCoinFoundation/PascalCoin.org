<?php
$dtGroup = 'home';
?>
@extends('layouts.main')

@section('body-id')
    home
@endsection

@section('content')

    @if(Request::get('binance') === '1' || env('BINANCE', false) === true)
        <div id="binance" style="display: none;">
        <div style="height: 1vh; background: #c0c0c0"></div>
        <div id="binance-ct">
            <h1 style="margin: 0; font-weight: 700; color: white;">Vote for PascalCoin on</h1>
            <div style="display: block; margin-bottom: 30px;">
                <img alt="self-Logo" src="{{asset('images/Binance_logo.svg')}}" height="50" style="margin-top: 15px;">
            </div>
            <p style="color: white;">Vote for PascalCoin in Round 7 of the binance community coin of the month. Each vote counts!<br />
            <a data-toggle="modal" data-target="#binance-modal" href="#">How to vote?</a>
            </p>
            <a style="background: #f79321; color: white; font-size: 20px; padding: 10px 20px; border-radius: 2px; margin: 100px; white-space: nowrap" href="https://www.binance.com/vote.html">Vote now!</a>
        </div>
        <div style="height: 1vh; background: #c0c0c0"></div>
        </div>
        <div class="modal fade" id="binance-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">How to vote</h4>
                    </div>
                    <div class="modal-body">
                        <p>You need an binance account to participate in the vote and own at least 0.1 BNB (BNB is the coin provided by Binance). <a href="https://www.binance.com/register.html" target="_blank">Register your account here</a>, it's free. After that, go to the <a href="https://www.binance.com/vote.html">voting page</a>, select PascalCoin and cast your vote. Your vote will deduct 0.1 BNB from your binance account.</p>
                        <p>You can only vote once and a vote costs approximately 3 PascalCoin. If you want to exchange PASC for BNB, please visit our <a href="https://discord.gg/sJqcgtD">discord chat</a>, we are happy to help out.</p>
                        <p>Thanks a lot!</p>
                    </div>
                    <div class="modal-footer">
                        <a style="background: #f79321; color: white; font-size: 20px; padding: 10px 20px; border-radius: 2px; margin: 100px; white-space: nowrap" href="https://www.binance.com/vote.html">Got it!</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @else
    <div class="intro-header">
        <div class="pasc-bg"></div>
        <div style="min-height: 50px;">

            <div class="container" style="overflow: hidden;">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider_container" style="width: 1300px; height: 130px; overflow: hidden;">

                            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 200px; overflow: hidden;">
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">@dt($dtGroup, 'slider_1_word1', 'Infinite')</span>
                                                <span>@dt($dtGroup, 'slider_1_word2', 'Scaling')</span></div>
                                            <div class="thinkdata">@dt($dtGroup, 'slider_1_text', 'The first cryptocurrency that has broken the 100 transactions per second barrier.')
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">@dt($dtGroup, 'slider_2_word1', 'Next-Generation')</span> <span>@dt($dtGroup, 'slider_2_word2', 'Cryptocurrency')</span>
                                            </div>
                                            <div class="thinkdata">@dt($dtGroup, 'slider_2_text', 'Introducing groundbreaking new technology called SafeBox')</div>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">@dt($dtGroup, 'slider_3_word1', 'Accounts')</span> <span>@dt($dtGroup, 'slider_3_word2', 'are simple')</span>
                                            </div>
                                            <div class="thinkdata">@dt($dtGroup, 'slider_3_text', 'Use your email, domain name or any other label as an account name')</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">@dt($dtGroup, 'slider_4_word1', 'ASIC & GPU')</span> <span>@dt($dtGroup, 'slider_4_word2', 'Resistant')</span>
                                            </div>
                                            <div class="thinkdata">@dt($dtGroup, 'slider_4_text', 'PascalCoin pioneers RandomHash, the very first successful CPU-native optimization that prevents mining centralization.')</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">@dt($dtGroup, 'slider_5_word1', 'ASIC & GPU')</span> <span>@dt($dtGroup, 'slider_5_word2', 'Resistant')</span>
                                            </div>
                                            <div class="thinkdata">@dt($dtGroup, 'slider_5_text', 'PascalCoin pioneers RandomHash, the very first successful CPU-native optimization that prevents mining centralization.')</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="content-section-b" style="padding-top: 10px; box-shadow: inset 0 -10px 10px -10px #d0d0d0">
        <div class="container">
            <div class="row">
                <div class="col-sm-{{$news->count() > 0 ? '6' : '12'}}">
                    <div class="abouthead" style="overflow: hidden">
                        <!--img src="{{asset('images/logo.png')}}" alt="" style="opacity:.2"/-->
                        <p style="margin: 0">@dt($dtGroup, 'main_headline', 'An instant, feeless, infinitely scalable, and decentralized cryptocurrency with full privacy and smart contract capabilities - enabled by the SafeBox technology.')</p>
                    </div>
                </div>
                @if($news->count() > 0)
                <div class="col-sm-6" id="news" style="padding-top: 10px;">
                    <h3>@dt($dtGroup, 'latest_news_title', 'Latest News')
                    <a style="float: right" href="/feed"><i class="fa fa-rss fa-1"></i></a></h3>
                    @foreach($news as $newsItem)
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="news-item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="news-ct {{$newsItem->style}}">
                                                <a href="{{$newsItem->link}}">
                                                    @if($newsItem->style === "medium")
                                                        <i class="fa fa-medium" aria-hidden="true"></i>
                                                    @endif
                                                        @if($newsItem->style === "twitter")
                                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                                        @endif
                                                        @if($newsItem->style === "reddit")
                                                            <i class="fa fa-reddit" aria-hidden="true"></i>
                                                        @endif
                                                    @if($newsItem->style === "pascal")
                                                        <img src="{{asset('images/pascal_logo_svg_hollow.svg')}}" width="20">
                                                    @endif

                                                    {{$newsItem->title}}
                                                </a>
                                                <p>@parsedown($newsItem->teaser)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="discord" style="background-color: #7289DA; padding: 10px;">
        <div class="container">
            <div class="subsc">
                <div>
                    <p style="margin: 0; text-align: center;">
                        <img src="/images/Discord.svg" style="height: 40px;">
                        <a style="color: white;" href="https://discord.gg/sJqcgtD">@dt($dtGroup, 'join_discord', 'Join the PascalCoin community on Discord! Click here!')</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Use it -->
    <div id="useit" class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="abouthead">
                    <h3 class="section-heading">@dt($dtGroup, 'intro_headline', 'PascalCoin is an innovative cryptocurrency that extends the blockchain-paradigm')</h3>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-8">

                    <div class="leads">
                        @dt($dtGroup, 'intro_text', 'Based on a groundbreaking and unique new idea in crypto, PascalCoin pioneers a new tier of scalability suitable for planetary-scale adoption. It is the first and only cryptocurrency to have broken the 100 transactions per second barrier!

By offering simple account numbers that can be associated to emails, company names and domain names, payments have never been easier.

PascalCoin’s powerful architecture lays the strong foundation for large-scale smart contracts in the form of Layer-2 protocols.

PascalCoin achieves all this by introducing a new cryptographic data-structure known as the SafeBox. The SafeBox compliments the Blockchain in a way that allows the Blockchain to be deleted whilst retaining its full cryptographic security.')
                    </div>
                    <a class="btn readmore" href="{{route('get_started')}}" role="button">@dt($dtGroup, 'get_started_now', 'GET STARTED NOW')</a>
                    <!--a href="https://github.com/PascalCoin/PascalCoin/releases"
                       target="_blank" role="button" class="btn readmore"><span
                                class="fa fa-windows"></span> <span
                                class="fa fa-linux"></span> <span
                                class="fa fa-apple"></span>@dt($dtGroup, 'download_wallet', 'Download Wallet')</a-->
                </div>
                <div class="col-sm-4">
                    <iframe width="100%"
                            src="https://www.youtube.com/embed/F25UU-0W9Dk?feature=oembed"
                            frameborder="0" allowfullscreen=""></iframe>
                    <iframe width="100%"
                            src="https://www.youtube.com/embed/_Md8zUt5lig?feature=oembed"
                            frameborder="0" allowfullscreen=""></iframe>
                    <small>@dt($dtGroup, 'video_china_linktext', '<a href="https://www.youtube.com/watch?v=s8m8E01VXJ8" target="_blank">Click here</a> for a version with _chinese subtitles_')</small>
                </div>
            </div>
        </div>
        <div class="discord" style="background-color: #f79321; margin-top: 40px;">
            <div class="container">
                <div class="subsc">
                    <div>
                        <p style="margin-top: 20px;">
                            <strong style="color: white;">Download wallet version {{$latest_release['version']}}: </strong><br />
                            <a href="{{$latest_release['files']['windows_64bit']}}" target="_blank" role="button" class="btn readmore" style="background: white; color: #000"><span class="fa fa-windows"></span> @dt($dtGroup, 'download_wallet_windows_64', 'Windows 64bit Wallet')</a>
                            <a href="{{$latest_release['files']['windows_32bit']}}" target="_blank" role="button" class="btn readmore" style="background: white; color: #000"><span class="fa fa-windows"></span> @dt($dtGroup, 'download_wallet_windows_32', 'Windows 32bit Wallet')</a>
                            <a href="{{$latest_release['files']['macos_64bit']}}" target="_blank" role="button" class="btn readmore" style="background: white; color: #000"><span class="fa fa-apple"></span> @dt($dtGroup, 'download_wallet_macos_64', 'macOS 64bit Wallet')</a>
                            <a href="{{$latest_release['files']['ubuntu_64bit']}}" target="_blank" role="button" class="btn readmore" style="background: white; color: #000"><span class="fa fa-linux"></span> @dt($dtGroup, 'download_wallet_linux', 'Linux Wallet')</a><br />
                            <a href="{{$latest_release['url']}}" style="color: #fff; font-weight: normal;">&raquo; ..or visit github.com releases.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <div class="discord" style="background-color: #f5f5f5; margin-top: 40px;">
            <div class="container">
                <div class="subsc">
                    <div>
                        <p style="margin-top: 20px;">
                            <strong style="color: #000;">Download mobile wallet: </strong><br />
                            <a href="https://play.google.com/store/apps/details?id=org.pascalcoin.pascalcoinofficial" target="_blank" role="button"><img title="Get it on Google Play" src="/images/get-it-on-google-play.png" /></a><br />
                            <a href="https://github.com/davidbolet/PascalcoinAndroidApp" style="color: #000; font-weight: normal;">&raquo; ..or visit github.com releases.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="discord" style="background-color: #f79321; margin-top: 40px;">
            <div class="container">
                <div class="subsc">
                    <div>
                        <p style="margin-top: 20px;">
                            <strong style="color: white;">Start mining PascalCoin: </strong><br />
                            <a href="/how_to_mine" role="button" class="btn readmore" style="background: white; color: #000"><span class="fa fa-microchip"></span> @dt($dtGroup, 'home_how_to_mine_solo', 'Solo mining')</a>
                            <a href="/content/how_to_mine_pool" role="button" class="btn readmore" style="background: white; color: #000"><span class="fa fa-group"></span> @dt($dtGroup, 'home_how_to_mine_pool', 'Pool mining')</a>
                            <a href="/content/how-to-use-screensaver-miner" role="button" class="btn readmore" style="background: white; color: #000"><span class="fa fa-desktop"></span> @dt($dtGroup, 'home_how_to_mine_screensaver', 'Screensaver mining')</a>
                        </p>
                        <br/>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <h3 class="section-heading">@dt($dtGroup, 'why_choose_title', 'Why Choose PascalCoin?')</h3>
                        <p>@dt($dtGroup, 'why_choose_teaser', 'PascalCoin pioneers a new tier of scalability comparable to the VISA network')</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}"
                                                  alt=""></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        @foreach($boxes as $box)
                        <div class="col-sm-6 col-md-4 fadeInDown text-center Secure1">
                            <div class="single-feature mhight">
                                <div class="rotate rotate1" style="background-image: url('{{asset('storage/' . $box->icon)}}')"></div>
                                <h3 class="Securehead">{{$box->title}}</h3>
                                <div class="midarrow"></div>
                                <p>@parsedown($box->content)</p>
                                <a class="button button-args" href="{{route('whitepapers')}}#wp_{{$box->white_paper_content_id}}">Learn More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>




    <!--vertical slider-->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="abouthead">
                        <h3 class="section-heading">@dt($dtGroup, 'coin_specs_title', 'Coin Specifications')</h3>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="single-counter"
                             style="visibility: visible;">
                            <div class="counter-text">
                                <p class="fact-number">@dt($dtGroup, 'coin_specs_box1_word1', '42') <span>@dt($dtGroup, 'coin_specs_box1_word2', 'million')</span>
                                </p>
                                <h4>@dt($dtGroup, 'coin_specs_box1_sub', 'Maximum supply')</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="single-counter"
                             style="visibility: visible;">
                            <div class="counter-text">
                                <p class="fact-number"><span>@dt($dtGroup, 'coin_specs_box2_word1', 'Random')</span> @dt($dtGroup, 'coin_specs_box2_word2', 'Hash')
                                </p>
                                <h4>@dt($dtGroup, 'coin_specs_box2_sub', 'Algorithm')</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="single-counter">
                            <div class="counter-text">
                                <p class="fact-number">@dt($dtGroup, 'coin_specs_box3_word1', '5') <span>@dt($dtGroup, 'coin_specs_box3_word2', 'Minutes')</span></p>
                                <h4>@dt($dtGroup, 'coin_specs_box3_sub', 'Block Time')</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="single-counter">
                            <!-- <div class="counter-icon">
                                <i class="bi bi-emo-smile"></i>
                            </div> -->
                            <div class="counter-text">
                                <p class="fact-number">@dt($dtGroup, 'coin_specs_box4_word1', '40') <span>@dt($dtGroup, 'coin_specs_box4_word2', 'PASC')</span></p>
                                <h4>@dt($dtGroup, 'coin_specs_box4_sub', 'Block Rewards')</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end vertical slider-->
    <!--serviceplan-->
    <div class="serviceplanwrap">
        <div class="container">

            <div class="abouthead">
                <h3 class="section-heading">@dt($dtGroup, 'rodmap_title', 'Roadmap')</h3>
                <!--p>Now and into the future we are committed to improving the
                    availability and development of PascalCoin. Here you can see
                    our current broad-strokes roadmap for future development and
                    progress of PascalCoin.</p-->
                <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3>Accomplished</h3>
                    <div>
                        <ul class="roadmap">
                            @dt($dtGroup, 'roadmap_done', '
<li>
    <i class="fa fa-check-square"></i>
    <p>Initial launch</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>Decentralised Development Process (PIP)</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: Miner infrastructure</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: In-protocol account exchanging</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: Infinite Scaling (100 block chain)</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: Checkpointing</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: Account Names & Types</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: Mobile/light-client support</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: 50% inflation reduction</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>CORE: Add 20% developer reward (PIP-0011)</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>VOTING: Blockchain voting explorer</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>VOTING: SafeBox Voting (phase 1)</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>ANON: In-protocol PASC & PASA exchange</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>GUI: New Wallet (with OS X support)</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>GUI: Translation Portal</p>
</li>
<li>
    <i class="fa fa-check-square"></i>
    <p>DAO: 90% developer reward open to community </p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>CORE: CPU & ASIC Resistant mining (PIP-0009)</p>
</li>

<li>
    <i class="fa fa-square"></i>
    <p>CORE: Layer-2 operation support</p>
</li>')
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <h3>Our Goals</h3>
                    <div>
                        <ul class="roadmap goals">@dt($dtGroup, 'roadmap_goals', '
<li>
    <i class="fa fa-square"></i>
    <p>MULTISIG: Schnorr crypto-library</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>CORE: Checkpoint Torrenting</p></li>
<li>
    <i class="fa fa-square"></i>
    <p>CORE: Account Data</p></li>
<li>
    <i class="fa fa-square"></i>
    <p>CORE: Refactoring & optimization</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>VOTING: Voting Protocol (phase 2)</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>MULTISIG: Schnorr aggregate signatures</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>ANON: Private Balances & Payments (ZK-SNARKs)</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>GUI: V3 Full Translations</p></li>
<li>
    <i class="fa fa-square"></i>
    <p>GUI: Mobile Wallets (iOS & Android)</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>LAYER2: Delegated Proof-of-Stage Overlay Network (Smart-Contracts)</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>LAYER2: Private Send Protocol</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>LAYER2: PASC Data Storage Network (DSN)</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>LAYER2: PascalTokens V1 </p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>LAYER2: PascalDEX (decentralised exchange)</p>
</li>
<li>
    <i class="fa fa-square"></i>
    <p>LAYER2: PascalMessenger (PASC MSG) </p>
</li>')
                        </ul>
                    </div>
                </div>
            </div>
            <div id="myCarousel223" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel223" data-slide-to="0"
                        class="active"></li>
                    <li data-target="#myCarousel223" data-slide-to="1"
                        class=""></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                    </div><!-- End Item -->

                    <div class="item">
                        <div class="carousel-caption carousel-caption22">

                        </div>
                    </div><!-- End Item -->


                </div><!-- End Carousel Inner -->

            </div><!-- End Carousel -->


        </div>
    </div>

    <div class="subscribe">
        <div class="container">
            <div class="subsc">
                <div>
                        <h3 style="font-weight: 700; margin-top: 0; color: white;">@dt($dtGroup, 'nl_title', 'Subscribe Newsletter')</h3>
                    <p>@dt($dtGroup, 'nl_teaser', 'Subscribe to our email newsletter for useful tips and valuable resources.')</p>
                </div>
            </div>

            <div>
                <div class="sub-text-box">
                    <div class="sub-tex">
                        <div class="input-group">
                            @csrf
                            <input type="text" id="subscribe_email" class="form-control" placeholder="@dt($dtGroup, 'nl_placeholder', 'Enter your email here...', false)">
                            <span class="input-group-btn">
                                <button type="button" id="subscribe_button" class="btn btn-default subscribe-btn" data-target="{{route('newsletter-submit')}}">@dt($dtGroup, 'nl_button', 'Subscribe', true)</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="subscribe_success" style="display: none;color: #f79321; padding: 4px; font-weight: 400; background: white;">@dt($dtGroup, 'nl_thank_you', 'Thank you for your subscription.')</div>
                <div id="subscribe_error" style="display: none;color: red; padding: 4px; font-weight: 400; background: white;"></div>
            </div>
        </div>
    </div>
    <div class="faq">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <h3 class="section-heading">@dt($dtGroup, 'faq_title', 'Frequently Asked Questions')</h3>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 faq1">
                    <div class="panel with-nav-tabs panel-primary">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                @foreach($faq as $faqGroup)
                                <li class="{{$loop->iteration === 1 ? 'active' : ''}}"><a href="#tab{{$loop->iteration}}primary" data-toggle="tab">
                                        <i class="fa fa-{{$faqGroup->icon}}"></i>{{$faqGroup->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                @foreach($faq as $faqGroup)
                                <div class="tab-pane fade in {{$loop->iteration === 1 ? 'active' : ''}}" id="tab{{$loop->iteration}}primary">
                                    @foreach($faqGroup->faq_entries as $entry)
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">{{$entry->question}}</button>
                                        <div class="panel faqpanel">
                                            @parsedown($entry->answer)
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection