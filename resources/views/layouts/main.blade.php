<?php
$dtGroup = 'layout';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="@dt($dtGroup, 'meta_description', 'A completely original cryptocurrency with groundbreaking new technology called SafeBox', false)">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@dt($dtGroup, 'meta_base_title', 'PascalCoin.com', false) | {{strtoupper(trim(View::yieldContent('body-id')))}}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/app.css')}}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121201459-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121201459-1');
    </script>
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-121201459-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
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
                <span class="sr-only">@dt($dtGroup, 'toggle_navigation', 'Toggle navigation')</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt=""/></a>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            {{menu('web', 'menu')}}
        </div>

    </div>
</nav>
<div class="container">
<section class="section-ticker">
        <span class="section-ticker__info">
            <span class="section-ticker__info-label">@dt($dtGroup, 'ticker_USD', 'USD:')</span>
            <span class="section-ticker__info-data">&dollar;{{number_format($cmc_USD->price, 2)}}</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">{{$cmc_BTC->symbol}}:</span>
            <span class="section-ticker__info-data">{{number_format($cmc_BTC->price, 8)}}</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">@dt($dtGroup, 'ticker_market_cap', 'Market Cap:')</span>
            <span class="section-ticker__info-data">&dollar;{{number_format($cmc_USD->market_cap, 2)}} USD</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">@dt($dtGroup, 'ticker_supply', 'Supply:')</span>
            <span class="section-ticker__info-data">{{number_format($cmc_USD->supply)}} PASC</span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">@dt($dtGroup, 'ticker_one_hour', '1 Hr:')</span>
            <span class="section-ticker__info-data section-ticker__info-data--{{$cmc_USD->percent_change_1h >= 0 ? 'up' : 'down'}}">
                {{number_format($cmc_USD->percent_change_1h, 2)}}%
            </span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">@dt($dtGroup, 'ticker_one_day', '1 Day:')</span>
            <span class="section-ticker__info-data section-ticker__info-data--{{$cmc_USD->percent_change_24h >= 0 ? 'up' : 'down'}}">
                {{number_format($cmc_USD->percent_change_24h, 2)}}%
            </span>
        </span>
    <span class="section-ticker__info">
            <span class="section-ticker__info-label">@dt($dtGroup, 'ticker_seven_days', '7 Days:')</span>
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
                                    <a href="https://www.cryptomonster.co.uk/buy-pascal-coin" target="_blank">cryptomonster (supports bank-wires)</a>
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
            <p>@dt($dtGroup, 'copyright', 'All Copyright (c) 2018 [PascalCoin Foundation](https://www.pascalcoin.org)')</p>
        </div>
    </div>
</div>


<!-- JavaScript -->
<script src="{{mix('js/app.js')}}"></script>


</body>

</html>
