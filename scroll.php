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
    <script type="text/javascript" src="js/gsap.min.js"></script>
    <script type="text/javascript" src="js/velocity.min.js"></script>
    <script type="text/javascript" src="js/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="js/animation.gsap.min.js"></script>
    <script type="text/javascript" src="js/animation.velocity.js"></script>
    <script type="text/javascript" src="js/jsmpeg.min.js"></script>
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/scroll-test.css?v=<?=rand(1,10000)?>" type="text/css"/>
    <script>
        // console.log($('.page8')[0].scrollHeight);
        // init controller
        var controller = new ScrollMagic.Controller();
    </script>
</head>
<body>
<div class="container scrollContainer" id="content-wrapper">
    <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/icon.png" class="music_icon"/>
    <div class="scrollContent">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/bg.jpg" class="bg"/>
        <div class="page page1">
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/img1.png" class="p1_img1 fadeInBottom"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/img2.png" class="p1_img2 zoomIn"/>
            <div class="ball_start"></div>
            <img src="images/page1/img3.png" class="p1_img3 fadeInRight"/>
            <img src="images/page1/img3-bg.png" class="p1_img3 fadeInRight" style="z-index: 0;"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page1/img4.png" class="p1_img4 fadeInBottom"/>
            <script>
                // build scene
                var scene = new ScrollMagic.Scene({
                    triggerElement: ".ball_start",
                    duration: 1035
                })
                    .setPin(".p1_img2")
                    .setTween(".p1_img2", 1, {scale: 1.1}) // trigger a TweenMax.to tween
                    // .addIndicators({name: "ball"}) // add indicators (requires plugin)
                    .addTo(controller);
                // build scene
                var scene = new ScrollMagic.Scene({
                    triggerElement: ".ball_start",
                    duration: 300
                })
                    .setPin(".p1_img4")
                    .setTween(".p1_img4", 1000, {opacity: 0}) // trigger a TweenMax.to tween
                    .addTo(controller);
            </script>
        </div>
    </div>
    <div class="page page2" style="margin-top: -100px;">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img4.png" class="p2_img4 cloud"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img1.png" class="p2_img1 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img3.png" class="p2_img3"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img5.png" class="p2_img5 cloud"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img6.png" class="p2_img6 cloud"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom"/>
        <div class="page2_start"></div>
        <script>
            // build scene
            // new ScrollMagic.Scene({
            //     triggerElement: ".page2_start",
            //     triggerHook: 1, // show, when scrolled 10% into view
            //     duration: "80%", // hide 10% before exiting view (80% + 10% from bottom)
            //     offset: 150 // move trigger to center of element
            // })
            //     .setClassToggle(".p2_img1", "visible") // add class to reveal
            //     // .addIndicators() // add indicators (requires plugin)
            //     .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".p2_img1"})
                .setClassToggle(".p2_img1", "fadeInBottom") // add class toggle
                // .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".p2_img4"})
                .setClassToggle(".p2_img3", "fadeInLeft") // add class toggle
                // .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
            // build scene
            // var scene = new ScrollMagic.Scene({
            //     triggerElement: ".p2_img1"
            // })
            //     .setTween(".cloud", 1, {opacity: 1}, {duration: 1000}) // trigger a TweenMax.to tween
            //     .addTo(controller);
        </script>
    </div>
    <div class="page page3">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img1.png" class="p3_img1 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img2.png" class="p3_img2 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img3.png" class="p3_img3 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom page3_line" style="height: 350px;width: 3px;"/>
        <div class="page3_start"></div>
        <script>
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".page3_start"})
                .setClassToggle(".p3_img1", "fadeInLeft") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page3_start"})
                .setClassToggle(".p3_img2", "fadeInRight") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page3_start"})
                .setClassToggle(".p3_img3", "fadeInBottom") // add class toggle
                .addTo(controller);
        </script>
    </div>
    <div class="page page4">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img2.png" class="p4_img2 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img3.png" class="p4_img3 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img1.png" class="p4_img1 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page4/img4.png" class="p4_img4 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom"/>
        <script>
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".page3_line"})
                .setClassToggle(".p4_img2", "fadeInLeft") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page3_line"})
                .setClassToggle(".p4_img3", "fadeInRight") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page3_line"})
                .setClassToggle(".p4_img1", "fadeInBottom") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page3_line"})
                .setClassToggle(".p4_img4", "fadeIn") // add class toggle
                .addTo(controller);
        </script>
    </div>
    <div class="page page5">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page5/img1.png" class="p5_img1 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page5/img2.png" class="p5_img2 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom"/>
        <div class="page5_start"></div>
        <script>
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".page5_start"})
                .setClassToggle(".p5_img1", "fadeInLeft") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page5_start"})
                .setClassToggle(".p5_img2", "fadeInRight") // add class toggle
                .addTo(controller);
        </script>
    </div>
    <div class="page page6">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page6/img3.png" class="p6_img3 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page6/img1.png" class="p6_img1 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page6/img2.png" class="p6_img2 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom page6_line"/>
        <div class="page6_start"></div>
        <script>
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".page6_start"})
                .setClassToggle(".p6_img3", "fadeIn") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page6_start"})
                .setClassToggle(".p6_img1", "fadeInBottom") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page6_start"})
                .setClassToggle(".p6_img2", "fadeInBottom") // add class toggle
                .addTo(controller);
        </script>
    </div>
    <div class="page page7">
        <div class="cover"></div>
        <div class="video_holder">
            <canvas id="video"></canvas>
        </div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page7/img1.png" class="p7_img1 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom"/>
        <script>
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".page6_line"})
                .setClassToggle(".p7_img1", "fadeInBottom") // add class toggle
                .addTo(controller);
        </script>
    </div>
    <div class="page page8">
        <div class="cover"></div>
        <div class="musicBox fadeObj"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/img1.png" class="p8_img1 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/img2.png" class="p8_img2 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/piano/1.png" class="p8_img3 fadeObj"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom"/>
        <div class="page8_start"></div>
        <script>
            var pianoNum = Number(1);
            var interval = null;
            var pianoTimeout = null;
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".page8_start"})
                .setClassToggle(".p8_img1", "fadeInBottom") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page8_start"})
                .setClassToggle(".p8_img2", "fadeIn") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".p8_img1"})
                .setClassToggle(".p8_img3", "fadeIn") // add class toggle
                .addTo(controller)
                .on("leave", function (e) {
                    console.log('leave');
                })
                .on("start end", function (e) {
                    clearInterval(interval);
                    pianoNum = 1;
                    interval = setInterval('pianoAni()', 100);
                });
            new ScrollMagic.Scene({triggerElement: ".p8_img1"})
                .setClassToggle(".musicBox", "fadeIn") // add class toggle
                .addTo(controller);
        </script>
    </div>
    <div class="last_page">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/bg.jpg" class="bg" style="top: auto;bottom: 0;"/>
        <div class="page page9" style="margin-bottom: 0;">
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/img1.png" class="p9_img1 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/img3.png" class="p9_img3 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/img4.png" class="p9_img4 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball1.png" class="ball ball1 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball2.png" class="ball ball2 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball3.png" class="ball ball3 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball4.png" class="ball ball4 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball5.png" class="ball ball5 fadeObj"/>
            <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page9/ball6.png" class="ball ball6 fadeObj"/>
        </div>
        <script>
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".page9"})
                .setClassToggle(".p9_img1", "fadeInBottom") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page9"})
                .setClassToggle(".p9_img3", "fadeInBottom") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page9"})
                .setClassToggle(".p9_img4", "fadeInBottom") // add class toggle
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".page9"})
                .setClassToggle(".ball", "fadeIn") // add class toggle
                .addTo(controller);
        </script>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    var myScroll;
    var controller;
    $(document).ready(function (e) {
        // $('.p1_img1').addClass('fadeInBottom');
        // $('.p1_img2').addClass('zoomIn');
        // $('.p1_img3').addClass('fadeInRight');
        // $('.p1_img4').addClass('fadeInBottom');

        setTimeout(function (){
            $('.p1_img2').removeClass('zoomIn');
            $('.p1_img2').css({'opacity': 1});
        },1000)
        setTimeout(function (){
            $('.p1_img4').removeClass('fadeInBottom');
            $('.p1_img4').css({'opacity':1});
        },1300)
        bgVideo.play();
        musicAni();
    })
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
            },4000)
        },
        onEnded: () => {
            console.log('onEnded');
            // alert('onEnded');
            // bgVideo.stop();
            // bgVideo.play();
        },
    });
    function pianoAni() {
        if (pianoNum < 45){
            // $('.p8_img3').css({'display':'block'});
            $('.p8_img3').attr('src','http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page8/piano/'+pianoNum+'.png');
            pianoNum++;
        }else{
            clearInterval(interval);
            $('.p8_img3').removeClass('fadeIn');
            $('.p8_img3').css({'opacity':1});
            $('.p8_img3').delay(1000).animate({opacity:0},1000,'linear',function (){
                $('.p8_img3').css({'opacity':1});
                pianoNum = 1;
                interval = setInterval('pianoAni()', 100);
            });
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