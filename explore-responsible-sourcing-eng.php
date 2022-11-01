<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>METRO</title>

    <link rel="stylesheet" href="css/page2_style_1.css">
    <script src="jquery/custom.js"></script>

    <link rel="stylesheet" href="style1.css">
    <link href="pageslider.css" rel="stylesheet">
    <!--required---->
    <link rel="stylesheet" href="required1/bootstrap.min.css" />
    <link rel="stylesheet" href="required1/font-awesome.min.css" />
    <link rel="stylesheet" href="required1/normalize.min.css" />
    <link rel="stylesheet" href="required1/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/common.css">
    <script src="required1/bootstrap.bundle.min.js"></script>
    <script src="required1/jquery-3.6.0.min.js"></script>
    <script src="required1/modernizr.min.js"></script>
    <script src="required1/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        /* schemes and certifications */
        .sc-block {
            z-index: 10;
        }

        .ggnlogo {
            width: 4rem !important;
        }

        #d-border1 {
            content: ' ';
            display: block;
            width: 25rem;
            height: 8.5rem;
            margin-left: 12.5rem;
            position: absolute;
            border: 1px dashed white;
        }

        .slimage121 {
            top: 5rem;
        }

        .sltitle121 {
            top: 5rem;
            left: -4rem;
        }

        .slimage122 {
            top: 5rem;
            left: 0rem;
        }

        .sltitle122 {
            top: 3rem;
            left: -4rem;
        }

        .slpara112 {
            font-size: 14px !important;
        }

        .slimage111 {
            top: 5rem;
        }

        .sltitle111 {
            top: 7rem;
            left: -4rem;
        }

        .slimage112 {
            top: 1.5rem;
            left: -2rem;
        }

        .sltitle112 {
            top: 5rem;
            left: 4rem;
        }

        .swiper-slide-inner {
            width: 36rem;
            margin-left: 1rem;
        }

        .slpara111>p {
            font-size: 14px !important;
        }

        .slider-panel {
            display: block;
            position: relative;
            height: 400px;
        }

        .slider-panel-1 {
            width: 3rem;
            float: left;
        }

        .slider-panel-2 {
            width: 38rem;
            float: left;
        }

        .pageSwiper1Pagination>.swiper-pagination-bullet-active {
            width: 50px !important;
            height: 6px !important;
            background-color: #ffe500;
            border-radius: 6px !important;
        }

        .slider-panel-3 {
            width: 3rem;
            float: left;
        }

        /**/
        .sw9 {
            width: 38rem;
            height: 25.5rem;
            margin-top: 2rem;
            display: block;
            background-color: white;
            border-radius: 40px;
        }

        .sw10 {
            width: 38rem;
            height: 25.5rem;
            margin-top: 2rem;
            display: block;
            background-color: white;
            border-radius: 40px;
        }

        .sw11 {
            width: 38rem;
            height: 25.5rem;
            margin-top: 2rem;
            display: block;
            background-color: white;
            border-radius: 40px;
        }

        .sw12 {
            width: 38rem;
            height: 25.5rem;
            margin-top: 2rem;
            display: block;
            background-color: white;
            border-radius: 40px;
        }

        .slider-panel-2>.sw9>.swr9>.swiper-slide {
            width: 38rem !important;
            color: #003B7E;
        }

        .scheme-slider>.swiper {
            height: 26rem !important;
        }

        /*sw9*/
        .swiper-button-prev.sw5 {
            position: relative;
            left: 4.5rem !important;
            margin-top: 1rem;
            width: 2rem;
            height: 2rem;
            background-color: lightsteelblue;
            /* display: block; */
            color: white;
            border-radius: 1rem;
        }

        .swiper-button-next.sw5 {
            position: relative;
            left: -4rem !important;
            margin-top: 1rem;
            width: 2rem;
            height: 2rem;
            background-color: lightsteelblue;
            /* display: block; */
            color: white;
            border-radius: 1rem;
        }

        .slider9container>.slider-panel {
            flex: 1;
            /*grow*/
        }

        .slider9container {
            display: block;
        }

        .swr .ss {
            height: 27rem !important;
        }

        .slimage {
            display: block;
            width: 25%;
            height: 8rem !important;
            position: relative;
            float: left;
        }

        .slimage>img {
            margin-left: 4rem;
            width: 8rem;
        }

        .sltitle {
            width: 75%;
            display: block;
            height: 8rem !important;
            position: relative;
            float: left;
        }

        .slpara {
            margin-top: 3rem !important;
            display: block;
            width: 100%;
        }

        .slpara>p {
            font-size: 16px;
            color: black;
            padding-left: 4rem;
            padding-right: 4rem;
        }

        .sltitletxt {
            font-size: 24px;
            font-weight: bold;
            position: absolute;
            color: #003B7E !important;
        }

        .slimage101 {
            top: 1rem;
        }

        .sltitle101 {
            top: 7rem;
            left: -4rem;
        }

        .slimage102 {
            top: 1rem;
        }

        .sltitle102 {
            top: 7rem;
            left: -4rem;
        }

        .slimage91>img {
            margin-left: 3rem;
            width: 8rem;
            position: absolute;
            top: 2.8rem;
        }

        .sltitle .sltitle91>span {
            top: 7.8rem !important;
        }

        .sltitle91 {
            top: 7.5rem !important;
            left: -6rem !important;
        }

        .slimage92 {
            top: 1.5rem;
        }

        .sltitle92 {
            top: 7.5rem !important;
            left: -4rem !important;
        }

        .slimage93 {
            top: 2rem !important;
        }

        .sltitle93 {
            top: 7rem !important;
            left: -8rem !important;
        }

        .slimage94 {
            top: 5rem !important;
            left: 1rem !important;
        }

        .sltitle94 {
            top: 7.3rem;
            left: -2rem;
        }

        .slimage95 {
            top: 3rem !important;
        }

        .sltitle95 {
            top: 5rem;
            left: -4rem;
        }

        .slimage96 {
            top: 2rem;
        }

        .sltitle96 {
            top: 8rem;
            left: -4rem;
        }

        .slimage97 {
            top: 3rem;
        }

        .slimage97>img {
            width: 12rem;
            margin-left: 0rem;
        }

        .sltitle97 {
            top: 7rem;
            left: -7rem;
        }

        .slimage98>img {
            width: 5rem !important;
        }

        .sltitle98 {
            top: 7rem;
            left: -7rem;
        }

        .slimage99 {
            top: 1rem;
        }

        .sltitle99 {
            top: 7rem;
            left: -4rem;
        }

        #subtopicsDiv {
            margin-top: 2rem;
            margin-left: 2rem;
        }

        .scheme-activev1 {
            color: #ffe500;
            font-weight: bold;
            font-size: 17px;
        }

        .scheme-inactivev1 {
            color: white;
            font-weight: normal;
        }

        .sc-block:hover {
            background-color: white;
        }

        .swiper-button-next:after {
            font-size: 15px;
            display: block;
            position: absolute;
            top: 9px;
            left: 14px;
        }

        .swiper-button-prev:after {
            font-size: 15px;
            display: block;
            position: absolute;
            top: 9px;
            left: 11px;
        }

        .swiper-pagination-bullet {
            width: 25px;
            height: 6px;
            border-radius: 6px !important;
            border: 2px solid #ffe500;
            background: none;
        }

        .slpara112>p {
            font-size: 13pX !important;
        }
    </style>
    <style>
        /*comprehensive guide*/
        .space {
            content: ' ';
            display: block;
            margin-top: 4rem;
            margin-bottom: 4rem;
        }

        #n-Ul {
            list-style: none;
            display: block;
        }

        .pbox {
            display: block;
            width: 25rem;
            height: 5rem;
            border-right: 1px solid black;
            text-decoration: none;
            color: black;
            cursor: pointer;
        }

        .pbox-inner {
            display: block;
            width: 100%;
            height: 100%;
        }

        .picon-box {
            width: 3rem;
            height: 5rem;
            display: block;
            position: relative;
            float: left;
        }

        .ptext-box {
            width: 15rem;
            height: 5rem;
            display: block;
            position: relative;
            float: left;
        }

        .ptext-box .on-track {
            width: 2rem;
            height: 5rem;
            display: block;
            position: relative;
            float: left;
        }

        .track-highlighter {
            width: 1.5rem;
            position: absolute;
            display: block;
            left: 29.3rem;
            margin-top: 1.3rem;
        }

        .ptextheading {
            font-size: 16px;
        }

        .picon-container {
            width: 3rem;
            height: 3rem;
            border-radius: 1.5rem;
            background-color: #ffe500;
            text-align: center;
            margin-top: .75rem;
        }

        .ptext-inner {
            margin-top: 1rem;
        }

        .picon-container>img {
            width: 25px;
            margin-top: 5px;
        }

        .ptext-box {
            margin-left: 1rem;
        }

        .picon-2>img {
            width: 38px;
            margin-top: 10px;
            margin-left: 2px;
        }

        .picon-3>img {
            width: 30px;
            margin-top: 9px;
        }

        .picon-4>img {
            width: 32px;
            margin-top: 9px;
            margin-left: 2px;
        }

        .picon-5>img {
            width: 25px;
            margin-top: 8px;
        }

        .picon-6>img {
            width: 32px;
            margin-top: 10px;
        }

        .picon-7>img {
            width: 30px;
            margin-top: 8px;
            margin-left: 2px;
        }

        .picon-8>img {
            width: 21px;
            margin-top: 8px;
        }

        .picon-9>img {
            width: 32px;
            margin-top: 8px;
        }

        .picon-10>img {
            width: 30px;
            margin-top: 8px;
        }

        .picon-11>img {
            width: 22px;
            margin-top: 8px;
            margin-left: 2px;
        }

        .picon-12>img {
            width: 27px;
            margin-left: 5px;
            margin-top: 9px;
        }

        .picon-13>img {
            width: 32px;
            margin-top: 6px;
            margin-left: 1px;
        }

        .tl2 {
            margin-top: .6rem;
        }

        /*--first li highlihjt--*/
        li.n-li:first-child>.pbox>.pbox-inner {
            background: -moz-linear-gradient(left, rgba(255, 255, 255, 1) 67%, rgba(255, 255, 255, 0.91) 70%, rgba(255, 255, 255, 0) 100%);
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 1) 67%, rgba(255, 255, 255, 0.91) 70%, rgba(255, 255, 255, 0) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 1) 67%, rgba(255, 255, 255, 0.91) 70%, rgba(255, 255, 255, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#00ffffff', GradientType=1);
        }

        li.n-li:first-child>.pbox {
            height: 6rem;
        }


        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-container {
            width: 4rem;
            height: 4rem;
            border-radius: 2rem;
            background-color: #ffe500;
            text-align: center;
            margin-left: -2rem;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-container>img {
            width: 32px;
            margin-top: 9px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-2>img {
            width: 48px !important;
            margin-top: 16px !important;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-3>img {
            width: 41px !important;
            margin-top: 11px !important;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-4>img {
            width: 43px !important;
            margin-top: 10px !important;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-5>img {
            width: 36px !important;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-6>img {
            width: 42px !important;
            margin-top: 13px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-7>img {
            width: 39px !important;
            margin-top: 13px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-9>img {
            width: 44px !important;
            margin-top: 11px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-10>img {
            width: 39px !important;
            margin-top: 11px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-12>img {
            width: 38px !important;
            margin-top: 11px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.picon-box>.picon-13>img {
            width: 41px !important;
            margin-top: 10px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.ptext-box>.ptext-inner {
            margin-top: .5rem;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.ptext-box>.ptext-inner>.ptextheading {
            font-weight: bold;
            font-size: 18px !important;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.ptext-box>.tl1 {
            margin-top: 1.5rem;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.ptext-box>.tl2 {
            margin-top: .75rem;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.on-track>.track-highlighter {
            margin-top: 2rem;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.on-track>.track-highlighter {
            content: url("images/resp_sourcing/highlighter-active.svg");
            width: 2rem;
            height: 2rem;
            margin-left: -3px;
        }

        li.n-li:first-child>.pbox>.pbox-inner>.ptext-box>.ptext-inner>.imageunder {
            content: url("images/resp_sourcing/long-arrow.svg");
        }

        li.liContent:first-child {
            display: block !important;
        }

        .pbox:hover {
            font-weight: bold !important;
        }
    </style>
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #section-to-print,
            #section-to-print * {
                visibility: visible;
            }

            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>

</head>

<body class="page4-page">
    <header class="no-print">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/metro-logo.svg" />
                </a>
            </div>

            <div class="new_header header-menu">
                <div id="nav-icon4" class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="custom__select top-mar-less">
                    <select>
                        <option value="explore-responsible-sourcing-deu.php">DEU</option>
                        <option value="explore-responsible-sourcing-eng.php" selected>ENG</option>
                    </select>
                </div>
                <nav>
                    <ul class="main">
                        <li>
                            <a href="http://msr.bdevtestservers.com/">Home</a>
                        </li>
                        <li>
                            <a href="my-sustainable-restaurant.php">My Sustainable Restaurant</a>
                        </li>
                        <li>
                            <a href="the-msr-chapter-guide-eng.php">The MSR Chapter Guide</a>
                        </li>
                        <div class="sub_menuUi">
                            <li>
                                <a href="introduction-to-sustainable-menu-eng.php">Sustainable Menu</a>
                            </li>
                            <li>
                                <a href="introduction-to-responsible-sourcing-eng.php">Responsible Sourcing</a>
                            </li>
                            <li>
                                <a href="introduction-to-food-waste-eng.php">Food Waste</a>
                            </li>
                            <li>
                                <a href="introduction-to-plastic-waste-eng.php">Plastic Waste</a>
                            </li>
                            <li>
                                <a href="introduction-to-safe-food-eng.php">Safe Food</a>
                            </li>
                            <li>
                                <a href="introduction-to-energy-eng.php">Energy</a>
                            </li>
                            <li>
                                <a href="introduction-to-water-eng.php">Water</a>
                            </li>
                            <li>
                                <a href="introduction-to-waste-eng.php">Waste</a>
                            </li>
                            <li>
                                <a href="introduction-to-social-eng.php">Social</a>
                            </li>
                        </div>
                        <li>
                            <a href="https://www.metroag.de/en/contact" target="_blank">Contact</a>
                        </li>
                    </ul>
                    <!-- <div class="about"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p></div> -->
                    <div class="social">
                        <p class="mb-2">Useful Links</p>
                        <div class="mt-4">
                            <table>
                                <tr>
                                    <td>
                                        <a href="https://www.menukithd.com/" target="_blank">
                                            <img src="images/logo-dish.png" class="img-fluid">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="https://www.dish.co/DE/en/" target="_blank">
                                            <img src="images/Dish_Logo-svg.svg" class="img-fluid" style="height: 2rem;margin-left: .5rem;">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="https://dataentry.protrace.metrosystems.net/login" target="_blank">
                                            <img src="images/Protrace_Logo-ai.svg" class="img-fluid" style="height: 3rem; margin-left:1rem;">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- <div class="social">
                        <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                            <img src="images/Logo_METRO-Regio_weiss.png">
                        </a>
                        <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                            <img src="./images/safe_food/foot_nav2.PNG">
                        </a>
                        <a style="width: 9rem;" class="bottom-right" href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank"><img src="./images/safe_food/foot_nav.PNG"></a>
                    </div>-->
                        <div class="footer-socials side_nav">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/mpulse/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.metroag.de/youtube" target="_blank">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/metro_mpulse/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/metro-ag" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/@METRO_News" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- <ul class="sub"><li><a href="#0">FAQ &amp; Shipping</a></li><li><a href="#0">Terms &amp; Conditions</li></ul> -->
                </nav>
                <div class="overlay"></div>
            </div>
        </div>
    </header>
    <div id="loader-page2" class="center no-print">
        <span class="loader__text">
            <img src="images/yellow_pan.gif" class="loader9" />
        </span>
    </div>

    <div class="container-full">

        <div class="page-3_stage page-4_stage">

            <!--BANNER-->
            <section class="section1 no-print">
                <div class="left-content">
                    <h3>How to source<br>responsibly</h3>
                    <h4>Responsible sourcing and your business</h4>
                    <p>
                        Restaurateurs want to offer their customers unique experiences linked to certain regional or cultural aspects. Organic and responsible products are among the key ingredients to differentiate from others. Your customers want to know where your products come from. You can provide this information when you choose products that are sourced responsibly. By carefully picking the products you present on your menu, you can create a positive and long-lasting impact on the environment and the health of your customers.
                    </p>
                    <!-- <button class="read-more-btn" href="#" id="myBtn" onclick="expand-next('#more')">Read more</button> -->
                </div>
                <div class="right-content">
                    <img src="images/resp_sourcing/resp_sour_L3_banner_img.svg" class="img-fluid mt-4" />
                </div>
                <!-- <a href="#devid01">DEV. Link</a> -->
            </section>



            <!--Importance of sourcing-->
            <section class="section2 no-print z0">
                <div class="text-center">
                    <div class="wrap-2">
                        <h3 class="section-heading-blue">The importance of sourcing responsibly </h3>
                        <p>
                            Responsible sourcing provides many benefits for restaurant or café owners. See some of the most important advantages:
                        </p>
                    </div>
                </div>
                <div class="container" style="margin:0 auto;">
                    <div class="row">
                        <div class="col-md-4 mt-2 mx-0 icon-box-1">
                            <div class="icon-box-1-content">
                                <div class="icon-holder">
                                    <img src="images/resp_sourcing/icon-handshake.svg" class="img-fluid">
                                </div>
                                <div class="text-holder">
                                    By being more sustainable, you will build a positive image with your customers and create opportunities to win new ones.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mx-0 icon-box-1">
                            <div class="icon-box-1-content">
                                <div class="icon-holder">
                                    <img src="images/resp_sourcing/icon-diamond.svg" class="img-fluid">
                                </div>
                                <div class="text-holder">
                                    You will differentiate yourself from your competitors with added value.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mx-0 icon-box-1">
                            <div class="icon-box-1-content">
                                <div class="icon-holder">
                                    <img src="images/resp_sourcing/icon-users.svg" class="img-fluid">
                                </div>
                                <div class="text-holder">
                                    You will create a
                                    positive impact for your
                                    existing and potential employees.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mx-0 icon-box-1">
                            <div class="icon-box-1-content">
                                <div class="icon-holder">
                                    <img src="images/resp_sourcing/icon-globe-hand.svg" class="img-fluid">
                                </div>
                                <div class="text-holder">
                                    You will have a positive,
                                    restorative impact on the environment
                                    and your local community.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mx-0 icon-box-1">
                            <div class="icon-box-1-content">
                                <div class="icon-holder">
                                    <img src="images/resp_sourcing/icon-graph.svg" class="img-fluid">
                                </div>
                                <div class="text-holder">
                                    Your business will be future-proof. As
                                    you rely on food that is increasingly
                                    threatened by climate change, you
                                    can build a stable, profitable business
                                    by sourcing products that are
                                    produced sustainably.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mx-0 icon-box-1">
                            <div class="icon-box-1-content">
                                <div class="icon-holder">
                                    <img src="images/resp_sourcing/icon-recycle.svg" class="img-fluid">
                                </div>
                                <div class="text-holder">
                                    You will stimulate the demand
                                    for sustainable products and
                                    encourage suppliers to develop and
                                    improve their practices.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Good to know SECTION-->
            <section class="section-white-full-width no-print">
                <h3 class="section-heading-blue no-print">
                    Good to know – Schemes that help you find your way
                </h3>

                <div class="row no-print">
                    <div class="col-md-9">
                        <p class="justify1 no-print">
                            Certifications and labels are a visible way to know how sustainable a product is. When a product is labelled with the logo of a certification scheme, the origin and production method is guaranteed. Digital tools that give information on where the product comes from and how it was made (transparency and traceability) are increasingly available, such as smartphone apps. METRO’s own traceability solution PROTRACE provides restaurateurs with lot-based traceability information and enables you to receive important information about your products. Being in close contact with suppliers and finding out how they produce food is also a way to be closer to what you are sourcing. Many small producers do not have certifications or digital tools but are happy to share details of how they produce food. Sharing this information with your customers in a simple way can be a great possibility to connect them with the food you source.
                        </p>
                        <p class="justify1 no-print">
                            Around the world, logos on labels, and certifications make it possible to recognize products that have an official sign of quality and origin. But not all products that have a certificate are labelled. Check out the following main schemes and examples.
                        </p>
                    </div>
                    <div class="col-md-3 no-print">
                        <div class="protrace-frame">
                            <a href="https://dataentry.protrace.metrosystems.net/login" target="_blank">
                                <img src="images/Protrace_Logo-ai.svg" class="protrace-img" />
                            </a>
                        </div>

                    </div>
                </div>


            </section>


            <!--SCHEMES SECTION DEVELOPEMNT AREA START------------------------>

            <section class="section-blue-bg-full-width no-print" id="devid01" style="display: none;">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <!--CONTENT-->
                                <div class="col-md-12 mt-2 mb-5">
                                    <h4 class="section-heading-white-small">SCHEMES AND CERTIFICATIONS</h4>
                                </div>
                                <div class="col-md-12 mt-2 mb-1">
                                    <div id="topics9"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div id="subtopicsDiv">
                                <div class="row mx-1">
                                    <div id="subtopics9"></div>
                                </div>
                            </div>
                            <!--scheme 1 slider -------------->
                            <div class="mb-2 scheme-slider scheme-slider-1" style="display:none">
                                <div class="slider9container">
                                    <div class="slider-panel slider-panel-1">
                                        <div class="swiper-button-prev sw5"></div>
                                    </div>
                                    <div class="slider-panel slider-panel-2">
                                        <span class="scheme-close-button" onclick="closeSlider();" style="top: 22px !important; right: -15px !important; cursor: pointer; z-index: 5;">
                                            <img src="images/resp_sourcing/scheme-close-button.svg" class="img-fluid">
                                        </span>
                                        <div class="swiper sw10">
                                            <div class="swiper-wrapper swr9">
                                                <div class="swiper-slide ss sl10 sl101">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage101">
                                                            <img src="images/resp_sourcing/scheme-logos/Fairtrade_Certification_Mark.svg.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle101">
                                                            <span class="sltitletxt">FAIRTRADE</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara101">
                                                            <p class="justify1">
                                                                FAIRTRADE is a scheme with a label that brings together NGOs and producers’ representatives. It guarantees that the product has been purchased at a fair price from producers and produced under conditions that respect human rights, for example, no forced labour and respect of the environment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl10 sl102">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage102">
                                                            <img src="images/resp_sourcing/scheme-logos/GEPA.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle102">
                                                            <span class="sltitletxt">GEPA</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara102">
                                                            <p class="justify1">
                                                                GEPA is an enterprise that practices 100 per cent Fair Trade and any surplus is exclusively re-invested in Fair Trade.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination sw9pag"></div>
                                    </div>

                                    <div class="slider-panel slider-panel-3">
                                        <div class="swiper-button-next sw5"></div>
                                    </div>
                                </div>
                            </div>

                            <!--scheme 2 slider -------------->
                            <div class="mb-2 scheme-slider scheme-slider-2" style="display:none">
                                <div class="slider9container">
                                    <div class="slider-panel slider-panel-1">
                                        <div class="swiper-button-prev sw5"></div>
                                    </div>
                                    <div class="slider-panel slider-panel-2">
                                        <span class="scheme-close-button" onclick="closeSlider();" style="top: 22px !important; right: -15px !important; cursor: pointer; z-index: 5;">
                                            <img src="images/resp_sourcing/scheme-close-button.svg" class="img-fluid">
                                        </span>
                                        <div class="swiper sw11">
                                            <div class="swiper-wrapper swr9">
                                                <div class="swiper-slide ss sl11 sl112">
                                                    <div class="row swiper-slide-inner">

                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle112">
                                                            <span class="sltitletxt">Geographical Indications<br>and Traditional Specialaties</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara112">
                                                            <p class="justify1">
                                                                Geographical Indications and Traditional Specialaties Sourcing products that are guaranteed to be traditionally made and from a certain region are a good way to support sustainable food production and ensure the quality and biodiversity of our food supply. These guarantees are set legally, in different countries and within the European Union, there is strict control over what products can be part of the scheme and how they can be named. Three schemes support agriculture and help producers get a premium for their products.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl11 sl111">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage111">
                                                            <img src="images/resp_sourcing/scheme-logos/EU SCHEMES.jpg" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle111">
                                                            <span class="sltitletxt">EU Schemes</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara111">
                                                            <p class="justify1">
                                                                The EU schemes that protect specialities are the PDO (protected designation of origin), PDI (protected geographical indication) and TSG (traditional specialities guaranteed). The EU scheme works in parallel with some country specific schemes such as AOC in France and DOC in Romania. The products covered by the scheme are wines, cheeses, hams, sausages, seafood, olives, olive oils, beers, balsamic vinegar, regional breads, fruits, vegetables and raw meats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="swiper-pagination sw9pag"></div>
                                    </div>

                                    <div class="slider-panel slider-panel-3">
                                        <div class="swiper-button-next sw5"></div>
                                    </div>
                                </div>
                            </div>
                            <!--scheme 3 slider-------------->
                            <div class="mb-2 scheme-slider scheme-slider-3" style="display:none">
                                <div class="slider9container">

                                    <div class="slider-panel slider-panel-1">
                                        <div class="swiper-button-prev sw5"></div>
                                    </div>
                                    <div class="slider-panel slider-panel-2">
                                        <span class="scheme-close-button" onclick="closeSlider();" style="top: 22px !important; right: -15px !important; cursor: pointer; z-index: 5;">
                                            <img src="images/resp_sourcing/scheme-close-button.svg" class="img-fluid">
                                        </span>
                                        <div class="swiper sw9">
                                            <div class="swiper-wrapper swr9">
                                                <div class="swiper-slide ss sl9 sl91">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage91">
                                                            <img src="images/resp_sourcing/scheme-logos/EU organic farming.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle91">
                                                            <span class="sltitletxt">EU Organic Farming</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara91">
                                                            <p class="justify1">
                                                                EU Organic Farming is a scheme that ensures that the production
                                                                method is respectful of the environment and animal
                                                                welfare. The rules governing the organic production method are
                                                                the same throughout Europe, and imported products are
                                                                subject to the same requirements. Approved products carry the EU
                                                                organic logo.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="swiper-slide ss sl9 sl92">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage92">
                                                            <img src="images/resp_sourcing/scheme-logos/GLOBALG.A.P..png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle92">
                                                            <span class="sltitletxt">GLOBALG.A.P.</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara92">
                                                            <p class="justify1">
                                                                GLOBALG.A.P. is a set of standards for good agricultural
                                                                practices (G.A.P.) to ensure safe and sustainable agriculture.
                                                                The scheme also runs local . G.A.P. which is for small farmers
                                                                to build their food safety capacity including the correct
                                                                use of pesticides. The logos are not shown on relevant products.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl9 sl93">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage93">
                                                            <img src="images/resp_sourcing/scheme-logos/GGN_FullLogo.svg" class="ggnlogo">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle93">
                                                            <span class="sltitletxt">GGN</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara93">
                                                            <p class="justify1">
                                                                GGN label is for fruit and vegetables, farmed seafood and plants
                                                                and gives consumers guidance and assurance of good
                                                                farming practices that have been certified according to GLOBAL
                                                                G.A.P. standard. You can look up the origin of a
                                                                product and what the producer’s farm looks like via the online
                                                                GGN portal.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="swiper-slide ss sl9 sl94">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage94">
                                                            <img src="images/resp_sourcing/scheme-logos/ASC.svg" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle94">
                                                            <span class="sltitletxt">ASC</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara94">
                                                            <p class="justify1">
                                                                ASC (Aquaculture Stewardship Council) scheme is for
                                                                environmentally and socially responsible farmed (aquaculture)
                                                                seafood. Products can only carry the logo when the seller has
                                                                been certified. This applies even if the product itself is
                                                                certified.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl9 sl95">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage95">
                                                            <img src="images/resp_sourcing/scheme-logos/Marine Stewardship Council.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle95">
                                                            <span class="sltitletxt">
                                                                Marine Stewardship
                                                                Council (MSC)
                                                            </span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara95">
                                                            <p class="justify1">
                                                                MSC (Marine Stewardship Council) is a scheme which is applied to
                                                                wild fish or seafood from fisheries that have been
                                                                certified to the MSC Fisheries Standard, a science-based set of
                                                                requirements for sustainable fishing in the wild.
                                                                Products can only carry the logo when the seller has been
                                                                certified. This applies even if the product itself is
                                                                certified.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl9 sl96">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage96">
                                                            <img src="images/resp_sourcing/scheme-logos/Forest Stewardship Council.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle96">
                                                            <span class="sltitletxt">FSC</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara96">
                                                            <p class="justify1">
                                                                FSC (Forest Stewardship Council) is a scheme that confirms a
                                                                forest is being managed in a way that preserves biological
                                                                diversity and benefits the lives of local people and workers
                                                                while ensuring it sustains economic viability. Products
                                                                carry the logo.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl9 sl97">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage97">
                                                            <img src="images/resp_sourcing/scheme-logos/Program for Endorsement of Forest Certification.png" class=" mt-2 img-fluid">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle97">
                                                            <span class="sltitletxt">PEFC</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara97">
                                                            <p class="justify1">
                                                                PEFC (Program for Endorsement of Forest Certification) is a
                                                                scheme that ensures the sustainable management of forests.
                                                                It also supports small forest holders. Products carry the logo.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl9 sl98">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage98">
                                                            <img src="images/resp_sourcing/scheme-logos/Roundtable for Responsible Soy.svg" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle98">
                                                            <span class="sltitletxt">RTRS</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara98">
                                                            <p class="justify1">
                                                                RTRS (Roundtable for Responsible Soy) certification assures that
                                                                soy, either as a raw material, an ingredient or as a
                                                                by-product, originates from a process that is environmentally
                                                                sound, socially adequate, and economically viable, without
                                                                causing deforestation. There are different levels of
                                                                certification depending on the level of sustainable soy in the
                                                                product. Products carry the logo.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl9 sl99">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage99">
                                                            <img src="images/resp_sourcing/scheme-logos/Roundtable on Sustainable Palm Oil.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle99">
                                                            <span class="sltitletxt">RSPO</span>

                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara99">
                                                            <p class="justify1">
                                                                RSPO (Roundtable on Sustainable Palm Oil) is a scheme that
                                                                promotes practices that reduce deforestation, preserve
                                                                biodiversity, and respect the livelihoods of producer
                                                                communities in rural areas. There are different levels of
                                                                certification depending on the quantity of sustainable palm oil
                                                                in the product and its traceability. Certified products
                                                                can carry the logo but also could be without a label on the
                                                                packaging.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="swiper-pagination sw9pag"></div>
                                    </div>
                                    <div class="slider-panel slider-panel-3">
                                        <div class="swiper-button-next sw5"></div>
                                    </div>
                                </div>
                            </div>
                            <!--scheme 4 slider -------------->
                            <div class="mb-2 scheme-slider scheme-slider-4" style="display:none">
                                <div class="slider9container">
                                    <div class="slider-panel slider-panel-1">
                                        <div class="swiper-button-prev sw5"></div>
                                    </div>
                                    <div class="slider-panel slider-panel-2">
                                        <span class="scheme-close-button" onclick="closeSlider();" style="top: 22px !important; right: -15px !important; cursor: pointer; z-index: 5;">
                                            <img src="images/resp_sourcing/scheme-close-button.svg" class="img-fluid">
                                        </span>
                                        <div class="swiper sw12">
                                            <div class="swiper-wrapper swr12">
                                                <div class="swiper-slide ss sl10 sl121">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage121">
                                                            <img src="images/resp_sourcing/scheme-logos/HOME COMPOSTABLE PACKAGING.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle121">
                                                            <span class="sltitletxt">Home Compostable Packaging</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara121">
                                                            <p class="justify1">
                                                                Home Compostable Packaging is shown by a logo that indicates that the packaging can compost at ambient temperatures (20-30°C) within 52 weeks according to European standard EN 13432. The certifying body is placed next to the logo with the company’s reference number. This packaging is also compostable.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide ss sl10 sl122">
                                                    <div class="row swiper-slide-inner">
                                                        <div class="col px-1 py-1 mt-1 mb-1 slimage slimage122">
                                                            <img src="images/resp_sourcing/scheme-logos/INDUSTRIAL COMPOSTABLE PACKAGING.png" class="img-fluid mt-2">
                                                        </div>
                                                        <div class="col px-1 py-1 mt-1 mb-1 sltitle sltitle122">
                                                            <span class="sltitletxt">Industrial<br>Compostable Packaging</span>
                                                        </div>
                                                        <div class="col-md-12 px-1 py-1 mt-2 slpara slpara122">
                                                            <p class="justify1">
                                                                Industrial Compostable Packaging is shown by a logo that indicates that the packaging must be collected and treated in a specific facility. It will completely break down within 12 weeks between 50-70°C according to European standard EN 13432.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination sw9pag"></div>
                                    </div>

                                    <div class="slider-panel slider-panel-3">
                                        <div class="swiper-button-next sw5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!----------------->



                </div>

            </section>
            <!--SCHEMES SECTION DEVELOPEMNT AREA END------------------------>






            <!--Non-certified sustainable products-->
            <section class="section-white-full-width no-print">
                <div class="row">
                    <div class="col-md-8 mb-5">
                        <h3 class="section-heading-blue-small no-print">Non-certified sustainable products</h3>
                        <p class="justify1 no-print">
                            Not all producers are on the same level of sustainability and for some the development is gradual. A product can be sustainable for many reasons (local, healthy, organic, etc.) and often this can only be known by asking your supplier. Sometimes a product is not certified even when it is made sustainably. Sometimes the cost of certification can prevent producers from getting their products certified. Or there is simply not a relevant certificate issued for example, most social audits which check the working conditions do not issue a certificate.
                        </p>
                        <p class="justify1 no-print">
                            If you want to find out how sustainable your suppliers are you could ask them if they have a production certification (for example GlobalG.A.P) or social audits (for example SEDEX and amfori BSCI). You could also ask them about their sustainable practices even if they are not certified. This will give you a good impression of how sustainable they are.
                        </p>
                        <p class="justify1 no-print">
                            When you support those producers who are making efforts, it will motivate them to continue and improve. Just remember that when you make claims about sustainability, they must be provable. And honest, simple communication is key.
                        </p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="msr-img-holder2">
                            <div class="msr-img-holder-inner2 mt-4">
                                <img src="images/resp_sourcing/non-certified-sust-products.svg" class="no-print non-certified-sust-products">
                            </div>
                        </div>
                    </div>
                </div>
            </section>






            <!--------Comprehensive Guide START------->

            <section class="section2 mb-50 no-print" id="comp">


                <div class="container-full con50">
                    <div class="row">
                        <div class="col-md-12 mt-2 mb-4 mx-1 my-1 text-center no-print">
                            <h3 class="section-heading-blue">The Comprehensive Guide to Sustainable Products </h3>
                            <p class="">
                                <strong>
                                    It is not always easy to know what a sustainable product is and the definitions can
                                    be different depending on<br>the perspectives and beliefs of the person or organisation
                                    looking at it. You can use the following characteristics<br>as a guide, because
                                    sustainable products have at least one of these characteristics.
                                </strong>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 no-print">
                            <ul id="n-Ul">
                                <li id="n-li-1" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-1">
                                                    <img src="images/resp_sourcing/icon-sm-location-marker.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl3">
                                                    <span class="ptextheading ptext-1">
                                                        Local and Regional Products
                                                    </span>
                                                    <span class="imageunder pimage-1">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-11">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>


                                <li id="n-li-2" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-2">
                                                    <img src="images/resp_sourcing/icon-sm-fruits.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl1">
                                                    <span class="ptextheading ptext-2">
                                                        Seasonal Products
                                                    </span>
                                                    <span class="imageunder pimage-2">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-2">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>



                                <li id="n-li-3" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-3">
                                                    <img src="images/resp_sourcing/icon-sm-flower.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl1">
                                                    <span class="ptextheading ptext-3">
                                                        Organic
                                                    </span>
                                                    <span class="imageunder pimage-3">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-3">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>




                                <li id="n-li-4" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-4">
                                                    <img src="images/resp_sourcing/icon-sm-env.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl1">
                                                    <span class="ptextheading ptext-4">
                                                        Ethically traded
                                                    </span>
                                                    <span class="imageunder pimage-4">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-4">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>


                                <li id="n-li-5" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-5">
                                                    <img src="images/resp_sourcing/icon-sm-animal.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl1">
                                                    <span class="ptextheading ptext-5">
                                                        Animal welfare
                                                    </span>
                                                    <span class="imageunder pimage-5">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-5">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>

                                <li id="n-li-6" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-6">
                                                    <img src="images/resp_sourcing/icon-sm-fish.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl2">
                                                    <span class="ptextheading ptext-6">
                                                        Responsibly sourced fish and seafood
                                                    </span>
                                                    <span class="imageunder pimage-6">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-6">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>



                                <li id="n-li-7" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-7">
                                                    <img src="images/resp_sourcing/icon-sm-fruits-in-plate.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl1">
                                                    <span class="ptextheading ptext-7">
                                                        Nutritious food
                                                    </span>
                                                    <span class="imageunder pimage-7">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-7">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>



                                <li id="n-li-8" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-8">
                                                    <img src="images/resp_sourcing/icon-sm-bin.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl1">
                                                    <span class="ptextheading ptext-8">
                                                        No waste
                                                    </span>
                                                    <span class="imageunder pimage-8">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-8">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>


                                <li id="n-li-9" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-9">
                                                    <img src="images/resp_sourcing/icon-sm-bee.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl2">
                                                    <span class="ptextheading ptext-9">
                                                        Food that contributes to biodiversity
                                                    </span>
                                                    <span class="imageunder pimage-9">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-9">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>

                                <li id="n-li-10" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-10">
                                                    <img src="images/resp_sourcing/icon-sm-trees.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl2">
                                                    <span class="ptextheading ptext-10">
                                                        Products that do not cause deforestation
                                                    </span>
                                                    <span class="imageunder pimage-10">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-10">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>

                                <li id="n-li-11" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-11">
                                                    <img src="images/resp_sourcing/icon-sm-packet.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl2">
                                                    <span class="ptextheading ptext-11">
                                                        Packaging with less environmental impact
                                                    </span>
                                                    <span class="imageunder pimage-11">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-11">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>

                                <li id="n-li-12" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-12">
                                                    <img src="images/resp_sourcing/icon-sm-carbon-footprint.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl2">
                                                    <span class="ptextheading ptext-12">
                                                        Food with minimal carbon footprint
                                                    </span>
                                                    <span class="imageunder pimage-12">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-12">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>


                                <li id="n-li-13" class="n-li">
                                    <div class="pbox">
                                        <div class="pbox-inner">
                                            <div class="picon-box">
                                                <div class="picon-container picon-13">
                                                    <img src="images/resp_sourcing/icon-sm-water-drop.svg" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="ptext-box">
                                                <div class="ptext-inner tl2">
                                                    <span class="ptextheading ptext-13">
                                                        Food with minimal water footprint
                                                    </span>
                                                    <span class="imageunder pimage-3">
                                                        <img src="images/resp_sourcing/long-line.svg" class="img-fluid">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="on-track ontrack-13">
                                                <div class="track-highlighter">
                                                    <img src="images/resp_sourcing/highlighter-plain.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>

                            </ul>
                        </div>

                        <div class="col-md-8 no-print">
                            <div class="conx">
                                <ul id="ulContent1">
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Local and Seasonal Products 1 -->
                                        <div class="container conx">
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2 mt-2 mb-2">
                                                    <img src="images/resp_sourcing/tractor-with-trolly.svg" class="img-fluid">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-2">
                                                    <p class="justify1">
                                                        There is no global agreement on what makes a product local.
                                                        However,
                                                        the way to define a local or regional
                                                        product is how close it is to your business. Local means the
                                                        food is
                                                        from a nearby location. Regional means the
                                                        food is from a specific region - usually something that is
                                                        defined
                                                        by the country, for example a district,
                                                        province or region. It is important that you have a clear
                                                        definition
                                                        of this aspect for yourselves and that you
                                                        make it transparent to your customers.
                                                    </p>
                                                    <p class="justify1">
                                                        There are two additional factors that can also be included:
                                                        Proximity means the main and/or value-giving
                                                        production is in a region (or x km around your business) OR the
                                                        main
                                                        and/or value giving ingredient is 100%
                                                        from a region (or from x km around your business). Referring to
                                                        a
                                                        type of producer or product means
                                                        products are transparent and traceable (what’s in them and where
                                                        they are from), they are produced in a
                                                        traditional way or based on a traditional recipe and therefore a
                                                        rediscovery of old varieties. The producer is a
                                                        small holder (SME, Small to Medium Enterprise) and supports
                                                        local/regional infrastructure and economy.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <h5><strong>Why is it important to buy locally?</strong></h5>
                                                    <p class="justify1">
                                                        <img src="images/resp_sourcing/fruit-seller-with-cap.svg" class="img-fluid seller-cap">
                                                        Buying local is a responsible act that creates a sense of
                                                        proximity,
                                                        or closeness, in your menu and with your customers. It means you
                                                        can put money back into your community and region, giving the
                                                        producers financial stability. Depending on the product it may
                                                        also
                                                        mean a reduced carbon footprint due to fewer food miles or the
                                                        distance it has travelled. And in some cases, it cuts down on
                                                        wasteful packaging. Additionally, it
                                                        allows you to differentiate from your competitors which
                                                        contributes to your positive brand
                                                        image and reputation. This strengthens your local community and
                                                        instils pride in local
                                                        production. By creating a closer connection to how food is
                                                        produced, you can establish an
                                                        identity with the region which helps to win loyal customers.
                                                    </p>
                                                    <p class="justify1">
                                                        Naturally, some products will not be available in all
                                                        localities, for example, mangoes in Germany.
                                                        Although, when produce is available locally it should be
                                                        prioritized wherever it makes
                                                        sense.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- SEASONAL FOOD -->
                                    <li class="liContent show-li" style="display:none;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="msr-img-holder3">
                                                        <div class="msr-img-holder-inner3 mt-4">
                                                            <img src="images/resp_sourcing/fresh-fruit-stall.svg" class="fresh-fruit-stall1">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-8 mt-2">
                                                    <p class="justify1 mt-2">
                                                        People love seasonal products. Sweet, juicy strawberries,
                                                        delicate asparagus or a new season lamb – depending on
                                                        where we live, we have different experiences of seasonality.
                                                        According to the OECD, seasonal products are those that
                                                        are either not available on the market during certain seasons
                                                        or periods of the year or are available through the year but
                                                        with regular fluctuations in their quantities and prices that
                                                        are linked to the season or time of the year.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-5 mb-2 yellow-block">
                                                    <h5><strong>Why is it important to buy seasonal products?</strong></h5>
                                                    <p class="justify1">
                                                        <img src="images/resp_sourcing/fruid-bowl.svg" class="img-fluid fruit-bowl">
                                                        The arrival of new season produce generates a real excitement and
                                                        expectation of tastes to come. You can demonstrate how in touch
                                                        you are with your food sources by updating your menu according
                                                        to the season. This includes several advantages. It is a good
                                                        opportunity to market your business and attract new customers by
                                                        bringing in fresh tastes. Seasonal foods can also be cheaper, and
                                                        usually taste better. New season produce is fresher due to reduced time in storage and transport
                                                        and you can actively support your local growers by sourcing from them in season.
                                                    </p>
                                                    <p class="justify1">
                                                        Of course, some products will not be available in season, for example, strawberries in winter in
                                                        Poland, but when produce is available in season, it should be prioritized wherever it makes sense.
                                                        Check out the Seasonal Calendar for further information.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Organic Content 3 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="justify1">
                                                        <img src="images/resp_sourcing/organic-farming.svg" class="img-fluid org-farming">
                                                        Organic means working with nature to produce food. Farming
                                                        organically means higher levels of animal welfare, not using
                                                        medicines unless necessary, fewer pesticides, more natural
                                                        fertilisers, no genetically modified breeds, and managing the land
                                                        in a way it doesn’t impact the surrounding environment. Organic
                                                        products don’t contain artificial colours and preservatives.
                                                    </p>
                                                    <p class="justify1">
                                                        Organic products in Europe are produced under strict
                                                        requirements, such as no genetically modified organisms
                                                        (GMOs), no ionising radiation, a limited use of artificial fertilisers,
                                                        herbicides and pesticides, prohibited use of hormones and
                                                        restricted use of antibiotics only when they are necessary for
                                                        animal health. These rules are there to maintain soil fertility and
                                                        the health of plants and animals.
                                                    </p>
                                                    <p class="justify1">
                                                        Because of this, organic producers farm differently, e.g., they rotate crops (a different crop per season, per
                                                        field, to refresh the soil), cultivate nitrogen-fixing plants and other green manure crops to restore the fertility
                                                        of the soil. Don´t use mineral nitrogen fertilisers, and encourage natural routes of pest control, for example,
                                                        using resistant varieties, breeds and other techniques . Some insects that can help for natural pest control are
                                                        ladybugs, ground beetles, hoverflies and more. Respect the natural immunological defence of animals and
                                                        don’t use overstocking in order to maintain animal health.

                                                    </p>
                                                </div>

                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <h5>
                                                        <strong>Why is it important to buy organic products?</strong>
                                                    </h5>
                                                    <p class="justify1">
                                                        <img src="images/resp_sourcing/organic-products.svg" class="img-fluid fruit-bowl">
                                                        There are several advantages when you buy organic products. For
                                                        example, organic farming means a reduced impact on the
                                                        environment and better treatment of animals. Organic farms tend
                                                        to
                                                        have a greater diversity of wildlife such as butterflies and are
                                                        better
                                                        for biodiversity. In some instances, the organic product is
                                                        better
                                                        than
                                                        the conventional alternative, for example, meat from grass-fed
                                                        cattle
                                                        contains around 50% more omega-3 fatty acids than that from
                                                        cattle
                                                        fed non-organic feed. Eggs from hens raised organically have a
                                                        fewer
                                                        chance of contamination
                                                        by bacteria that cause food poisoning.
                                                    </p>
                                                    <p class="justify">
                                                        The opposite of organic agriculture is intensive agriculture.
                                                        This
                                                        can cause soil erosion, chemical
                                                        run-off into natural water systems and can mean some weeds and
                                                        insects become resistant to
                                                        herbicides and pesticides. Organic farming doesn’t rely on
                                                        synthetic
                                                        or petroleum-based
                                                        pesticides or fertilizers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Ethically traded Content 4 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2 mt-2 mb-2">
                                                    <img src="images/resp_sourcing/milk-products.svg" class="img-fluid">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-2">
                                                    <p class="justify1">
                                                        Ethically traded products are manufactured and sold under fair conditions. This means better living and
                                                        working standards of producers; they are paid fairly, not forced to work and child labour is prevented. The
                                                        community around the producers is also supported. Ethically traded products have to, at a minimum, comply
                                                        with the eight conventions agreed by the International Labour Organisation. The producers will also be
                                                        checked regularly to make sure they continue to comply.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <h5><strong>Why is it important to source ethically?</strong></h5>
                                                    <p class="justify1">
                                                        <img src="images/resp_sourcing/fruit-seller-dollar.svg" class="img-fluid fruit-bowl">
                                                        Many farmers do not receive a fair price for what they produce.
                                                        Ethical trading ensures that farmers receive a fair price for
                                                        what they produce. Workers receive a living wage, have the
                                                        right to collective bargaining and work in safe conditions. A
                                                        part of the premium is reinvested into improving the quality of
                                                        the crop – production is more efficient, and trees are healthier
                                                        for example. You can therefore have a direct impact on the
                                                        taste of the produce such as coffee, chocolate and tea.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Animal welfare Content 5 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2 mt-2 mb-2">
                                                    <img src="images/resp_sourcing/animal-farm.svg" class="img-fluid">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-2">
                                                    <p class="justify1">
                                                        Animal welfare means that fewer animals occupy a given space which means there is less need for antibiotics and medicines whose residues can end up in food. This has a positive impact on the health of consumers. At the same time, it raises awareness among employees and affects how they treat animals.
                                                    </p>
                                                    <p class="justify1">
                                                        As sentient creatures (capable of feeling fear, pain, pleasure
                                                        and
                                                        happiness) an animal’s welfare refers to its
                                                        physical health, mental wellbeing and its ability to live and
                                                        behave
                                                        naturally. Animals shouldn’t be subject to
                                                        suffering and poor welfare. They should be given the “five
                                                        freedoms”
                                                        which means they have freedom from
                                                        hunger and thirst, discomfort, pain, injury or disease, fear &
                                                        distress and have the freedom to express normal
                                                        behaviour.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <h5>
                                                        <strong>
                                                            Why is it important to source products where<br>
                                                            animal welfare is respected?
                                                        </strong>
                                                    </h5>
                                                    <p class="justify1">
                                                        <img src="images/resp_sourcing/hen-egg-basket.svg" class="img-fluid hen-egg">
                                                        Despite being sentient creatures, billions of animals are raised
                                                        in
                                                        crowded, inhuman factory farms. Due to its intensive nature,
                                                        antibiotics are often used as part of the routine. Waste from
                                                        such
                                                        farms, when not treated properly, can also impact the
                                                        surrounding
                                                        landscape and communities. The conditions in many intensive
                                                        farms can also harm the workers’ well-being. Breeds that are
                                                        used
                                                        for intensive farming grow faster and in the case of chickens
                                                        mean
                                                        their bones are weaker and
                                                        can break easily. This also means more wasted animals that can’t
                                                        be
                                                        used for their meat.
                                                    </p>
                                                    <p class="justify1">
                                                        Animals are able to display their natural behaviour which
                                                        results in
                                                        reduced stress. In fact, when
                                                        animals are free to move their muscles naturally, better quality
                                                        meat is produced. Animals that are
                                                        slaughtered in stress-free conditions have better taste and
                                                        texture.
                                                        Eggs from hens raised outdoors have less chance of
                                                        contamination by salmonella, which can cause food poisoning
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Responsibly sourced fish and seafood Content 6 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2 mt-2 mb-2">
                                                    <img src="images/resp_sourcing/ocean-ship-fishing.svg" class="img-fluid">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-2">
                                                    <p class="justify1">
                                                        According to the MSC (Marine Stewardship Council), sustainable
                                                        fishing means leaving enough fish in the
                                                        ocean, respecting habitats, and ensuring people who depend on
                                                        fishing can maintain their livelihoods.
                                                    </p>
                                                    <p class="justify1">
                                                        Many different fishing methods are used around the world, and
                                                        they
                                                        frequently cause damage to the
                                                        ecosystems of our seas, rivers, and rural areas. For example,
                                                        the
                                                        use of nets that destroy the seabed cause
                                                        tremendous damage to coral reefs. By-catch is fish or marine
                                                        life
                                                        that is caught unintentionally in nets while
                                                        fishermen are trying to catch other types of fish. The high
                                                        level of
                                                        by-catch is a significant cause of
                                                        overfishing. A large amount of by-catch is not used for
                                                        consumption
                                                        and is generally thrown back into the
                                                        sea by fishermen as injured or dead discards.
                                                    </p>
                                                    <p class="justify1">
                                                        Sustainable fish can be caught in the wild or harvested on farms
                                                        (aquaculture). When caught in the wild, it
                                                        is important that endangered species are not captured, fish are
                                                        not
                                                        caught in over-fished regions, and the
                                                        fishing methods don’t cause damage to the environment. Fish
                                                        farmed
                                                        using aquaculture is the most
                                                        important source of fish after traditional fishing. Fish that is
                                                        farmed sustainably is less prone to
                                                        contamination from chemicals found in polluted waters due to the
                                                        way
                                                        the environment is managed. The
                                                        fish is also free of harmful antibiotic and medicine residues.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                <strong>Why is it important to buy sustainable fish?</strong>
                                                            </h5>
                                                            <p class="justify1">

                                                                Overfishing and exploitation of fish stocks is a serious
                                                                problem,
                                                                and
                                                                it is estimated that in some places 90% of fish stocks are
                                                                either
                                                                overfished or at maximum capacity. This impacts the livelihoods
                                                                of
                                                                people who rely on fishing and by extension there are adverse
                                                                effects your ability to serve fish. By sourcing sustainable fish
                                                                restaurateurs can help to preserve fish stocks for future
                                                                generations.
                                                                If we carry on fishing unsustainably there will be no fish left
                                                                and
                                                                what is left will be expensive.
                                                                The <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank">traceability</a> of products is a very important part of sourcing fish sustainably. A robust traceability system means that fish doesn’t come from illegal fishing, the exact catching area is known and the way it is produced is clear. If sustainability guidelines are followed, for both wild caught and farmed fish, the fishermen work in a safe environment and are compensated adequately. The environment is carefully managed and the local communities are supported.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="msr-img-holder4">
                                                                <div class="msr-img-holder-inner4">
                                                                    <img src="images/resp_sourcing/sea-food.svg" class="img-fluid">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Nutritious food Content 7 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="images/resp_sourcing/nutritious-food.svg" class="img-fluid nut-food mx-5">
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="justify1">

                                                        Nutritious food contains substances your body needs to stay
                                                        healthy. These substances are proteins (the building blocks for
                                                        muscles), fat (for nerve function, skin health and essential
                                                        metabolism), carbohydrates (for energy) and a whole array of
                                                        smaller elements like minerals and vitamins that are needed for
                                                        the proper functioning of our body’s processes. The kind of
                                                        nutrition our body needs changes over time, and depends on
                                                        our gender, physical activity and overall health.
                                                    </p>
                                                </div>

                                                <div class="col-md-12 mt-0 mb-2 yellow-block minus--">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                <strong>Why is it important to source nutritious food?</strong>
                                                            </h5>
                                                            <p class="justify1 mt-2">
                                                                We are what we eat! Nutritious food keeps us healthy, and
                                                                ensures
                                                                infants and children develop properly. Generally speaking, we
                                                                want
                                                                to avoid malnutrition, which causes both undernutrition and
                                                                obesity with associated diseases like diabetes. A healthy person
                                                                functions properly, has a strong immune system, is likely to
                                                                have
                                                                safer pregnancies and childbirth, lower risk of diseases and
                                                                will
                                                                live
                                                                longer
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="images/resp_sourcing/salad-bowl.svg" class="salad-bowl">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- No waste Content 8 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="images/resp_sourcing/bin-waste.svg" class="bin-waste">
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="justify1 mt-5 px-5">
                                                        Food waste can be avoided if production resources are used
                                                        efficiently and everything that is fit for human consumption is
                                                        used. For example, fruit and vegetables that are not visually
                                                        perfect can still be used in different ways for example a sauce
                                                        or stew. Using each part of an animal (nose-to-tail) prevents
                                                        uncommon parts going to waste.
                                                    </p>
                                                </div>

                                                <div class="col-md-12 mt-0 mb-2 yellow-block minus--">

                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <h5>
                                                                <strong>
                                                                    Why is it important to source food that
                                                                    does not create waste?
                                                                </strong>
                                                            </h5>
                                                            <p class="justify1 mt-2">

                                                                About one-third of all the food produced in the world goes
                                                                to waste. When we waste food, we also waste all the energy
                                                                and water it takes to grow, harvest, transport, and package
                                                                it. That´s why about 11 per cent of all the greenhouse gas
                                                                emissions that come from the food system could be
                                                                reduced if we stop wasting food.
                                                            </p>
                                                            <div class="read-wrap">
                                                                <a href="introduction-to-food-waste-eng.php" class="read-more" target="_blank">Read More</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="msr-img-holder5">
                                                                <div class="msr-img-holder-inner5">
                                                                    <img src="images/resp_sourcing/garbage.svg" class="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Food that contributes to biodiversity Content 9 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 text-center">

                                                    <img src="images/resp_sourcing/earth-life-trees.svg" class="earth-life-trees">
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="justify1">
                                                        Biodiversity is the combination of different kinds of animal
                                                        and plant life on earth and in different areas such as
                                                        rainforests, grasslands, and deserts. It includes tiny
                                                        organisms like insects, worms, fungi, and micro-organisms
                                                        that work together to keep our soil and water healthy. When
                                                        nature is biodiverse, we benefit from its food, medical
                                                        discoveries and what we refer to as ecosystem services such
                                                        as cleaning water and providing oxygen.
                                                    </p>
                                                    <p class="justify1">
                                                        Foods that contribute to biodiversity help to maintain this
                                                        richness in species by reducing the negative impacts on
                                                        those ecosystems. These negative impacts can be caused for
                                                        example by using pesticides without proper controls.
                                                        Alternative foods such as for example ancient grains, rare
                                                        animal breeds, and heirloom vegetables are good ways to
                                                        encourage biodiversity. Schemes that guarantee an origin
                                                        and way of production, such as the Label Terroir or the PDO
                                                        (protected designation of origins) are also great ways to
                                                        support unique varieties of foods.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 yellow-block nojustify1">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                <strong>
                                                                    Why is it important to source food that contributes
                                                                    to biodiversity?
                                                                </strong>
                                                            </h5>
                                                            <p class="justify1">

                                                                As humans our mental well-being is better when we are part
                                                                of an environment that has a healthy and balanced
                                                                biodiversity. Sadly, activities such as deforestation,
                                                                agricultural intensification and climate change have lead to a
                                                                decline in biodiversity. This means a massive loss of species
                                                                over a relatively short period of time.

                                                            </p>
                                                            <p class="justify1">
                                                                Around 1 million animal species are threatened with extinction –
                                                                more than ever before in human
                                                                history. This goes hand in hand with wildlife population
                                                                declines,
                                                                habitat loss, and depletion of
                                                                the natural resources that we depend on for our livelihoods and
                                                                economic development. We
                                                                must rethink how we are using natural resources, ease the
                                                                pressure,
                                                                and allow ecosystems to
                                                                recover. Furthermore, food crops and animals that lack
                                                                biodiversity
                                                                are more prone to diseases
                                                                and require a higher use of medicines.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="msr-img-holder6">
                                                                <div class="msr-img-holder-inner6">
                                                                    <img src="images/resp_sourcing/save-earth.svg" class="save-earth sve2">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Products that do not cause deforestation Content 10 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2 mt-2 mb-2">
                                                    <img src="images/resp_sourcing/portrait.svg" class="img-fluid">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-2">
                                                    <p class="justify1">
                                                        Products that do not cause deforestation do not destroy natural
                                                        forests. Deforestation is mainly driven by the
                                                        production of soy, palm oil, cattle, paper, and wood. Soy is
                                                        mainly
                                                        used as animal feed for meat, poultry, and
                                                        also for fish production.. Palm oil is a common and highly
                                                        effective
                                                        cooking oil, and is a part of many pre-made
                                                        food products and can also be found in cosmetics, detergents and
                                                        soaps.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                <strong>Why is it important to source products that<br> do not
                                                                    cause deforestation?</strong>
                                                            </h5>
                                                            <p class="justify1">

                                                                One of the drivers of climate change is deforestation – the loss
                                                                of natural forest and vegetation as a result of the conversion
                                                                of
                                                                forests to agriculture or urbanization. It is important not to
                                                                cause deforestation because forests are one of the natural
                                                                resources that remove carbon dioxide from the atmosphere.
                                                                Forests also provide a natural habitat for many plant and animal
                                                                species, helping maintain a healthy biodiversity that creates
                                                                living space and livelihood for many people.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="images/resp_sourcing/trees-mountain.svg" class="img-fluid hen-egg mt-3">
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Packaging with less environmental impact Content 11 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="images/resp_sourcing/plastic-disposable.svg" class="plastic-disposable">
                                                </div>
                                                <div class="col-md-6 mb-2 mt-2">
                                                    <p class="justify1">
                                                        Packaging protects food, ensures food safety and improves
                                                        shelf life. But when used unnecessarily and disposed of in the
                                                        wrong way, packaging can cause harm to the environment. In
                                                        gastronomy, single-use packaging has up until now been
                                                        almost indispensable, and it is mostly made of plastic.
                                                        Packaging that has less environmental impact means that it
                                                        does not create waste and the resources that were needed to
                                                        produce it are not discarded. <strong>The three Rs</strong> are a way to explain
                                                        the concept:
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2">
                                                    <h5><strong>Reduce</strong></h5>
                                                    <p class="justify1">
                                                        The amount of packaging is right for what it needs to do,
                                                        without
                                                        unnecessary parts, weight or thickness.
                                                        Packaging doesn´t contain substances of concern for example
                                                        Polyvinyl chloride (PVC), Polyvinylidene
                                                        chloride (PVDC) and Bisphenol A (BPA). It does not use expanded
                                                        polystyrene (EPS) unless there is no
                                                        alternative.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2">
                                                    <h5><strong>Recycle</strong></h5>
                                                    <p class="justify1">
                                                        The material used can be recycled, for example, glass, paper or
                                                        certain types of plastic, for example, PP, PE and
                                                        PET. The different parts can be separated for recycling, for
                                                        example, plastic inside a cardboard sleeve or a
                                                        paperboard around a yoghurt cup. The packaging contains recycled
                                                        material wherever possible, for example,
                                                        water and beverages in recycled PET, detergent in recycled HDPE
                                                        or
                                                        PET. And all packaging should be
                                                        collected and reused, for example, plastic crates to transport
                                                        products or refillable bottles in glass, HDPE, and
                                                        PET.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2">
                                                    <h5><strong>Renew</strong></h5>
                                                    <p class="justify1">
                                                        The material comes from renewable resources, for example,
                                                        bio-based
                                                        plastics made from sugar cane or
                                                        starch) and wood/paper fibre from managed forests.
                                                    </p>
                                                </div>


                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                <strong>
                                                                    Why is it important to source packaging that has<br>
                                                                    less environmental impact?
                                                                </strong>
                                                            </h5>
                                                            <p class="justify1">
                                                                When packaging is used unnecessarily and dispensed of in the
                                                                wrong way it can cause harm to the environment. The production
                                                                and disposal of conventional plastic and single-use packaging
                                                                requires resources (for example fossil fuel) and has a
                                                                negative
                                                                impact on the environment - a truckload of plastic ends up in
                                                                our
                                                                oceans every minute. Other materials like cardboard and wood
                                                                when not disposed of properly can also attract fines and waste
                                                                collection costs.
                                                            </p>
                                                            <h6 class="">
                                                                <strong>
                                                                    Here are some examples of how long some products need to
                                                                    break down in a landfill
                                                                </strong>
                                                            </h6>
                                                            <p class="justify1 mt-4">
                                                                <strong>Compostable packaging</strong> decomposes into natural elements which are
                                                                rich in nutrients and
                                                                good for the environment within a certain period of time. Home
                                                                compostable packaging can
                                                                compost at ambient temperature (20-30°C) within 52 weeks
                                                                according
                                                                to European standard
                                                                EN 13432. This means that you can throw your packaging in your
                                                                compostable bin with your
                                                                fruit and vegetable peels.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="msr-img-holder9">
                                                                <div class="msr-img-holder-inner9">
                                                                    <img src="images/resp_sourcing/food-pack.svg" class="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">


                                                            <p class="justify1 mt-2">
                                                                <strong>Industrial compostable packaging</strong> needs to be collected and
                                                                properly
                                                                treated in a specific facility. It will completely
                                                                break down within 12 weeks thanks to specific conditions
                                                                (50-70°C)
                                                                according to European standard EN 13432. If the
                                                                waste is put into a recycling bin, it will contaminate the whole
                                                                batch, making it impossible to be recycled and reused.
                                                                In landfills or in in-home
                                                                compost bins, it won’t biodegrade. And if it ends up in marine
                                                                environments, it’ll function similarly to conventional
                                                                plastic, breaking down into micro-sized pieces, lasting for
                                                                decades,
                                                                and
                                                                presenting a danger to marine life.

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Food with minimal carbon footprint Content 12 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2 mt-2 mb-2">
                                                    <img src="images/resp_sourcing/farmers.svg" class="img-fluid">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-2">
                                                    <p class="justify1">
                                                        Food products with a minimal carbon footprint emit a minimum of
                                                        carbon dioxide and other greenhouse
                                                        gases, like methane, into the earth’s atmosphere during all
                                                        stages
                                                        of that food’s production, for example, a local
                                                        tree fruit. Each gas has a carbon equivalent, and this is what
                                                        calculations are based on. When meat and dairy
                                                        are produced sustainably, they do emit carbon (via methane) but
                                                        it
                                                        is captured back into the environment via
                                                        the natural carbon cycle.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2 yellow-block">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                <strong>
                                                                    Why is it important to source food with a minimal<br>
                                                                    carbon footprint?
                                                                </strong>
                                                            </h5>
                                                            <p class="justify1">

                                                                Carbon emissions contribute to climate change. And climate
                                                                change is already having a serious negative impact on wildlife,
                                                                freshwater, oceans, and the economy in various areas on the
                                                                planet. If we can significantly reduce carbon emissions, we have
                                                                a
                                                                good chance to avoid a climate crisis. Emissions also cost
                                                                producers money, for example, the fuel used to power farm
                                                                equipment. This cost will eventually be passed onto buyers of
                                                                that
                                                                produce.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="images/resp_sourcing/earth-temperature.svg" class="et2">
                                                        </div>
                                                    </div>





                                                </div>
                                            </div>
                                        </div>
                                        <div class="spacer"></div>
                                    </li>
                                    <li class="liContent show-li" style="display:none;">
                                        <!-- Food with minimal water footprint Content 13 -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2 mt-2 mb-2">
                                                    <img src="images/resp_sourcing/water-footprint.svg" class="img-fluid">
                                                </div>
                                                <div class="col-md-12 mb-2 mt-2">
                                                    <p class="justify1">
                                                        Food products with a minimal water footprint consume and/or
                                                        pollute
                                                        a minimum of freshwater resources
                                                        during all processing stages of that food’s production.
                                                    </p>
                                                </div>
                                                <div class="col-md-12 mt-2 mb-2 yellow-block">


                                                    <h5>
                                                        <strong>
                                                            Why is it important to source food with a minimal
                                                            water footprint?
                                                        </strong>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <p class="justify1">
                                                                Freshwater is a scarce resource, and it is becoming more and more polluted and depleted in many areas, for example, rivers that run dry and wildlife that is endangered because of contaminated water. If we can avoid depleting this precious resource, we can avoid conflicts and the risk of consuming polluted water in both our water and food supplies.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="images/resp_sourcing/tap-water-drop.svg" class="img-fluid etemp1 mt-2">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                            </div>
                        </div>
                        </li>
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <a id="next-btn" onclick="ButtonNext9Click();" class="read-more-btn float-end">
                                    Next Topic
                                </a>
                            </div>
                        </div>
                        </ul>

                    </div>

                </div>
                <div class="col-md-12 mt-0 mb-5">

                </div>
        </div>
    </div>
    </section>

    <!--------Comprehensive Guide END------->



    <!--------Simple ways------>
    <section class="section-white-full-width no-print">
        <div class="row">
            <div class="col-md-8">
                <h3 class="section-heading-blue-small no-print">
                    Simple ways to source responsibly
                </h3>
                <p class=" no-print">
                    Within the last decades, our consumption habits have changed a lot compared to past generations. We live in a globalised world where most of the time we are used to getting different kinds of products throughout the year, even though they are not in season or don’t grow locally, so sometimes, we lose the connection about how the ingredients are produced. Check out the following simple ways to source responsibly:
                </p>
            </div>
            <div class="col-md-4 no-print">
                <div class="msr-img-holder7">
                    <div class="msr-img-holder-inner7">
                        <img src="images/resp_sourcing/fresh-store.svg" class="fresh-store">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-----SLIDER START------>

    <style>
        /* SLIDER BALANCING STYLE */

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg01>img {
            width: 24rem;
            transition: 0.5s;
        }

        .sldImg01>img {
            width: 16rem;
            transition: 0.5s;
        }

        .sldImg02>img {
            width: 23rem;
            margin-bottom: 2rem;
            transition: 0.5s;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg02>img {
            width: 35rem;
            transition: 0.5s;
            margin-bottom: 2rem;
        }

        .sldImg03>img {
            margin-top: 3.6rem;
            margin-bottom: 2rem;
            transition: 0.5s;
            width: 23rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>span.sldText03 {
            margin-bottom: 2rem;
        }




        .sldImg04>img {
            margin-top: .8rem;
            transition: 0.5s;
            width: 23rem;
        }

        .sldImg05>img {
            margin-top: 1rem !important;
            transition: 0.5s;
            margin-bottom: 1rem;
            width: 22rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg03>img {
            margin-top: 3rem;
            width: 35rem;
            transition: 0.5s;
            margin-bottom: 3rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg04>img {
            width: 35rem;
            margin-top: 1rem;
            transition: 0.5s;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>span.sldText04 {
            display: block;
            margin-top: 3rem;
            margin-bottom: 1.5rem;
        }

        .pageSlider-slide.swiper-slide>div.row>div.col-md-12>.pageSlider-slide-text>span.sldText04 {
            display: block;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg05>img {
            width: 33rem;
            transition: 0.5s;

        }

        .sldImg06>img {
            width: 11.5rem;
            transition: 0.5s;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg06>img {
            width: 17rem;
            transition: 0.5s;
        }
    </style>



    <div class="row no-print">
        <div class="col-md-12">
            <div class="pageSlider-container">
                <div class="pageSlider-container-inner">
                    <div class="pageSlider-prev no-print">
                        <div class="pageSlider-prev-inner">
                            <div class="swiper-button-prev pageSwiper1PrevBtn"></div>
                        </div>
                    </div>
                    <div class="pageSlider no-print">
                        <div class="pageSlider-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pageSlider-holder">
                                        <div class="swiper pageSwiper1 no-print">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide pageSlider-slide text-center no-print">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-image">
                                                                <span class="sldImg01">
                                                                    <img src="images/resp_sourcing/purchase-box.svg" class="img-fluid">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-text">
                                                                <span class="sldText01">
                                                                    ANALYSE YOUR<br />PURCHASES
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-button no-print">
                                                                <span class="sldBtn01">
                                                                    <button class="read-more-btn" onclick="openPopUp(1);">Read more</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide pageSlider-slide text-center no-print">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-image">
                                                                <span class="sldImg02">
                                                                    <img src="images/resp_sourcing/package-delivery.svg" class="img-fluid">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-text no-print">
                                                                <span class="sldText02">
                                                                    LOOK AT WHO<br>SUPPLIES YOUR PRODUCTS
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-button">
                                                                <span class="sldBtn02">
                                                                    <button class="read-more-btn" onclick="openPopUp(2);">Read more</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide pageSlider-slide text-center no-print">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-image">
                                                                <span class="sldImg03">
                                                                    <img src="images/resp_sourcing/cow-milking.svg" class=" img-fluid">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-text">
                                                                <span class="sldText03">
                                                                    MAKE THE ORIGIN OF<br>YOUR PRODUCTS PUBLIC
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-button">
                                                                <span class="sldBtn03">
                                                                    <button class="read-more-btn" onclick="openPopUp(3);">Read more</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide pageSlider-slide text-center">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-image">
                                                                <span class="sldImg04">
                                                                    <img src="images/resp_sourcing/sliderimg4.svg" class=" img-fluid">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-text">
                                                                <span class="sldText04">
                                                                    ENGAGE YOUR STAFF
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-button">
                                                                <span class="sldBtn04">
                                                                    <button class="read-more-btn" onclick="openPopUp(4);">Read more</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide pageSlider-slide text-center">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-image">
                                                                <span class="sldImg05">
                                                                    <img src="images/resp_sourcing/sliderimg5.svg" class=" img-fluid">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-text">
                                                                <span class="sldText05">
                                                                    Look at your most common ingredients and source them more sustainable
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-button">
                                                                <span class="sldBtn05">
                                                                    <button class="read-more-btn" onclick="openPopUp(5);">Read more</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide pageSlider-slide text-center">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-image">
                                                                <span class="sldImg06">
                                                                    <img src="images/resp_sourcing/sliderimg6.svg" class=" img-fluid">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-text">
                                                                <span class="sldText06">
                                                                    Use the comprehensive guide to sustainable products and schemes
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="pageSlider-slide-button">
                                                                <span class="sldBtn06">
                                                                    <button class="read-more-btn" onclick="openPopUp(6);">Read more</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pageSlider-pagination no-print">
                                        <div class="pageSlider-pagination-inner no-print">
                                            <div class="swiper-pagination pageSwiper1Pagination"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pageSlider-next">
                        <div class="pageSlider-next-inner no-print">
                            <div class="swiper-button-next pageSwiper1NextBtn"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script>
        //pageSlider swiper
        function openPopUp(Id) {
            //alert(Id);
            $("#pop" + Id).css("display", "block");
        }

        function closePopUp(Id) {
            //alert(Id);
            $("#pop" + Id).css("display", "none");
        }
        var swiper = new Swiper(".pageSwiper1", {
            grabCursor: true,
            centeredSlides: true,
            initialSlide: 1,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 30,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            navigation: {
                nextEl: ".swiper-button-next.pageSwiper1NextBtn",
                prevEl: ".swiper-button-prev.pageSwiper1PrevBtn",
            },
            pagination: {
                el: ".swiper-pagination.pageSwiper1Pagination",
            },
        });
    </script>





    <!-----SLIDER End------>

    <!---------ADVANCE WAYS---------->
    <section class="section-highlight-withimages section4-5 pbg mb-3 no-print">
        <div class="top-highlight text-center">
            <h3>Advanced ways to source responsibly </h3>
            <p>Once you have worked on the basics, you can focus on really embedding sustainability into your
                sourcing:</p>
        </div>


        <div class="container9 mt-m2 mb-5 no-print">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <!---top row-->
                    <div class="row">
                        <div class="col-md-2 offset-md-2 advance-way-box">
                            <div class="row">
                                <div class="col-md-12 title-yellow">
                                    02
                                </div>
                                <div class="col-md-12 title9">
                                    <h5>
                                        Focus on seasonal products whenever they are available
                                        </h3>
                                </div>
                                <div class="col-md-12 text9">
                                    Source seasonal products whenever they are available
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 offset-md-2 advance-way-box">
                            <div class="row">
                                <div class="col-md-12 title-yellow">
                                    04
                                </div>
                                <div class="col-md-12 title9">
                                    <h5>
                                        Use whole ingredients
                                        </h3>
                                </div>
                                <div class="col-md-12 text9">
                                    Source whole ingredients and cook
                                    from scratch
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 offset-md-2 advance-way-box">
                            <div class="row">
                                <div class="col-md-12 title-yellow">
                                    06
                                </div>
                                <div class="col-md-12 title9">
                                    <h5>
                                        Grow your own produce
                                        </h3>
                                </div>
                                <div class="col-md-12 text9">
                                    You can grow produce such as herbs
                                    and lettuce on your own
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-2 mt-2">
                    <!---middle row-->
                    <img src="images/resp_sourcing/advance-ways.svg" class="img-fluid" />
                </div>
                <div class="col-md-12 mb-2 mt-2">
                    <!---bottom row-->
                    <div class="row">
                        <div class="col-md-3 advance-way-box">
                            <div class="row">
                                <div class="col-md-12 title-yellow">
                                    01
                                </div>
                                <div class="col-md-12 title9">
                                    <h5>
                                        Connect and commit to independent and local farms and producers
                                        </h3>
                                </div>
                                <div class="col-md-12 text9">
                                    If you partner with local producers, it gives them the encouragement to scale up,
                                    produce the food you want, and commit to
                                    practices that are environmentally friendly
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-3 advance-way-box">
                            <div class="row">
                                <div class="col-md-12 title-yellow">
                                    03
                                </div>
                                <div class="col-md-12 title9">
                                    <h5>
                                        Source rare or
                                        locally specific species
                                        </h3>
                                </div>
                                <div class="col-md-12 text9">
                                    There are rare or locally specific species
                                    that you can source responsibly. For
                                    example, ancient grains instead of the
                                    conventional ones or quinoa instead of rice,
                                    rare animal breeds and heirloom fruit and
                                    vegetables
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1 advance-way-box">
                            <div class="row">
                                <div class="col-md-12 title-yellow">
                                    05
                                </div>
                                <div class="col-md-12 title9">
                                    <h5>
                                        Prevent waste
                                        </h3>
                                </div>
                                <div class="col-md-12 text9">
                                    Introduce waste-free ingredients for example
                                    different cuts of meat for “nose-to-tail”
                                    cooking. Source packaging that will not be
                                    wasted and ask your supplier for refillable
                                    packaging options, for example, for
                                    detergents or oils
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacerx"></div>
                </div>
            </div>
        </div>




    </section>



    <!-----Trach and talk--------->
    <section class="container9 section-text-withimages section4-4 more-text no-print">
        <div class="left-content9 no-print">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h3v2">Track and talk <br>about your progress</h3>
                    <p class="justify1">
                        Once you have taken steps towards sustainable sourcing, check what impact they have, for example, less plastic waste, increased sales of sustainable menu items, or increased positive reviews on your restaurant. It is important to track and measure the progress because that boosts morale to achieve even more. Discuss with your staff regularly about the improvements observed and take note of what positive impacts they are seeing.<br>Here are a few ways this can be done:
                    </p>
                </div>
            </div>


            <div class="track-talk-subsection mt-5 mb-3 py-2 no-print">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="tracktalk-iconbox tracktalk-icon-1 no-print">
                                    <img src="images/resp_sourcing/tracktalk-icon1.svg" class="img-fluid " />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <p class="tt">
                                    <strong>
                                        Be aware that “farm-to-table” restaurants continue to appeal to restaurant visitors. Connect your customers to the source of your ingredients by talking with them about your menu.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="tracktalk-iconbox tracktalk-icon-2 no-print">
                                    <img src="images/resp_sourcing/tracktalk-icon2.svg" class="img-fluid tracktalk-icon" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <p class="tt">
                                    <strong>
                                        Explain why you made the changes and the benefits of those changes. For
                                        example, you might decide not to serve strawberries in the winter, but
                                        customers need to know why not.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="tracktalk-iconbox tracktalk-icon-3">
                                    <img src="images/resp_sourcing/tracktalk-icon3.svg" class="img-fluid tracktalk-icon" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <p class="tt">
                                    <strong>
                                        If you have traceability information on your menu or your website, explain how
                                        it works. Think about displaying a seasonal calendar with pictures of the
                                        produce in your restaurant, website or social media page. This can create a
                                        good connection with your customers especially if you can interact over it and
                                        freshen up the information as the season changes.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="tracktalk-iconbox tracktalk-icon-4">
                                    <img src="images/resp_sourcing/tracktalk-icon4.svg" class="img-fluid tracktalk-icon" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <p class="tt">
                                    <strong>
                                        Communicate what you are doing. For example, a sign on your menu in your
                                        restaurant or website is a visible reminder to your customers about your
                                        responsible actions.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <p class="justify1 ml-2">
                            As a business your impact on your community will be so much more when your customers and
                            staff understand what you are doing. Some might copy your practices in their shopping decisions.
                            Your impact could be greater than you imagine!
                        </p>
                    </div>
                </div>
            </div>




        </div>
        <div class="right-content9">
            <img src="images/flag-p-svg.svg" class="img-fluid track-talk1-img9" />
        </div>
    </section>
    <!-----TODO--------->
    <!-----TODO--------->
    <section class="container section4-6 print9 " id="section-to-print">
        <div class="top-content">
            <h3>Your Action Plan</h3>
        </div>
        <div class="mid-content cation-plan-section">
            <ul>
                <li>
                    <label class="check-wrap">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <p class="">
                        Understand the importance of sustainable products
                    </p>
                </li>
                <li>
                    <label class="check-wrap">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <p class="">
                        Inform yourself about labels and certification
                    </p>
                </li>
                <li>
                    <label class="check-wrap">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <p class="">
                        Use the comprehensive guide to sustainable products
                    </p>
                </li>
                <li>
                    <label class="check-wrap">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <p class="">
                        Introduce simple steps to your business to source sustainably
                    </p>
                </li>
                <li>
                    <label class="check-wrap">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <p class="">
                        Use advanced ways to integrate sustainability into your business
                    </p>
                </li>
                <li>
                    <label class="check-wrap">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <p class="">
                        Track and talk about your progress to customers
                    </p>
                </li>
                <li class="print-li"><button onclick="window.print();" class="no-print">Print</button></li>
            </ul>
        </div>
    </section>

    <style>
        .likebtn1 {
            margin-top: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .sharing {
            margin-top: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .contentyn {
            transition: all 0.3s;
            border: 0;
            border-radius: 0;
            background-color: #003b7e;
            color: #fff;
            text-transform: uppercase;
            font-family: "GothamBold";
            text-transform: uppercase;
            display: inline-block;
            padding: 10px 20px;
            margin: 15px 0 0;
            font-size: 18px;
            text-decoration: none;
        }

        .contentyn:hover {
            background-color: #ffe500;
            color: #003b7e;
            outline: 2px solid #003b7e;
            transition: 0.5s;
        }

        .contentyn:active {
            outline: 25px solid #003b7e;
            box-shadow: 30px 30px 25px #003b7e;
            transform: scale(1.1);
            transition: 0.5s;
        }


        .cyliked {
            background-color: #ffe500;
            outline: 2px solid #003b7e;
            color: #003b7e;
        }

        .sharebtn {
            transition: all 0.3s;
            border: 0;
            border-radius: 0;
            background-color: #003b7e;
            color: #fff;
            text-transform: uppercase;
            font-family: "GothamBold";
            text-transform: uppercase;
            display: inline-block;
            padding: 10px 20px;
            margin: 15px 0 0;
            font-size: 18px;
            text-decoration: none;
        }

        .sharebtn:hover {
            background-color: #ffe500;
            color: #003b7e;

        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="likebtn1">
                <p>
                    <strong>
                        Was this article helpful?
                    </strong>
                </p>
                <a href="" class="contentyn cy" onclick="liked(); return false;">
                    Yes <i class="fa fa-thumbs-up"></i>
                </a>
                <a href="" class="contentyn cn" onclick="disliked(); return false;">
                    No <i class="fa fa-thumbs-down"></i>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="sharing">
                <p>
                    <strong>
                        Share this page
                    </strong>
                </p>
                <a href="" id="fb-share-button" class="sharebtn"><i class="fa fa-facebook"></i></a>
                <a href="" id="tw-share-button" class="sharebtn"><i class="fa fa-twitter"></i></a>
                <a href="" id="ln-share-button" class="sharebtn"><i class="fa fa-linkedin"></i></a>
                <a href="mailto:?subject=This page has a great content" class="sharebtn"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            starter();
        };

        function starter() {
            var lcook = getCookie("likedCook2e");
            var dlcook = getCookie("dislikedCook2e");
            if (lcook) {
                $(".cy").addClass("cyliked");
                $(".cn").removeClass("cyliked");
            } else {
                $(".cy").removeClass("cyliked");
            }
            if (dlcook) {
                $(".cn").addClass("cyliked");
                $(".cy").removeClass("cyliked");
            } else {
                $(".cn").removeClass("cyliked");
            }
        };

        function liked() {
            var lcook = getCookie("likedCook2e");
            if (lcook) {
                eraseCookie("likedCook2e");

            } else {
                setCookie("likedCook2e", "1", 365);

            }
            eraseCookie("dislikedCook2e");
            starter();
        };

        function disliked() {
            var dlcook = getCookie("dislikedCook2e");
            if (dlcook) {
                eraseCookie("dislikedCook2e");

            } else {
                setCookie("dislikedCook2e", "1", 365);
            }
            eraseCookie("likedCook2e");
            starter();
        };




        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        };

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        };


        function eraseCookie(name) {
            document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        };


        var fbButton = document.getElementById('fb-share-button');
        var url = window.location.href;

        fbButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
                'facebook-share-dialog',
                'width=800,height=600'
            )
            return false;
        });

        var twButton = document.getElementById('tw-share-button');
        var url = window.location.href;

        twButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.open('https://twitter.com/share?' + url,
                'twitter-share-dialog',
                'width=800,height=600'
            )
            return false;
        });
    </script>

    <!-----FOOTER--------->
    <section class="no-side-margin no-print">
        <div class="section5">
            <div class="bottom-left">
                <div class="top-content5">
                    <h3>METRO SOLUTIONS</h3>
                    <p>METRO offers a wide range of sustainable products that are regional, seasonal, organic, animal welfare assured, ethically traded, compostable and so on.</p>
                    <p><strong>Applications that can support with menu design or communications are:</strong>
                    </p>
                </div>
                <div class="bottom-content5">
                    <ul>
                        <li>
                            <a href="https://www.menukithd.com/" target="_blank"> <img src="images/logo-dish.png" /></a>
                        </li>
                        <li>
                            <a href="https://www.dish.co/DE/en/" target="_blank"> <img src="images/Dish_Logo-svg.svg" /></a>
                        </li>
                        <li>
                            <a href="https://dataentry.protrace.metrosystems.net/login" target="_blank"> <img src="images/Protrace_Logo-ai.svg" /></a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="bottom-right">
                <div class="top-content5">
                    <h3>METRO Offer</h3>
                    <p>METRO supports you with a diverse product assortment and services for your sustainability strategy. Please check out the local METRO or makro website in your country.
                    </p>
                </div>
                <!-- <div class="bottom-content5">
                    <ul>
                        <li>
                            <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank"> <img src="images/Logo_METRO-Regio_weiss.png" /></a>
                        </li>
                        <li>
                            <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 373 192" width="373" height="192">
                                    <title>METRO_Bio-ai</title>
                                    <style>
                                        .sf {
                                            fill: #fff
                                        }
                                    </style>
                                    <g id="Ebene 1">
                                        <g id="&lt;Group&gt;">
                                            <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m104.1 0.8h6.4q1.2 0.4 2.3 1.1 1.2 0.6 2.6 1.9 2.4 1.7 5.5 2.3 3 0.5 6.1 0.5 1.9 0 3.5-0.3 1.7-0.3 2.8-0.3 2.6 0 4.4 0.3 1.8 0.3 3.7 0.3 1.8 0.4 3.1 1.1 1.3 0.6 3.2 1.1 0.5 0 1.5 0.3 1.1 0.3 1.6 0.3 2.3 0 4.3 0.5 2 0.6 4.4 1 1.9 1.1 4.1 1.7 2.2 0.7 4.8 1.8 2.9 1.3 5.7 2.9 2.8 1.6 5.2 3.7 2.6 2.2 4 4.9 1.4 2.7 3 5.3 0.8 1.1 0.9 2.1 0.1 1.1 0.1 2.2 0 1.7 0.1 2.9 0.1 1.2 0.6 2.3 0 1.7-0.1 3.2-0.1 1.5-0.6 3.2-0.7 2.2-1.2 4-0.5 1.9-0.5 4-0.4 2.2-1.1 4.2-0.7 2.1-2.6 3.6-1.4 1.7-2.6 3-1.2 1.3-1.7 2.4-2.3 4.3-5.4 7.6-3.1 3.4-7.3 6-1.9 1-3.5 2.6-1.7 1.5-4.3 3.2-3 2.4-6.4 4.1-3.5 1.7-7 3.9-3.1 1-5.5 2.5-2.5 1.6-5.6 3.3-0.7 0-0.7 1.5 0.5 1.7 1.3 3.1 0.8 1.4 3.4 1.9 1.7 1 3.3 2.2 1.7 1.2 2.4 2.9 1.9 2.2 3.1 3.9 1.1 1.7 3 3.9 0.7 0.9 0.7 3.7v0.8q0.7 1.7 1.2 3.7 0.5 1.9 0.5 4.1 0.4 2.4 1 4.5 0.6 2.2 0.6 4.3-0.7 1.1-0.9 2.2-0.3 1.1-0.7 2.1-0.5 0.5-0.6 1.4-0.1 1-0.1 1.4 0.4 1.8 0.1 3.4-0.4 1.6-1.1 3.3-0.5 1.8-1.2 3.7-0.7 1.9-2.5 3.7-1.2 1.7-2.4 3.3-1.2 1.6-2.6 3.8-0.5 0.4-1.2 0.9-0.7 0.6-1.1 1.2-1.9 1.8-3.1 3.6-1.2 1.8-3.1 2.3-0.9 0-0.9 0.6-2.8 3-8 5-2.4 1-5 2.7-2.6 1.6-5.2 2.7h-1.6q-2.4 0-4.6 0.4-2.2 0.4-4.8 0.8-1.2 0.5-2.5 0.6-1.3 0.1-3.2 0.1-1.9 0-3.4-0.2-1.5-0.2-3.4 0.2-1.9 1.1-3.3 0.9-1.4-0.3-3.3-0.9-1.9-0.4-3.4-0.7-1.6-0.2-2.7-0.6h-5l-0.5-0.2h-0.2v0.2q-0.7 0.4-1.3 0.2-0.6-0.2-1-0.2-2.4-1.7-4.9-2.4-2.4-0.6-5.5-1.5-2.4-0.8-4.7-2.1-1.2-0.5-2.4-1-1.2-0.5-2.3-1-4.7-2.1-8-5.2-1.2-1-2.3-1.7-1-0.6-2.2-1.9-0.7-0.4-1.5-1.5-0.9-1.1-0.2-2.2v-0.6q-0.7-2.2-0.1-4.2 0.6-2.1 1.8-4.5 0.5-2.3 1-3.9 0.6-1.7 1.1-3.2 0.2 0 0.2-0.4-0.2-0.2-0.2-0.4v-1.3q1.2-0.7 1.9-1.6 0.7-1 1.4-1.7 1.9-3.6 3.1-8.4 0.4-1.7 1.3-3.3 0.8-1.6 2.7-2.7v-1.3q0.7-1.1 1.3-2.2 0.5-1 1-2.8 0-0.4 0.5-1 0.5-0.7 0.5-1.3 2.1-2.2 2.1-4.4l0.9-0.6q0.5-2.2 1.6-4 1-1.8 2.2-4.2 0.5-1.1 0.6-2.2 0.1-1 0.1-2.8v-10.1l0.9-0.6q1.9-1.8 3.8-3.3 1.9-1.5 4.3-3.2 1.4-1.7 1.4-3 1.1-1.7 1.9-2.8 0.7-1.1 1.4-2.8 1.1-3.5 2.4-6.7 1.3-3.3 3.2-6.5 0.7-0.6 0.7-2.8 0.5-1.3 1.2-2.4 0.7-1 1.2-2.1 0.5-1.7 1.5-2.8 1.1-1.1 1.5-2.8 3.3-5.6 5.2-11.3 1.9-5.8 3.6-11.2 0-1-0.2-2.1-0.1-1.1-0.5-1.5v-0.7q-1.2 0-2.4 0.1-1.2 0.2-2.4 0.6-5.4 2.8-10.6 5.8-5.1 3-9.8 6.5-1 0-1.7 0.8-3.5 3.1-7.2 6-3.6 2.9-6.9 6.3-1.2 1.1-2 1.8-0.9 0.6-2 1.7-1.9 2.8-4.2 5.5-2.2 2.7-4.6 5.5l-0.4 0.4q-0.5 0.4-0.5 0.9-2.4 2.1-4.6 4.8-2.2 2.7-3.4 6.2-1.7 2.6-3 5.2-1.2 2.7-2.4 5.6-0.5 1-0.8 2.1-0.4 1.1 0.1 2.2v0.6q0.4 2.2-0.4 4.8-0.8 2.5-2 4.7v1.5q1.2 2.6 2.4 4.9 1.2 2.2 2.3 4.6 0 0.6-0.7 1.3-0.7 0.4-1.6 1.1-1 0.6-1.4 1h-1q-2.6-2.1-5.4-3.8-2.8-1.8-5.7-4.1v-2q0-0.2-0.2-0.3-0.2-0.1-0.5-0.5-1.1-1.1-1.9-2.3-0.7-1.2-1.6-2.7 0-1.7-0.5-3-0.4-1.3-0.9-3-1.2-3.5-4.7-3.5v-18.1q0.4 0 1.5-0.4 1.1-0.5 1.5-0.5l1-0.8q0.5-3.7 2.5-6.5 2-2.8 3.8-5.8 2.4-2.6 4.6-5.6 2.3-3 4.9-5.8-0.3-0.3 0-0.5 0-0.4 0.9-0.4 0.5-1.1 1.5-1.7 1.1-0.7 2.3-1.8 1.2-1 2.4-2.4 1.3-1.4 3-2.5 1.9-1.7 3.8-3 1.8-1.3 4.2-3.1 1.9-1 3.5-2.4 1.7-1.4 3.6-2.5 3.5-1.7 7.3-4.5l1.4-1.3q5.4-2.2 10.8-4.7 5.4-2.5 10.9-4.6 1.1-1.3 2.3-1.5 1.2-0.2 3.1-0.2v-0.3q0-0.4 0.7-0.4 0.5 0 0.7-0.4 0.2-0.4 0.7-1.1 2.6-0.4 4.9-1 2.4-0.5 4.8-0.9 3-1.1 4.9-2.6 1.9-1.5 3.8-3.3 0.7-1 1.3-2.1 0.6-1.1 1-1.5zm57.7 43.5v-2.1q-0.4-1.7-0.5-3-0.2-1.3-0.2-3.1-0.7-0.6-0.7-1.2-0.7-1.1-0.9-2.2-0.3-1.1-0.7-2.2-1.2-1.7-2.1-3.6-1-2-2.9-3-1.9-1.8-3.5-3.2-1.7-1.4-3.5-3.1-0.3 0.2-0.5 0-0.2 0-0.2-0.9-2.4 0-5.2-0.4-2.9-0.4-5.2-0.9-1.2-0.8-2.4-0.3-1.1 0.6-2.3 1-1.7 1.1-2.3 2.3-0.5 1.1 0.2 3.3 0 0.6-0.5 1.2-0.5 0.5-0.5 1 0 0.6-0.4 1.1-0.5 0.6-0.5 1 0 0.4-0.1 1.2-0.2 0.8-0.6 1.2-1 0.6-1 2.8-0.4 1.1-0.9 2.1-0.5 1.1-0.5 2.2-0.7 1.1-0.8 2.3-0.1 1.1-0.1 2.9l-2.1 6.4q-0.8 0.5-1.3 1.4-0.6 1-1.1 2.1-1.2 1.3-1.5 2.4-0.4 1-0.9 2.1 0 1.7-0.2 2.8-0.2 1.1-1.4 2.2-0.7 1.1-0.9 2.1-0.3 1.1-0.8 2.4-0.7 1.7-1.4 3.2-0.7 1.6-1.9 3.3l-0.7 0.6q-0.4 1.8-1.1 3.4-0.7 1.6-1.2 4-1.2 2.1-2.3 4.6-1 2.5-1.5 4.6-0.7 1.8-0.2 2.5 0.4 0.8 1.6 1.2 0.7 0.6 1.3 0.9 0.6 0.2 1.1 0.6h2.3q0.5 0 1.2-0.3 0.7-0.3 1.2-0.3 2.6-0.7 4.4-1.2 1.7-0.6 3.6-1.6 1.2 0 2.4-0.5 1.1-0.4 2.3-0.4 1.4 0 1.4-0.9 0.7 0 1.3-0.3 0.6-0.3 1.3-0.3 0.7-0.7 1.6-0.9 0.8-0.2 0.8-0.6 4-2.6 8.6-5.7 4.6-3.2 7.9-6.6 2.6-2.8 5.2-5.5 2.5-2.7 4.4-6.2 1.9-3.6 2.7-7.4 0.9-3.8 2-7.7 0.5-0.4 0.6-1.4 0.1-0.9 0.1-1.4zm-53-26.7q0.5 1.1 1.3 1.2 0.9 0.1 2.7 0.1-1.1-0.4-2-1.2-0.8-0.7-2-0.1zm-1.6 15.7h1.6v-0.6h-0.4q-0.3 0-0.5 0.2-0.2 0.2-0.7 0.4zm1.6-0.6q-0.4-1.1-0.5-1.8-0.2-0.8-0.2-1.9-0.7 0.7-0.9 1.1-0.2 0.4-0.7 0.4zm-1.7 15.1v-2.1q-1.1 0.6-1.3 0.8-0.1 0.3-0.1 1.3zm-3.7-17.2q0.4 0.4 1.1 0.6 0.7 0.2 1.2 0.9v-2.2q-0.7 0.7-2.3 0.7zm2.3-4.5h0.7v1.7q0.5 0 1.2 0.3 0.7 0.3 1.2 0.3h0.7q0.7-0.4 0.9-1.1 0.3-0.6 0.7-0.6-1.2-0.4-0.9-1 0.1-0.1 0.1-0.3h-1.5q-0.5 0-0.5-0.8 0-0.7-1.2-0.7v1.5q0 0.7-0.4 0.7h-0.3q0-0.5-0.2-1.3-0.3-0.9 0.9-0.9 0-0.4-0.3-0.7-0.4-0.2-0.4-0.6h1.7q0-0.9-1-0.9h-3q-1 2.2 0.9 2.2l0.7 0.9v1.3h-1.6l-0.5 0.4q-0.2 0.2-0.2 1.3-0.8 0 0 0.6h0.7q1.6 0 1.6-2.3zm4.6-0.7h0.1q0-0.3 0-0.6 0 0 0 0 0 0.3-0.1 0.6zm0.8 0.7v0.6q0.5 0 0.6 0.6 0.1 0.7 0.1 1.1 1.9 0 1-2.3-1.4-2 0-4.4v-0.6q-0.7 0.4-1.7-0.1-0.9-0.6-1.6-0.6v2.2h1.6q-0.6 0.5-0.7 2.2 0.7 0 0.7 1.3zm1.7-5.7q0.4 0 1.2 0.3 0.7 0.2 1.4-0.9-1.9 0-2.6 0.6zm-9.4 14.5h-1.7v0.6q1.7 0 1.7-0.6zm-2.4 25.2q0.7-0.6 2.4-0.6-1.5-1.3-2.4 0.6zm-3.3 7.4q0-1.1-0.1-1.2-0.1-0.1-0.6-0.1 0 1.3 0.7 1.3zm-1.7 7.7h1.7v-0.6h-1.7zm-1.4 6h1.4l-0.7-0.6zm0 10.7q0 0.7-0.5 1.3-0.6 0.7-1.1 1.8 0.7-0.9 2.3-0.9 0-0.4-0.3-1-0.4-0.5-0.4-1.2zm-5.4 5h3.8q-1.4-1.3-2.4-1.9-1.4 1.3-1.4 1.9zm0-9.3q1.4-1.7 1.4-2.1h1v-0.9q-0.3 0-0.3-0.2-0.4-0.4-0.7-0.4h-0.7q-0.4 0.4-1.1 1-0.8 0.7-1.5 1.1 0.7 0.5 1 0.7 0.2 0.2 0.9 0.8zm3.8 3.1q0-0.7 0.2-0.7h0.5q0.5-0.4 0.4-0.5-0.2-0.1-0.2-0.6-0.2-0.2-0.2-0.6-1.4 0-1.4 0.8-0.5 0.7-0.7 1.2-0.3 0.6-1 1 0-0.4-0.3-1-0.4-0.5-0.4-1.2-0.4 1.1-1.3 1.1-0.8 0-2 0.5 0.7 0 1.7 0.6 1.6 0 1.6 0.6l0.7 0.9h2.4zm-6.4 9.3q0-0.7 0.7-0.9 0.7-0.2 0-1.3h-1.6q0.7-0.6 0.2-1.2-0.5-0.5-0.9-0.9 0-0.5-0.4-1.1-0.3-0.7-0.3-1.1h4q1.6 0 1.6-0.6h-2.6q0-1.5-1.6 0-1.9 0-2.1 0.2-0.3 0.2-0.3 1.9 0 2.8 2.4 2.8v2.2q-0.7-0.9-3.1-0.9 0 0.7 0.4 1.2 0.3 0.5 0.3 1.2-0.4 0-1-0.4-0.6-0.5-1.1-0.5-0.9 0.9-0.9 2.4-0.3 0-0.3 0.4 0 0.2 0.3 0.2h1.6q-0.2 0.3-0.5 0.3-0.2 0.2-0.2 0.6v1.3h0.5q0.2 0 0.9-0.6l0.7-0.7q0-0.6-0.3-1.2-0.4-0.5-0.4-0.9 0.5 0 1.4 0.1 1 0.1 1 1.1 0.5 0.7 0.8 0.7 0.4 0 1.5-0.7-0.7-0.6-0.7-2.1h1.7q-0.7-0.7-1-1.4-0.2-0.8-0.7-0.1zm0-9.9q0-0.7-0.6-0.9-0.5-0.2-1-0.9v1.8zm-2.4-2.4q2.6-1.7 1.4-3.7-0.7 0-2.3 1.5 1.2 0.5 0.7 1-0.5 0.5 0.2 1.2zm-0.9 20.9q1.4-0.9 2.3-2.1h-3q0 1.5 0.7 2.1zm2.3-8.6h1v1.5h-1zm15.4 8.6q-4.3-0.4-7.8 2.2-3.6 2.6-4 6-0.7 1.5-1.6 3-0.8 1.5-2 3.3-0.4 1.7-1 3.3-0.6 1.6-1.3 3.4-1.2 2.5-2.4 5.2-1.2 2.7-3 5.5-1.4 1.8-1.4 2.2-1.2 3.7-2.5 7.2-1.3 3.6-3.2 7.2-0.7 1.1-1.2 2.3-0.5 1.2-0.5 2.9 0 1.5-0.7 1.5-0.7 0-0.7 1.5v5.6q1.2 1.1 2.3 1.8 1 0.6 2.2 1-0.2 0.5 0 0.7 0 0.4 1 0.4 1.1 0 2.8-0.5 1.6-0.6 3.5-0.6 2.4-0.8 4.7 0h1.4q4.5-1 8.6-2.4 4.2-1.4 8.4-2.5 1.9-1.1 3.4-1.7 1.5-0.7 3.4-1.8 0.7-0.6 1.4-1.2 0.7-0.5 1.9-0.9 2.4-3.5 6.4-6.1 2.3-1.7 4.7-4.9 0.5 0 0.9-0.8 0.5-0.7 0.5-1.4 0.7-2.8 1.9-4.8 1.2-2.1 2.4-3.8 0.2-0.4 0.4-0.6 0.3-0.3 0.3-0.5v-0.4q0-2.4 0.3-4.1 0.4-1.7 0.4-3.9v-5q-1-7.5-7.1-13.1-3.1-2.8-6.5-4.2-3.4-1.4-7.9-1zm-21.4 3.7h-0.7q0.7 0 0.7 0.4zm0-2.8q0-0.6-0.2-1-0.3-0.3-1.5 0.1 0 0.9 1.7 0.9zm-2.4-2.1q1-1.3 3.1-2.2-1.9 0-2.2 0.2-0.4 0.2-0.9 2zm1.7-8.2l-0.5 0.4q-0.5 0.4-0.5 1.1h3.3q-0.7-0.5-0.9-1-0.2-0.5-0.7-0.5l0.7-0.7q-0.7 0-1.4 0.7v-1.3l-0.5-0.5q-0.5-0.4-0.5-1-0.4 0.4-1 1-0.6 0.7-1.1 1.1 2.1 0 3.1 0.7zm-1-2.8q1.2 0 2.4 0.1 1.2 0.1 2.4 0.5 0-1.5-0.2-2.7-0.1-1.2-0.5-2.3h1.4v-2.8q-1.2 0-1.3 0.3-0.2 0.2-0.1 1.3v1.2q-0.5-0.2-0.8-0.4-0.2-0.2-0.4-0.2h-0.5q-0.7 0.6-1.4 1.5 1.4 0 2.3 0.7-0.9 0-0.9 0.4-0.2 0.2 0 0.2l0.9-0.6q0 0.4 0.4 0.6 0.4 0.2 0.4 0.9-1.2 0.4-2.1 0.2-0.8-0.2-2-0.2c0 0 0 1.3 0 1.3zm0-2.8q-0.7 0-1.4 0.6h1.4zm-0.7 9.5v1.5l0.7 0.6v-0.6q1 0 1-1.5h-1.7v-1.5q-0.4 0-0.9 0.4l-0.5 0.4q-0.7-0.6-0.8-1.3-0.1-0.6-0.1-1v3zm-3.3 22.4v-1.5l-1.7 1.5v0.9q1 0 1.7-0.9zm-1.7 2.2q0-0.5-0.4-0.9-0.3-0.2-0.3-0.4l-0.7 0.6v0.7zm-1.4-13q-0.7 0.5-0.3 1.1 0.3 0.7 0.3 1.7 0.5-0.4 0.5-1.4 0-0.9-0.5-1.4zm-1.6 5q0.4 1.1 0.7 1.7 0.2 0.7 0.9 1.1v-2.8zm-1.4 11.6h0.7v-1.5h-0.7zm12.5-20.5h1.6v-1.3h-2.3q0 0.5 0.3 0.7 0.4 0.2 0.4 0.6zm-13.4 14.7q0 0 0 0zm0.4 0.4q0.5 0.5 1.2 0.5v-1.8q-0.9 0.9-1.2 0.9-0.2 0.2-0.4 0zm-5.9 26.3q0.4-1.1 0.7-1.8 0.2-0.8 0.9-1.8-0.7 0.6-1.2 0.6h-0.4l-1 0.9q-0.9 0.8 0 1.5zm-3.3 12.3v0.8q0.5 0 0.7-0.4 0.3-0.4 0.7-0.4zm-2.3-17.5q1.2 0.4 2.2 0.7 1.1 0.2 1.6 0.8 0-1.1-0.4-1.8-0.3-0.8-0.3-1.9-2.2 1.3-3.1 2.2zm-0.7 11.6v2.2q0.7 0 0.9-0.2l0.5-0.4q0-0.7-0.5-0.9-0.4-0.2-0.9-0.7zm-1-0.6q-0.4-0.6-0.7-1.1-0.2-0.4-0.7-0.4v1.5zm-1.4-3h-3q0 0.6 0.4 1 0.5 0.3 1-0.2 0.7-0.6 0.9-0.7 0.2-0.1 0.7-0.1zm-4 8.2v1.3l1 0.8q0-1.5-1-2.1zm1.7-0.9v-0.9q-1.7 0.1-2.4 0.9zm62.4-128.9q0-0.7 1.7-2.2h-2.6q0 1.5 0.9 2.2zm-25.4 48.5h-0.7-1z" />
                                            <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m232.8 30.3q0.7 0.7 1.7 1.1 1.1 0.4 1.8 1.1 1.4 1.1 2.6 2.6 1.2 1.5 1.6 3.2 1 1.1 1.1 1.8 0.1 0.8 0.1 1.9 0 1.9-0.1 4.6-0.1 2.7-1.1 4.6-0.4 0.7-0.9 1.7-0.5 0.9-0.5 1.6-1.2 1.9-2.7 3.7-1.5 1.9-2.7 3.8-2.6 3-5.5 4.7-3 1.6-7 2.9-5.6 0.6-11.3 0l-0.9-0.9q-1.9-1.1-3.2-2-1.3-1-3.2-2.5-1.9-1.1-3.2-2.3-1.3-1.2-1.3-3.5v-0.5q0-1.3-0.4-1.8-0.5-0.5-0.5-1.6-0.7 0-0.7-0.5 0-0.4 0.7-0.4 0.7-1.1 1-2.1 0.4-1.1 0.4-1.6 1.2-1.7 2-3.3 0.8-1.6 2-3.3 1.9-1.8 3.8-3.4 1.8-1.6 4.4-2.9 1.2-1.3 3-1.8 1.8-0.6 3.9-1.2 0.7-0.9 1.2-1 0.4-0.1 1.1-0.5 1.9-0.7 3.8-1.4 1.9-0.8 3.8-0.8zm-13.7 21.8v-2.2q-0.5 0.5-0.5 2.2zm1-3.4q0.9 1 1.4 0.7 0.5-0.3 1.2-0.3-0.7-1.1-2.3-1.6-1.5-0.6-2.7-0.6 0.7 0.7 0.8 1.2 0.2 0.6 0.6 1 1 0 1-0.4zm1.6 3.8h1.9v-0.4h-1.9zm-63.8 121.8q0.5-1 0.5-1.9v-1.9q0-1.3 0.4-2.4 0.5-1.1 0.5-2.2 1.4-1.9 1.4-5.4 0-1.2 0.5-2.4 0.5-1.2 0.5-2.3 0-0.9 0.2-1.1 0-0.2 0.2-0.4 1.4-1.7 2.5-3.4 1.1-1.6 1.1-3.3 0.7-1.1 1.1-2 0.5-1 1.2-2.3 4.3-8.6 7.8-17.5 1.2-2.8 2.6-5.3 1.4-2.4 2.8-4.6v-0.9q0-3.4 2.4-7.1 1.8-3.4 3.6-6.8 1.8-3.3 3.7-7 1.1-1.1 1.4-2.6 0.2-1.5 0.2-3.2-0.5-1.1 0.5-2 0.9-1 2.8-1h8.7q3.3 2.4 6.4 5 3 2.7 6.3 6l0.5 0.4q-0.5 2.4-0.6 4.5-0.1 2.2-0.8 4.6v1.3q-1.6 3.6-3.5 5.8-0.5 1.1-0.5 2.4v3l-0.5 0.4q-0.4 0.4-0.4 0.9-0.5 0.4-1.1 0.9-0.6 0.6-1.3 1.7 0 1.5-0.4 2-0.3 0.5-1 1.6v1.7q0 1.1-0.6 2.1-0.6 1-1.1 2-1.1 3.5-2.7 6.7-1.5 3.3-2.9 6.7-0.5 1.1-1.1 2.6-0.6 1.5-1 3.2 0 3.5-2.4 7.2-0.7 1-1.3 1.9-0.6 0.9-1 1.5-1.2 2.4-2.4 5-1.2 2.6-1.2 4.5v1.3q-0.4 1.3 0.3 2.4 0.7 1 0.7 2.1 0 0.9 0.4 0.9 0.3 0.2 0.5 0 1.2-0.7 2.2-0.8 1.1-0.1 2.3-0.1 1.9-0.4 3.2-1.5 1.3-1.1 2.7-2.2 2.1-2.5 4.6-5.2 2.4-2.7 4.6-5.3 1.1-1.5 2.8-2.8 1.6-1.3 3-3 0.5-0.7 1-1.3 0.5-0.7 0.9-1.1 1.7-1.7 3.3-3.4 1.7-1.6 3.1-3.3 0.2 0 0.5-0.2 0.4-0.4 0.4-1.1-0.7-0.6-0.3-0.7 0.3-0.2 0.3-0.6 2.6-1.7 4.3-3.9 1.6-2.1 3.5-4.1 1.9-2.1 4.1-5 2.3-2.9 4.6-6 2.4-3 4.4-5.9 2-2.9 3.4-5.3 0-0.6 0.6-0.7 0.6-0.1 1.1-0.1h2.3v7.9q0 0.5-0.1 0.6-0.1 0.1-0.8 0.7-0.5 1.3-1.7 3.1-1.2 1.7-2.6 3.6-1.4 2-2.7 3.9-1.3 1.9-2.2 3.2-0.5 0.5-1.3 1.4-0.8 1-1.5 2.1-1.9 1.7-3.2 3.7-1.3 1.9-3.2 4.3-2.8 2.6-5 5.8-1.1 0.4-2 1.5-0.8 1.1-2 2.2-1.1 1.7-2.2 3.3-1.1 1.6-2.5 3.3-1.2 1.1-2 2.1-0.8 1-2 2-0.5 0.7-1.2 1.5-0.7 0.9-2.5 1.6v0.4q-0.5 0.4-0.8 0.7-0.2 0.4-0.4 0.6-0.3 0.4-0.5 0.4-2.8 2.8-5.5 5-2.7 2.1-5.6 4.5-1.9 1.1-3.1 2-1.3 1-3.2 2.5-1.2 0.5-2.3 0.6-1 0.1-1.7 0.7-1.9 0-3.2 0.3-1.3 0.4-3.2 1h-1.4q-1.9-0.6-3.7-1.1-1.7-0.4-3.6-1-2.1 0-5-0.6-2.8-0.5-4.2-2.2-0.7-0.7-1.8-1.2-1-0.6-1.7-1-1.9-1.1-3.3-2.7-1.4-1.6-1.9-4zm33-48.9q1.1 0.4 1.7 0.4 0.6 0-0.1-0.4zm1 12.9q0-0.9 0.7-0.9h-2.6q1.9 0 1.9 0.9zm-10.6 8q0 0.6 0.4 1.1 0.5 0.4 0.5 1v-2.1zm0 15.1q-0.5 1.1-0.5 1.4v0.9h0.5zm-1.4 0h2.3v-0.8h-1.4q-0.9 0-0.9 0.8zm0 10.4q0.7-1.7 0.7-1.9 0-0.3-1.2-0.3 0.5 0.9 0.5 2.2zm-3.1-6.7h1.4q1-1.1 1.1-1.6 0.1-0.5 0.1-1-1.9 0.7-2.6 2.6zm-0.9-6.2v1.7h4q0-0.4-0.5-0.4-0.9-0.7-1.6-0.8-0.7-0.1-1.9-0.5zm0-4.1q-0.7 0-0.7 0.2 0 0.2 0.7 1.7zm0 8.2q-1 0.9-1.4 0.9h1.4zm15.1-35.4q0 0.4 0.7 0.9 0.7 0.4 1.8 0.4 0-1.1-0.9-1.2-0.9-0.1-1.6-0.1z" />
                                            <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m232 161.9v-2.4q0-1.1 0.5-1.5 0.5-0.4 0.5-1.5-0.7-2.8 0.3-5.5 1.1-2.7 2.7-5.5 1.9-1.7 3.1-3.6 1.2-1.8 1.9-3.8 1.2-1.7 1.9-3 0.7-1.3 1.2-3 1.1-1.3 2.7-3 1.5-1.7 2.2-3.5 1.2-1 1.8-2.4 0.6-1.4 1.3-2.5 0.7-1.1 0.8-2.1 0.1-0.9 0.6-2 2.3-4.5 5-9.1 2.8-4.5 6.1-8.4 1.8-2.4 3.3-4.3 1.4-1.9 3.7-3 0.7-1.1 1.8-1.9 1-0.7 2.2-1.8 3.1-2.8 6.7-4.5 3.7-1.7 7.7-2.8 1.2-0.4 2-0.9 0.8-0.4 2-0.4h0.5q1.1 0.6 2.8 0.7 1.6 0.2 2.8 0.2h8q1 0 1.5 0.4 1.8 1.1 3.7 2.4 1.9 1.2 3.8 2.3 7.8 5.4 11.1 15.1v0.5q0.4 1.2 0.6 1.9 0.1 0.6 0.8 1.7v3.3q0 1.5 0.4 2.5 0.8 2.8 0.4 5.5-0.4 2.7-0.4 5.5-0.4 2.8-1.2 5.4-0.9 2.6-3.2 4.8-1.4 1.9-1.4 4.9 0 1.1-0.3 2.6-0.2 1.5-1.4 2.6-0.7 1.1-1.3 1.8-0.6 0.8-1 1.9-1.2 1.7-1.5 3.1-0.2 1.4-0.2 3.1 0 2.4 2.1 2.4h4l1.4-1.3q0.7-0.9 1.8-1.4 1.1-0.5 1.8-1 1.9-1 3.2-2.1 1.2-1.1 2.7-2.8h1.1q1.9-0.9 3.1-2.1 1.2-1.2 2.4-2.7 1.1-1.3 2.3-2.6 1.2-1.2 2.6-2.3 1.7-1.1 3-2.5 1.2-1.4 3.1-2.5 1.2-1.5 4-4.7 2.9-3.3 4.7-5 0.5-1.1 1.6-2 1-1 1.5-2.1 0.7-0.8 1.2-1.6 0.5-0.8 1.4-1.2 1.2-1.5 1.7-1.5 0.4 0 2.3 1.5 1.2 0.4 1.3 0.5 0.1 0.2 0.1 1.2-0.7 0.9-0.8 1.4-0.1 0.6-0.1 1-0.5 1.1-1.1 2.1-0.6 0.9-1 1.6-0.7 1.7-1.8 2.8-1.1 1.1-2.2 2.1-0.8 0.9-2.3 2.5-1.5 1.6-1.5 2.3-1.9 1.7-3.1 3.6-1.2 2-2.3 3.7-0.5 0-0.7 0.1-0.3 0.1-0.7 0.1-0.5 0.2-0.8 0.2-3 2.2-5.4 5-0.4 1.7-1.5 2.8-1.1 1.1-2.5 1.9-1.6 1.3-3.4 3-1.8 1.6-3.6 3.3-1.2 0.9-2.3 1.6-1 0.8-1.7 1.2-1.5 1.1-3.1 2.2-1.7 1-2.8 1.5-2.6 1-4.6 2.2-2 1.2-4.6 2.3-2.1 0-4.5 1.5-0.9 0.4-3.5 0.4-1.2 0.7-2.3 0.9-1 0.2-2.2 0.9-1.9 1-3.7 2-1.7 1-3.1 2.1-1.2 0.8-2.4 1.7-1.2 0.8-1.6 1.9-1 1.1-1.9 2.1-1 0.9-2.2 2-2.3 1.5-4.2 2.6-1.9 1.1-3.8 2.2-2.3 1-4.3 1.9-2 0.9-4.1 1.7h-1.2q-1.2 0.5-2.3 0.5h-2.2q-4.9 1.3-9.4 0-4-0.5-8.1-2.3-4.2-1.8-7.9-4.6-3.1-2.8-5.2-5.6-2.1-2.8-2.9-6.3-0.4-1.1-0.5-2-0.2-1-0.9-1.7-0.4-1-1-2-0.6-1-0.6-2.1 0-0.8-0.5-1.3-0.5-0.4-0.5-1zm34-21.2v2.4h1.1q0-0.4-0.1-1-0.1-0.5-1-1.4zm0-4.1h2.1v-0.8h-2.1zm0-8.7h2.1v-0.8q-0.7 0-1-0.2-0.2-0.2-1.1-0.2zm1.1 1.2q-0.9 0.1-1.4 0.6-0.4 0.5-1.6 0.5h3zm-5.1 17.5q1.6 0 1.9-0.1 0.2-0.1 0.7-1.2-1 0-2.6 1.3zm-1.4-7.3q0.7 0.6 1.7 0.9 1.1 0.4 1.8 0.4-0.7-1.1-1.2-1.2-0.5-0.1-2.3-0.1zm-0.5 3.2h-1.4q-2.6 0-2.6 1.7 0 0.5 0.2 0.7 0.5 0.4 1.2 0.4 0 1.1-0.1 1.2-0.1 0.1-1.3 0.1h-3.1v1.3q-2.3 0-2.3 1.1v0.8q0 0.5 0.4 0.5 0.7-0.7 1-0.8 0.2-0.1 0.9-0.5h1.7v2.6q0 0.8 0.2 1 0 0.3 0.2 0.5l1.4 1.3q0.8 0 1-0.3 0.2-0.2 1.2-0.2v-1.3h-1.2q-0.7 0-1.2 0.2-0.5 0.3-1.2 0.3 0-0.5 0.4-1.1 0.3-0.7-0.4-1.3 0-0.4 0.5-0.9 0.5-0.4 0.9-0.4 0-0.4 0.6-0.5 0.6-0.1 1.6-1 0-0.4 0.2-1.3 0.2-0.9 0.2-1.3h-1.6q0-0.9 0.6-1 0.6-0.1 1-0.5h0.5q0.5 0 1 0.4-0.5-0.4-0.5-0.8v-0.9h1.9l-0.5-0.9q0 0.7-0.5 0.8-0.5 0.1-0.9 0.1zm1.4-14.7q-1.4 1.3-2.4 1.3h2.4zm5.6 33.5h-4q-2.6 1.9-2.5 4.1-0.5 2.1-1.3 4.4-0.9 2.2-1.8 4.2v1.1q0.9 0.4 1.4 0.8 0.5 0.5 1.2 0.9 0 0.6 0.7 1.3 0.2 0.4 0.7 0.6 4.2-1.5 7.7-3 3.4-1.5 6.4-4.3 0-0.9 0.5-1.4 0.5-0.6 0.5-1.8v-2q0-0.8-1-1.3-1.2-0.6-2.2-1.3-1.1-0.6-1.8-1.1-1.2-1-2.2-1.5-1.1-0.4-2.3 0.3zm-5.6-10.6q-1.2-0.4-2-0.6-0.8-0.1-2-0.7v1.3zm0-14.2q0-1.3-1-2.2-1.1-0.4-1.6 0.2-0.5 0.7-1.4 0.7 1.2 0.4 2 0.5 0.8 0.1 2 0.8zm-5 2.8q-0.4 0.6-0.9 0.7-0.5 0.1-0.5 0.6v1h1q0.4 0 0.9-0.4 0.2-0.2 0.5-0.6 1.9 0 2.2-0.2 0.4-0.1 0.8-1.1v-2.4h-1.4v-0.4l-0.2 0.4h0.2q0 1.1-0.4 1.1h-1.2q0.2 0.2 0.5 0.2 0.2 0.2 0.4 0.2 0.3 0 0.3 0.4-1.2 0-1.2 1.3zm-1.4-2.4v-1.2h-0.5q0 0.8 0.2 1 0 0.2 0.3 0.2zm0.9 18.4q-0.7 0-1.2 0.5-0.4 0.6-1.4 1 1 0.6 1.1 0.7 0.1 0.2 0.6 0.1 0-0.6 0.4-1 0.5-0.5 0.5-1.3zm-5.4-11q0 1.1 2.3 1.1v-2.8q-0.7 0.4-0.9 0.8-0.2 0.4-0.9 0.4l-0.3 0.5zm9.7 3.4q-0.3 0.5 0.2 1.3 0 0.5 1 0.5h0.2q0.2-0.3 0.2-0.5v-0.4q0-0.7-0.4-0.7-0.3 0-0.3-0.2-0.2-0.2-0.2-0.4 0-0.2-0.5-0.6 0 0.6-0.2 1zm-10.9 9.9q-0.4-0.8-1.4-1.2v1.2zm59.6-63.6q-1.8-1.5-3.3-2.9-1.4-1.4-3.3-3.1h-5.4q-1.9-0.7-3.5-0.1-1.7 0.5-3.5 1.6-1.2 0.7-2.8 1.4-1.5 0.8-2.7 1.2-1.8 1.7-4.1 3.3-2.2 1.7-4.8 2.7l-0.3 0.2q-0.2 0.3-0.2 0.7-0.9 0.4-1.4 1.1-0.5 0.6-1.2 1.7-0.7 0.6-1.2 0.8-0.4 0.1-1.4 0.5v6q1.2 0.5 2.6 0.9 1.4 0.4 2.6 0.4 5.4 0 9.4 4.1 1.2 1.5 1.8 2.6 0.6 1.1 2.2 2.2 0.5 0.8 0.5 1.3-0.5 0.6-0.5 1.6v2q-0.7 1.1-0.9 2.2-0.2 1.1-1.2 2.4-2.6 3.8-5.9 7.9-3.3 4.1-5.4 9.1 0 0.6-0.6 1.2-0.6 0.5-0.6 0.9 0 0.9 0.6 1.3 0.6 0.5 1.1 1.1 2.6 2.2 4.8 3.7 2.3 1.5 4.6 2.4h1.4q1.7-1.6 3.1-2.7 1.4-1.2 3-3l0.5-0.4q0-1.1 0.5-2.5 0.5-1.4 0.9-2.4 1.2-1.8 2.6-3.7 1.4-1.9 2.6-3.7 1.4-3.9 2.7-7.1 1.3-3.2 1.8-6.7 1.2-2.8 2.3-5.5 1.2-2.7 1.2-5.5 0-1.3 0.3-3 0.2-1.7 0.2-3.9 0.7-2.3 0.3-4.2-0.3-1.8-0.3-4-0.9-2.3 0.9-4.1z" />
                                            <path id="&lt;Path&gt;" class="sf" d="m331.9 44.6v1.8c0 0.3-0.1 0.7-0.7 0.7h-6v-3.3h6c0.7 0 0.7 0.5 0.7 0.8z" />
                                            <path id="&lt;Path&gt;" class="sf" d="m351.1 44.4v9c0 0.2-0.1 0.7-0.8 0.8h-5.6c-0.6-0.1-0.7-0.6-0.7-0.8v-9c0-0.2 0.1-0.6 0.7-0.6h5.6c0.7 0 0.8 0.4 0.8 0.6z" />
                                            <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m257.8 33.4h105.1v31.2h-105.1zm78.7 10.2c-0.1-1.9-1.5-3-3.2-3.1h-13.3v17.1h5.2v-7.1h1.8l3.6 7.1h5.9l-4-7.1h0.8c1.6-0.1 3.2-1.2 3.2-3.1zm-18.5-3.1h-14.8v3.4h4.9v13.7h5.1v-13.7h4.8zm-16.8 0h-13.5v17.1h13.5v-3.4h-8.4v-3.6h8.4v-3.3h-8.4v-3.4h8.4zm-16.1 0h-6.9l-3.3 8.4-3.3-8.4h-6.9v17.1h5.1v-10.8l3.4 10.8h3.4l3.4-10.8v10.8h5.1zm71.1 2.9c-0.1-1.9-1.5-2.8-3.2-2.9h-11c-1.6 0.1-3 1-3.2 2.9v11.1c0.2 2 1.6 3 3.2 3.1h11c1.7-0.1 3.1-1.1 3.2-3.1z" />
                                        </g>
                                    </g>
                                </svg></a>
                        </li>
                        <li>
                            <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank">METRO <br> Serviceverpackungen </a>
                        </li>

                    </ul>
                </div> -->
            </div>
        </div>
    </section>
    </div>
    </div>

    <div class="footer-wrap no-print">
        <div class="logo-fooetr">
            <img src="images/footer-logo.svg" />
        </div>
        <div class="fotter-right footer-first-page">
            <div class="fotter-right-top">
                <div class="footer-links content-foo">
                    <p>The METRO My Sustainable Restaurant is designed to help food business owners adopt a more sustainable future.</p>
                </div>
                <div class="footer-links link2">
                    <ul>
                        <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a></li>
                        <li><a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a></li>
                        <li><a href="https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a></li>
                        <li><a href="https://www.metroag.de/en/contact" title="" target="_blank">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links link3">
                    <ul>
                        <li><a href="#" title="">Link 1</a></li>

                        <li><a href="#" title="">Link 1</a></li>

                        <li><a href="#" title="">Link 1</a></li>

                        <li><a href="#" title="">Link 1</a></li>

                    </ul>
                </div>
            </div>
            <div class="footer-socials">
                <ul>
                    <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>

            </div>
        </div>

        <div class="fotter-right page-ani-footer">
            <div class="fotter-right-top">
                <div class="footer-links link2">
                    <ul>
                        <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a></li>
                        <li><a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a></li>
                        <li><a href="https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a></li>
                        <li><a href="https://www.metroag.de/en/contact" title="" target="_blank">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-socials">
                    <ul>
                        <li><a href="https://www.facebook.com/HOSPITALITY.digitaI" target="_blank"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.metroag.de/youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/metro_mpulse/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/metro-ag" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/@METRO_News" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>

                </div>
            </div>

        </div>

    </div>





    <div id="pop1" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(1);">X</a>
            <h4>
                Analyze your purchases
            </h4>
            <p>
                Look at your main ingredients. Do you know how sustainable they are? Focusing on the ingredients that are
                most important
                to your business is an effective way to start. Sustainable products meet at least one of these
                characteristics: they
                are local and/or regional, seasonal, organic, fairly traded, animal welfare assured, sourced
                responsibly,
                nutritious, create less waste, contribute to biodiversity, have minimal carbon footprint and minimal
                water footprint.
            </p>
        </div>
    </div>
    <div id="pop2" class="modalx">
        <div class="modalx-content text-left">
            <a class="btn-close-popup" onclick="closePopUp(2);">X</a>
            <h4>
                Look at who supplies your products
            </h4>
            <p class="justify1">
                Get to know your suppliers and if possible, visit them to learn about their production
                methods. Consider
                asking
                questions such as:
            </p>
            <ul>
                <li>
                    How are your animals raised? For example, indoors or outdoors, how much time do they spend indoors?
                    How much space do
                    they have in their stables or boxes?
                </li>
                <li>What are your animals fed? For example, grass or uncertified soy?</li>
                <li>
                    How are your fruit and vegetables protected against pests? For example, using natural methods or
                    chemical pesticides?
                </li>
                <li>Is your fish farmed or caught?</li>
                <li>What is the species of the fish you sell?</li>
                <li>Where was your fish caught?</li>
                <li>Does your fish have certification or accreditation?</li>
                <li>Is your palm oil and soy from sources that have not led to deforestation?</li>
                <li>How do your suppliers trace their products?</li>
                <li>What information can your suppliers make available to you?</li>
            </ul>
        </div>
    </div>
    <div id="pop3" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(3);">X</a>
            <h4>
                Make the origin of your products public
            </h4>
            <p>
                Some suppliers will use codes to show that they can track their products. Sometimes this is done
                digitally and can be
                available on an app. Ask if you can display this information on your menu so customers can scan it e.g. via a QR-Code. Ask
                if your supplier
                has a website or social media page where you can find updates from their site and can also encourage
                your customers to
                find out more. You don’t have to have information on every ingredient. Making a start and being open and
                transparent to
                your customers is what they increasingly expect.
            </p>
        </div>
    </div>
    <div id="pop4" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(4);">X</a>
            <h4>Engage your staff</h4>
            <p>
                Involve your staff from the beginning and explain why you are doing this. Explain the different ways to
                source
                sustainably, for example, local, regional, and seasonal. Use visual reminders, for example, posters of
                seasonal
                calendars in the office or the kitchen.
            </p>
        </div>
    </div>
    <div id="pop5" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(5);">X</a>
            <h4>
                Look at your most common ingredients and source them most sustainable
            </h4>
            <p>
                Sourcing sustainably is a complex topic, and changes on short notice can be hard to make. Looking at your
                most common
                ingredients, there are some simple ways to make a start:
            </p>
            <ul>
                <li>
                    Celebrate local and seasonal - switch the products which are easy to replace, for example, locally
                    grown vegetables when
                    in season
                </li>
                <li>Introduce organic products</li>
                <li>
                    Introduce certified products, for example, Fairtrade coffee, MSC or ASC certified fish, organic meat
                </li>
                <li>Ensure your eggs are from free range hens</li>
                <li>Replace endangered fish with an alternative. The MSC has an interactive guide</li>
                <li>Replace plastic disposable products with alternatives</li>
                <li>
                    Replace products with high sugar, salt and trans-fat content with more nutritious and healthy
                    alternatives
                </li>
            </ul>
        </div>
    </div>
    <div id="pop6" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(6);">X</a>
            <h4>
                Use the comprehensive guide to sustainable products and schemes
            </h4>
            <p>
                Check out for more detailed information our comprehensive guide on sustainable products and our overview
                of schemes. Use
                them as additional information for specific questions of your employees or customers.
            </p>
        </div>
    </div>






    <script>
        //schemes and certifications script
        window.onload = function() {
            BindTopics();
            var topicno = "1";
            BindSubTopics(topicno);
            $("li#topic0>a.topic-link>div.ltext").addClass("scheme-activev1");
            $("#topic0>a>div.yarrow>img").css("display", "block");

        };

        function BindTopics() {
            var listTopics = "";
            listTopics += "<ul id='topics'>";
            for (var t = 0; t < jasonData.Topics.length; t++) {
                listTopics += "<li class='topic-box' id='" + "topic" + t + "'><a class='topic-link' data-topicindex=" + t + " onclick='highLightTopic9(this);'><div class='ltext'>" + jasonData.Topics[t]["data-heading"] + "</div><div class='yarrow'><img src='images/resp_sourcing/scheme-yellow-arow.svg' class='img-fluid scheme-yellow-arow arrow-show'></div></a></li>";
            }
            listTopics += "</ul>";
            $("#subtopics9").show();
            $("#sl9").hide();
            $("#topics9").html(listTopics);
            return false;
        };

        function BindSubTopics(topicno) {
            $("#subtopics9").html("");
            var subTopics = "";
            subTopics += "<div class='row'>";
            if (topicno == "3") {
                subTopics += "<span id='d-border1'></span>";
            }
            if (topicno == "1") {
                for (var t = 0; t < jasonData.Topics[0].subTopics.length; t++) {
                    subTopics += "<div class='col mx-1 my-1 mt-1 mb-1 sc-block'><a class='sc-block-link' onclick='ShowInSlider(this);' data-topicno='1' data-cellno=" + (t) + "  data-id=" + jasonData.Topics[0].subTopics[t]["sid"] + ">" + jasonData.Topics[0].subTopics[t]["data-text"] + "</a></div>";
                }
            } else if (topicno == "2") {
                for (var t = 0; t < jasonData.Topics[1].subTopics.length; t++) {
                    subTopics += "<div class='col mx-1 my-1 mt-1 mb-1 sc-block'><a class='sc-block-link' onclick='ShowInSlider(this);' data-topicno='2' data-cellno=" + (t) + "  data-id=" + jasonData.Topics[1].subTopics[t]["sid"] + ">" + jasonData.Topics[1].subTopics[t]["data-text"] + "</a></div>";
                }
            } else if (topicno == "3") {
                for (var t = 0; t < jasonData.Topics[2].subTopics.length; t++) {
                    subTopics += "<div class='col-md-3 mx-1 my-1 mt-1 mb-1 sc-block'><a class='sc-block-link' onclick='ShowInSlider(this);' data-topicno='3' data-cellno=" + (t) + "  data-id=" + jasonData.Topics[2].subTopics[t]["sid"] + ">" + jasonData.Topics[2].subTopics[t]["data-text"] + "</a></div>";
                }
            } else if (topicno == "4") {
                for (var t = 0; t < jasonData.Topics[3].subTopics.length; t++) {
                    subTopics += "<div class='col mx-1 my-1 mt-1 mb-1 sc-block'><a class='sc-block-link' onclick='ShowInSlider(this);' data-topicno='4' data-cellno=" + (t) + " data-id=" + jasonData.Topics[3].subTopics[t]["sid"] + ">" + jasonData.Topics[3].subTopics[t]["data-text"] + "</a></div>";
                }
            }
            subTopics += "</div>";

            $("#subtopics9").html(subTopics);
            return false;
        };

        function ShowInSlider(elem) {
            var topicno = $(elem).data("topicno");
            var cellno = $(elem).data("cellno");
            $("#subtopicsDiv").hide();
            CreateSlider(topicno, cellno);
            return false;
        };

        function CreateSlider(topicno, cellno) {

            var swiper9 = new Swiper(".sw9", {
                pagination: {
                    el: ".swiper-pagination.sw9pag",
                },
                navigation: {
                    nextEl: ".swiper-button-next.sw5",
                    prevEl: ".swiper-button-prev.sw5",
                },
            });
            var swiper10 = new Swiper(".sw10", {
                pagination: {
                    el: ".swiper-pagination.sw9pag",
                },
                navigation: {
                    nextEl: ".swiper-button-next.sw5",
                    prevEl: ".swiper-button-prev.sw5",
                },
            });
            var swiper11 = new Swiper(".sw11", {
                pagination: {
                    el: ".swiper-pagination.sw9pag",
                },
                navigation: {
                    nextEl: ".swiper-button-next.sw5",
                    prevEl: ".swiper-button-prev.sw5",
                },
            });

            var swiper12 = new Swiper(".sw12", {
                pagination: {
                    el: ".swiper-pagination.sw9pag",
                },
                navigation: {
                    nextEl: ".swiper-button-next.sw5",
                    prevEl: ".swiper-button-prev.sw5",
                },
            });


            if (topicno == "1") {
                $(".scheme-slider-1").css("display", "block");
                swiper10.slideTo(cellno);
            } else if (topicno == "2") {
                $(".scheme-slider-2").css("display", "block");
                swiper11.slideTo(cellno);
            } else if (topicno == "3") {
                $(".scheme-slider-3").css("display", "block");
                swiper9.slideTo(cellno);
            } else if (topicno == "4") {
                $(".scheme-slider-4").css("display", "block");
                swiper12.slideTo(cellno);
            }

            return false;
        };

        function highLightTopic9(elem) {

            var topicno = $(elem).data("topicindex");
            $("#subtopicsDiv").show();

            $("d-border9").addClass(".noshow");
            $(".yarrow>img").css("display", "none");
            $(".scheme-slider-4").css("display", "none");
            $(".scheme-slider-3").css("display", "none");
            $(".scheme-slider-2").css("display", "none");
            $(".scheme-slider-1").css("display", "none");
            //hide subtopicsDic
            //$("#SubTopicsDiv").css("visibility", "hidden");
            //alert(topicno);
            $("li#topic0>a.topic-link>div.ltext").addClass("scheme-inactivev1");
            $("li#topic1>a.topic-link>div.ltext").addClass("scheme-inactivev1");
            $("li#topic2>a.topic-link>div.ltext").addClass("scheme-inactivev1");
            $("li#topic3>a.topic-link>div.ltext").addClass("scheme-inactivev1");
            if (topicno == "0") {
                $("li#topic0>a.topic-link>div.ltext").removeClass("scheme-inactivev1");
                $("li#topic0>a.topic-link>div.ltext").addClass("scheme-activev1");
                $("#topic0>a>div.yarrow>img").css("display", "block");
            } else if (topicno == "1") {
                $("li#topic1>a.topic-link>div.ltext").removeClass("scheme-inactivev1");
                $("li#topic1>a.topic-link>div.ltext").addClass("scheme-activev1");
                $("#topic1>a>div.yarrow>img").css("display", "block");
            } else if (topicno == "2") {
                $("li#topic2>a.topic-link>div.ltext").removeClass("scheme-inactivev1");
                $("li#topic2>a.topic-link>div.ltext").addClass("scheme-activev1");
                $("#topic2>a>div.yarrow>img").css("display", "block");
            } else if (topicno == "3") {
                $("li#topic3>a.topic-link>div.ltext").removeClass("scheme-inactivev1");
                $("li#topic3>a.topic-link>div.ltext").addClass("scheme-activev1");
                $("#topic3>a>div.yarrow>img").css("display", "block");
            }

            BindSubTopics(topicno + 1);

            return false;
        };

        function closeSlider() {
            $(".scheme-slider-4").css("display", "none");
            $(".scheme-slider-3").css("display", "none");
            $(".scheme-slider-2").css("display", "none");
            $(".scheme-slider-1").css("display", "none");
            $("#subtopicsDiv").show();
            return false;
        };
        $(document).ready(function() { //working
            $("a.topic-link").click(function() {
                //alert("Clicked");
                //$("li.topic-box:first-child").css("font-weight", "normal");
                //$("li.topic-box:first-child>a>div.yarrow>img").css("display", "none");
            });
        });




        var jasonData = {
            "Topics": [{
                    "id": "topic1",
                    "data-heading": "Schemes that guarantee a fair price and fair treatment of workers",
                    "subTopics": [{
                            "sid": "s11",
                            "data-text": "FAIRTRADE",
                            "icon-url": "images/resp_sourcing/scheme-logos/Fairtrade_Certification_Mark.svg.png",
                            "desc": "FAIRTRADE is a scheme with a label that brings together NGOs and producers’ representatives. It guarantees that the product has been purchased at a fair price from producers and produced under conditions that respect human rights, for example, no forced labour and respect of the environment."
                        },
                        {
                            "sid": "s12",
                            "data-text": "GEPA ",
                            "icon-url": "images/resp_sourcing/scheme-logos/GEPA.png",
                            "desc": "GEPA is an enterprise that practices 100 per cent Fair Trade and any surplus is exclusively re-invested in Fair Trade."
                        },
                    ]
                },
                {
                    "id": "topic2",
                    "data-heading": "Schemes that guarantee an origin and way of production ",
                    "subTopics": [{
                        "sid": "s21",
                        "data-text": "Geographical Indications and Traditional Specialities",
                        "icon-url": "images/resp_sourcing/scheme-logos/EU SCHEMES.jpg",
                        "desc": "EU SCHEMES The EU schemes that protect specialities are the PDO (protected designation of origin), PDI (protected geographical indication) and TSG (traditional specialities guaranteed). The EU scheme works in parallel with some country specific schemes such as AOC in France and DOC in Romania. The products covered by the scheme are wines, cheeses, hams, sausages, seafood, olives, olive oils, beers, balsamic vinegar, regional breads, fruits, vegetables and raw meats."
                    }, {
                        "sid": "s22",
                        "data-text": "EU Schemes",
                        "icon-url": "images/resp_sourcing/scheme-logos/EU SCHEMES.jpg",
                        "desc": "EU SCHEMES The EU schemes that protect specialities are the PDO (protected designation of origin), PDI (protected geographical indication) and TSG (traditional specialities guaranteed). The EU scheme works in parallel with some country specific schemes such as AOC in France and DOC in Romania. The products covered by the scheme are wines, cheeses, hams, sausages, seafood, olives, olive oils, beers, balsamic vinegar, regional breads, fruits, vegetables and raw meats."
                    }, ]
                },
                {
                    "id": "topic3",
                    "data-heading": "Schemes that guarantee a way of production ",
                    "subTopics": [{
                            "sid": "s31",
                            "data-text": "EU Organic Farming",
                            "icon-url": "images/resp_sourcing/scheme-logos/EU organic farming.png",
                            "desc": "EU Organic Farming is a scheme that ensures that the production method is respectful of the environment and animal welfare. The rules governing the organic production method are the same throughout Europe, and imported products are subject to the same requirements. Approved products carry the EU organic logo."
                        },
                        {
                            "sid": "s32",
                            "data-text": "GLOBALG.A.P",
                            "icon-url": "icon url 3-2"
                        },
                        {
                            "sid": "s33",
                            "data-text": "GGN",
                            "icon-url": "icon url 3-3"
                        },
                        {
                            "sid": "s34",
                            "data-text": "Aquaculture Stewardship Council (ASC)",
                            "icon-url": "icon url 3-4"
                        },
                        {
                            "sid": "s34",
                            "data-text": "Marine Stewardship Council (MSC)",
                            "icon-url": "icon url 3-5"
                        },
                        {
                            "sid": "s35",
                            "data-text": "Forest Stewardship Council (FSC)",
                            "icon-url": "icon url 3-6"
                        },
                        {
                            "sid": "s36",
                            "data-text": "Program for Endorsement for Forest Certification (PEFC)",
                            "icon-url": "icon url 3-7"
                        },
                        {
                            "sid": "s38",
                            "data-text": "Roundtable for Responsible Soy (RTRS)",
                            "icon-url": "icon url 3-8"
                        },
                        {
                            "sid": "s39",
                            "data-text": "Roundtable on Sustainable Palm Oil (RSPO)",
                            "icon-url": "icon url 3-9"
                        },
                    ]
                },
                {
                    "id": "topic4",
                    "data-heading": "Schemes that guarantee the compostability of packaging ",
                    "subTopics": [{
                            "sid": "s41",
                            "data-text": "Home and Compostable Packaging (HCP)",
                            "icon-url": "images/resp_sourcing/scheme-logos/EU organic farming.png",
                            "desc": "HOME COMPOSTABLE PACKAGING is shown by a logo that indicates that the packaging can compost at ambient temperatures (20-30°C) within 52 weeks according to European standard EN 13432. The certifying body is placed next to the logo with the company’s reference number. This packaging is also compostable. "
                        },
                        {
                            "sid": "s42",
                            "data-text": "Industrial Compostable Packaging (ICP)",
                            "icon-url": "icon url 4-2"
                        },
                    ]
                },
            ]
        };
    </script>
    <script type="text/javascript">
        //comprehensive guide
        function ButtonNext9Click() {
            //alert("click" );
            quPop("n-Ul");
            quPop("ulContent1");
            return false;
        };

        function quPop(qu) {
            var qu1 = document.getElementById(qu);
            var elements = qu1.getElementsByTagName("li");
            var top = elements[0];
            qu1.removeChild(elements[0]);
            qu1.appendChild(top);
            return false;
        };

        $(".n-li").click(function(event) {
            var index9 = $(".n-li").index(this);
            //alert("click" + index9);
            linkPop(index9);
            return false;
        });

        $(document).ready(function() {
            //var elem = $("#ulqu1 > li:first > .product-box > .aqu > div:first");
            //$("#ulqu1 > li:first > .product-box > .aqu >  .xzd").removeClass("product-icon-1");
            //$("#ulqu1 > li:first > .product-box > .aqu >  .xzd").addClass("active-icon1");

        });

        function linkPop(liindex9) {
            for (var i = 0; i < liindex9; i++) {
                quPop("n-Ul");
                quPop("ulContent1");
            }
        }
    </script>

    <script src="jquery/page1.js"></script>
    <!-- Swiper JS -->



    <script>
        var swiper = new Swiper(".mySwiper9", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                    "body").style.visibility = "hidden";
                document.querySelector(
                    "#loader-page2").style.visibility = "visible";
            } else {
                document.querySelector(
                    "#loader-page2").style.display = "none";
                document.querySelector(
                    "body").style.visibility = "visible";
            }
        };
    </script>


    <script type="text/javascript" src="./assets/js/common.js"></script>
</body>


</html>