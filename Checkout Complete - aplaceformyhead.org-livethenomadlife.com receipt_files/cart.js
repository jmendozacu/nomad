function Cart() {
    'use strict';

    var self     = this;
    var interval = 0;
    var loading;
    var $;

    self.loaded = false;

    self.init = function(jQuery) {
        if (self.loaded) {
            return false;
        }

        self.loaded = true;

        $ = jQuery;

        var markup = '<div id="cart_preview">' +
                '<p>Order Summary<span id="cart_summary"></span></p>' +
                '<p id="cart_domain">Hosting Service: <span class="alert"></span></p>' +
                '<div class="shaded">' +
                    '<table id="cart_table">' +
                        '<thead><tr><th>Product</th><th>Price</th><th></th></tr></thead>' +
                        '<tbody id="cart_list"></tbody>' +
                        '<tfoot><tr><td id="cart_subtotal">Subtotal:</td><td id="cart_total">--</td></tr></tfoot>' +
                    '</table>' +
                '</div>' +
                '<a href="/cgi/cart" id="cart_checkout" class="btn_primary">Checkout Now</a>' +
            '</div>';
        var tray = $('#header .icon_tray');
        var drop;

        tray.append(markup);

        drop = $('#cart_preview');

        interval = loading($('#cart_preview .shaded'));

        if (page_settings && page_settings.best_domain) {
            $('#cart_domain span').text(page_settings.best_domain);
        }

        var activate_drop = function(e, el, drop) {
            e.preventDefault();

            el            = $(el);
            drop          = $(drop);
            var target    = $(e.target);
            var active    = $('.icon_tray').has(target).length === 0 || (target.is(el) && el.hasClass('active'));
            var hide_drop = function(e, el, drop) {
                el.removeClass('active');
                drop.hide();
            };

            $('.icon_tray .icon').removeClass('active');

            $('.icon_tray').children()
                .filter(function() {
                    return !$(this).hasClass('icon');
                })
                    .hide();

            if (active) {
                hide_drop(e, el, drop);

                return false;
            }

            el.addClass('active');

            drop.show();
        };

        $('.icon_tray').on('click', '#cart', function(e) {
            activate_drop(e, $(this), drop);

            $(document).on('mouseup', function(e) {
                if ($('.icon_tray').has(e.target).length === 0) {
                    activate_drop(e, $(this), drop);
                }
            });
        });

        drop.on('click', '.cart_remove', function() {
            self.remove(this);
        });

        self.update();
    };

    loading = function(el, text) {
        if (typeof window.jQuery && el) {
            var loading_text = typeof text !== 'undefined' ? text : 'Loading';

            el = $(el);

            if (!el.find('.loading').length) {
                el.append('<p class="loading">'+ loading_text +'<span class="ellipses"></span></p>');
            }
            else {
                el.find('.loading .ellipses').empty();
            }

            return setInterval(function() {
                if (el.find('.ellipses').text().length < 3) {
                    $('.ellipses').append('.');
                }
                else {
                    $('.ellipses').empty();
                }
            }, 300);
        }
        else {
            return false;
        }
    };

    self.api = function(action) {
        return location.protocol +'//'+ location.host +'/cgi/cart/api/'+ (action ? action : '');
    };

    self.add = function(type, sub, desc) {
        if (typeof type === 'undefined') {
            this.update();

            return;
        }

        var data = {type: type};

        if (sub) {
            data.subtype = sub;
        }

        if (desc) {
            data.sys_desc = desc;
        }

        $.getJSON(self.api('add'), data, function(d) {
            self.update(d, type);
        });
    };

    self.remove = function(el) {
        el      = $(el);
        var key = el.attr('data-key');

        if (el.hasClass('cart_remove')) {
            el.addClass('cart_wait');
        }

        $.getJSON(self.api('remove'), {cart_key:key}, self.update);
    };

    self.update = function(d) {
        if (!d) {
            $.getJSON(self.api('show'), function(d) {
                self.update(d);
            });

            return;
        }

        var list  = $('#cart_list');
        var total = $('#cart_total');
        var prods = d.products;

        total.text('--');

        list.empty();

        $('#cart_table thead, #cart_table tfoot').show();

        if (interval) {
            clearInterval(interval);

            $('#cart_preview .loading').remove();
            $('#cart_table').show();

            interval = 0;
        }

        if (prods) {
            $.each(prods, function(i) {
                var product     = prods[i];
                var domain      = product.domain.toLowerCase() || product.sys_desc;
                var description = product.description +' <small>('+ domain +')</small>';
                var remove      = product.hide_delete ? '<td></td>' : '<td class="cart_remove" data-key="'+ product.cart_key +'"></td>';
                var parity      = (i % 2) === 0 ? 'odd' : 'even';
                var table_row = '<tr class="'+ parity +'">' +
                        '<td class="cart_product">'+ description +'</td>' +
                        '<td class="amount">'+ product.html_entity + product.amount +'</td>' +
                        remove +
                    '</tr>';

                list.append(table_row);
            });

            if (prods.length) {
                $('#cart').addClass('cart_items');
                $('#cart_summary').text(' - '+ prods.length +' Items');
            }
        }

        if (d.total === '0.00') {
            $('#cart_table thead, #cart_table tfoot').hide();

            list.append('<tr><td colspan="100%">Your cart is currently empty</td></tr>');

            $('#cart').removeClass('cart_items');
            $('#cart_summary').text('');
        }

        $('#cart_total').html(d.html_entity + d.total);
    };
}
(function(window, document, undefined) {
    'use strict';

    (function(factory) {
        if (typeof define === 'function' && define.amd) {
            define(factory(window.jQuery));
        }
        else if (window.jQuery) {
            return factory(window.jQuery);
        }
    }(function($) {
        return new Cart($);
    }));
})(window, document);
