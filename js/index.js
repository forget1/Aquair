var t_img;
var isLoad = true;
var audio;
new Vue({
    el: "#app",
    data: {
        word_index: 0,
        show_button: false,
        show_products: false,
        show_card: false,
        show_logo: true,
        test: true
    },
    created: function() {

    },
    mounted: function() {
                
        audio = $("#musicfx")[0];

        audio.play();
                
        document.addEventListener("WeixinJSBridgeReady", function () {
            audio.play();
        }, false);
                
        $('.music').on('click', function() {
            if ($(this).hasClass('on')) {
                $(this).removeClass('on').addClass('stop');
                audio.pause();
            } else {
                $(this).removeClass('stop').addClass('on');
                audio.play();
            }
        });
        var self = this;
        isImgLoad(function() {
            $('.loading').fadeOut(1000);
            var my_swiper = new Swiper('.banner_1', {
                autoplay: 5000,
                speed: 1000,
                onInit: function(swiper) {
                    setTimeout(function() {
                        $("#page_0").addClass("show_title");
                    }, 500);
                },
                onSlideChangeEnd: function(swiper) {
                    $("#page_" + swiper.activeIndex).addClass("show_title");
                    if (swiper.activeIndex === 2) {
                           my_swiper.lockSwipes();
                        $('#tranTxt').addClass('animte');
                        $('.txt').addClass('txt_ani');
                        setTimeout(function() {
                            $('.txt_png').fadeIn(1000);
                        }, 8500);
                        $('.page_4').addClass('donghua');
                        setTimeout(function() {
                            $('.logo_1').show();
                        }, 6000);
                        setTimeout(function() {
                            console.log('\u5ef6\u65f6')
                            setTimeout(function() {
                                self.word_index++;
                            }, 1000);
                            var word_timer = setInterval(function() {
                                self.word_index += 0.5;
                                if (self.word_index >= 7) {
                                    $('#video_1').on('touchstart', function() {
                                        document.getElementById('video_1').play();
                                        if ($('.music').hasClass('on')) {
                                            console.log($(this));
                                            $('.music').removeClass('on').addClass('stop');
                                            audio.pause();
                                        }
                                    })
                                    document.getElementById('video_1').onpause = function() {
                                        $('.music').removeClass('stop').addClass('on');
                                        audio.play();
                                    };
                                    $('#video_2').on('touchstart', function() {
                                        document.getElementById('video_2').play();
                                        if ($('.music').hasClass('on')) {
                                            $('.music').removeClass('on').addClass('stop');
                                            audio.pause();
                                        }
                                    })
                                    document.getElementById('video_2').onpause = function() {
                                        $('.music').removeClass('stop').addClass('on');
                                        audio.play();
                                    };
                                    clearInterval(word_timer);
                                }
                            }, 500);
                        }, 8000);
                    }
                }
            });
        });
    },
    methods: {}
});

    $('#accept').on('click', function() {
        $('#video_1').remove();
        var swiperV = new Swiper('.swiper-container-v', {
            direction: 'vertical',
            onInit: function(swiper) {
                swiperAnimateCache(swiper);
                swiperAnimate(swiper);
                console.log('初始化');
            },
            onSlideChangeEnd: function(swiper) {
                swiperAnimate(swiper);
            }
        });
    });
    $('.btn_share').on('click', function() {
        $('.a').fadeIn(500);
    });

    $('.a').on('click', function() {
        $(this).fadeOut(500);
    })


    $('.pro_1').on('click', function() {
        location.href = 'https://item.m.jd.com/product/5550350.html';
    })
    $('.pro_2').on('click', function() {
        location.href = 'https://item.m.jd.com/product/5180845.html';
    })
    $('.pro_3').on('click', function() {
        location.href = 'https://item.m.jd.com/product/5506798.html';
    })
    $('.btn_shop').on('click', function() {
        location.href = 'https://pro.m.jd.com/mall/active/3kaQoetM53fEkbiqsKs3gMvJ8yeN/index.html';
    })


function isImgLoad(callback) {
    $('.debounce').each(function() {
        if (this.height === 0) {
            isLoad = false;
            return false;
        }
    });
    if (isLoad) {
        clearTimeout(t_img);
        callback();
    } else {
        isLoad = true;
        t_img = setTimeout(function() {
            isImgLoad(callback);
        }, 500);
    }
}