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
    <link rel="stylesheet" href="css/test.css?v=<?=rand(1,10000)?>" type="text/css"/>
    <style>
        .swiper {height: 30%;}
        .page {position: absolute;width: 100%;height: 100%;margin: 0;z-index: 10;opacity: 0;}
        .btn {width: 33%;float: left;background: #0b82e3;height: 100%;text-align: center;color: #FFFFFF;font-size: 30px;line-height: 80px;border-right: 2px solid #FFFFFF;}
        .selection {position: fixed;bottom: 0;height: 80px;width: 100%;z-index: 100;}
    </style>
</head>
<body>
<div class="container">
    <!-- Swiper -->
    <div class="swiper page">
        <div class="swiper-wrapper">
            <div class="swiper-slide"></div>
            <div class="swiper-slide"></div>
            <div class="swiper-slide"></div>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                1-1
            </div>
            <div class="swiper-slide">
                1-2
            </div>
            <div class="swiper-slide">
                1-3
            </div>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper swiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                2-1
            </div>
            <div class="swiper-slide">
                2-2
            </div>
            <div class="swiper-slide">
                2-3
            </div>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper swiper3">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                3-1
            </div>
            <div class="swiper-slide">
                3-2
            </div>
            <div class="swiper-slide">
                3-3
            </div>
        </div>
    </div>
    <div class="selection">
        <div class="btn" onclick="javascript:changeController(1);">top</div>
        <div class="btn" onclick="javascript:changeController(2);">center</div>
        <div class="btn" onclick="javascript:changeController(3);">bottom</div>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    var Swiper1 = new Swiper('.swiper1')
    var Swiper2 = new Swiper('.swiper2')
    var Swiper3 = new Swiper('.swiper3')
    var Swiper0 = new Swiper('.page',{
        controller: {
            control: Swiper1,
        }
    })

    $(document).ready(function (e) {
        // swiper.slideTo(7, 1000, true);

    })
    function changeController(num){
        console.log('yes');
        if(num==1){
            Swiper0.controller.control = Swiper1;
        }else if(num==2){
            Swiper0.controller.control = Swiper2;
        }else if(num==3){
            Swiper0.controller.control = Swiper3;
        }

    }
</script>
</body>

</html>