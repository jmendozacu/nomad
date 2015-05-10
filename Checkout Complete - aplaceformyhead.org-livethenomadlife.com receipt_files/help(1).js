define(['jquery', 'provinfo', 'help.form'], function Help($, provinfo, form) {
    'use strict';

    var app  = { 'loaded' : false };

    var loading = function(el, text) {
        if ('undefined' !== typeof $ && el) {
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

    app.init = function() {
        var chat_url   = location.protocol +'//my.'+ provinfo.domain +'/cgi/chat';
        var drop;

        if (app.loaded) { return false; }

        app.loaded = true;

        if (!$('#help_drop').length) {
            $('.icon_tray').append($('<div>', { 'id' : 'help_drop' }));
        }

        if ('object' !== typeof provinfo) {
            throw new Error('Missing provinfo object');
        }


        $('body').on('click', '.js_chat', function(e) {
            e.preventDefault();

            window.open(chat_url, 'chatlite', 'width=650px,height=600px,location=no,menubar=no,resizable=no,scrollbars=no,status=no,titlebar=no,toolbar=no');
        });

        drop = $('#help_drop');

        drop.html(form);

        if (typeof page_settings !== 'undefined' && page_settings.help_request) {
            app.update(page_settings.help_request);
        }

        var activate_drop = function(e, el, drop) {
            e.preventDefault();

            el         = $(el);
            drop       = $(drop);
            var target = $(e.target);
            var active = $('.icon_tray').has(target).length === 0 || (target.is(el) && el.hasClass('active'));

            $('.icon_tray .icon').removeClass('active');
            $('.icon_tray').children().filter(function() {
                return !$(this).hasClass('icon');
            }).hide();

            if (active) {
                hide_drop(e, el, drop);
                return false;
            }

            el.addClass('active');
            drop.show();
        };

        var hide_drop = function(e, el, drop) {
            el.removeClass('active');
            drop.hide();
        };

        $('.icon_tray').on('click', '#help_center', function(e) {
            activate_drop(e, $(this), drop);

            $(document).on('mouseup', function(e) {
                if ($('.icon_tray').has(e.target).length === 0) {
                    activate_drop(e,$(this),drop);
                }
            });
        });

        $('#help_drop form').on('submit', function(e) {
            e.preventDefault();

            var results = $('#help_results');

            if ($('#help_search').val().length) {
                $('#help_container').fadeOut(300,function() {
                    results.empty();

                    var interval = loading(results);

                    results.show();
                    app.search($('#help_search').val(),interval);
                });
            }
        });
        return true;
    };

    app.search = function(query, interval) {
        var results = $('#help_results');
        var url     = location.protocol +'//my.'+ provinfo.domain +'/cgi/help/search_api';
        var data;

        $.ajax({url: url, dataType: 'json', data: {search: query}})
            .success(function(d) {
                data = d.articles;

                if (data === null) {
                    data = '<p class="title">No results found. Try again.</p>';
                }

                $('#help_container').fadeOut(function() {
                    results.empty();

                    if (typeof data === 'string') {
                        results.append(data);
                    }
                    else {
                        $('#help_reset').addClass('small');

                        for (var i = 0; i < data.length; i++) {
                            results.append('<a class="small help_topic" href="'+ data[i].full_url +'" target="_blank">'+ data[i].title +'</a>');
                        }

                        results.prepend('<p class="title">Search Results</p>');
                    }

                    results.show()
                        .append('<a id="help_reset">Clear results</a>');
                });
            })
            .promise()
            .done(function() {
                $('#help_drop').on('click', '#help_reset', function() {
                    $('#help_results').empty()
                        .hide();

                    $(this).remove();

                    if ($('#help_container div').contents().length) {
                        $('#help_container').fadeIn();
                    }

                    $('#help_search').val('')
                        .focus();
                });
            })
            .fail(function() {
                $('#help_results').append('<p class="error">Request failed</p>');
            })
            .always(function() {
                $('.loading').remove();
                clearInterval(interval);
            });
    };

    app.update = function(request) {
        $.getJSON('/cgi/quick_help?r='+ request, function(d) {
            var urls    = d.urls && typeof d.urls === 'object' ? 1 : 0;
            var youtube = d.youtube && typeof d.youtube === 'object' ? 1 : 0;
            var videos  = youtube && d.youtube.youtube_videos && typeof d.youtube.youtube_videos === 'object' ? 1 : 0;
            var product_list;
            var products;
            var product;
            var url;
            var i;

            if (urls || (!urls && youtube)) {
                if (youtube && videos) {
                    var yt = d.youtube;
                    var vids = yt.youtube_videos;
                    var video_href = location.protocol +'//www.youtube.com/embed/'+ vids[0].url +'?showinfo=0&version=3&playerapiid=ytplayer';

                    $('#help_videos').append('<div class="lightbox" data-href="'+ video_href +'">' +
                            '<img src="'+ location.protocol +'//img.youtube.com/vi/'+ vids[0].url +'/0.jpg" alt="'+ vids[0].title +'">' +
                            '<div class="a video_title">'+ vids[0].title +'</div>' +
                        '</div>');
                }
            }

            if (urls && d.urls.length) {
                var hidden = 0;

                for (i = 0; i < d.urls.length; i++) {
                    for (url in d.urls[i]) {
                        if (d.urls.hasOwnProperty(url)) {
                            if (i === 3) {
                                hidden = 1;
                            }

                            $('#help_topics').append('<a class="small help_topic'+ (hidden ? ' hidden' : '') +'" href="'+ d.urls[i][url] +'" target="_blank">'+ url.replace(/^\d+:/,'') +'</a>');
                        }
                    }
                }
            }
            if (typeof d.products === 'object') {
                product_list = d.products;

                for (i = 0; i < product_list.length; i++) {
                    for (products in product_list[i]) {
                        if (product_list[i].hasOwnProperty(products)) {
                            product = product_list[i][products];

                            $('#help_upgrades').append('<a class="small help_upgrade" href="'+ product.step +'" target="_blank">'+ product.title +'</a>');
                        }
                    }
                }
            }
        })
        .promise()
        .done(function() {
            if ($('#help_videos').contents().length) {
                $('#help_videos').show();
                $('#help_drop .lightbox').on('click', function() {
                    var href = $(this).data('href');

                    $(this).colorbox({
                        iframe:true,
                        href:href +'&autoplay=1',
                        innerWidth:420,
                        innerHeight:315
                    });
                });
            }

            if ($('#help_topics').contents().length) {
                $('#help_topics').show().prepend('<p class="title">Top Articles</p>');
            }

            if ($('#help_upgrades').contents().length) {
                $('#help_upgrades').show().prepend('<p class="title">Related Upgrades</p>');
            }

            if ($('#help_container div').contents().length) {
                $('#help_container').addClass('active').show().prepend('<h2 class="subheading">Help Center</h2>');
            }
        });
    };

    return app;
});
