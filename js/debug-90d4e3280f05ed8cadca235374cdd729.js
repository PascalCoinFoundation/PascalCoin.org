PascalCoin = function() {
    var $instance = this;
    var $ref = {
        headerNav: null,
        headerNavVisible: false,
        sectionTicker: null,
        sectionTickerPriceUS: null,
        sectionTickerPriceBTC: null,
        sectionTickerMarketCap: null,
        sectionTickerSupply: null,
        sectionTickerChange1: null,
        sectionTickerChange2: null,
        sectionTickerChange3: null
    };

    this.createMobileToggleClickHandler = function() {
        return function() {
            if (!$ref.headerNavVisible) {
                $ref.mobileToggle.addClass('site-header__mobile-toggle--opened');
                $ref.headerNav.addClass('site-header__nav--visible');
                $ref.headerNavVisible = true;
            } else {
                $ref.mobileToggle.removeClass('site-header__mobile-toggle--opened');
                $ref.headerNav.removeClass('site-header__nav--visible');
                $ref.headerNavVisible = false;
            }
        }
    };
    this.createTickerClickHandler = function() {
        return function() {
            window.open('https://coinmarketcap.com/currencies/pascal-coin/', '_blank');
        }
    };
    this.createTickerDataHandler = function() {
        return function($data) {
            var temp;
            if ($.isArray($data)) {
                for (var i = 0; i < $data.length; i++) {
                    if ($data[i] && $data[i].id) {
                        if ($data[i].id === 'pascal-coin') {
                            var title = '';
                            if ($data[i].price_usd) {
                                if ($ref.sectionTickerPriceUS == null) {
                                    temp = $('<span class="section-ticker__info"><span class="section-ticker__info-label">USD:</span></span>')
                                        .appendTo($ref.sectionTicker);
                                    $ref.sectionTickerPriceUS = $('<span class="section-ticker__info-data"></span>')
                                        .appendTo(temp);
                                }
                                $ref.sectionTickerPriceUS.text('$' + parseFloat($data[i].price_usd).toFixed(2));
                                title += ' | $' + parseFloat($data[i].price_usd).toFixed(2) + ' USD';
                            }
                            if ($data[i].price_btc) {
                                if ($ref.sectionTickerPriceBTC == null) {
                                    temp = $('<span class="section-ticker__info"><span class="section-ticker__info-label">BTC:</span></span>')
                                        .appendTo($ref.sectionTicker);
                                    $ref.sectionTickerPriceBTC = $('<span class="section-ticker__info-data"></span>')
                                        .appendTo(temp);
                                }
                                $ref.sectionTickerPriceBTC.text($data[i].price_btc);
                                title += ' | ' + $data[i].price_btc + ' BTC';
                            }
                            if ($data[i].market_cap_usd) {
                                if ($ref.sectionTickerMarketCap == null) {
                                    temp = $('<span class="section-ticker__info"><span class="section-ticker__info-label">Market Cap:</span></span>')
                                        .appendTo($ref.sectionTicker);
                                    $ref.sectionTickerMarketCap = $('<span class="section-ticker__info-data"></span>')
                                        .appendTo(temp);
                                }
                                $ref.sectionTickerMarketCap.text('$' + parseInt($data[i].market_cap_usd).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' USD');
                            }
                            if ($data[i].total_supply) {
                                if ($ref.sectionTickerSupply == null) {
                                    temp = $('<span class="section-ticker__info"><span class="section-ticker__info-label">Supply:</span></span>')
                                        .appendTo($ref.sectionTicker);
                                    $ref.sectionTickerSupply = $('<span class="section-ticker__info-data"></span>')
                                        .appendTo(temp);
                                }
                                $ref.sectionTickerSupply.text(parseInt($data[i].total_supply).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' PASC');
                            }
                            if ($data[i].percent_change_1h) {
                                if ($ref.sectionTickerChange1 == null) {
                                    temp = $('<span class="section-ticker__info"><span class="section-ticker__info-label">1 Hr:</span></span>')
                                        .appendTo($ref.sectionTicker);
                                    $ref.sectionTickerChange1 = $('<span class="section-ticker__info-data"></span>')
                                        .appendTo(temp);
                                }
                                $ref.sectionTickerChange1.text($data[i].percent_change_1h + '%');
                                if ($data[i].percent_change_1h >= 0) {
                                    $ref.sectionTickerChange1.removeClass('section-ticker__info-data--down');
                                    $ref.sectionTickerChange1.addClass('section-ticker__info-data--up');
                                } else {
                                    $ref.sectionTickerChange1.removeClass('section-ticker__info-data--up');
                                    $ref.sectionTickerChange1.addClass('section-ticker__info-data--down');
                                }
                            }
                            if ($data[i].percent_change_24h) {
                                if ($ref.sectionTickerChange2 == null) {
                                    temp = $('<span class="section-ticker__info"><span class="section-ticker__info-label">1 Day:</span></span>')
                                        .appendTo($ref.sectionTicker);
                                    $ref.sectionTickerChange2 = $('<span class="section-ticker__info-data"></span>')
                                        .appendTo(temp);
                                }
                                $ref.sectionTickerChange2.text($data[i].percent_change_24h + '%');
                                if ($data[i].percent_change_24h >= 0) {
                                    $ref.sectionTickerChange2.removeClass('section-ticker__info-data--down');
                                    $ref.sectionTickerChange2.addClass('section-ticker__info-data--up');
                                } else {
                                    $ref.sectionTickerChange2.removeClass('section-ticker__info-data--up');
                                    $ref.sectionTickerChange2.addClass('section-ticker__info-data--down');
                                }
                            }
                            if ($data[i].percent_change_7d) {
                                if ($ref.sectionTickerChange3 == null) {
                                    temp = $('<span class="section-ticker__info"><span class="section-ticker__info-label">7 Days:</span></span>')
                                        .appendTo($ref.sectionTicker);
                                    $ref.sectionTickerChange3 = $('<span class="section-ticker__info-data"></span>')
                                        .appendTo(temp);
                                }
                                $ref.sectionTickerChange3.text($data[i].percent_change_7d + '%');
                                if ($data[i].percent_change_7d >= 0) {
                                    $ref.sectionTickerChange3.removeClass('section-ticker__info-data--down');
                                    $ref.sectionTickerChange3.addClass('section-ticker__info-data--up');
                                } else {
                                    $ref.sectionTickerChange3.removeClass('section-ticker__info-data--up');
                                    $ref.sectionTickerChange3.addClass('section-ticker__info-data--down');
                                }
                            }
                            document.title = 'PascalCoin' + title;
                        }
                    }
                }
            }
        };
    };
    this.createTickerWatchdogHandler = function() {
        return function() {
            $.getJSON('https://api.coinmarketcap.com/v1/ticker/pascal-coin/', $instance.createTickerDataHandler());
            setTimeout($instance.createTickerWatchdogHandler(), 60000);
        };
    };
    this.createWindowResizeHandler = function() {
        return function() {
            if ($ref.headerNavVisible && ($(window).width() >= 768)) {
                $ref.headerNav.removeClass('visible');
                $ref.headerNavVisible = false;
            }
        }
    };
    this.createVoteFrameLoadedHandler = function() {
        return function() {
            this.style.height = this.contentWindow.document.body.scrollHeight + 'px';
        };
    };

    $ref.headerNav = $('.site-header__nav');
    $ref.sectionTicker = $('.section-ticker')
        .on('click', this.createTickerClickHandler());
    $ref.mobileToggle = $('.site-header__mobile-toggle')
        .on('click', this.createMobileToggleClickHandler());
    $(window).on('resize', this.createWindowResizeHandler());
    $instance.createTickerWatchdogHandler()();

    var videoContainer = $('#video-what-is-pascalcoin');
    if (videoContainer.length > 0) {
        videoContainer.append($('<iframe class="container-video__video" src="https://www.youtube.com/embed/F25UU-0W9Dk?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'));
    }

    $('.vote-frame').on('load', this.createVoteFrameLoadedHandler());
};

$(document).ready(function(){
    new PascalCoin();
});
PascalCoinAnimation1 = function() {
    var $instance = this;
    var $ref = {
        a1: null,
        b1: null,
        b2: null,
        b3: null,
        c1: null
    };

    this.createAnimateCompleteHandler = function($stage) {
        return function() {
            switch($stage) {
                case 1:
                    setTimeout(function(){
                        $ref.b1.animate({opacity: 0}, 200, 'swing', $instance.createAnimateCompleteHandler(2));
                    }, 200);
                    break;
                case 2:
                    $ref.b1.animate({opacity: 1}, 200, 'swing', $instance.createAnimateCompleteHandler(3));
                    break;
                case 3:
                    $ref.a1.css({
                        display: 'block',
                        right: '-200px'
                    }).animate({right: '47%'}, 600, 'swing');
                    setTimeout(function() {
                        $ref.b2.css({
                            display: 'block',
                            right: '-250px'
                        }).animate({right: '-1%'}, 500, 'swing');
                    }, 100);
                    setTimeout(function(){
                        $ref.b3.css({
                            display: 'block',
                            left: '-150px'
                        }).animate({left: '-1.5%'}, 400, 'swing', $instance.createAnimateCompleteHandler(4));
                    }, 150);
                    break;
                case 4:
                    $ref.a1.addClass('animation1__a1--flip');
                    $ref.c1.css({
                        display: 'block',
                        top: '-50%',
                        opacity: 0
                    }).animate({top: '0', opacity: 1}, 1500, 'swing');
                    break;
            }
        };
    };

    $ref.a1 = $('.animation1__a1');
    $ref.b1 = $('.animation1__b1');
    $ref.b2 = $('.animation1__b2');
    $ref.b3 = $('.animation1__b3');
    $ref.c1 = $('.animation1__c1');

    setTimeout(function() {
        $ref.b1.css({
            display: 'block',
            opacity: 0
        }).animate({opacity: 1}, 200, 'swing', $instance.createAnimateCompleteHandler(1));
    }, 10);
};

$(window).on('load', function(){
    new PascalCoinAnimation1();
});