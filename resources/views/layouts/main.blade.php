<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="A completely original cryptocurrency with groundbreaking new technology called Safebox">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PascalCoin.com | {{strtoupper(trim(View::yieldContent('body-id')))}}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/app.css')}}" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#eb6c44",
                        "text": "#ffffff"
                    },
                    "button": {
                        "background": "#f5d948"
                    }
                },
                "theme": "edgeless",
                "position": "top",
                "static": true
            })});
    </script>
</head>

<body id="{{trim(View::yieldContent('body-id'))}}">

<!-- Preloader -->
<!--div id="preloader">
    <div id="status"></div>
</div-->

<!-- NavBar-->
<nav class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt=""/></a>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                @if(Request::get('binance') === '1' || env('BINANCE', false) === true)
                    <li class="menuItem"><a href="https://www.binance.com/vote.html" style="font-weight: 700 !important"><img src="{{asset('images/binance-icon.png')}}" height="16" style="margin-right: 10px;">Vote on Binance!</a></li>
                @endif
                <!--li class="menuItem {{Route::currentRouteName() === 'home' ? 'menuItem-active':''}}"><a href="{{route('home')}}">Home</a></li-->
                <li class="menuItem {{Route::currentRouteName() === 'get_started' ? 'menuItem-active':''}}"><a href="{{route('get_started')}}">Get Started</a></li>
                <li class="menuItem {{Route::currentRouteName() === 'whitepapers' ? 'menuItem-active':''}}"><a href="{{route('whitepapers')}}">Whitepapers</a></li>
                <!--li class="menuItem {{Route::currentRouteName() === 'projects' ? 'menuItem-active':''}}"><a href="{{route('projects')}}">Projects</a></li-->
                <li class="dropdown menuItem {{Request::is('development/*') ? 'menuItem-active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Development <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="menuItem"><a href="{{route('pips')}}">PIPs</a></li>
                        <li class="menuItem"><a href="{{route('projects')}}">Community Projects</a></li>
                        <li class="menuItem"><a href="{{route('rpc')}}">JSON RPC</a></li>
                    </ul>
                </li>
                <!--li class="menuItem {{Route::currentRouteName() === 'voting' ? 'menuItem-active':''}}"><a href="{{route('voting')}}">Voting</a></li-->
                <li class="menuItem {{Route::currentRouteName() === 'contact' ? 'menuItem-active':''}}"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>

    </div>
</nav>
<div class="container">
<section class="section-ticker">
        <span class="section-ticker__info">
            <span class="section-ticker__info-label">USD:</span>
            <span class="section-ticker__info-data">&dollar;{{number_format($cmc_USD->price, 2)}}</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">{{$cmc_BTC->symbol}}:</span>
            <span class="section-ticker__info-data">{{number_format($cmc_BTC->price, 8)}}</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">Market Cap:</span>
            <span class="section-ticker__info-data">&dollar;{{number_format($cmc_USD->market_cap, 2)}} USD</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">Supply:</span>
            <span class="section-ticker__info-data">{{number_format($cmc_USD->supply)}} PASC</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">1 Hr:</span>
            <span class="section-ticker__info-data section-ticker__info-data--{{$cmc_USD->percent_change_1h >= 0 ? 'up' : 'down'}}">
                {{number_format($cmc_USD->percent_change_1h, 2)}}%
            </span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">1 Day:</span>
            <span class="section-ticker__info-data section-ticker__info-data--{{$cmc_USD->percent_change_24h >= 0 ? 'up' : 'down'}}">
                {{number_format($cmc_USD->percent_change_24h, 2)}}%
            </span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">7 Days:</span>
            <span class="section-ticker__info-data section-ticker__info-data--{{$cmc_USD->percent_change_7d >= 0 ? 'up' : 'down'}}">
                {{number_format($cmc_USD->percent_change_7d, 2)}}%
            </span>
        </span>
</section>
</div>
@yield('content')

<div class="footerwrap">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-tags-widget-area footer-top-content">
                        <div class="footer-widget-heading">
                            <h3>Navigation</h3>
                        </div>
                        <div class="footer-widget-content">
                            <ul class="links">
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('get_started')}}">Get Started</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('whitepapers')}}">Whitepapers</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('pips')}}">PIPs</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('projects')}}">Community Projects</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('voting')}}">Voting</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://github.com/PascalCoin/PascalCoin/releases" target="_blank">Download Wallet</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="http://explorer.pascalcoin.org" target="_blank">Explorer</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="footer-top-content">
                        <div class="footer-widget-heading">
                            <h3>Exchanges</h3>
                        </div>
                        <div class="footer-widget-content">
                            <ul class="links">
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://poloniex.com/exchange#btc_pasc" target="_blank">Poloniex</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://www.qbtc.com/trade" target="_blank">QBTC</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://www.pascwallet.com/Market/MarketPurchase" target="_blank"><span class="site-footer__link-subtext">PascWallet (PASA exchange)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="http://www.getpasa.com/" target="_blank"><span class="site-footer__link-subtext">GetPASA (get your first account)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://markets.bisq.network/?market=pasc_btc" target="_blank">Bisq (decentralised exchange)</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-tags-widget-area footer-top-content">
                        <div class="footer-widget-heading">
                            <h3>Social</h3>
                        </div>
                        <div class="footer-widget-content">
                            <ul class="links">
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://twitter.com/PascalCoin" target="_blank">Follow us on Twitter</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://www.facebook.com/PascalCoin-850645181770093" target="_blank">Follow us on Facebook</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://www.instagram.com/pascalcoinofficial/" target="_blank">Follow us on Instagram</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://medium.com/@pascalcoinmktg" target="_blank">Follow our blog on Medium</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://discord.gg/sJqcgtD" target="_blank">Join our community on Discord</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://www.reddit.com/r/pascalcoin/" target="_blank">Subscribe to our SubReddit</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://bitcointalk.org/index.php?topic=1583719.0" target="_blank">Read our BitcoinTalk Thread</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://github.com/PascalCoin/PascalCoin" target="_blank">Fork the project on GitHub</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="https://t.me/pascalcoin" target="_blank">Join us on Telegram</a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="http://www.qq.com/" target="_blank">Join us on QQ<span class="site-footer__link-subtext">Group 280212560</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-12 copyright">
            <p>All Copyright (c) 2018   <a href="{{route('home')}}" target="_blank">PascalCoin Foundation</a></p>
        </div>
    </div>
</div>


<!-- JavaScript -->
<script src="{{mix('js/app.js')}}"></script>


</body>

</html>
