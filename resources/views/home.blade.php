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
        <div style="min-height: 50px;">

            <div class="container" style="overflow: hidden;">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider_container" style="width: 1300px; height: 130px; overflow: hidden;">

                            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 200px; overflow: hidden;">
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">Infinite</span>
                                                <span>Scaling</span></div>
                                            <div class="thinkdata">The first cryptocurrency
                                                that has broken the 100 transactions per
                                                second barrier.
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">Next-Generation</span> <span>Cryptocurrency</span>
                                            </div>
                                            <div class="thinkdata">Introducing
                                                groundbreaking new technology called SafeBox
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="container" style="margin: 0">
                                        <div class="slider-wrap-data">
                                            <div class="Think-Secure"><span class="sup">Accounts</span> <span>are simple</span>
                                            </div>
                                            <div class="thinkdata">Use your email, domain
                                                name or any other label as an account name
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
    </div>
    @endif

    <div class="content-section-b" style="box-shadow: inset 0 -10px 10px -10px #d0d0d0">
        <div class="container">
            <div class="row">
                <div class="col-sm-{{$news->count() > 0 ? '6' : '12'}}">
                    <div class="abouthead" style="overflow: hidden">
                        <img src="{{asset('images/logo.png')}}" alt=""/>
                        <p>A completely original cryptocurrency with groundbreaking new technology called SafeBox</p>
                    </div>
                </div>
                @if($news->count() > 0)
                <div class="col-sm-6" id="news">
                    <h3>Latest News
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

    <!-- Use it -->
    <div id="useit" class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="abouthead">
                    <h3 class="section-heading">PascalCoin is an innovative
                        cryptocurrency that extends the blockchain-paradigm</h3>
                    <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-8">

                    <div class="leads">
                        <p>Based on a groundbreaking and unique new idea in
                            crypto, PascalCoin pioneers a new tier of
                            scalability suitable for planetary-scale adoption.
                            It is the first and only cryptocurrency to have
                            broken the 100 transactions per second barrier!</p>
                        <p>By offering simple account numbers that can be
                            associated to emails, company names and domain
                            names, payments have never been easier.</p>
                        <p>PascalCoin’s powerful architecture lays the strong
                            foundation for large-scale smart contracts in the
                            form of Layer-2 protocols.</p>
                        <p>PascalCoin achieves all this by introducing a new
                            cryptographic data-structure known as the SafeBox.
                            The SafeBox compliments the Blockchain in a way that
                            allows the Blockchain to be deleted whilst retaining
                            its full cryptographic security.</p>
                    </div>
                    <a class="btn readmore" href="{{route('get_started')}}" role="button">GET
                        STARTED NOW </a>
                    <a href="https://github.com/PascalCoin/PascalCoin/releases"
                       target="_blank" role="button" class="btn readmore"><span
                                class="fa fa-windows"></span> <span
                                class="fa fa-linux"></span> <span
                                class="fa fa-apple"></span> Download Wallet </a>
                </div>
                <div class="col-sm-4">
                    <iframe width="100%"
                            src="https://www.youtube.com/embed/F25UU-0W9Dk?feature=oembed"
                            frameborder="0" allowfullscreen=""></iframe>
                    <iframe width="100%"
                            src="https://www.youtube.com/embed/_Md8zUt5lig?feature=oembed"
                            frameborder="0" allowfullscreen=""></iframe>
                    <small><a href="https://www.youtube.com/watch?v=s8m8E01VXJ8" target="_blank">Click here</a> for a version with <u>chinese subtitles</u></small>
                    <!--p><a class="alternate_download"
                          href="https://sourceforge.net/projects/pascalcoin/"
                          target="_blank">Alternate Download Site</a></p-->

                </div>

            </div>
        </div>
        <!-- /.container -->
    </div>

    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <h3 class="section-heading">Why Choose PascalCoin?</h3>
                        <p>PascalCoin pioneers a new tier of scalability
                            comparable to the VISA network</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}"
                                                  alt=""></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 fadeInDown text-center Secure1">
                            <div class="single-feature mhight">
                                <div class="rotate rotate1"></div>
                                <h3 class="Securehead">Infinite Scaling</h3>
                                <div class="midarrow"></div>
                                <p>Infinite Scaling is the ability for a
                                    cryptocurrency to run for an infinite period
                                    of time using the same amount of storage (at
                                    a constant throughput). All other...</p>
                                <a class="button button-args" href="{{route('whitepapers')}}#infinite">Learn
                                    More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 wow fadeInDown text-center Secure2">
                            <div class="single-feature mhight">
                                <div class="rotate rotate2"></div>
                                <h3 class="Securehead">Reliable & Instant
                                    Unconfirmed Transactions</h3>
                                <div class="midarrow"></div>
                                <p>Since PascalCoin is state-based currency the
                                    security guarantees of 0-confirmation
                                    transactions are much stronger than
                                    in... </p>
                                <a class="button button-args" href="{{route('whitepapers')}}#reliable">Learn
                                    More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 text-center Secure3">
                            <div class="single-feature mhight">
                                <div class="rotate rotate3"></div>
                                <h3 class="Securehead">Account Names and
                                    Types</h3>
                                <div class="midarrow"></div>
                                <p>One of the key new features of PascalCoin is
                                    that accounts can have unique names which
                                    are publicly visible, much in the same way
                                    as the domain names system... </p>
                                <a class="button button-args" href="{{route('whitepapers')}}#account">Learn
                                    More</a>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 text-center Secure4">
                            <div class="single-feature mhight">
                                <div class="rotate rotate4"></div>
                                <h3 class="Securehead">Assets, Sub-Tokens And
                                    Smart Contracts</h3>
                                <div class="midarrow"></div>
                                <p>By leveraging PascalCoin’s Layer-2
                                    architecture, it is possible to achieve
                                    Assets, Sub-Tokens and Smart Contracts
                                    in... </p>
                                <a class="button button-args" href="{{route('whitepapers')}}#assets">Learn
                                    More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 text-center Secure5">
                            <div class="single-feature mhight">
                                <div class="rotate rotate5"></div>
                                <h3 class="Securehead">NEW! Funded by Developer
                                    Reward</h3>
                                <div class="midarrow"></div>
                                <p>PascalCoin was launched 100% fairly without
                                    any pre-mine, ICO or investment rounds,
                                    exactly as Bitcoin... </p>
                                <a class="button button-args" href="{{route('whitepapers')}}#funded_by">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 text-center Secure6">
                            <div class="single-feature mhight">
                                <div class="rotate rotate6"></div>
                                <h3 class="Securehead">NEW! Anonymous
                                    Transactions</h3>
                                <div class="midarrow"></div>
                                <p>As of PIP-0017, PascalCoin will support
                                    anonymous transactions in the form of
                                    in-protocol transaction mixing... </p>
                                <a class="button button-args" href="{{route('whitepapers')}}#anonymous">Learn
                                    More</a>
                            </div>
                        </div>


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
                        <h3 class="section-heading">Coin Specifications</h3>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}"
                                                  alt=""></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="single-counter"
                             style="visibility: visible;">
                            <!-- <div class="counter-icon">
                            <i class="bi bi-crown"></i>
                        </div> -->
                            <div class="counter-text">
                                <p class="fact-number">42 <span>million</span>
                                </p>
                                <h4>Max Coin</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="single-counter"
                             style="visibility: visible;">
                            <!--<div class="counter-icon">
                                    <i class="bi bi-delivery-van"></i>
                                </div> -->
                            <div class="counter-text">
                                <p class="fact-number"><span>SHA2-</span> 256D
                                </p>
                                <h4>Algorithm </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="single-counter">
                            <!--  <div class="counter-icon">
                                <i class="bi bi-cup-coffee"></i>
                            </div> -->
                            <div class="counter-text">
                                <p class="fact-number">5 <span>Min</span></p>
                                <h4>Block Time</h4>
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
                                <p class="fact-number">40 <span>PASC</span></p>
                                <h4>Block Rewards</h4>
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
                <h3 class="section-heading">Roadmap</h3>
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
                            <li><i class="fa fa-check-square"></i>
                                <p>Initial launch</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>Decentralised Development Process
                                    (PIP)</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: Miner infrastructure</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: In-protocol account
                                    exchanging</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: Infinite Scaling (100 block
                                    chain)</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: Checkpointing</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: Account Names & Types</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: Mobile/light-client support</p>
                            </li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: 50% inflation reduction</p>
                            </li>
                            <li><i class="fa fa-check-square"></i>
                                <p>CORE: Add 20% developer reward</p>
                            </li>
                            <li><i class="fa fa-check-square"></i>
                                <p>VOTING: Blockhain voting website</p>
                            </li>
                            <li><i class="fa fa-check-square"></i>
                                <p>VOTING: SafeBox Voting (phase 1)</p>
                            </li>
                            <li><i class="fa fa-check-square"></i>
                                <p>MULTISIG: Schnorr crypto-library</p>
                            </li>
                            <li><i class="fa fa-check-square"></i>
                                <p>ANON: In-protocol PASC & PASA
                                    exchange</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>GUI: New Wallet (with OS X
                                    support)</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>GUI: Translation Portal</p></li>
                            <li><i class="fa fa-check-square"></i>
                                <p>DAO: 90% developer reward open to
                                    community </p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <h3>Our Goals</h3>
                    <div>
                        <ul class="roadmap goals">
                            <li><i class="fa fa-square"></i>
                                <p>CORE: Checkpoint Torrenting</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>CORE: Account Data</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>CORE: Layer-2 operation support</p>
                            </li>
                            <li><i class="fa fa-square"></i>
                                <p>CORE: Super-optimization phase (goal:
                                    100k/sec)</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>VOTING: SafeBox Voting (phase 2)</p>
                            </li>
                            <li><i class="fa fa-square"></i>
                                <p>MULTISIG: Schnorr aggregate
                                    signatures</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>ANON: Private Balances & Payments
                                    (ZK-SNARKs)</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>GUI: V3 Full Translations</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>GUI: Mobile Wallets (iOS &
                                    Android)</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>LAYER2: Private Send Protocol</p>
                            </li>
                            <li><i class="fa fa-square"></i>
                                <p>LAYER2: PASC Data Storage Network
                                    (DSN)</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>LAYER2: PascalTokens V1 </p></li>
                            <li><i class="fa fa-square"></i>
                                <p>LAYER2: PascalDEX (decentralised
                                    exchange)</p></li>
                            <li><i class="fa fa-square"></i>
                                <p>LAYER2: PascalMessenger (PASC
                                    MSG) </p></li>
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
                        <h3 style="font-weight: 700; margin-top: 0; color: white;">Subscribe Newsletter</h3>
                    <p>Subscribe to our email newsletter for useful tips and
                        valuable resources.</p>
                </div>
            </div>

            <div>
                <div class="sub-text-box">
                    <div class="sub-tex">
                        <div class="input-group">
                            @csrf
                            <input type="text" id="subscribe_email" class="form-control" placeholder="Enter your email here...">
                            <span class="input-group-btn">
                                <button type="button" id="subscribe_button" class="btn btn-default subscribe-btn" data-target="{{route('newsletter-submit')}}">Subscribe</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="subscribe_success" style="display: none;color: #f79321; padding: 4px; font-weight: 400; background: white;">Thank you for your subscription.</div>
                <div id="subscribe_error" style="display: none;color: red; padding: 4px; font-weight: 400; background: white;"></div>
            </div>
        </div>
    </div>
    <div class="faq">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <h3 class="section-heading">Frequently Asked
                            Questions</h3>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}"
                                                  alt=""></div>
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