function getBaseURL() {



    var url = location.href;  // entire url including querystring - also: window.location.href;



    var baseURL = url.substring(0, url.indexOf('/', 14));







    if (baseURL.indexOf('http://localhost') != -1) {



        // Base Url for localhost



        var url = location.href;  // window.location.href;



        var pathname = location.pathname;  // window.location.pathname;



        var index1 = url.indexOf(pathname);



        var index2 = url.indexOf("/", index1 + 1);



        var baseLocalUrl = url.substr(0, index2);







        return baseLocalUrl + "/";



    }



    else {



        // Root Url for domain name



        return baseURL + "/";



    }







}


    jQuery(document).ready(function($){
 
 var baseURL = getBaseURL();


                         var relatedPortfolio = $("#berita");

                            relatedPortfolio.owlCarousel({
                                margin: 30,
                                nav: true,
                                loop: true,
                                dots:false,
                                autoplayTimeout:3000,
                                 navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:1 },
                                    480:{ items:2 },
                                    768:{ items:3 },
                                   
                                }
                            });

                             var relatedPortfolio = $("#foto");

                            relatedPortfolio.owlCarousel({
                                margin: 30,
                                nav: true,
                          
                                dots:false,
                                autoplayTimeout:4000,
                                 navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:1 },
                                    480:{ items:2 },
                                
                             
                                   
                                }
                            });

                             var relatedPortfolio = $("#foto_page");

                            relatedPortfolio.owlCarousel({
                              
                                nav: true,
                          
                                dots:false,
                                autoplayTimeout:4000,
                                 navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:1 },
                                    480:{ items:2 },
                                    720:{ items:3 },
                             
                                   
                                }
                            });

                            var relatedPortfolio = $("#video");

                            relatedPortfolio.owlCarousel({
                                margin: 30,
                                nav: true,
                          
                                dots:false,
                                autoplayTimeout:4000,
                                 navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:1 },
                                    480:{ items:2 },
                                
                             
                                   
                                }
                            });

                            var relatedPortfolio = $("#video_page");

                            relatedPortfolio.owlCarousel({
                              
                                nav: true,
                          
                                dots:false,
                                autoplayTimeout:4000,
                                 navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:1 },
                                    480:{ items:2 },
                                    720:{ items:3 },
                             
                                   
                                }
                            });
                            var relatedPortfolio = $("#video_side");

                            relatedPortfolio.owlCarousel({
                               
                                nav: true,
                          
                                dots:false,
                                autoplayTimeout:3000,
                                 navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:1 },
                                   
                        
                                   
                                }
                            });



                            //google map
                            $('#google-map').gMap({

                                address: 'Jalan Gatot Subroto Kav. 94, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12780',
                                maptype: 'ROADMAP',
                                html: 'Jakarta',
                                zoom: 14,
                                markers: [
                                    {
                                        address: "Jalan Gatot Subroto Kav. 94, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12780",
                            
                                        icon: {
                                            image: baseURL+"doc/icons/map-icon-red.png",
                                            iconsize: [32, 39],
                                            iconanchor: [32,39]
                                        }
                                    }
                                ],
                                doubleclickzoom: true,
                                controls: {
                                    panControl: true,
                                    zoomControl: true,
                                    mapTypeControl: true,
                                    scaleControl: true,
                                    streetViewControl: true,
                                    overviewMapControl: true
                                }

                            });


                          
               

        var swiperSlider = new Swiper('.swiper-parent',{
            paginationClickable: false,
            slidesPerView: 1,
            grabCursor: true,
            loop: true,
            onSwiperCreated: function(swiper){
                $('[data-caption-animate]').each(function(){
                    var $toAnimateElement = $(this);
                    var toAnimateDelay = $(this).attr('data-caption-delay');
                    var toAnimateDelayTime = 0;
                    if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                    if( !$toAnimateElement.hasClass('animated') ) {
                        $toAnimateElement.addClass('not-animated');
                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                        setTimeout(function() {
                            $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                        }, toAnimateDelayTime);
                    }
                });
                SEMICOLON.slider.swiperSliderMenu();
            },
            onSlideChangeStart: function(swiper){
                $('[data-caption-animate]').each(function(){
                    var $toAnimateElement = $(this);
                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                    $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                });
                SEMICOLON.slider.swiperSliderMenu();
            },
            onSlideChangeEnd: function(swiper){
                $('#slider').find('.swiper-slide').each(function(){
                    if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                    if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                });
                $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                    if($(this).find('video').length > 0) {
                        if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                    }
                    if($(this).find('.yt-bg-player').length > 0) {
                        $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                    }
                });
                if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                    var $toAnimateElement = $(this);
                    var toAnimateDelay = $(this).attr('data-caption-delay');
                    var toAnimateDelayTime = 0;
                    if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                    if( !$toAnimateElement.hasClass('animated') ) {
                        $toAnimateElement.addClass('not-animated');
                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                        setTimeout(function() {
                            $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                        }, toAnimateDelayTime);
                    }
                });
            }
        });

        $('#slider-arrow-left').on('click', function(e){
            e.preventDefault();
            swiperSlider.swipePrev();
        });

        $('#slider-arrow-right').on('click', function(e){
            e.preventDefault();
            swiperSlider.swipeNext();
        });
        
        
        //
        //
        //
        
        var ocClients = $("#oc-clients");

        ocClients.owlCarousel({
            margin: 60,
            loop: true,
            nav: false,
            autoplay: true,
            dots: false,
            autoplayHoverPause: true,
            responsive:{
                0:{ items:2 },
                480:{ items:3 },
                768:{ items:4 },
                992:{ items:5 },
                1200:{ items:6 }
            }
        });


        
        
        $("#widget-subscribe-form").validate({
            submitHandler: function(form) {
                jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                jQuery(form).ajaxSubmit({
                    target: '#widget-subscribe-form-result',
                    success: function() {
                        jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                        jQuery('#widget-subscribe-form').find('.form-control').val('');
                        jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
                        SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
                    }
                });
            }
        });
        
    });
    
    jQuery(window).load(function(){

        var $container = $('#portfolio');

        $container.isotope({
            transitionDuration: '0.65s',
            masonry: {
                columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
            }
        });

        $('#page-menu a').click(function(){
            $('#page-menu li').removeClass('current');
            $(this).parent('li').addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
                return false;
        });

        $(window).resize(function() {
            $container.isotope('layout');
        });

    });
    
