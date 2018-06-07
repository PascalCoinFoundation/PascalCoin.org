@extends('layouts.main')

@section('body-id')
    home
@endsection

@section('content')

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
                                                second barrier!
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

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead">
                        <!--h3 class="section-heading">Whitepapers</h3-->
                        <p>A completely original cryptocurrency with groundbreaking new technology called Safebox</p>
                        <div class="mid-sep"><img src="{{asset('images/footsep.png')}}" alt=""></div></div>
                    </div>
                </div>
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
                <div class="col-sm-6">
                    <iframe width="100%" height="300"
                            src="https://www.youtube.com/embed/F25UU-0W9Dk?feature=oembed"
                            frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="col-sm-6">

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
                    <p><a class="alternate_download"
                          href="https://sourceforge.net/projects/pascalcoin/"
                          target="_blank">Alternate Download Site</a></p>
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
                        <div class="col-sm-6 col-md-4 text-center Secure1">
                            <div class="single-feature mhight">
                                <div class="rotate rotate1"></div>
                                <h3 class="Securehead">Infinite Scaling</h3>
                                <div class="midarrow"></div>
                                <p>Infinite Scaling is the ability for a
                                    cryptocurrency to run for an infinite period
                                    of time using the same amount of storage (at
                                    a constant throughput). All other...</p>
                                <a class="button" href="{{route('whitepapers')}}#infinite">Learn
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
                                <a class="button" href="{{route('whitepapers')}}#reliable">Learn
                                    More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 text-center Secure3">
                            <div class="single-feature mhight">
                                <div class="rotate rotate3"></div>
                                <h3 class="Securehead">Account Names And
                                    Types</h3>
                                <div class="midarrow"></div>
                                <p>One of the key new features of PascalCoin is
                                    that accounts can have unique names which
                                    are publicly visible, much in the same way
                                    as the domain names system... </p>
                                <a class="button" href="{{route('whitepapers')}}#account">Learn
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
                                <a class="button" href="{{route('whitepapers')}}#assets">Learn
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
                                <a class="button" href="{{route('whitepapers')}}#funded_by">Learn
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
                                <a class="button" href="{{route('whitepapers')}}#anonymous">Learn
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
                        <h3 class="section-heading">Coin Specs</h3>
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
                <p>Now and into the future we are committed to improving the
                    availability and development of PascalCoin. Here you can see
                    our current broad-strokes roadmap for future development and
                    progress of PascalCoin.</p>
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
                            <li><i class="fa fa-square-square"></i>
                                <p>CORE: 50% inflation reduction</p>
                            </li>
                            <li><i class="fa fa-square-square"></i>
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
                            <li><i class="fa fa-square"></i>
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
                            <input type="text" id="subscribe_email"
                                   class="form-control"
                                   placeholder="Enter your email here...">
                            <span class="input-group-btn">
                        <button type="button" id="subscribe_button"
                                class="btn btn-default subscribe-btn" data-target="{{route('newsletter-submit')}}">Subscribe</button>
                    </span>
                        </div>
                    </div>
                </div>
                <div id="subscribe_success" style="display: none;color: #f79321; padding: 4px; font-weight: 400; background: white;">Thank you for your subscription.</div>
                <div id="subscribe_error" style="display: none;color: red; padding: 4px; font-weight: 400; background: white;"></div>
                </div>
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
                                <li class="active"><a href="#tab1primary"
                                                      data-toggle="tab">
                                        <i class="fa fa-users"></i>PascalCoin</a>
                                </li>
                                <li>
                                    <a href="#tab2primary" data-toggle="tab"><i
                                                class="fa fa-user"></i>Accounts</a>
                                </li>
                                <li>
                                    <a href="#tab3primary" data-toggle="tab"><i
                                                class="fa fa-money-bill"></i>Operations</a>
                                </li>
                                <li>
                                    <a href="#tab4primary" data-toggle="tab"><i
                                                class="fa fa-exchange"></i>Exchanges</a>
                                </li>
                                <li>
                                    <a href="#tab5primary" data-toggle="tab"><i
                                                class="fa fa-hashtag"></i>Mining</a>
                                </li>
                                <li>
                                    <a href="#tab6primary" data-toggle="tab"><i
                                                class="fa fa-codepen"></i>
                                        Developers</a>
                                </li>
                                <li>
                                    <a href="#tab7primary" data-toggle="tab"><i
                                                class="fa fa-certificate"></i>New
                                        Wallet Design!</a>
                                </li>

                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active"
                                     id="tab1primary">

                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How does the
                                            SafeBox technology work?
                                        </button>
                                        <div class="panel faqpanel">
                                            <ul>
                                                <li>The SafeBox is composed of
                                                    many account segments
                                                </li>
                                                <li>Each account segment
                                                    contains a set of N accounts
                                                    (N is 5 for now)
                                                </li>
                                                <li>Each account contains a
                                                    user’s public key, current
                                                    balance, etc
                                                </li>
                                                <li>Blocks are mined using
                                                    <a href="https://de.wikipedia.org/wiki/Proof_of_Work" target="_blank">Proof-of-Work</a>, with 5
                                                    minutes confirmation time
                                                </li>
                                                <li>Every new block appends an
                                                    account segment to the
                                                    SafeBox
                                                </li>
                                                <ul>
                                                    <li>These accounts are
                                                        awarded to the miner
                                                    </li>
                                                    <li>1 of these accounts
                                                        contains the mining
                                                        reward with PASC
                                                    </li>
                                                    <li>Copy of the block header
                                                        is kept in the account
                                                        segment (V2)
                                                    </li>
                                                </ul>
                                                <li>Blocks contain signed
                                                    transactions (operations)
                                                    which update balances/keys
                                                    of existing accounts
                                                </li>
                                                <li>New blocks reference the
                                                    hash of the SafeBox, not
                                                    last the block.
                                                </li>
                                                <li>Only 100 blocks are kept for
                                                    difficulty calculation, rest
                                                    can be deleted freely.
                                                </li>
                                                <li>Nodes process and update
                                                    their SafeBox’s
                                                    independently, ensuring P2P
                                                    decentralisation
                                                </li>
                                                <ul>
                                                    <li>Nodes only accept the
                                                        SafeBox with
                                                        “most-work”. The work
                                                        for each block is
                                                        determined from the
                                                        proof-of-work payloads
                                                        inside the block headers
                                                        maintained in account
                                                        segments.
                                                    </li>

                                                </ul>
                                                <li>Nodes distribute SafeBox’s
                                                    to themselves in a
                                                    torrent-like manner
                                                </li>
                                            </ul>
                                            <img class="img-responsive"
                                                 src="/images/PastedGraphic-1.png">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">What is the
                                            issuance and inflation of PASC?
                                        </button>
                                        <div class="panel">
                                            <p><img class="img-responsive"
                                                    src="/images/issuance.png">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How long does
                                            it take for blocks to be mined?
                                        </button>
                                        <div class="panel">
                                            <p>PascalCoin uses 5 minute
                                                block-time. However,
                                                0-confirmation transactions are
                                                more reliable than in other
                                                cryptocurrencies. Additionally,
                                                once the
                                                double-spend-detection-service
                                                is rolled out, merchants will be
                                                able to accept 0-confirmation
                                                transactions with high degree of
                                                confidence, suitable for small
                                                purchases like Coffee.</p>
                                            <p>For transactions of significant
                                                value, we commend a reasonable
                                                number of confirmations before
                                                considering payment as
                                                cleared.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Is PascalCoin
                                            PoW or PoS?
                                        </button>
                                        <div class="panel">
                                            <p>PascalCoin is <a href="https://de.wikipedia.org/wiki/Proof_of_Work" target="_blank">Proof-of-Work</a>
                                                (PoW).</p>
                                            <p>The SafeBox model does not work
                                                with <a href="https://de.wikipedia.org/wiki/Proof_of_Stake" target="_blank">Proof-of-Stake</a> (PoS) since
                                                stake-proofs cannot be
                                                aggregated to secure the
                                                SafeBox.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Is PascalCoin
                                            anonymous?
                                        </button>
                                        <div class="panel">
                                            <p>PascalCoin is currently as
                                                anonymous as Bitcoin. Whilst
                                                accounts and balances are
                                                publicly visible, the knowledge
                                                of who controls those accounts
                                                is not.</p>
                                            <p>PascalCoin does provide an extra
                                                level of anonymity through PASA
                                                Exchange. Instead of Bob paying
                                                Alice 100 PASC, Bob transfers an
                                                account containing 100 PASC to
                                                Alice. So long as Alice uses a
                                                new key and communicates that
                                                key to Bob through secure
                                                channels, there is no way to
                                                link Bob and Alice.</p>
                                            <p>In the Roadmap, there are plans
                                                to add Private Balances and
                                                Private Payments into PascalCoin
                                                using the ZK-SNARKs approach
                                                pioneered by ZCash. This will
                                                provide comprehensive anonymity.
                                                Receiver will not know who
                                                sender is, and 3rd parties will
                                                not know sender, receiver or
                                                amount being sent. Public
                                                balances and public transactions
                                                will be retained as it is useful
                                                for many use-cases.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Who created
                                            PascalCoin and when?
                                        </button>
                                        <div class="panel">
                                            <p>PascalCoin was invented and
                                                designed by Albert Molina in May
                                                2016. By July 2016, the the
                                                first beta version was released.
                                                On August 11, 2016, the
                                                PascalCoin genesis block was
                                                generated and Albert published
                                                the source code and wallet
                                                installer on GitHub and
                                                SourceForge, and explained it at
                                                Bitcoin freenode forum. A few
                                                hours later he started a thread
                                                at BitCoinTalk explaining
                                                it.</p>
                                            <p>After the initial V1 release, new
                                                developers joined the project
                                                forming what is known as the
                                                PascalCoin Developers. The
                                                PascalCoin Developers
                                                fundamentally improved the
                                                SafeBox design by providing the
                                                “missing piece of the puzzle” –
                                                the ability of making the
                                                SafeBox independently verifiable
                                                without the need for blocks,
                                                even for new nodes. This
                                                innovation was initially
                                                proposed by Herman Schoenfeld,
                                                and after discussion with
                                                Albert, was implemented in
                                                PascalCoin V2 by Albert.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How is
                                            PascalCoin Developed?
                                        </button>
                                        <div class="panel">
                                            <p>PascalCoin Improvement Proposals
                                                (PIPs) are the standard way for
                                                changes to be introduced into
                                                PascalCoin. PIPs are intended to
                                                be the primary mechanisms for
                                                proposing new features into
                                                PascalCoin and documenting
                                                design decisions. Anyone can
                                                submit a PIP and all PIPs are
                                                evaluated through the PIP
                                                Workflow. <a
                                                        href="{{route('pips')}}">
                                                    Click here to see the
                                                    current list of PIPs.</a>
                                            </p>
                                            <p>Development is organised via the
                                                <a href="https://trello.com/b/74kZ9niP/pascalcoin-development">Trello
                                                    board</a> using Agile
                                                development methodology.
                                                PascalCoin currently has several
                                                full-time developers including
                                                Albert Molina and Herman
                                                Schoenfeld. Sphere 10, a company
                                                directed by Herman, also
                                                allocates developers to this
                                                project from time to time.
                                                Currently there are 5 full-time
                                                developers actively working on
                                                PascalCoin. PascalCoin also has
                                                a growing community of
                                                infrastructure developers
                                                including Jason Knapp, developer
                                                of
                                                <a href="http://pascwallet.com">PascWallet.com</a>
                                                PASA exchange. Various other
                                                developers have contributed to
                                                the PascalCoin project (web,
                                                documentation, code, etc).</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab2primary">
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">What will the
                                            new wallet look like?
                                        </button>
                                        <div class="panel faqpanel">
                                            <p>
                                                <i>Start-Screen</i>
                                                <img class="img-responsive" src="/images/wallet/wallet_accounts.png">
                                                <i>Multi-Operation Wizard</i>
                                                <img class="img-responsive" src="/images/wallet/wallet_multi.png">
                                                <i>Network information</i>
                                                <img class="img-responsive" src="/images/wallet/wallet_network.png">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">When will the
                                            new wallet be released?
                                        </button>
                                        <div class="panel">
                                            <p>Soon</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">What languages
                                            will new wallet support?
                                        </button>
                                        <div class="panel">
                                            <p>The wallet supports English so far, but we are working on translations as well.
                                                <a href="{{route('contact')}}">Reach out to us</a> if you’d like to help with translations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">What is an
                                            Operation?
                                        </button>
                                        <div class="panel faqpanel">
                                            <p>
                                                Operations in PascalCoin are the
                                                equivalent to “transactions” in
                                                traditional cryptocurrencies.
                                                The difference is that
                                                PascalCoin has many different
                                                types of operations, not just
                                                for transferring funds. For
                                                example, there are operations to
                                                change an accounts key or to
                                                change an accounts name. As a
                                                result, an operation in
                                                PascalCoin should be considered
                                                as an abstracted and generalised
                                                form of a cryptocurrency
                                                “transaction”.</p>
                                            <p>A “Transaction” in PascalCoin is
                                                a type of Operation that
                                                transfers funds between
                                                accounts.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">What are
                                            Operations are available?
                                        </button>
                                        <div class="panel">
                                            <p>PascalCoin currently supports the
                                                following operations:</p>
                                            <ul>
                                                <li>
                                                    <strong>Transaction:</strong>
                                                    moves funds from one account
                                                    to another
                                                </li>
                                                <li><strong>Change Account
                                                        Key:</strong> changes
                                                    owner of an account
                                                </li>
                                                <li><strong>List Account For
                                                        Sale:</strong> lists
                                                    account for public or
                                                    private sale
                                                </li>
                                                <li><strong>Delist
                                                        account:</strong> delists
                                                    an account from sale
                                                </li>
                                                <li><strong>Buy
                                                        Account:</strong>
                                                    purchase & settlement for an
                                                    account listed for sale
                                                </li>
                                                <li><strong>Change
                                                        Info:</strong> changes
                                                    an account name and type
                                                </li>
                                                <li><strong>Recover
                                                        Account:</strong> reap
                                                    zombie account to a new
                                                    owner (account must not have
                                                    made an operation for at
                                                    least 4 years)
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Is there an
                                            Explorer?
                                        </button>
                                        <div class="panel">
                                            <p>
                                                Yes,<a href="http://explorer.pascalcoin.org">
                                                    http://explorer.pascalcoin.org.</a>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How long must
                                            I wait before I can receive/send
                                            funds?
                                        </button>
                                        <div class="panel">
                                            <p>When operations are sent, they
                                                are visible to all nodes after a
                                                few seconds. However, they live
                                                in the “Pending Operations” pool
                                                until a miner mints them in a
                                                block. After 5 minutes
                                                (average), a block will be
                                                minted and will likely contain
                                                all the Pending Operations. As
                                                with other blockchain-based
                                                cryptocurrencies, it is best to
                                                wait a reasonable number of
                                                block confirmations before
                                                considering the payment as
                                                cleared. The more block
                                                confirmations that operation
                                                receives, the less likely it is
                                                ever to be rolled back.</p>
                                            <p>For large transfers, waiting for
                                                2-4 confirmations is acceptable.
                                                For small micro-transactions,
                                                many accept 0-confirmation
                                                transaction since they are still
                                                quite safe. In the future, there
                                                will be a
                                                Double-Spend-Detection-Service
                                                to further verify 0-confirmation
                                                transactions for reliability.
                                                Good enough for Coffee.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How do I buy
                                            PascalCoin?
                                        </button>
                                        <div class="panel faqpanel">
                                            <p>PascalCoin can be purchased from
                                                cryptocurrency exchanges using
                                                Bitcoin and/or other major
                                                coins.</p>
                                            <p>See next question for list of
                                                exchanges.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Where do I buy
                                            PascalCoin?
                                        </button>
                                        <div class="panel">
                                            <p>The following exchanges list
                                                PascalCoin (PASC) for
                                                trading:</p>
                                            <ul>
                                                <li><strong><a href="https://www.poloniex.com/" target="_blank">Poloniex</a> – </strong>largest volume exchange (high volume)</li>
                                                <li><strong><a href="https://www.qbtc.com/" target="_blank">QBTC</a> – </strong>high volume exchange</li>
                                                <li><strong>Bitsquare – </strong>decentralised, anonymous but low volume
                                                </li>
                                            </ul>
                                            <p>The following exchanges list PascalCoin accounts (PASA) for trading:</p>
                                            <ul>
                                                <li>PascWallet.com</li>
                                                <li>GetPasa.com (account dispenser)
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How can I integrate PascalCoin into my exchange/service?</button>
                                        <div class="panel">
                                            <p>PascalCoin supports the full 3rd party integration capability including offline coldwallet operation signing.</p>
                                            <p>Simply install the daemon and use the JSON-RPC API. See Developers tab.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How can I mine PascalCoin?</button>
                                        <div class="panel faqpanel">
                                            <p>There are many options to mine PascalCoin from solo-mining to pool-mining. Check out this mining guide.</p>
                                            <p>Visit our Discord channel #mining and discuss with community to get started.</p>
                                            <p>
                                                <iframe src="https://www.youtube.com/embed/0EC_XTVgq6M"
                                                        width="560" height="315"
                                                        frameborder="0"
                                                        allowfullscreen="allowfullscreen"
                                                        data-mce-fragment="1"></iframe>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How can I
                                            dual-mine Ethereum and PascalCoin?
                                        </button>
                                        <div class="panel">
                                            <p>How to Dual Mine ETH and PASC
                                                using Coinotron</p>
                                            <ul>
                                                <li>Create account at
                                                    Coinotron
                                                </li>
                                                <li>Click activation link in
                                                    your mail
                                                </li>
                                                <li>Login</li>
                                                <li>Create a worker under “My
                                                    Account” > “Workers”
                                                </li>
                                                <li>Download Claymore Dual Miner
                                                    from bitcointalk.
                                                </li>
                                                <li>Add “-dcoin pasc -dpool
                                                    coinotron.com:3348 -dwal
                                                    username.workername” to your
                                                    start.bat where username is
                                                    your Coinotron username, and
                                                    workername is the name of
                                                    the worker you created in
                                                    step 4.
                                                </li>
                                            </ul>
                                            <p>Do you still have questions? Take
                                                a look at the long, thorough PDF
                                                guide.</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab6primary">
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Where is the
                                            source code?
                                        </button>
                                        <div class="panel faqpanel">
                                            <p>Source code is maintained in
                                                GitHub.</p>
                                            <a href="https://github.com/PascalCoin/PascalCoin">https://github.com/PascalCoin/PascalCoin</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Is there a
                                            JSON-RPC API?
                                        </button>
                                        <div class="panel">
                                            <p>PascalCoin offers a <a
                                                        href="https://github.com/PascalCoin/PascalCoin/wiki/JSON-RPC-API">JSON
                                                    RPC API</a> available on
                                                both the Daemon and the GUI.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">Is there
                                            .NET/C# support?
                                        </button>
                                        <div class="panel">
                                            <p>There is a full C# implementation
                                                of PascalCoin being developed by
                                                <a href="http://www.sphere10.com">Sphere
                                                    10 Software</a> called <a
                                                        href="https://github.com/Sphere10/NPascalCoin">NPascalCoin</a>.
                                                It currently supports the
                                                JSON-RPC API with plans for
                                                network protocol.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">How is the
                                            Proof of Work calculated?
                                        </button>
                                        <div class="panel">
                                            <p>Proof Of Work Summary</p>
                                            <p>Proof of Work =
                                                SHA256(SHA256(WorkPayload))</p>
                                            <p>WorkPayload := Digest1 ++ Digest2
                                                ++ Digest3</p>
                                            <p>Digest1 := BlockNumber ++
                                                AccountKey ++ Reward ++
                                                ProtocolVersion ++
                                                ProtocolAvailable ++
                                                CompactTarget</p>
                                            <p>Digest2 := miner payload (raw
                                                bytes, ASCII string used as
                                                convention)</p>
                                            <p>Digest3 := CurrentSafeBoxHash ++
                                                OperationsHash ++ Fee</p>
                                            <p>The OperationsHash is similar in
                                                concept to the merkle-root of
                                                transactions except is
                                                calculated as follows:</p>
                                            <p>OperationsHash :=
                                                OperationHash(N) where N is
                                                number of operations in the
                                                block where</p>
                                            <p>OperationHash(x) :=
                                                SHA256(OperationHash(x-1) ++
                                                Operation[x].Hash)</p>
                                            <p>You can see the block hashing
                                                code at:</p>
                                            <p>UBlockchain.pas line 819:</p>
                                            <p>
                                                TPCOperationsComp.CalcProofOfWork</p>
                                            <p>UAccounts.pas line 421:</p>
                                            <p>
                                                TPascalCoinProtocol.CalcProofOfWork_Part1</p>
                                            <p>
                                                TPascalCoinProtocol.CalcProofOfWork_Part3</p>
                                            <p>Join our Discord channel and ask
                                                any questions on #development
                                                channel.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab7primary">
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">What will the
                                            new wallet look like?
                                        </button>
                                        <div class="panel faqpanel">
                                            <p>
                                            <i>Start-Screen</i>
                                            <img class="img-responsive" src="/images/wallet/wallet_accounts.png">
                                            <i>Multi-Operation Wizard</i>
                                            <img class="img-responsive" src="/images/wallet/wallet_multi.png">
                                            <i>Network information</i>
                                            <img class="img-responsive" src="/images/wallet/wallet_network.png">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">When will the
                                            new wallet be released?
                                        </button>
                                        <div class="panel">
                                            <p>Soon</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 faq_accordian">
                                        <button class="accordion">What languages
                                            will new wallet support?
                                        </button>
                                        <div class="panel">
                                            <p>The wallet supports English so far, but we are working on translations as well.
                                                Reach out to us if you’d like to help with translations.</p>
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
    </div>
@endsection