
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// a simple mapping of all page related javascripts.
const pageMap = {
    home: require('./pages/home'),
    whitepapers: require('./pages/whitepapers'),
    voting: require('./pages/voting'),
    contact: require('./pages/contact'),
    get_started: require('./pages/get_started'),
    pips: require('./pages/pips'),
    pip: require('./pages/pip'),
    rpc: require('./pages/rpc'),
};

$(function() {

    // crete new page instance
    const $body = $("body");
    new pageMap[$body.attr('id')]($body);

    $('.navbar-default').stickUp();

    // global stuff


    // init tabs
    $('.nav-tabs a').click(function(){
        $(this).tab('show');
    });

    // init accordions
    const $accordions = $('.accordion');
    $accordions.on('click', (e) => {
        $accordions.removeClass('active');

        const $button = $(e.currentTarget);
        const $panel = $button.next('.panel');
        if($button.data('open') === true) {
            $button.removeClass('active');
            $button.data('open', false);
            $panel.hide();
        } else {
            $button.addClass('active');
            $button.data('open', true);
            $panel.show();
        }
    });


    $('a[href*=\\#]:not([data-toggle])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'')
            && location.hostname === this.hostname) {
            let $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                const targetOffset = $target.offset().top;
                window.scroll({ top: targetOffset, left: 0, behavior: 'smooth' });
                return false;
            }
        }
    });

});
