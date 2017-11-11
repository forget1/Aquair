<?php
error_reporting(0);
//require_once 'include.php';
//session_start();
//
//$_SESSION['url'] = strtok('http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"],"?");
//
//
//if(isset($_SESSION['user'])){
//    $user = $_SESSION['user'];
//    session_destroy();
//}else{
//    // $url = "http://www.shmachinist.com/rouges/getUser.php";
//    $url = "http://www.shmachinist.com/mrouges/getMessage.php";
//    // Header("Location: $url");
//    header("Location:".$url);
//}
// 微信分享
require_once "jssdk.php";
// $jssdk = new JSSDK("wxd05810ecbff672d2", "202af872b771a9613e8a6f801d3bca4c");
$jssdk = new JSSDK("wx792feaaab3e6b588", "33e93e1e056dd10b56147b20c0e36d4e");

$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/music.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/index.css?id=201710asdsaasdas291asdadad119">
        <title>水之密语</title>
    </head>
    <body>
        <div class="loading">
            <img src="img/load.png" class="loading_img" alt="">
        </div>
        <img src="img/bg1-1.png" class="debounce" style="display:none;">
        <img src="img/bg1-2.png" class="debounce" style="display:none;">
        <img src="img/bg1-3.png" class="debounce" style="display:none;">
        <div class="app" id="app">
            <div class="swiper-container banner_1">
                <img v-show="show_logo" src="img/logo.png" alt="" class="logo">
                <img v-show="show_logo" src="img/right_logo.png" style="width: 130px !important;position: absolute;top: 0.6%;right: 3px;z-index: 2;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide page page_0 pageFade" id="page_0">
                        <img class="debounce title title_0" src="img/title_0.png" alt="">
                        <img class="debounce sub_title sub_title_0" src="img/sub_title_0.png" alt="">
                        <img class="debounce bottom_title bottom_title_0" src="img/bottom_title_0.png" alt="">
                    </div>
                    <div class="swiper-slide page page_1" id="page_1">
                        <img class="debounce title title_1" src="img/title_1.png" alt="">
                        <img class="debounce sub_title sub_title_1" src="img/sub_title_1.png" alt="">
                        <img class="debounce bottom_title bottom_title_1" src="img/bottom_title_1.png" alt="">
                    </div>
                    <div class="swiper-slide page page_2" id="page_2">
                        <img class="debounce title title_2" src="img/title_2.png" alt="">
                        <img class="debounce sub_title sub_title_2" src="img/sub_title_2.png" alt="">
                        <img class="debounce bottom_title bottom_title_2" src="img/bottom_title_2.png" alt="">
                    </div>
                </div>
            </div>

            <div class="swiper-slide anim" id="tranTxt">
                <img v-show="show_logo" src="img/logo.png" alt="" class="logo_1" style="display: none;position:static;margin-top:2.2%;margin-left:10px;">
                <img v-show="show_logo" src="img/right_logo.png" class="logo_1" style="width: 130px !important;position: static;margin-top: 1%;float:right;margin-right: 3px;z-index: 2;display:none;">
                <p class="txt">她是水之密语全新代言人</p>
                <br>
                <img src="img/text.png" class="txt_png">
            </div>

            <div class="page page_4" id="page_4">
                <div class="stage" v-show="test">
                    <img v-show="show_logo" src="img/logo.png" alt="" class="logo">
                    <img v-show="show_logo" src="img/right_logo.png" style="width: 130px !important;position: absolute;top: 1%;right: 3px;z-index: 2;">
                </div>
                <img src="img/border.png" :class="{show_border: word_index >= 5}" class="border">
                <video id="video_1" :class="{pro_ani: word_index >= 5}" poster="img/video.png?time=222sd32132" x5-video-player-type="h5"
                                    x5-video-player-fullscreen="true" class="letter">
                    <source src="5.mp4?time=20171123029" type="video/mp4"></source>                
                </video>

                <div :class="{show_button: word_index >= 7}" class="button view_button" id="accept" @click="show_products = true;show_card = true;show_logo=false;" v-show="!show_products"></div>
                <transition name="fade">
                    <div class="swiper-container swiper-container-v" v-show="show_card" style="z-index:4;background:#FFF;position:absolute;top:0;text-align:center;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pro" style="background:url('img/pro_img/bg_03.png') no-repeat 0 0;background-size:cover;">
                                <img src="img/1_logo.png" alt="" class="debounce logo">
                                <img src="img/right_logo.png" style="width: 140px !important;position: absolute;top: 4px;right: 3px;z-index: 2;">
                                <video id="video_2" poster="img/video.png?time=22sadad3" x5-video-player-type="h5"
                                    x5-video-player-fullscreen="true" style="opacity:1;top:10%;width:82%;padding:0 8% 0 8%;" class="letter">
                                    <source src="5.mp4?time=2017102911" type="video/mp4"></source>                
                                </video>
                                <img src="img/pro_img/1_01.png" class="pro_1_01">
                                <img src="img/pro_img/1_02.png" class="pro_1_05">
                                <img src="img/pro_img/1_03.png" class="pro_1_03">
                                <img src="img/pro_img/1_04.png" class="pro_1_04">
                                <img src="img/pro_img/1_05.png" class="pro_1_02" style="right:8%;top:44%;">
                                <img src="img/arrow.png" class="debounce arrow shake-horizontal" alt="">
                            </div>
                            <div class="swiper-slide pro">
                                <img src="img/1_logo.png" alt="" class="debounce logo">
                                <img src="img/right_logo.png" style="width: 140px !important;position: absolute;top: 4px;right: 3px;z-index: 2;">
                                <img src="img/pro_img/pro_3.png?id=alskjdlask" class="debounce ani product pro_3" style="margin-top:20%;" swiper-animate-effect="fadeInDown" swiper-animate-duration="1.5s" swiper-animate-delay="0.3s">
                                <img src="img/arrow.png" class="debounce arrow shake-horizontal" alt="">
                            </div>

                            <div class="swiper-slide pro">
                                <img src="img/1_logo.png" alt="" class="debounce logo">
                                <img src="img/right_logo.png" style="width: 140px !important;position: absolute;top: 4px;right: 3px;z-index: 2;">
                                <img src="img/pro_img/pro_4_1.png" class="ani product debounce pro_4_1" swiper-animate-effect="shake" swiper-animate-duration="1.5s" swiper-animate-delay="0s">
                                <img src="img/pro_img/pro_4_2.png" class="ani product debounce pro_4_2" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.5s">
                                <img src="img/pro_img/pro_4_3.png" class="ani product debounce pro_4_3">
                                <img src="img/pro_img/pro_4_4.png" class="ani product debounce pro_4_4">
                                <img src="img/pro_img/pro_4_5.png" class="ani product debounce pro_4_5" swiper-animate-effect="shake" swiper-animate-duration="1.5s" swiper-animate-delay="2s">


                                <img src="img/icon/icon2.png" style="position: absolute;left: 0;right: 0;margin: 0 auto;width: 135px;bottom: 15%;">
                                <img src="img/icon/icon4.png" style="position: absolute;top: 0;width: 100%;right: 0;" alt="">
                                <img src="img/icon/icon1.png" style="position: absolute;top: 58%;right: 28%;width: 50px;">
                                <img src="img/icon/icon3.png" style="position: absolute;width: 55px;left: 24%;top: 20%;">
                                
                                <img src="img/btn_25.png" class="shop_1 pro_1">
                                
                                <img src="img/arrow.png" class="debounce arrow shake-horizontal" alt="">
                            </div>
                            
                            <div class="swiper-slide pro">
                                <img src="img/1_logo.png" alt="" class="debounce logo">
                                <img src="img/right_logo.png" style="width: 140px !important;position: absolute;top: 4px;right: 3px;z-index: 2;">
                                <img src="img/pro_img/pro_5_1.png" class="ani product debounce pro_5_1" swiper-animate-effect="shake" swiper-animate-duration="1.5s" swiper-animate-delay="0s" >
                                <img src="img/pro_img/pro_5_2.png" class="ani product debounce pro_5_2" swiper-animate-effect="shake" swiper-animate-duration="1.5s" swiper-animate-delay="2s">
                                <img src="img/icon/22_07.png" class="ani product debounce pro_5_3" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.5s">
                                <img src="img/pro_img/pro_5_4.png" class="ani product debounce pro_5_4">
                                <img src="img/pro_img/pro_5_5.png" class="ani product debounce pro_5_5">
                                
                                <img src="img/icon/icon2.png" style="position: absolute;left: 0;right: 0;margin: 0 auto;width: 135px;bottom: 15%;">
                                <!-- <img src="img/icon/22_11.png" style="position: absolute;left: 0;right: 0;margin: 0 auto;width: 105px;bottom: 16%;"> -->
                                <img src="img/icon/icon4.png" style="position: absolute;top: 0;width: 100%;right: 0;" alt="">
                                <img src="img/icon/icon1.png" style="position: absolute;top: 20%;right: 23%;width: 50px;">
                                <img src="img/icon/icon3.png" style="position: absolute;width: 55px;right: 33%;bottom: 28%;">

                                <img src="img/btn_25.png" class="shop_1 pro_2">
                                
                                <img src="img/arrow.png" class="debounce arrow shake-horizontal" alt="">
                            </div>
                            <div class="swiper-slide pro">
                                <img src="img/1_logo.png" alt="" class="debounce logo">
                                <img src="img/right_logo.png" style="width: 140px !important;position: absolute;top: 4px;right: 3px;z-index: 2;">
                                <img src="img/pro_img/pro_6_1.png" class="ani product debounce pro_6_1">
                                <img src="img/pro_img/pro_6_2.png" class="ani product debounce pro_6_2" swiper-animate-effect="shake" swiper-animate-duration="1.5s" swiper-animate-delay="0s">
                                <img src="img/pro_img/pro_6_3.png" class="ani product debounce pro_6_3">
                                <img src="img/icon/33_11.png" class="ani product debounce pro_6_4" swiper-animate-effect="fadeInRight" swiper-animate-duration="1s" swiper-animate-delay="0.5s">
                                <img src="img/pro_img/pro_6_5.png" class="ani product debounce pro_6_5" swiper-animate-effect="shake" swiper-animate-duration="1.5s" swiper-animate-delay="2s">
                                <img src="img/pro_img/pro_6_6.png" class="ani product debounce pro_6_6">
                                <img src="img/pro_img/pro_6_7.png" class="ani product debounce pro_6_7">


                                <img src="img/icon/icon2.png" style="position: absolute;left: 0;right: 0;margin: 0 auto;width: 135px;bottom: 15%;">
                                <!-- <img src="img/icon/33_15.png" style="position: absolute;left: 0;right: 0;margin: 0 auto;width: 105px;bottom: 16%;"> -->
                                <img src="img/icon/icon4.png" style="position: absolute;top: 0;width: 100%;right: 0;" alt="">
                                <img src="img/icon/icon1.png" style="position: absolute;top: 67%;right: 28%;width: 50px;">
                                <img src="img/icon/icon3.png" style="position: absolute;width: 55px;left: 50%;top: 19%;">
                                
                                <img src="img/btn_25.png" class="shop_1 pro_3">
                                
                                <img src="img/arrow.png" class="debounce arrow shake-horizontal" alt="">
                            </div>
                            <div class="swiper-slide pro" style="background:url('img/pro_img/bg3.png') no-repeat 0 0;background-size:cover;">
                                <img src="img/1_logo.png" alt="" class="debounce logo">
                                <img src="img/right_logo.png" style="width: 140px !important;position: absolute;top: 4px;right: 3px;z-index: 2;">
                                <img src="img/pro_29.png" class="pro_29">
                                
                                <img src="img/pro_33.png" class="btn_shop">
                                
                                <img src="img/btn-34.png" class="btn_share">
                                <div class="a" style="width:100%;height:100%;background:rgba(0,0,0,0.8);display:none;position:absolute;top:0;z-index:5;">
                                    <img src="img/sahe.png" class="sahe">
                                    <span style="position: absolute;top:13%;right:13%;color:#FFF;">点击右上角图标分享给好友</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>


        <span id="musicControl">
            <a id="mc_play" class="music on"></a>
        </span>
        <audio id="musicfx" src="media/music.mp3?id==20171030103212" loop="loop" autoplay="autoplay">
            <source src="media/music.mp3?id==2017103sad0103212" type="audio/mpeg">
        </audio>
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/swiper.animate1.0.2.min.js"></script>
        <script src="js/vue.js"></script>
        <script src="js/index.js?id=20171029cccbc114asdas2311"></script>
        
        <script type="text/javascript">
            window._pt_lt = new Date().getTime();
            window._pt_sp_2 = [];
            _pt_sp_2.push('setAccount,5c36d8f6');
            var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            (function() {
                var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
                atag.src = _protocol + 'js.ptengine.cn/5c36d8f6.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(atag, s);
            })();
        </script>
                      
    </body>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript">
        wx.config({
            debug: false,
            appId: '<?php echo $signPackage["appId"];?>',
            timestamp: <?php echo $signPackage["timestamp"];?>,
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: [
                // 所有要调用的 API 都要加到这个列表中
                'onMenuShareAppMessage','onMenuShareTimeline'
            ]
        });
        function wxshare(){wx.onMenuShareTimeline({title:"水之密语带你开启双11满减活动",desc:"全新代言人 重启新的自己",link:"http://www.shmachinist.com/aquair",imgUrl:"http://www.shmachinist.com/aquair/img/share.png",success:function(){},cancel:function(){}});wx.onMenuShareAppMessage({title:"水之密语带你开启双11满减活动",desc:"全新代言人 重启新的自己",link:"http://www.shmachinist.com/aquair",imgUrl:"http://www.shmachinist.com/aquair/img/share.png",type:"",success:function(){},cancel:function(){}})}wx.ready(function(){wxshare()});
</script>
</html>
