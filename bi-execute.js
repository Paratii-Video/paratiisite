Pace.options = {
    restartOnRequestAfter: false
};

var $ = jQuery.noConflict();

jQuery(document).ready(function () {

    var siteurl = WPURLS.siteurl;
$( ".js_active .post-body" ).wrap( "<div class='container-wide'></div>" );

    $('.share-bt').click(function () {
        $('.share-icons').toggleClass('open');
        return false;

    });
    
    
    $(function(){
      $('#top-header').jPinning();
    });


    // -------- Sticky Menus --------
    jQuery(function () {
        jQuery(window).scroll(function () {
            if ($(this).scrollTop() >= $(document).height() / 2) {
                setTimeout(function () {
                    if (typeof (Storage) !== "undefined")
                    {
                        if ($('.resources').length)
                        {
                            var hasPopup = localStorage.getItem("subscribe_popup");
                            if (!hasPopup)
                            {
                                localStorage.setItem("subscribe_popup", 1);
                                $('#subscribe-overLay').addClass('open');
                            }
                        }

                    }
                }, 30);
            }

            var scroll = jQuery(window).scrollTop();

            if (scroll >= 20) {
                jQuery('#top-header').addClass('fixed');
                jQuery('#about-menu-wrapper').addClass('sticky');
                jQuery('.logo').css({
                    "padding": "18px 0"
                });
                jQuery('.header-elements').css({
                    "padding": "18px 0"
                });
                jQuery('.hidden-logo').css({
                    "opacity": "1",
                    "transform": "translateX(0)"
                });
                jQuery('.vs').css({
                    "opacity": "0"
                });

            } else {
                jQuery('#top-header').removeClass('fixed');
                jQuery('#about-menu-wrapper').removeClass('sticky');
                jQuery('.logo').css({
                    "padding": "50px 0"
                });
                jQuery('.header-elements').css({
                    "padding": "56px 0"
                });
                jQuery('.hidden-logo').css({
                    "opacity": "0",
                    "transform": "translateX(-30px)"
                });
                jQuery('.vs').css({
                    "opacity": "1"
                });
            }
        });

        $(window).trigger('scroll');

    });
    // -------- Overlays --------
    jQuery('body').on('click', '.trigger-overlay', function () {
        rel_id = '#' + jQuery(this).data('trigger');
        var overlay = jQuery(rel_id);

        if (jQuery(this).hasClass('detail-link')) {
            var post_id = jQuery(this).data('post_id');
        }
        if (overlay.hasClass('overlay-contentscale')) {
            jQuery('main').addClass('overlay-open');
            jQuery('.overlay-filter').addClass('is-visible');
        }
        if (overlay.hasClass('open')) {
            overlay.removeClass('open');
        } else {
            overlay.addClass('open');
            overlay.triggerHandler('opened_overlay', {id: rel_id, trigger: jQuery(this)});
        }

        return false;
    });
    jQuery('body').on('click', '.overlay-close', function (e) {
        jQuery('.ui-resizable-handle').show();
        var overlay = jQuery(this).parents('.overlay');
        overlay.trigger('closed_overlay', {trigger: jQuery(this)});
        overlay.removeClass('open');
        if (overlay.hasClass('overlay-contentscale')) {
            jQuery('main').removeClass('overlay-open');
            jQuery('.overlay-filter').removeClass('is-visible');
        }
        return false;
    });
    jQuery('.overlay-close-open').click(function () {
        var overlay = jQuery(this).parents('.overlay');
        overlay.removeClass('open');
        return false;
    });




// $('.top-menu').smartNav();
    // -------- WOW Animate --------
    var wow = new WOW(
            {
                boxClass: 'bi-animate',
                animateClass: 'animated',
                offset: 0,
                mobile: false,
                live: true,
                callback: function (box) {
                }
            }
    );
    wow.init();

    // -------- Tabs --------
    jQuery('.tab-content').hide();
    jQuery('#tab-1').show();
    jQuery('#tabs a').click(function () {
        var rely = jQuery(this).attr("rel");
        jQuery('.tab-content').hide();
        jQuery('#' + rely).fadeIn(500);
        jQuery('#tabs a').removeClass('active-tab');
        jQuery(this).addClass("active-tab");
        return false;
    });

    // -------- Drop Menu --------
    jQuery('body').on('click', '.bi-drop-menu-trigger', function () {
      jQuery('.drop-menu nav').hide();
        jQuery(this).next('.drop-menu nav').fadeIn(100);
        return false;
    });
    jQuery(document).on('mouseup', function (e) {
//        console.log(e.target);
        if (!jQuery('.drop-menu nav').is(e.target) && jQuery('.drop-menu').has(e.target).length === 0 ) {
            jQuery('.drop-menu nav').fadeOut(100);
        }
        return false;
    });

    // -------- Accordion --------     
    $('.heading-trigger').on('click', function () {
        var obj = $(this);
        if ($(this).parents('.is-active').length) {
            return false;
        }
        $('.is-active').find('.accordion-row-content').css('transition', 'none').slideUp(function () {
            $('.accordion-row').removeClass('is-active');
            obj.parent().parent().toggleClass("is-active");
            $("html, body").animate({scrollTop: obj.parent().offset().top - $('#top-header').height()}, 500, function () {
                setTimeout(function () {
                    $('.is-active').find('.accordion-row-content').slideDown(function () {
                        $(this).addClass('fadingIn');
                    });
                });
            });
        });
    });

    // -------- Center --------   
    jQuery('.center').BiCenter({container: '.overlay'});
    jQuery('.center-sm').BiCenter({container: '.sm-sizer'});
    jQuery('.center-md').BiCenter({container: '.md-sizer'});
    jQuery('.center-lg').BiCenter({container: '.lg-sizer'});


    
     $(window).load(function () {
       jQuery('.bank-thumb img').BiCenter({container: '.bank-thumb'});
    });
    jQuery('.center2').BiCenter();
    $('.feature-content').BiCenter({container: '.feature-item'});


    // -------- Sticky Nav --------  
    var $scrollingDiv = $(".scrollingLnk");
    jQuery(window).scroll(function () {
        $scrollingDiv
                .stop()
                .animate({"marginTop": ($(window).scrollTop() - 30) + "px"}, "slow")
                .css({"opacity": "1"});
    });

    $(function () {
        function scroll_fn() {
            document_height = $(document).height();
            scroll_so_far = $(window).scrollTop();
            window_height = $(window).height();
            max_scroll = document_height - window_height;
            scroll_percentage = scroll_so_far / (max_scroll / 100);
            $('.fs-progress').css({'visibility': 'visible', 'position': 'fixed'}).width(scroll_percentage + '%');
        }
        $(window).scroll(function () {
            scroll_fn();
        });
        $(window).resize(function () {
            scroll_fn();
        });
    });


    $('#Secondary_Navbar-Account').hide();
    if (!$('#Secondary_Navbar-Account-Login a').length) {
        $('#Secondary_Navbar-Account .dropdown-toggle').first().addClass('trigger-overlay bt bt-ghost hide-xs').attr("data-trigger", "whmcs-overLay").attr("href", "#");
        $('.lang').after($('#Secondary_Navbar-Account .dropdown-toggle').first());
    }
    $('#Secondary_Navbar-Account-Login a').first().addClass('trigger-overlay bt bt-ghost hide-xs').attr("data-trigger", "login-overLay").attr("href", "#");
    $('.lang').after($('#Secondary_Navbar-Account-Login a').first());



    // -------- Ajax --------   
    var BaianatAjaxify = (function ($) {
        var obj = {};
        var ajax = {
            detectUrl: function () {
                var url = this.attr('href');
                var patt = new RegExp("^#");
                var res = patt.test(url);
                if (url && url.length && !res) {
                    return url;
                }
                return undefined;
            },
            dispatch: function (props) {
                var request = $.get(props.url, props.data, props.callback);
            },
            parseRequest: function (data) {
                $('.baianat-main-gate').html('').removeClass('full_opacity');
                $('.baianat-main-gate').replaceWith(data);
                $('.baianat-main-gate').addClass('full_opacity');
                $('.bi-main-overlay').removeClass('full_opacity').css('visibility', 'hidden');
            },
            ajaxify: function () {
                var getUrl = $.proxy(ajax.detectUrl, $(this));
                var url = getUrl();
                var isAjaxify = $(this).attr('data-ajaxify-url');
                if (typeof isAjaxify == "undefined") {
                    isAjaxify = "true";
                }
                if (isAjaxify == "true" && typeof url !== "undefined") {
                    if ($(this).attr('target') && $(this).attr('target') == '_blank') {
                        return true;
                    }
                    window.location.href = (url);
                    return false;
                }
            },
            attach: function () {
                //$('a').on('click', this.ajaxify);
                window.onpopstate = function (event) {
                    //window.location.assign(location.pathname);
                };
            }
        };

        ajax.attach();
        return obj;
    }(jQuery));


    Pace.on('done', function () {
        jQuery('body > :not(.pace)').css('opacity', 1);
    });
    jQuery('body > :not(.pace)');


//  

    jQuery("a:not([href^=#]):not([href^=mailto])[target!='_blank']:not([download])").click(function (event) {

        if (!jQuery(this).attr('data-ajaxify-url'))
        {
            if (jQuery(this).attr('href')) {

                if (!event.ctrlKey && !event.metaKey && !event.button) {
                    jQuery('body').css('opacity', 0);
                    BaianatAjaxify.ajaxify();
                    setTimeout(function () {
                        jQuery('body').css('opacity', 1);
                    }, 2000);
                } else
                {
                    return true;
                }
            } else {
                return false;
            }
        }


    });

    var whileAjax = false;
    
    
 jQuery('.get_academy').on('click', function ()
    {    
        var obj = $(this);
        obj.find('button i').addClass('bi-loader animate-spin');
        var elems = [];
        if (whileAjax)
        {
            return false;
        }

        whileAjax = true;

        var jQuerycontainer = $('#posts_grid');
        var offset = (obj.find('button').attr('data-offset'));
        var limit = parseInt(obj.find('button').attr('data-limit'));
        var author = parseInt(obj.find('button').attr('data-author_id'));
        var slug = (obj.find('button').attr('data-slug'));
        var request_type = (obj.find('button').attr('data-request_type'));
        var taxonomy = (obj.find('button').attr('data-taxonomy'));  
        var ptype = (obj.find('button').attr('data-ptype'));  
        $.post(siteurl + '/wp-admin/admin-ajax.php?action=baianat_academy',
                {offset: offset,
                    limit: limit,
                    slug : slug,
                    taxonomy: taxonomy,
                    request_type: request_type,
                    ptype : ptype
                }, function (data) {
             
            var response = jQuery.parseJSON(data); 
            
            if (response.code == 1)
            {
                
              obj.find('button i').removeClass('bi-loader animate-spin');
                var result = response.result ; 
                var r_length = result.length ; 
                
                for(var i = 0; i < r_length; i++)
                {
                    
                    var c = result[i] ;
                    
                    $('.academy-more').after('<div class="cart-block bi-animate fadeInRight mb-30">'+
                        '    <a href="" style="background-color: ">'+
                         '       <figure> '+c['img']+'  </figure>'+
                        '    </a>'+
                        '    <div class="cart-detail">'+
                              '  <div class="drop-menu">'+
                                '    <a href="'+c['link']+'" class="bi-hidden-menu bi-drop-menu-trigger"></a>'+
                               '     <nav>'+
                                 '       <a href="'+c['link']+'">'+c['details']+'</a>'+
                                 '   </nav>'+
                             '   </div>'+
                          '      <h4><a href="'+c['link']+'">'+c['title']+'</a></h4>'+
                         '   </div>'+
                        '</div>');
                }
                
                
                //  $('.cart-block').after();
              
              
            } else
            {
               jQuery('.get_academy').fadeOut();
               $('#msg-overlay').addClass('open') ;
                
            }

            whileAjax = false;

        }).always(function () {
            var total = parseInt(limit);
            var nextoff = offset + total;
            obj.find('button').attr('data-offset', nextoff);
        });

    });
    
 jQuery('.get_academy2').on('click', function ()
    {    
        var obj = $(this);
        obj.find('button i').addClass('bi-loader animate-spin');
        var elems = [];
        if (whileAjax)
        {
            return false;
        }

        whileAjax = true;

        var jQuerycontainer = $('#posts_grid');
        var offset = (obj.find('button').attr('data-offset'));
        var limit = parseInt(obj.find('button').attr('data-limit'));
        var author = parseInt(obj.find('button').attr('data-author_id'));
        var slug = (obj.find('button').attr('data-slug'));
        var request_type = (obj.find('button').attr('data-request_type'));
        var taxonomy = (obj.find('button').attr('data-taxonomy'));  
        var ptype = (obj.find('button').attr('data-ptype'));  
        $.post(siteurl + '/wp-admin/admin-ajax.php?action=baianat_academy',
                {offset: offset,
                    limit: limit,
                    slug : slug,
                    taxonomy: taxonomy,
                    request_type: request_type,
                    ptype : ptype
                }, function (data) {
             
            var response = jQuery.parseJSON(data); 
            
            if (response.code == 1)
            {
                
              obj.find('button i').removeClass('bi-loader animate-spin');
                var result = response.result ; 
                var r_length = result.length ; 
                
                for(var i = 0; i < r_length; i++)
                {
                    
                    var c = result[i] ;
                    
                    $('.academy-more').before('<div class="column lg-3 md-6 single-bi-post single-resource-post bi-animate fadeInUp">'+
                           '<div class="cart-block bi-animate fadeInRight mb-30">'+
                        '    <a href="" style="background-color: ">'+
                         '       <figure> '+c['img']+'  </figure>'+
                        '    </a>'+
                        '    <div class="cart-detail">'+
                              '  <div class="drop-menu">'+
                                '    <a href="'+c['link']+'" class="bi-hidden-menu bi-drop-menu-trigger"></a>'+
                               '     <nav>'+
                                 '       <a href="'+c['link']+'">'+c['details']+'</a>'+
                                 '   </nav>'+
                             '   </div>'+
                          '      <h4><a href="'+c['link']+'">'+c['title']+'</a></h4>'+
                         '   </div>'+
                         '   </div>'+
                        '</div>');
                }
                
                
                //  $('.cart-block').after();
              
              
            } else
            {
               jQuery('.get_academy2').fadeOut();
               $('#msg-overlay').addClass('open') ;
                
            }

            whileAjax = false;

        }).always(function () {
            var total = parseInt(limit);
            var nextoff = offset + total;
            obj.find('button').attr('data-offset', nextoff);
        });

    });


    jQuery('.works_cat').on('click', function ()
    {
        var obj = $(this);
        obj.find('button i').addClass('bi-loader animate-spin');
        var elems = [];
        if (whileAjax)
        {
            return false;
        }

        whileAjax = true;

        var jQuerycontainer = $('#posts_grid');
        var offset = parseInt(obj.find('button').attr('data-offset'));
        var cat_id = parseInt(obj.find('button').attr('data-catid'));
        var limit = parseInt(obj.find('button').attr('data-limit'));
        var author = parseInt(obj.find('button').attr('data-author_id'));
        $.post(siteurl + '/wp-admin/admin-ajax.php?action=works_load_more',
                {offset: offset,
                    catid: cat_id,
                    limit: limit
                }, function (data) {

            var response = jQuery.parseJSON(data);
            if (response.code == 1)
            {
                var res_offset = 'offset_' + offset;
                var res_html = '<div class="' + res_offset + '" style="display:none;">' + response.html + '</div>';
                elems.push(res_html);
                jQuerycontainer.append(elems).isotope('appended', elems);
                jQuerycontainer.imagesLoaded(function () {
                    obj.find('button i').removeClass('bi-loader animate-spin');
                    $('.' + res_offset).show();
                    jQuerycontainer.isotope('reloadItems');
                    jQuerycontainer.isotope();
                    jQuery('.center-sm').BiCenter({container: '.sm-sizer'});
                    jQuery('.center-md').BiCenter({container: '.md-sizer'});
                    jQuery('.center-lg').BiCenter({container: '.lg-sizer'});
                });
            } else
            {
                obj.hide();
                obj.after(response.html).css('opacity', '0');
                if (response.social)
                {

                    $('.bi-facebook').parent().attr('onclick', response.social.fb);
                    $('.bi-twitter').parent().attr('onclick', response.social.tw);
                    $('.bi-google_').parent().attr('onclick', response.social.gg);
                }
            }

            whileAjax = false;

        }).always(function () {
            var total = parseInt(limit);
            var nextoff = offset + total;
            obj.find('button').attr('data-offset', nextoff);
        });

    });


    function putBlogPlaceHolders()
    {

    }


    jQuery('.resources_cat, .case-studies-cat, .author-cat, .store-cat').on('click', function ()
    {
        var obj = jQuery(this);
        obj.find('button i').addClass('bi-loader animate-spin');
        var elems = [];
        if (whileAjax)
        {
            return false;
        }

        whileAjax = true;

        var action;

        var jQuerycontainer = jQuery('#posts_grid');
        var offset = parseInt(obj.find('button').attr('data-offset'));
        var cat_id = parseInt(obj.find('button').attr('data-catid'));
        var limit = parseInt(obj.find('button').attr('data-limit'));
        var author = parseInt(obj.find('button').attr('data-author_id'));
        if (obj.hasClass('author-cat'))
        {
            action = 'baianat_author_load_more';
        } else
        {
            action = 'baianat_load_more';
        }
        jQuery.post(siteurl + '/wp-admin/admin-ajax.php?action=' + action,
                {offset: offset,
                    catid: cat_id,
                    limit: limit,
                    t: obj.attr('class'),
                    author_id: author
                }, function (data) {

            var response = jQuery.parseJSON(data);
            if (response.code == 1)
            {
                obj.find('button i').removeClass('bi-loader animate-spin');
                jQuery('.resources_content').append('<div class="bi_offset_' + offset + '"></div>' + response.html);
                jQuery('.case-studies-content').append('<div class="bi_offset_' + offset + '"></div>' + response.html);
                jQuery('.blog-cat-content').append('<div class="bi_offset_' + offset + '"></div>' + response.html);
                jQuery('.bi_offset_' + offset).nextAll('.single-bi-post').addClass('hidden-post');
                jQuery('.bi_offset_' + offset).nextAll('.single-bi-post').removeClass('bi-animate fadeInUp');
                setTimeout(function () {
                    // bi-animate fadeInUp
                    jQuery('.bi_offset_' + offset).nextAll('.single-bi-post').css({visibility: 'visible', opacity: 1}).addClass('fadeInUp');
                }, 50);

            } else
            {
                obj.hide();
                obj.after(response.html).css('opacity', '0');
                if (response.social)
                {

                    $('.bi-facebook').parent().attr('onclick', response.social.fb);
                    $('.bi-twitter').parent().attr('onclick', response.social.tw);
                    $('.bi-google_').parent().attr('onclick', response.social.gg);
                }
            }

            whileAjax = false;

        }).always(function () {
            var total = parseInt(limit);
            var nextoff = offset + total;
            obj.find('button').attr('data-offset', nextoff);
        });

    });


    function get_blog_post(result)
    {
        return '<div class="post-media">' +
                '    <figure itemprop="thumbnail">' +
                '     <a itemprop="url" href="' + result.link + '">' + result.img + '</a>' +
                '      </figure>' +
                '   </div>' +
                '  <div class="post-content">' +
                '     <h2 itemprop="title">' +
                '       <a itemprop="url" href="' + result.link + '">' + result.title + '</a>' +
                '   </h2>' +
                '   <p  itemprop="description">' + result.excerpt + '</p>' +
                '</div>';
    }


    setTimeout(function () {
        var obj = jQuery('.blog-cat');
        getBlogPosts(obj, 0, parseInt(jQuery('.blog-cat-content').attr('data-catid')), parseInt(jQuery('.blog-cat-content').attr('data-limit')));

    }, 500);



    function getBlogPosts(obj, offset, cat_id, limit)
    {

        var action = 'baianat_blog_load_more';

        var loader = '<div class="blog-loader"> ' +
                '   <div class="animated-background"> ' +
                ' <div class="background-masker blog-divid"></div> ' +
                ' <div class="background-masker st-title"></div> ' +
                ' <div class="background-masker st-title-end"></div> ' +
                '  <div class="background-masker sd-title"></div> ' +
                '  <div class="background-masker sd-title-end"></div> ' +
                ' <div class="background-masker p-line1"></div> ' +
                '  <div class="background-masker p-line1-end"></div> ' +
                '  <div class="background-masker p-line2"></div> ' +
                '  <div class="background-masker p-line2-end"></div> ' +
                '  <div class="background-masker p-line3"></div> ' +
                ' <div class="background-masker p-line3-end"></div> ' +
                '  <div class="background-masker content-end"></div> ' +
                ' <div class="background-masker date"></div> ' +
                '  <div class="background-masker end"></div> ' +
                ' </div>' +
                '  </div>';

        for (var i = 0; i < limit; i++)
        {

            jQuery('.blog-cat-content').append('<div class="post-block single-bi-post data_offset_' + offset + '" itemscope itemtype="http://schema.org/Blog">' + loader + '</div>');

        }

        var i = 0;

        jQuery.post(siteurl + '/wp-admin/admin-ajax.php?action=' + action,
                {offset: offset,
                    catid: cat_id,
                    limit: limit
                }, function (data) {

            var response = jQuery.parseJSON(data);
            if (response.code == 1)
            {
                jQuery('.blog-cat-content .data_offset_' + offset).each(function () {
                    if (typeof response.result[i] != "undefined")
                    {
                        var r = response.result[i];
                        $(this).addClass('hidden-post');
                        $(this).html(get_blog_post(r));
                        $(this).removeClass('data_offset_' + offset);
                    }
                    i++;

                });

                setTimeout(function () {
                    $('.single-bi-post').css({visibility: 'visible', opacity: 1}).addClass('fadeInUp');
                }, 80);


            } else
            {
                obj.hide();
                obj.after(response.html).css('opacity', '0');
                if (response.social)
                {

                    $('.bi-facebook').parent().attr('onclick', response.social.fb);
                    $('.bi-twitter').parent().attr('onclick', response.social.tw);
                    $('.bi-google_').parent().attr('onclick', response.social.gg);
                }
            }

            whileAjax = false;
            obj.find('button i').removeClass('bi-loader animate-spin');
            $('.data_offset_' + offset).remove();

        }).always(function () {
            var total = parseInt(limit);
            var nextoff = offset + total;
            obj.find('button').attr('data-offset', nextoff);
            $('.blog-cat').show();
        });
    }


    jQuery('.blog-cat').on('click', function ()
    {
        var obj = jQuery(this);
        obj.find('button i').addClass('bi-loader animate-spin');
        var elems = [];
        if (whileAjax)
        {
            return false;
        }

        whileAjax = true;

        var jQuerycontainer = jQuery('#posts_grid');
        var offset = parseInt(obj.find('button').attr('data-offset'));
        var cat_id = parseInt(obj.find('button').attr('data-catid'));
        var limit = parseInt(obj.find('button').attr('data-limit'));
        var author = parseInt(obj.find('button').attr('data-author_id'));

        getBlogPosts(obj, offset, cat_id, limit);


    });



    $('#details-overlay').on('opened_overlay', function (e, v) {

        var obj = $(this);

        var single = v.trigger.parents('.single-resource-post').first();

        var pid = single.attr('data-pid');

        single.find('.loader_placeholder').addClass('bi-loader animate-spin').css('float', 'right');

        jQuery.post(siteurl + '/wp-admin/admin-ajax.php?action=baianat_get_download_details',
                {pid: pid}, function (data) {

            var response = jQuery.parseJSON(data);
            if (response.code == 1)
            {
                obj.find('.title').text(response.title);
                obj.find('.content').text(response.content);
                obj.find('.media-thumbnail').html(response.thumb);
                obj.find('.download').attr('href', response.download);
                var d = response.details;
                for (var i in d)
                {
                    obj.find('.overlay_details').append('<li>' + d[i] + '</li>');
                }

                single.find('.loader_placeholder').removeClass('bi-loader animate-spin');
                obj.css({'visibility': 'visible', 'opacity': 1});
                $('.center').trigger('resize');
            } else
            {

            }

        }).always(function () {

        });

        return false;
    });


    $('#details-overlay').on('closed_overlay', function (e, v) {

        var obj = $(this);

        var single = v.trigger.parents('.single-resource-post').first();

        obj.css({'opacity': '', 'visibility': 'hidden'});


        return false;
    });

    $('#search-overLay').on('closed_overlay', function (e, v) {
        $(this).find('.search-input').val('');
        $('.search_posts .posts, .search_pagination').empty();
        $('body').one('keypress', focusToSearch);
        return false;
    });

    $('#search-overLay').on('opened_overlay', function (e, v) {

        $(this).find('.search-input').focus();
        return false;
    });

    var page = 1;


    var whileAjaxSearch = false;


    function get_post_html(s)
    {
        return ' <div class="block"><a href="' + s.link + '" class="bt bt-link"><h4>' + s.name + '<i class="bi-arrow_right"></i></h4></a></div>';
    }


    $('.search_pagination').on('click', '.page_toggler', function () {
        var obj = $(this);
        if (obj.data('page') == page)
            return;

        sendAjaxSearch($('.search-input').val().trim(), obj.data('page'), handleAjaxSearch);
        return false;
    });



    function handleAjaxSearch(data, obj)
    {
        if (whileAjaxSearch)
            return false;
        var response = jQuery.parseJSON(data);
        if (response.code == 1)
        {
            var l = response.result.length;
            for (var i = 0; i < l; i++) {
                var s = response.result[i];
                $('.search_posts .posts').append(get_post_html(s));
            }

            if (response.pages > 0) { //inactive_pagi
                var last_page = response.pages;
                var before_last_page = last_page - 1;
                var first_page = 1;
                console.log(last_page);
                if (last_page <= 11 && last_page != 1)
                {
                    for (var i = 0; i < last_page; i++) {
                        if (page == (i + 1)) {
                            $('.search_pagination').append('<span class="current_pagi">' + (i + 1) + '</span>');
                        } else {
                            $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (i + 1) + '">' + (i + 1) + '</a>');
                        }
                    }
                } else if (last_page > 11) {
                    if (page < 5) {
                        if (page > 1) {
                            $('.search_pagination').prepend('<a class="arrow-l page_toggler" href="#" data-page="' + (page - 1) + '"><i class="icon-arrow-l"></i></a>');
                        }
                        for (var i = 1; i < 8; i++) {
                            if (page == (i)) {
                                $('.search_pagination').append('<span class="current_pagi">' + (i) + '</span>');
                            } else {
                                $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (i) + '">' + (i) + '</a>');
                            }
                        }
                        $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (i + 2) + '">...</a>');
                        $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (last_page) + '">&raquo;</a>');
                    } else if ((last_page - 4) > page && page > 4) {
                        $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (first_page) + '">&laquo;</a>');
                        $('.search_pagination').append('<a class="arrow-l page_toggler" href="#" data-page="' + (page - 1) + '"><i class="icon-arrow-l"></i></a>');
                        for (var i = page - 2; i <= page + 4; i++) {
                            if (page == (i))
                            {
                                $('.search_pagination').append('<span class="current_pagi">' + (i) + '</span>');
                            } else {
                                $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (i) + '">' + (i) + '</a>');
                            }
                        }
                        $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (i + 2) + '">...</a>');
                        $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (before_last_page) + '">' + before_last_page + '</a>');
                        $('.search_pagination').append('<a class="arrow-r page_toggler" href="#" data-page="' + (page + 1) + '"><i class="icon-arrow-r"></i></a>');
                        $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (last_page) + '">&raquo;</a>');
                    } else {
                        $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (first_page) + '">&laquo;</a>');
                        $('.search_pagination').append('<a class="arrow-l page_toggler" href="#" data-page="' + (page - 1) + '"><i class="icon-arrow-l"></i></a>');
                        for (var i = last_page - 8; i <= last_page; i++) {
                            if (page == (i)) {
                                $('.search_pagination').append('<span class="current_pagi">' + (i) + '</span>');
                            } else {
                                $('.search_pagination').append(' <a class="inactive_pagi page_toggler" href="#" data-page="' + (i) + '">' + (i) + '</a>');
                            }
                        }
                    }

                }

            }

        } else
        {
            $('.search_posts .posts').html(response.no_msg);
        }



    }


    function sendAjaxSearch(search, page_, callback) {

        if (whileAjaxSearch)
        {
            return false;
        }

        whileAjaxSearch = true;

        $('.search_pagination').empty();

        $('.search_posts .posts').html('');
        $('.content-loader').fadeIn();

        Pace.start();

        jQuery.post(siteurl + '/wp-admin/admin-ajax.php?action=baianat_search',
                {data: search,
                    page: page_
                }, function (data) {
            Pace.stop();
            page = page_;
            whileAjaxSearch = false;
            $('.search_posts .posts').empty();
            $('.content-loader').fadeOut(function () {
                return callback(data, $('.search-input'));
            });

        }).always(function () {

        });
    }


    $('.baianat-search').submit(function () {
        return false;
    });


    $('.search-input').keyup(function (e) {

        if (e.keyCode == 27)
        {
            return true;
        }
        var obj = $(this);
        var c = obj.val().trim().length;
        if (c >= 3)
        {
            sendAjaxSearch(obj.val(), page, handleAjaxSearch);
        } else
        {
            $('.search_posts .posts,.search_pagination').empty();
        }

        return false;

    });



    $('.overlay.overlay-fade').on('opened_overlay', function () {
        $('body').css('overflow', 'hidden');
    });
    $('.overlay.overlay-fade').on('closed_overlay', function () {
        $('body').css('overflow', 'auto');
    });

    if ($('.overlay').hasClass('separate')) {
        $('body').css('overflow', 'hidden');
    }



    $('#myform2').submit(function (e) {

        var myForm = document.querySelector('form');

        e.preventDefault();

        var elements = document.forms['test'].elements;
        var datass = {};
        for (i=0; i<elements.length; i++){
            elm = elements[i];
            elm_type = elements[i].type;
            if (elm_type == 'radio') {
                if (elm.checked == true) {
                    datass[elm.name] = elm.value;
                }
            }else {
                datass[elements[i].name] = elements[i].value;

            }
            
        }
        
        var url = 'https://c.baianat.com/api/feedback';
        console.log(url);
        axios.post(url, datass).then(function (response) {
             console.log(response.data);
             if (response.data.success == true){
                $('#form-end-overlay').find('p').first().html('We have received your feedback , We will contact you soon !');
                $('#form-end-overlay').addClass('open').trigger('opened_overlay');
             }
        });
    });
    $('#myform').submit(function (e) {

        var elements = document.forms['test'].elements;
        var colors ='';
        var datass = {};
        for (i=0; i<elements.length; i++){
            elm = elements[i];
            elm_type = elements[i].type;
            if (elm_type == 'radio') {
                if (elm.checked == true) {
                    datass[elm.name] = elm.value;
                }
            } else if (elm_type == 'select-multiple') {
               elm_opt =   elm.options;
                 var opt;
                 $optiossss = "";
                for (var m = 0, iLen = elm_opt.length; m < iLen; m++) {
                    opt = elm_opt[m];

                    if (opt.selected) {
                        $optiossss+='-';
                         $optiossss+= opt.value;
                    }
                }
                datass[elm.name] = $optiossss;
               
               

            } else if (elm_type == 'select-one') {
        elm_opt2 =   elm.options;
        
                 var opt2;
                 $optiossss2 = "";
                for (var m = 0, iLen = elm_opt2.length; m < iLen; m++) {
                    opt2 = elm_opt2[m];
 
                    if (opt2.selected == true) {
                        colors+='-';
                         colors+= opt2.value;
//                         console.log( $optiossss2);
                    }
                }
                datass[elm.name] = colors;
            } else {
                datass[elements[i].name] = elements[i].value;

            }
//            console.log(elm_type);

            
        }

        e.preventDefault();

        var url = 'https://c.baianat.com/api/order';
        var myDropZone = $(".file-inner");
        axios.post(url, datass).then(function (response) {
             console.log(response.data);
             window.order_id = response.data.order_id;
             if (myDropZone.get(0))
             {
                 myDropZone.get(0).dropzone.processQueue();
             }
             $('#form-end-overlay').addClass('open').trigger('opened_overlay');
        });
    });

    var keyboardMap = [
        "", // [0]
        "", // [1]
        "", // [2]
        "CANCEL", // [3]
        "", // [4]
        "", // [5]
        "HELP", // [6]
        "", // [7]
        "BACK_SPACE", // [8]
        "TAB", // [9]
        "", // [10]
        "", // [11]
        "CLEAR", // [12]
        "ENTER", // [13]
        "ENTER_SPECIAL", // [14]
        "", // [15]
        "SHIFT", // [16]
        "CONTROL", // [17]
        "ALT", // [18]
        "PAUSE", // [19]
        "CAPS_LOCK", // [20]
        "KANA", // [21]
        "EISU", // [22]
        "JUNJA", // [23]
        "FINAL", // [24]
        "HANJA", // [25]
        "", // [26]
        "ESCAPE", // [27]
        "CONVERT", // [28]
        "NONCONVERT", // [29]
        "ACCEPT", // [30]
        "MODECHANGE", // [31]
        "SPACE", // [32]
        "PAGE_UP", // [33]
        "PAGE_DOWN", // [34]
        "END", // [35]
        "HOME", // [36]
        "LEFT", // [37]
        "UP", // [38]
        "RIGHT", // [39]
        "DOWN", // [40]
        "SELECT", // [41]
        "PRINT", // [42]
        "EXECUTE", // [43]
        "PRINTSCREEN", // [44]
        "INSERT", // [45]
        "DELETE", // [46]
        "", // [47]
        "COLON", // [58]
        "SEMICOLON", // [59]
        "LESS_THAN", // [60]
        "EQUALS", // [61]
        "GREATER_THAN", // [62]
        "QUESTION_MARK", // [63]
        "AT", // [64]
        "WIN", // [91]
        "", // [92]
        "CONTEXT_MENU", // [93]
        "", // [94]
        "SLEEP", // [95]
        "NUMPAD0", // [96]
        "NUMPAD1", // [97]
        "NUMPAD2", // [98]
        "NUMPAD3", // [99]
        "NUMPAD4", // [100]
        "NUMPAD5", // [101]
        "NUMPAD6", // [102]
        "NUMPAD7", // [103]
        "NUMPAD8", // [104]
        "NUMPAD9", // [105]
        "MULTIPLY", // [106]
        "ADD", // [107]
        "SEPARATOR", // [108]
        "SUBTRACT", // [109]
        "DECIMAL", // [110]
        "DIVIDE", // [111]
        "F1", // [112]
        "F2", // [113]
        "F3", // [114]
        "F4", // [115]
        "F5", // [116]
        "F6", // [117]
        "F7", // [118]
        "F8", // [119]
        "F9", // [120]
        "F10", // [121]
        "F11", // [122]
        "F12", // [123]
        "F13", // [124]
        "F14", // [125]
        "F15", // [126]
        "F16", // [127]
        "F17", // [128]
        "F18", // [129]
        "F19", // [130]
        "F20", // [131]
        "F21", // [132]
        "F22", // [133]
        "F23", // [134]
        "F24", // [135]
        "", // [136]
        "", // [137]
        "", // [138]
        "", // [139]
        "", // [140]
        "", // [141]
        "", // [142]
        "", // [143]
        "NUM_LOCK", // [144]
        "SCROLL_LOCK", // [145]
        "WIN_OEM_FJ_JISHO", // [146]
        "WIN_OEM_FJ_MASSHOU", // [147]
        "WIN_OEM_FJ_TOUROKU", // [148]
        "WIN_OEM_FJ_LOYA", // [149]
        "WIN_OEM_FJ_ROYA", // [150]
        "", // [151]
        "", // [152]
        "", // [153]
        "", // [154]
        "", // [155]
        "", // [156]
        "", // [157]
        "", // [158]
        "", // [159]
        "CIRCUMFLEX", // [160]
        "EXCLAMATION", // [161]
        "DOUBLE_QUOTE", // [162]
        "HASH", // [163]
        "DOLLAR", // [164]
        "PERCENT", // [165]
        "AMPERSAND", // [166]
        "UNDERSCORE", // [167]
        "OPEN_PAREN", // [168]
        "CLOSE_PAREN", // [169]
        "ASTERISK", // [170]
        "PLUS", // [171]
        "PIPE", // [172]
        "HYPHEN_MINUS", // [173]
        "OPEN_CURLY_BRACKET", // [174]
        "CLOSE_CURLY_BRACKET", // [175]
        "TILDE", // [176]
        "", // [177]
        "", // [178]
        "", // [179]
        "", // [180]
        "VOLUME_MUTE", // [181]
        "VOLUME_DOWN", // [182]
        "VOLUME_UP", // [183]
        "", // [184]
        "", // [185]
        "SEMICOLON", // [186]
        "EQUALS", // [187]
        "COMMA", // [188]
        "MINUS", // [189]
        "PERIOD", // [190]
        "SLASH", // [191]
        "BACK_QUOTE", // [192]
        "", // [193]
        "", // [194]
        "", // [195]
        "", // [196]
        "", // [197]
        "", // [198]
        "", // [199]
        "", // [200]
        "", // [201]
        "", // [202]
        "", // [203]
        "", // [204]
        "", // [205]
        "", // [206]
        "", // [207]
        "", // [208]
        "", // [209]
        "", // [210]
        "", // [211]
        "", // [212]
        "", // [213]
        "", // [214]
        "", // [215]
        "", // [216]
        "", // [217]
        "", // [218]
        "OPEN_BRACKET", // [219]
        "BACK_SLASH", // [220]
        "CLOSE_BRACKET", // [221]
        "QUOTE", // [222]
        "", // [223]
        "META", // [224]
        "ALTGR", // [225]
        "", // [226]
        "WIN_ICO_HELP", // [227]
        "WIN_ICO_00", // [228]
        "", // [229]
        "WIN_ICO_CLEAR", // [230]
        "", // [231]
        "", // [232]
        "WIN_OEM_RESET", // [233]
        "WIN_OEM_JUMP", // [234]
        "WIN_OEM_PA1", // [235]
        "WIN_OEM_PA2", // [236]
        "WIN_OEM_PA3", // [237]
        "WIN_OEM_WSCTRL", // [238]
        "WIN_OEM_CUSEL", // [239]
        "WIN_OEM_ATTN", // [240]
        "WIN_OEM_FINISH", // [241]
        "WIN_OEM_COPY", // [242]
        "WIN_OEM_AUTO", // [243]
        "WIN_OEM_ENLW", // [244]
        "WIN_OEM_BACKTAB", // [245]
        "ATTN", // [246]
        "CRSEL", // [247]
        "EXSEL", // [248]
        "EREOF", // [249]
        "PLAY", // [250]
        "ZOOM", // [251]
        "", // [252]
        "PA1", // [253]
        "WIN_OEM_CLEAR", // [254]
        "", // [255]
        "ArrowUp",
        "ArrowDown",
        "ArrowRight",
        "ArrowLeft",
        "Delete",
        "End",
        "PageDown",
        "PageUp",
        "Home",
        "Insert"
    ];

    function focusToSearch(e)
    {
             if($('.no-search').length)
         return false ;
        var handle = true;
        if ($('input:focus,textarea:focus').length > 0) {
            handle = false;
        }
        if (handle)
        {
            for (var i in keyboardMap)
            {   
                if (e.key == keyboardMap[i])
                {    
                    $('body').one('keypress', focusToSearch);
                    handle = false;
                }
 
            }
            if (handle)
            {
                $('#search-overLay').addClass('open');
                $('#search-overLay input').focus().val(e.key);
            }
        } else
        {
            $('body').one('keypress', focusToSearch);
        }
    }

    $('body').one('keypress', focusToSearch);

    function closeOverLays(e)
    {

        if (e.keyCode == 27)
        {
            $('.overlay.open').removeClass('open');
        }

    }
    $(window).keyup(closeOverLays);



});