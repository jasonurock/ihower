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
    <link rel="stylesheet" href="css/scroll-test.css?v=<?=rand(1,10000)?>" type="text/css"/>
    <script>
        // init controller
        var controller = new ScrollMagic.Controller();
    </script>
</head>
<body>
<div class="container scrollContainer" id="content-wrapper">
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
                    duration: 1185
                })
                    .setPin(".p1_img2")
                    .setTween(".p1_img2", 1, {scale: 1.1}) // trigger a TweenMax.to tween
                    // .addIndicators({name: "ball"}) // add indicators (requires plugin)
                    .addTo(controller);
                // build scene
                var scene = new ScrollMagic.Scene({
                    triggerElement: ".ball_start",
                    duration: 100
                })
                    .setPin(".p1_img4")
                    .setTween(".p1_img4", 1, {scale: 0}) // trigger a TweenMax.to tween
                    .addTo(controller);
            </script>
        </div>
    </div>
    <div class="page page2">
        <div class="cover"></div>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img4.png" class="p2_img4 cloud"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img1.png" class="p2_img1 fadeObj"/>
<!--        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page2/img2.png" class="p2_img2"/>-->
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
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img1.png" class="p3_img1 digit"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img2.png" class="p3_img2 digit"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/page3/img3.png" class="p3_img3 digit"/>
        <img src="http://cdnwxevent.oss-cn-shanghai.aliyuncs.com/JARLL-LAB/images/line.png" class="line_bottom"/>
        <script>
            // build scenes
            new ScrollMagic.Scene({triggerElement: ".p3_img1"})
                .setClassToggle(".p3_img1", "fadeInLeft") // add class toggle
                // .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".p3_img2"})
                .setClassToggle(".p3_img2", "fadeInRight") // add class toggle
                // .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
            new ScrollMagic.Scene({triggerElement: ".p3_img2"})
                .setClassToggle(".p3_img3", "fadeInBottom") // add class toggle
                // .addIndicators() // add indicators (requires plugin)
                .addTo(controller);
        </script>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    var myScroll;
    var controller;
    $(document).ready(function (e) {
        setTimeout(function (){
            $('.p1_img2').removeClass('zoomIn');
            $('.p1_img2').css({'opacity': 1});
        },1300)
        setTimeout(function (){
            $('.p1_img4').removeClass('fadeInBottom');
            $('.p1_img4').css({'opacity':1});
        },2200)
    })

</script>
</body>

</html>