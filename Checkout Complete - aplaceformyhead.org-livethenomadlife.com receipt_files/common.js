/* jshint bitwise: false */
(function() {
    'use strict';

    // Use the already loaded jQuery if available
    if ('function' === typeof window.jQuery) {
        define('jquery', [], function() { return window.jQuery; });
    }

    // Use the already loaded underscore if available
    if ('function' === typeof window._) {
        define('underscore', [], function() { return window._; });
    }

    function check_user() {
        setTimeout(warn_if_user_changed, 1000);
    }

    function warn_if_user_changed() {
        var test_u = document.cookie.match(/usession=(.+?)(\/|%2F)/i);
        var login_str;

        if (!test_u) { return; }
        test_u = unescape(test_u[1]);

        if (document.test_u && test_u !== document.test_u) {
            login_str = 'Your login has changed from ' +
                        document.test_u +' to '+ test_u +
                        ', would you like to reload this page?';

            if (window.confirm(login_str)) {
                location.reload();
            }
        }

        document.test_u = test_u;
    }

    if (window.addEventListener) {
        window.addEventListener('focus', check_user, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onfocus', check_user);
    }
    else {
        window.onfocus = check_user;
    }

    function tooltips() {
        $('.tooltip[title]').qtip({
            position: {
                my: 'bottom center',
                at: 'top center',
                viewport: $(window),
                adjust: { method: 'flip' }
            },
            show: 'mouseup',
            hide: 'unfocus'
        });

        $('.tooltip[data-from]').each(function() {
            var target = $(this);
            var tooltip = $('#'+ target.data('from'));

            if (!target.length) { return; }

            tooltip.hide();
            target.qtip({
                content: {
                    text: tooltip
                },
                show: 'mouseup',
                hide: 'unfocus',
                position: {
                    my: 'bottom center',
                    at: 'top center',
                    viewport: $(window),
                    adjust: { method: 'flip' }
                }
            });
        });
    }

    window.tooltips = tooltips;

    if (!Array.prototype.indexOf) {
        Array.prototype.indexOf = function(searchElement) {
            if (this === null) {
                throw new TypeError();
            }

            var t   = Object(this);
            var len = t.length >>> 0;

            if (len === 0) {
                return -1;
            }

            var n = 0;

            if (arguments.length > 1) {
                n = Number(arguments[1]);

                if (n !== n) {
                    n = 0;
                }
                else if (n !== 0 && n !== Infinity && n !== -Infinity) {
                    n = (n > 0 || -1) * Math.floor(Math.abs(n));
                }
            }

            if (n >= len) {
                return -1;
            }

            var k = n >= 0 ? n : Math.max(len - Math.abs(n), 0);

            for (; k < len; k++) {
                if (k in t && t[k] === searchElement) {
                    return k;
                }
            }

            return -1;
        };
    }

    $.cacheScript = function(url,options) {
        options = $.extend(options || {}, {
            dataType: 'script',
            cache: true,
            url: url
        });

        return jQuery.ajax(options);
    };

    $(function() {
        var switcher = $('#hosting_id');

        if ('undefined' !== typeof provinfo) {
            $('body').on('click', '#footer a[href$="//my.'+provinfo.domain+'/cgi/chat"], .js_chat', function(e) {
                e.preventDefault();

                window.open('//my.'+provinfo.domain+'/cgi/chat','chatlite','width=650px,height=600px,location=no,menubar=no,resizable=no,scrollbars=no,status=no,titlebar=no,toolbar=no');
            });
        }

        $(document).on('click', '.collapser .arrow', function() {
            $(this).closest('.collapser')
                .toggleClass('close');
        });

        require(['jquery', 'cart', 'help', 'jquery.doTimeout', 'jquery.colorbox'], function($, cart, help) {
            if (typeof page_settings === 'object') {
                if (page_settings.load_cart) {
                    cart.init($);
                }

                if (page_settings.help_request) {
                    help.init($);
                }
            }

            if (typeof $.colorbox === 'function') {
                $('.youtube').colorbox({
                    iframe      : true,
                    innerWidth  : 420,
                    innerHeight : 315
                });
            }
        });

        if (switcher.length) {
            switcher.on('change', function() {
                $('.hosting_menu form[name="hosting_list"]').submit();
            });
        }

        if ($('.tooltip').length) {
            if ('function' !== typeof $.fn.qtip) {
                require(['jquery.qtip'], tooltips);
            }
            else {
                tooltips();
            }
        }
    });
})();
