<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=750, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="yes" name="apple-touch-fullscreen"/>
    <title> </title>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/swiper.animate1.0.3.min.js"></script>
    <script type="text/javascript" src="js/jsmpeg.min.js"></script>
    <link rel="stylesheet" href="css/swiper-bundle.css" type="text/css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css?v=<?=rand(1,10000)?>" type="text/css"/>
</head>
<body>
<div class="container">
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/bg.jpg" class="bg"/>
                <div class="page page1">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/img1.png" class="p1_img1 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="1.3s" swiper-animate-delay="0.3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/img2.png" class="p1_img2 ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="0.5s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/img3.png" class="p1_img3 ani" swiper-animate-effect="fadeInRightBig" swiper-animate-duration="1s" swiper-animate-delay="0.1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/img4.png" class="p1_img4 ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="0.8s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="0.8s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page page2">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="1.4s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img4.png" class="p2_img4 cloud"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img1.png" class="p2_img1 ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="1.3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img2.png" class="p2_img2 ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1s" swiper-animate-delay="0.3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img3.png" class="p2_img3 ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1.6s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img5.png" class="p2_img5 cloud"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img6.png" class="p2_img6 cloud"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1.6s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page page3">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img1.png" class="p3_img1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.5s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img2.png" class="p3_img2 ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="1s" swiper-animate-delay="0.8s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img3.png" class="p3_img3 ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1.1s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page page4">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img2.png" class="p4_img2 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.83s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img3.png" class="p4_img3 ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="1s" swiper-animate-delay="0.8s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img1.png" class="p4_img1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.5s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img4.png" class="p4_img4 ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1.1s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page page5">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page5/img1.png" class="p5_img1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.5s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page5/img2.png" class="p5_img2 ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="1s" swiper-animate-delay="0.8s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page page6">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page6/img3.png" class="p6_img3 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="0.8s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page6/img1.png" class="p6_img1 ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page6/img2.png" class="p6_img2 ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1.5s" swiper-animate-delay="0.5s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="0.7s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <!--                <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page7/bg.png" class="bg" style="top: auto;bottom: 0;"/>-->
                <!--                <div class="jsmpeg bg" data-url="video.ts"></div>-->
                <div class="video_holder">
                    <canvas id="video"></canvas>
                </div>
                <div class="page page7" style="position: absolute;">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page7/img1.png" class="p7_img1 ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.3s"/>
                    <!--                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page7/lightObj/1.png" class="p7_img2 ani lightObj" swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="1.3s"/>-->
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="0.5s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page page8">
                    <div class="musicBox ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="1.8s">
                        <!--                        <div class="bar_box"><div class="bar"></div></div>-->
                    </div>
                    <!--                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/cover.png" class="p8_img0"/>-->
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/img1.png" class="p8_img1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.2s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/img2.png" class="p8_img2 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="0.5s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/piano/1.png" class="p8_img3 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="0.7s"/>
                    <!--                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/img4.png" class="p8_img4 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="5.3s"/>-->
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="1.1s"/>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/bg.jpg" class="bg" style="top: auto;bottom: 0;"/>
                <div class="page page9">
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_top ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/img1.png" class="p9_img1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.3s"/>
                    <!--                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/img2.png" class="p9_img2 ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="1s" swiper-animate-delay="0.5s"/>-->
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/img3.png" class="p9_img3 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="1s" swiper-animate-delay="2.9s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/img4.png" class="p9_img4 ani" swiper-animate-effect="fadeInUpBig" swiper-animate-duration="1s" swiper-animate-delay="3s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball1.png" class="ball1 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="0.5s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball2.png" class="ball2 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="0.8s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball3.png" class="ball3 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="1.1s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball4.png" class="ball4 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="1.4s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball5.png" class="ball5 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="1.7s"/>
                    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball6.png" class="ball6 ani" swiper-animate-effect="fadeIn" swiper-animate-duration="1.5s" swiper-animate-delay="2s"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    var index = Number(1);
    var pianoNum = Number(1);
    var interval = null;
    var pianoTimeout = null;
    var bgVideo = new JSMpeg.Player('video.ts', {
        canvas: document.getElementById('video'),
        decodeFirstFrame: true,
        disableWebAssembly: false,
        throttled: false, //这里设置为false，不然不触发onSourceCompleted事件
        chunkSize: 1 * 1024 * 1024,
        disableGl: false,
        audio: true,
        // autoplay:true,
        // loop:true,
        loop:false,
        // poster:'other_butterfly.png',
        onSourceCompleted:()=>{

        },
        onPlay: () => {
            console.log('onPlay');
            setTimeout(function () {
                // alert('replay');
                bgVideo.stop();
                bgVideo.play();
            },3000)
        },
        onEnded: () => {
            console.log('onEnded');
            // alert('onEnded');
            // bgVideo.stop();
            // bgVideo.play();
        },
    });

    var swiper = new Swiper(".mySwiper", {
        direction : 'vertical',
        effect : 'fade',
        // spaceBetween: 200,
        // parallax : true,
        // slidesPerView : 'auto',
        // autoHeight: true,
        // freeMode: true,
        on:{
            init: function(){
                swiperAnimateCache(this); //隐藏动画元素
                swiperAnimate(this); //初始化完成开始动画

            },
            slideChangeTransitionStart: function(){
                clearInterval(interval);
                clearTimeout(pianoTimeout);
                bgVideo.stop();
            },
            slideChangeTransitionEnd: function(){
                swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
                this.slides.eq(this.activeIndex).find('.ani').removeClass('ani'); //动画只展现一次，去除ani类名
                console.log(this.activeIndex);
                if(this.activeIndex==6){
                    // setTimeout(function () {
                    //     interval = setInterval('lightAni()',220);
                    // },1300)
                    bgVideo.play();
                }else if(this.activeIndex==7){
                    musicAni();
                    setTimeout(function (){
                        pianoNum = Number(1);
                        interval = setInterval('pianoAni()',100);
                    },1000)
                    pianoTimeout = setTimeout(function () {
                        $('.p8_img3').removeClass('fadeIn');
                        $('.p8_img3').css({'visibility': '','animation-duration': '','animation-delay': ''});
                        $('.p8_img3').animate({opacity:0},1500,'linear');
                        // $('.p8_img3').fadeOut(2000);
                    },7600)
                }else if(this.activeIndex==1){
                    $('.cloud').each(function () {
                        $(this).delay(900).animate({'opacity':1},1000,'linear')
                    })
                }else {
                    $('.cloud').css({'opacity':0})
                }
            }
        }
    });

    $(document).ready(function (e) {
        // swiper.slideTo(7, 1000, true);
        musicAni();
    })
    function pianoAni() {
        if (pianoNum < 45){
            $('.p8_img3').attr('src','http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/piano/'+pianoNum+'.png');
            pianoNum++;
        }
    }
    function musicAni() {
        $('.musicBox').html('');
        var barArr = [
            {'height':530,'top':16},
            {'height':590,'top':2},
            {'height':630,'top':0},
            {'height':660,'top':0},
            {'height':670,'top':1},
            {'height':670,'top':11},
            {'height':670,'top':32},
            {'height':640,'top':63},
            {'height':600,'top':104},
            {'height':545,'top':150},
            {'height':350,'top':287},
            {'height':260,'top':300},
            {'height':292,'top':333},
            {'height':205,'top':375},
            {'height':147,'top':400},
            {'height':100,'top':416},
            {'height':70,'top':428},
            {'height':47,'top':441},
            {'height':36,'top':452},
            {'height':36,'top':452},
            {'height':27,'top':452},
            {'height':45,'top':437},
            {'height':56,'top':420},
            {'height':85,'top':404},
            {'height':114,'top':375},
            {'height':170,'top':344},
            {'height':232,'top':300},
            {'height':232,'top':300},
            {'height':285,'top':271},
            {'height':330,'top':246},
            {'height':366,'top':236},
            {'height':400,'top':231},
            {'height':402,'top':233},
            {'height':400,'top':231},
            {'height':396,'top':235},
            {'height':396,'top':235},
            {'height':385,'top':238},
            {'height':356,'top':254},
            {'height':320,'top':265},
        ]
        for (let i = 0; i < barArr.length; i++) {
            var delayTime = 60*i;
            var duration  = 800;
            $('.musicBox').append('<div class="bar_box" style="height: '+barArr[i].height+'px;top: '+barArr[i].top+'px;left: '+(i*3+1)+'%"><div class="bar" style="animation-delay: '+delayTime+'ms;animation-duration: '+duration+'ms;"></div></div>');
        }
    }
</script>
</body>

</html>