<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>METRO</title>
    <link rel="stylesheet" href="css/page2_style_1.css">
    <script src="jquery/custom.js"></script>
    <link rel="stylesheet" href="style1.css">
    <!--required---->
    <link rel="stylesheet" href="required1/bootstrap.min.css" />
    <link rel="stylesheet" href="required1/font-awesome.min.css" />
    <link rel="stylesheet" href="required1/normalize.min.css" />
    <link rel="stylesheet" href="required1/swiper-bundle.min.css" />
    <script src="required1/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="required1/modernizr.min.js"></script>
    <script src="required1/swiper-bundle.min.js"></script>
    <!------EXPLORE SAFE FOOD L4 PAGE----------->
    <script src=safe-food.js></script>
    <link href="safe-food.css" rel="stylesheet">
    <link rel="stylesheet" href="pageslider.css">
    <link rel="stylesheet" href="./assets/css/common.css">
    <style>
        .swiper.pageSwiper2>.swiper-wrapper>.swiper-slide.pageSlider-slide>div.row>div.col-md-12>.pageSlider-slide-text>p {
            font-family: gotham-light;
        }

        section.good_to_know.no-print.social_box h3 {
            margin-top: 7.5rem;
        }

        .footer-socials.side_nav>ul {
            margin-left: 0rem;
        }

        .tabc-image1 {
            height: 22rem;
        }

        .tab-text-holder1 {
            height: 22rem;
        }


        .img-holder2 {
            height: 36rem;
            width: 100%;
            text-align: center;
        }


        .tntImg {
            height: 35rem;
            width: auto;
        }

        .tab-text-holder1-inner {
            margin-top: 5rem;
            margin-left: 6rem;
        }

        .pad9 {
            padding: 12px 28px !important;
        }

        section.good_to_know.no-print.social_box .good_to_know_box.p-4 {
            height: 20rem;
        }

        .swiper.pageSwiper4>.swiper-wrapper>.swiper-slide {
            background-color: white;
        }


        .pageSlider-slide-text>p {
            text-transform: none;
        }

        .pageSlider-slide-text>span {
            text-transform: none;
        }

        .bg_yellow img {
            margin-top: -3rem;
            height: 28rem;
        }

        .social_slde span.slimg-holder {
            top: 1rem;
        }

        .pageSlider-slide-text {
            margin-top: -1rem;
        }

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

        .sldImg01>img {
            width: 10rem;
            transition: .5s;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg01>img {
            width: 21rem;
            transition: .5s;
        }

        .sldImg02>img {
            width: 13rem;
            transition: .5s;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg02>img {
            width: 24rem;
            transition: .5s;
        }

        .sldImg03>img {
            width: 18rem;
            transition: .5s;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg03>img {
            width: 32rem;
            transition: .5s;
            margin-bottom: 2rem;
        }

        .sldImg21>img {
            width: 11rem;
            transition: .5s;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg21>img {
            width: 22rem;
            transition: .5s;
        }

        .sldImg22>img {
            width: 23rem;
            transition: .5s;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg22>img {
            width: 38rem;
            transition: .5s;
            margin-bottom: 4rem;
            margin-top: 2rem;
        }

        .sldImg23>img {
            width: 19rem;
            transition: .5s;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg23>img {
            width: 35rem;
            transition: .5s;
            margin-bottom: 2rem;
        }

        .sldImg24>img {
            width: 24rem;
            margin-top: 2rem;
            margin-bottom: 3rem;
            transition: .5s;
        }


        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg24>img {
            width: 36rem;
            margin-top: 5rem;
            margin-bottom: 6rem;
            transition: .5s;
        }

        .sldImg31>img {
            width: 17rem;
            transition: .5s;
            margin-bottom: 1rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg31>img {
            width: 32rem;
            transition: .5s;
            margin-bottom: 2rem;
        }

        .sldImg32>img {
            width: 19rem;
            transition: .5s;
            margin-bottom: 2rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg32>img {
            width: 36rem;
            transition: .5s;
            margin-top: 2rem;
        }

        .sldImg33>img {
            width: 7rem;
            transition: .5s;
            margin-bottom: 2rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg33>img {
            width: 14rem;
            transition: .5s;
            margin-top: 1rem;
        }

        span.slimg-holder.socils_one {
            padding: 12px 24px;
        }

        .pageSlider-slide-text>p.sl1 {
            font-size: 14px;
            font-weight: normal;
            color: black;
            margin-top: .5rem;
            font-family: gothambook;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text {
            font-size: 19px !important;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>p.sl1 {
            font-size: 21px;
            margin-top: 3rem;
        }

        .pageSlider-slide-text>p.sl2 {
            font-size: 10px;
            font-weight: normal;
            color: black;
            margin-top: .5rem;
            font-family: gothambook;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>p.sl2 {
            font-size: 21px;
            margin-top: 1rem;
        }

        .pageSlider-slide-text>p.sl3 {
            font-size: 12px;
            font-weight: normal;
            color: black;
            margin-top: .5rem;
            font-family: gothambook;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>p.sl3 {
            font-size: 21px;
            margin-top: 2rem;
        }

        .pageSlider-slide-text>p.sl4 {
            font-size: 10px;
            font-weight: normal;
            color: black;
            margin-top: .5rem;
            font-family: gothambook;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>p.sl4 {
            font-size: 21px;
            margin-top: 1rem;
        }

        .pageSlider-slide-text>p.sl5 {
            font-size: 14px;
            font-weight: normal;
            color: black;
            margin-top: .5rem;
            font-family: gothambook;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>p.sl5 {
            font-size: 21px;
            margin-top: 4rem;
        }

        .pageSlider-slide-text>p.sl6 {
            font-size: 18px;
            font-weight: normal;
            color: black;
            margin-top: .5rem;
            font-family: gothambook;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>p.sl6 {
            font-size: 21px;
            margin-top: 5rem;
        }

        .pageSlider-slide-text>p.sl7 {
            font-size: 16px;
            font-weight: normal;
            color: black;
            margin-top: .5rem;
            font-family: gothambook;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-text>p.sl7 {
            font-size: 21px;
            margin-top: 4rem;
        }

        .bg-d {
            background-color: #003b7e !important;
        }

        .two-column {
            column-count: 2;
            column-gap: 2rem;
        }

        .noalign {
            text-align: unset !important;
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
                        <option value="introduction-to-food-waste-deu.php" selected>DEU</option>
                        <option value="introduction-to-food-waste-eng.php">ENG</option>
                    </select>
                </div>
                <nav>
                    <ul class="main">
                        <li>
                            <a href="http://msr.bdevtestservers.com/home.php">Home</a>
                        </li>
                        <li>
                            <a href="mein-nachhaltiges-restaurant.php">Mein Nachhaltiges Restaurant</a>
                        </li>
                        <li>
                            <a href="the-msr-chapter-guide-deu.php">Kapitelübersicht</a>
                        </li>
                        <div class="sub_menuUi">
                            <li>
                                <a href="introduction-to-sustainable-menu-deu.php">Nachhaltige Speisekarte</a>
                            </li>
                            <li>
                                <a href="introduction-to-responsible-sourcing-deu.php">Verantwortungsbewusstes Einkaufen</a>
                            </li>
                            <li>
                                <a href="introduction-to-food-waste-deu.php">Lebensmittelverluste</a>
                            </li>
                            <li>
                                <a href="introduction-to-plastic-waste-deu.php">Plastikmüll</a>
                            </li>
                            <li>
                                <a href="introduction-to-safe-food-deu.php">Lebensmittelsicherheit</a>
                            </li>
                            <li>
                                <a href="introduction-to-energy-deu.php">Energie</a>
                            </li>
                            <li>
                                <a href="introduction-to-water-deu.php">Wasser</a>
                            </li>
                            <li>
                                <a href="introduction-to-waste-deu.php">Abfälle</a>
                            </li>
                            <li>
                                <a href="introduction-to-social-deu.php">Gemeinschaft</a>
                            </li>
                        </div>
                        <li>
                            <a href="https://www.metro.de/blog" target="_blank">METRO Blog</a>
                        </li>
                        <li>
                            <a href="https://www.metroag.de/en/contact" target="_blank">Kontakt</a>
                        </li>
                    </ul>
                    <!-- <div class="about"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p></div> -->
                    <div class="social">
                        <p>Hilfreiche Links</p>
                        <a href="https://www.menukithd.com/" target="_blank">
                            <img src="images/logo-dish.png" style="width: 5rem;">
                        </a>
                        <a href="https://www.dish.co/DE/en/" target="_blank">
                            <img src="images/Dish_Logo-svg.svg" style="width: 3rem;">
                        </a>
                        <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank">
                            <img src="images/Protrace_Logo-ai.svg" style="width: 2rem;">
                        </a>
                        <a href="https://www.metro-go.de/de-DE/home" target="_blank">
                            <img src="images/Eitiketten.png">
                        </a>
                    </div>
                    <div class="social">
                        <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                            <img src="images/Logo_METRO-Regio_weiss.png">
                        </a>
                        <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                            <img src="./images/safe_food/foot_nav2.PNG">
                        </a>
                        <a style="width: 9rem;" class="bottom-right" href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank"><img src="./images/safe_food/foot_nav.PNG"></a>
                    </div>
                    <div class="footer-socials side_nav">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/metro.deutschland" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/MetroGrossmarkt" target="_blank">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/metro_deutschland/ " target="_blank">
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
    <div id="loader-page2" class="center">
        <span class="loader__text">
            <img src="images/yellow_pan.gif" class="loader9" />
        </span>
    </div>
    <div class="container-full">
        <div class="page-3_stage page-4_stage">
            <!--BANNER-->
            <section class="section1 no-print">
                <div class="left-content no-print">
                    <h3 style="text-transform: none;">Wie Sie sich als Gastronomiebetreibende<br>
                        sozial engagieren können</h3>
                    <h4>Soziales Engagement in der Gastronomie</h4>
                    <p>Als Gastronom und Gastronomin haben Sie großen Einfluss auf soziale Belange. Soziales Engagement beschränkt sich hierbei nicht nur auf die Mitarbeitenden eines Restaurants, sondern es bezieht sich auch darauf, wie sich das Restaurant vor Ort engagiert und wie die Lieferanten behandelt werden. Wichtig ist: Wer in der Gastronomie arbeitet, sollte sozial- und krankenversichert sein und erwarten können, dass sein Gehalt pünktlich ausgezahlt wird. Leider erfahren nicht alle Beschäftigten im Gastgewerbe diesen Schutz.</p>
                    <button class="read-more-btn" id="hide_show_content" href="#clickTohide">Weiterlesen</button>
                </div>
                <div class="right-content no-print">
                    <img src="./images/safe_food/s-1.svg" class="img-fluid mt-4" />
                </div>
                <!-- <a href="#devid01">DEV. Link</a> -->
            </section>
            <section class="soFood_importants no-print" id="clickTohide">

                <div class="container-fluid px-3">
                    <div class="row bg_yellow mt-3">
                        <div class="col-md-4">
                            <img src="./images/safe_food/s-2.svg" class="img-fluid mt-5 px-2">
                        </div>
                        <div class="col-md-8 mt-3 px-3">
                            <h4 class="noalign">Was es bedeutet, ein sozial engagierter Gastronomiebetreibender zu sein</h4>
                            <p class="two-column justify1">
                                Ein nachhaltiger Arbeitgebender zu sein bedeutet viel mehr als bloß Gesetze einzuhalten. Ein erfolgreiches, nachhaltiges Unternehmen wird motivierte Mitarbeitende halten und neue gewinnen können. Zudem wird es dafür sorgen, dass die Mitarbeitenden ihr Bestes geben und sich weiterentwickeln können. Den Pflichten eines sozial engagierten Arbeitgebers nicht nachzukommen, birgt dagegen viele Nachteile: Die Sorge um eine pünktliche Gehaltszahlung beeinträchtigt die Konzentration von Mitarbeitenden bei der Arbeit. Diese Unsicherheit kann die Beziehung zwischen Mitarbeitenden und Betrieb negativ beeinflussen, so dass sich das Arbeitsklima verschlechtert. Ist zudem das Personal in der Küche nicht richtig geschult ist, kann dies schnell zu Verletzungen führen. Auch das sorgt dafür, dass sich die Qualität der Arbeit und damit die Qualität der zubereiteten Gerichte verschlechtert. Zudem kann auch das Personal aus dem Service durch Unaufmerksamkeit dazu beitragen, dass Gäste verloren gehen.
                                <br>
                                Das Gastgewerbe und die Lebensmittelbranche gehören zu den größten Arbeitgebern der Welt, aber in vielen Betrieben fehlt es oftmals an einer guten Arbeitsphilosophie. Leider sind unterbezahlte und ausgebeutete Arbeitnehmende immer noch an der Tagesordnung, sei es in Bezug auf die physischen Arbeitsbedingungen, Arbeitszeiten, Sicherheit oder vertragliche Aspekte wie Zeit- oder Saisonarbeit.
                                <br>
                                Darüberh inaus gibt es auch extremere Fälle von Zwangsarbeit, Diskriminierung oder andere Formen unethischen Verhaltens. Wenn die grundlegenden Rechte von Mitarbeitenden missachtet werden, werden mit Sicherheit auch die höheren Bedürfnisse, die für die Selbstverwirklichung eines Menschen entscheidend sind, nicht berücksichtigt. Die Menschenrechte aber umfassen alle menschlichen Bedürfnisse.
                                <br>
                                Als Gastronomin oder Gastronom haben Sie eine unmittelbare Verantwortung für Ihre Mitarbeitenden. Darüber hinaus haben Sie auch eine indirekte Verantwortung für jeden Arbeitnehmenden in der Lieferkette, der Sie mit Produkten versorgt – sei es der Landwirt oder die Landwirtin oder der Fahrer bzw. die Fahrerin, welche Ihnen Waren liefern. Ein sozial engagierter Gastronomiebetreibender zu sein, bedeutet daher, sich auch vor Ort in der eigenen Region angemessen zu verhalten, z.B. gegenüber anderen Gastronomiebetreibenden, Verbänden und Wohltätigkeitsorganisationen. Insbesondere in extrem herausfordernden Zeiten kann die Art und Weise, wie Sie Ihr Personal und Ihre Lieferanten behandeln oder wie Sie mit Ihrer Gemeinde interagieren, nicht nur für Sie positive Auswirkungen haben, sondern Sie auch beeinflussen und damit auch grundsätzlich das Verständnis von guter Arbeit in der Gastronomie.
                            </p>
                        </div>
                    </div>
                </div>


            </section>
            <section class="good_to_know no-print social_box" style="padding-bottom: 12rem;">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-4 px-4">
                            <div class="good_to_know_box p-4">
                                <img src="./images/safe_food/s-3.svg" class="img-fluid">
                                <p>Menschenrechte sind für die Selbstverwirklichung eines Menschen von entscheidender Bedeutung und die "Allgemeine Erklärung der Menschenrechte“ durch die Vereinten Nationen im Jahr 1948 bildet die Grundlage für die wesentlichen Menschenrechtsanforderungen in allen Unternehmen</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-4">
                            <h3>Gut zu wissen</h3>
                        </div>

                        <div class="col-md-4 px-4">
                            <div class="good_to_know_box p-4">
                                <img src="./images/safe_food/s-4.svg" class="img-fluid">
                                <p>Einheitliche Leitlinien für die Umsetzung der grundlegenden Menschenrechte wurden 2011 von den Vereinten Nationen in den UN-Leitprinzipien für Wirtschaft und Menschenrechte entwickelt</p>
                            </div>
                        </div>
                    </div>
                    <div class="row margin_top">
                        <div class="col-md-4 px-4">
                            <div class="good_to_know_box p-4">
                                <img src="./images/safe_food/s-20.svg" class="img-fluid">
                                <p>Es gibt arbeitsrechtliche Vorschriften, die unabhängig von Arbeitsverträgen (z.B. befristet/unbefristet oder Vollzeit/Teilzeit) eingehalten werden müssen</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-4">
                            <div class="good_to_know_box p-4">
                                <img src="./images/safe_food/s-5.svg" class="img-fluid">
                                <p>Extreme Herausforderungen für faire Arbeitsbedingungen sind Zwangsarbeit, Diskriminierung oder andere Formen unethischen Geschäftsverhaltens</p>
                            </div>
                        </div>
                        <div class="col-md-4 px-4">
                            <div class="good_to_know_box p-4">
                                <img src="./images/safe_food/s-6.svg" class="img-fluid">
                                <p>Die Menschenrechte bedeuten, dass Arbeitnehmende das Recht haben, am Arbeitsplatz vor ungerechter Behandlung geschützt zu werden. Das beinhaltet u.a. den Schutz davor, zu Unrecht entlassen oder diskriminiert zu werden, das Recht auf Versammlungsfreiheit und faire Arbeitsbedingungen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="simple_wayTo_preventing no-print social_l4_yellow_slider pt-5" style="padding-bottom: 10rem;background: #ffe500;margin-top: 0;">
                <div class="section-div">
                    <div class="container-fluid">
                        <p class="text-center"><img src="./images/safe_food/s-new.svg" style="width: 30rem;margin-top: -15rem;"></p>
                        <h3 class="wayT0Title" style="color:#000;margin-top: 0;">Die 7 Grundrechte</h3>



                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="pageSlider-container">
                                    <div class="pageSlider-container-inner">
                                        <div class="pageSlider-prev">
                                            <div class="pageSlider-prev-inner">
                                                <div class="swiper-button-prev pageSwiper4PrevBtn bg-d"></div>
                                            </div>
                                        </div>
                                        <div class="pageSlider">
                                            <div class="pageSlider-inner">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="pageSlider-holder">
                                                            <div class="swiper pageSwiper4">
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-image mb-5">
                                                                                    <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                                                                                        <span class="slimg-holder socils_one pad9">
                                                                                            1
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-text">
                                                                                    <span class="sldText41">
                                                                                        Versammlungsfreiheit und die Achtung des Rechts auf Tarifverhandlungen
                                                                                    </span>
                                                                                    <p class="sl1">
                                                                                        Arbeitnehmende, die einer Gewerkschaft beitreten, dürfen nicht aufgrund ihrer Mitgliedschaft diskriminiert oder entlassen werden.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-image mb-5">
                                                                                    <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                                                                                        <span class="slimg-holder socils_one">
                                                                                            2
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-text">
                                                                                    <span class="sldText42">
                                                                                        Abschaffung jeglicher Form von Zwangs- oder Pflichtarbeit, einschließlich disziplinarischer Maßnahmen
                                                                                    </span>
                                                                                    <p class="sl2">
                                                                                        Arbeitnehmende dürfen jederzeit ihren Arbeitsplatz verlassen. Es darf kein Teil des Gehalts, der Sozialleistungen, des Eigentums oder der Dokumente eines Mitarbeitenden einbehalten werden, um eine Person zur Weiterarbeit zu zwingen. Zudem dürfen keine Überstunden erzwungen werden, um eine bereitgestellte Gegenleistung zu kompensieren.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-image mb-5">
                                                                                    <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                                                                                        <span class="slimg-holder socils_one">
                                                                                            3
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-text">
                                                                                    <span class="sldText43">
                                                                                        Keine Kinderarbeit (und Berücksichtigung der Bedürfnisse junger Arbeitnehmenden)
                                                                                    </span>
                                                                                    <p class="sl3">
                                                                                        Die Internationale Arbeitsorganisation (ILO) hat das allgemeine Mindestalter für die Zulassung zur Beschäftigung oder Arbeit auf 15 Jahre festgelegt (bzw. 13 Jahre für geringfügige Arbeit). Bevor jemand angestellt werden kann, muss nach dem Alter gefragt werden. Zudem muss eine Kopie des Reisepasses oder Personalausweises in der Personalakte aufbewahrt werden.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-image mb-5">
                                                                                    <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                                                                                        <span class="slimg-holder socils_one">
                                                                                            4
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-text">
                                                                                    <span class="sldText44">
                                                                                        Keine Diskriminierung in Beschäftigung und Beruf
                                                                                    </span>
                                                                                    <p class="sl4">
                                                                                        Entscheidungen über Neueinstellungen, Löhne, Beförderungen, Schulungen, Disziplinarmaßnahmen, Pensionierungen und Kündigungen müssen stets auf objektiven Kriterien beruhen und dürfen nicht mit direkten oder indirekten Diskriminierungen verbunden sein. Gleichzeitig gilt, dass gleiche Arbeit am gleichen Standort auch gleich bezahlt werden muss. Das bedeutet, dass alle Mitarbeitenden entsprechend ihrer Fähigkeiten gleichbehandelt werden und nicht aufgrund ihres Geschlechts, Alters, ethnischen Zugehörigkeit, sexueller Orientierung oder körperlichen Fähigkeiten beurteilt werden.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-image mb-5">
                                                                                    <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                                                                                        <span class="slimg-holder socils_one">
                                                                                            5
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-text">
                                                                                    <span class="sldText45">
                                                                                        Faire Entlohnung
                                                                                    </span>
                                                                                    <p class="sl5">
                                                                                        Ihre Mitarbeitenden müssen offizielle Verträge und Lohnabrechnungen erhalten, regelmäßig bezahlt werden und mindestens den (gesetzlichen) Mindestlohn verdienen. Es ist wichtig, einen Lohn zu zahlen, der existenzsichernd ist und ein menschenwürdiges Leben ermöglicht. Überstunden müssen bezahlt werden.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-image mb-5">
                                                                                    <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                                                                                        <span class="slimg-holder socils_one">
                                                                                            6
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-text">
                                                                                    <span class="sldText46">
                                                                                        Faire Arbeitszeiten
                                                                                    </span>
                                                                                    <p class="sl6">
                                                                                        Es gilt eine maximale Wochenarbeitszeit von 48 Stunden, die in Ausnahmefällen durch Überstunden um 12 Stunden pro Woche erhöht werden kann. Dazwischen muss für ausreichend Freizeit gesorgt sein.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-image mb-5">
                                                                                    <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                                                                                        <span class="slimg-holder socils_one">
                                                                                            7
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="pageSlider-slide-text">
                                                                                    <span class="sldText47">
                                                                                        Gesundheit und Sicherheit
                                                                                    </span>
                                                                                    <p class="sl7">
                                                                                        Mitarbeitende müssen bei Bedarf mit einer effektiven persönlichen Schutzkleidung (PSA) ausgestattet sein und darin geschult werden, ihre Arbeit sicher auszuführen.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="pageSlider-pagination">
                                                            <div class="pageSlider-pagination-inner">
                                                                <div class="swiper-pagination pageSwiper4Pagination"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pageSlider-next">
                                            <div class="pageSlider-next-inner">
                                                <div class="swiper-button-next pageSwiper4NextBtn bg-d"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </section>


            <section class="three-step_food_safety no-print">
                <div class="container-fluid px-4">
                    <div class="row">
                        <h3>Wege, um sich als Gastronomin oder<br>Gastronom sozial zu engagieren</h3>
                        <p class="text-center">Es gibt drei Wege, um ein sozial engagiertes Unternehmen zu führen. Dies geschieht durch Ihre Mitarbeitenden, Ihre<br>Lieferanten und Ihre lokale Gemeinde.</p>

                    </div>
                    <div class="row mt-5">
                        <div class="test">
                            <div class="tab-container-one">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li id="tabLi1" class="col-md-4 nav-item">
                                        <a id="tabLink1" class="nav-link active" href="#home" role="tab" aria-controls="home" data-bs-toggle="tab">Beziehen Sie Ihre Mitarbeitenden mit ein</a>
                                    </li>
                                    <li id="tabLi2" class="col-md-4 nav-item">
                                        <a id="tabLink2" class="nav-link" href="#profile" role="tab" aria-controls="profile" data-bs-toggle="tab">Treten Sie mit Ihren Lieferanten in Kontakt</a>
                                    </li>
                                    <li id="tabLi3" class="col-md-4 nav-item">
                                        <a id="tabLink3" class="nav-link" href="#messages" role="tab" aria-controls="messages" data-bs-toggle="tab">Treten Sie in engen Kontakt mit Ihrer Gemeinde</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-12 mt-4 mb-4">
                                                <div class="tab-main-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="img-holder1">
                                                                    <div class="img-holder1-inner">
                                                                        <img src="./images/safe_food/s-7.svg" class="tabc-image1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="tab-text-holder1">
                                                                    <div class="tab-text-holder1-inner">
                                                                        <p>Als Arbeitgeber erreichen Sie nachhaltige Arbeitsbedingungen durch:</p>

                                                                        <ol>
                                                                            <li>indem Sie die nationale Arbeitsgesetzgebung einhalten.</li>
                                                                            <li>die grundlegenden Menschenrechte Ihrer Mitarbeitenden gewährleisten.</li>
                                                                        </ol>
                                                                        <p class="mt-0">
                                                                            <strong>Die sieben Grundrechte, die von der UN definiert wurden, können Ihnen dazu als Leitfaden dienen.</strong>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 mb-5">
                                                <div class="pageSlider-container">
                                                    <div class="pageSlider-container-inner">
                                                        <div class="pageSlider-prev">
                                                            <div class="pageSlider-prev-inner">
                                                                <div class="swiper-button-prev pageSwiper1PrevBtn"></div>
                                                            </div>
                                                        </div>
                                                        <div class="pageSlider">
                                                            <div class="pageSlider-inner">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="pageSlider-holder">
                                                                            <div class="swiper pageSwiper1">
                                                                                <div class="swiper-wrapper">
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg01">
                                                                                                        <img src="images/safe_food/s-8.svg" class=" img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText01">
                                                                                                        Schulen und fördern<br>Sie Ihr Personal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-button">
                                                                                                    <span class="sldBtn01">
                                                                                                        <button class="read-more-btn" onclick="openPopUp(1);">Weiterlesen</button>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg02">
                                                                                                        <img src="images/safe_food/s-9.svg" class="img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText02">
                                                                                                        Prüfen Sie, was zu tun ist
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-button">
                                                                                                    <span class="sldBtn02">
                                                                                                        <button class="read-more-btn" onclick="openPopUp(2);">Weiterlesen</button>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg03">
                                                                                                        <img src="images/safe_food/s-10.svg" class=" img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText03">
                                                                                                        Kommunizieren Sie klar und deutlich
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-button">
                                                                                                    <span class="sldBtn03">
                                                                                                        <button class="read-more-btn" onclick="openPopUp(3);">Weiterlesen</button>
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
                                                                        <div class="pageSlider-pagination">
                                                                            <div class="pageSlider-pagination-inner">
                                                                                <div class="swiper-pagination pageSwiper1Pagination"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pageSlider-next">
                                                            <div class="pageSlider-next-inner">
                                                                <div class="swiper-button-next pageSwiper1NextBtn"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                        <p class="text-center nextStepCta mt-4">
                                            <a id="nextBtn1" href="#tabLi2">Nächster Schritt&nbsp;<i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        <div class="row">
                                            <div class="col-md-12 mt-4 mb-4">
                                                <div class="tab-main-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="img-holder1">
                                                                    <div class="img-holder1-inner">
                                                                        <img src="./images/safe_food/s-11.svg" class="tabc-image1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="tab-text-holder1">
                                                                    <div class="tab-text-holder1-inner">
                                                                        <p>
                                                                            Arbeitnehmendenrechte in der Lieferkette sind in fast allen Ländern ein Thema. Sie können etwas bewirken, indem Sie faire Arbeitsbedingungen bei Ihren Lieferanten fordern. Dies fördert den sozial nachhaltigen Einkauf, durch den Sie auf einer anderen Ebene der Lebensmittelindustrie etwas bewirken können.
                                                                        </p>
                                                                        <p class="mt-0"><strong>Orientieren Sie sich an den folgenden Schritten:</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                        <div class="row">
                                            <div class="col-md-12 mb-5">
                                                <div class="pageSlider-container">
                                                    <div class="pageSlider-container-inner">
                                                        <div class="pageSlider-prev">
                                                            <div class="pageSlider-prev-inner">
                                                                <div class="swiper-button-prev pageSwiper2PrevBtn"></div>
                                                            </div>
                                                        </div>
                                                        <div class="pageSlider">
                                                            <div class="pageSlider-inner">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="pageSlider-holder">
                                                                            <div class="swiper pageSwiper2">
                                                                                <div class="swiper-wrapper">
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg21">
                                                                                                        <img src="images/safe_food/s-12.svg" class=" img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText21">
                                                                                                        Bleiben Sie in Kontakt
                                                                                                    </span>
                                                                                                    <p>Treten Sie regelmäßig mit Ihren Lieferanten in Kontakt</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg22">
                                                                                                        <img src="images/safe_food/s-13.svg" class="img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText22">
                                                                                                        Kaufen Sie von lokalen Lieferanten
                                                                                                    </span>
                                                                                                    <p>Beziehen Sie Ihre saisonalen Produkte vor Ort</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg23">
                                                                                                        <img src="images/safe_food/s-14.svg" class=" img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText23">
                                                                                                        Sprechen Sie mit Ihrem Lieferanten
                                                                                                    </span>
                                                                                                    <p>Fragen Sie Ihre Lieferanten danach, welche Maßnahmen ergriffen werden, um faire Arbeitsbedingungen zu gewährleisten.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg24">
                                                                                                        <img src="images/safe_food/s-15.svg" class=" img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText24">
                                                                                                        Teilen Sie Ihr Wissen
                                                                                                    </span>
                                                                                                    <p>Teilen Sie mit Ihrem Lieferanten, was Sie bereits gelernt haben</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="pageSlider-pagination">
                                                                            <div class="pageSlider-pagination-inner">
                                                                                <div class="swiper-pagination pageSwiper2Pagination"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pageSlider-next">
                                                            <div class="pageSlider-next-inner">
                                                                <div class="swiper-button-next pageSwiper2NextBtn"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <p class="text-center nextStepCta mt-4">
                                                <a id="nextBtn2" href="#tabLi3">Nächster Schritt&nbsp;<i class="fa fa-long-arrow-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">

                                        <div class="row">
                                            <div class="col-md-12 mt-4 mb-4">
                                                <div class="tab-main-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="img-holder1">
                                                                    <div class="img-holder1-inner">
                                                                        <img src="./images/safe_food/s-16.svg" class="tabc-image1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="tab-text-holder1">
                                                                    <div class="tab-text-holder1-inner">
                                                                        <p>Die Beziehung zu Ihrer lokalen Gemeinde ist von entscheidender Bedeutung und kann Ihnen dabei helfen, Krisen zu meistern. Ihr Personal wird sich eher für Ihr Restaurant engagieren, wenn Ihr Betrieb einen festen Bestandteil ihres Lebens ausmacht.</p>
                                                                        <p class="mt-4">
                                                                            <strong>Wenn Sie einen aktiven Beitrag für die Gemeinschaft leisten möchten, helfen Ihnen die folgenden Schritte:</strong>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-12 mb-5">
                                                <div class="pageSlider-container">
                                                    <div class="pageSlider-container-inner">
                                                        <div class="pageSlider-prev">
                                                            <div class="pageSlider-prev-inner">
                                                                <div class="swiper-button-prev pageSwiper3PrevBtn"></div>
                                                            </div>
                                                        </div>
                                                        <div class="pageSlider">
                                                            <div class="pageSlider-inner">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="pageSlider-holder">
                                                                            <div class="swiper pageSwiper3">
                                                                                <div class="swiper-wrapper">
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg31">
                                                                                                        <img src="images/safe_food/s-17.svg" class=" img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText31">
                                                                                                        Leisten Sie einen Beitrag<br>für Ihre Region
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-button">
                                                                                                    <span class="sldBtn31">
                                                                                                        <button class="read-more-btn" onclick="openPopUp(31);">Weiterlesen</button>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg32">
                                                                                                        <img src="images/safe_food/s-18.svg" class="img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText32">
                                                                                                        Stellen Sie Personal aus der<br>Umgebung ein und seien Sie inklusiv
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-button">
                                                                                                    <span class="sldBtn32">
                                                                                                        <button class="read-more-btn" onclick="openPopUp(32);">Weiterlesen</button>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide pageSlider-slide text-center">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-image">
                                                                                                    <span class="sldImg33">
                                                                                                        <img src="images/safe_food/s-19.svg" class=" img-fluid">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-text">
                                                                                                    <span class="sldText33">
                                                                                                        Kaufen Sie Ihre saisonalen<br>Produkte vor Ort
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="pageSlider-slide-button">
                                                                                                    <span class="sldBtn33">
                                                                                                        <button class="read-more-btn" onclick="openPopUp(33);">Weiterlesen</button>
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
                                                                        <div class="pageSlider-pagination">
                                                                            <div class="pageSlider-pagination-inner">
                                                                                <div class="swiper-pagination pageSwiper3Pagination"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pageSlider-next">
                                                            <div class="pageSlider-next-inner">
                                                                <div class="swiper-button-next pageSwiper3NextBtn"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <section class="track-and_talk no-print">
                <div class="container-fully">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="track-and_talk_discr">
                                <h3>Überprüfen Sie Ihre Fortschritte<br>und sprechen Sie darüber</h3>
                                <p>Wenn Sie Ihre soziale Verantwortung als Gastronomin oder Gastronom in den Vordergrund rücken möchten, dann sollten Sie mit Ihren Mitarbeitenden, Ihren Lieferanten und mit den Personen Ihrer lokalen Gemeinde sprechen. Führen Sie Lösungen ein, die nicht allzu viel Aufwand von Ihnen erfordern. Informieren Sie Ihre Gäste über Ihr soziales Engagement. Zum Beispiel können Sie mit Hinweisen im Restaurant oder mit Informationen in der Speisekarte Ihre Gäste auf Ihr verantwortungsbewusstes Handeln aufmerksam machen. Die Wirkung Ihrer Handlungen wird dadurch nur vergrößert, denn Ihr Personal und Ihre Gäste werden diese Botschaften mit nach Hause nehmen.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-holder2">
                                <div class="img-holder2-inner">
                                    <img src="./images/safe_food/Asset 30.png" class="tntImg">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="container section4-6" id="section-to-print">
                <div class="top-content">
                    <h3>Ihr Aktionsplan</h3>
                </div>
                <div class="mid-content cation-plan-section">
                    <ul>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class="">Informieren Sie sich über die nationale Gesetzgebung zu den Arbeitsbedingungen und die sieben Grundrechte, die von der UN definiert wurden</p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class="">Beziehen Sie Ihr Personal und Lieferanten mit ein</p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class="">Interagieren Sie mit Ihrer Gemeinde vor Ort</p>
                        </li>

                        <li class="print-li">
                            <button onclick="window.print();" class="no-print">DRUCKEN</button>
                        </li>
                    </ul>
                </div>
            </section>
            <!-----FOOTER--------->
            <section class="">
                <div class="section5  section4-6">
                    <div class="bottom-left">
                        <div class="top-content5">
                            <h3>METRO-Lösungen</h3>
                            <p>METRO bietet das digitale Tool PROTRACE an, mit dem Sie sich sowohl über das Produkt selbst als auch über die Lieferwege von der Herkunft bis zur Anlieferung bei METRO informieren können. </p>
                            <p><strong>Anwendungen, die bei der Menükartengestaltung oder der Kommunikation helfen können, sind z.B. Menukit oder Dish.</strong></p>
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
                                    <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank"> <img src="images/Protrace_Logo-ai.svg" /></a>
                                </li>
                                <li>
                                    <a href="https://www.metro-go.de/de-DE/home" target="_blank"> <img src="images/Eitiketten.png" /></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="bottom-right">
                        <div class="top-content5">
                            <h3>METRO ANGEBOTE</h3>
                            <p>METRO unterstütz Sie mit vielen nachhaltigen Produkten bei Ihrer Nachhaltigkeitsstrategie:</p>
                        </div>
                        <div class="bottom-content5">
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
                                    <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank">METRO <br> Serviceverpackungen</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="footer-wrap">
        <div class="logo-fooetr">
            <img src="images/footer-logo.svg" />
        </div>
        <div class="fotter-right footer-first-page">
            <div class="fotter-right-top">
                <div class="footer-links content-foo">
                    <p>Das METRO My Sustainable Restaurant soll Lebensmittelunternehmen helfen
                        Eigentümer entscheiden sich für eine nachhaltigere Zukunft.</p>
                </div>
                <div class="footer-links link2">
                    <ul>


                        <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Impressum</a></li>

                        <li><a href="https://www.metroag.de/datenschutz" title="" target="_blank">Datenschutz</a></li>

                        <li><a href="https://www.metroag.de/nutzungsbedingungen" title="" target="_blank">Nutzungsbedingungen</a></li>

                        <li><a href="https://www.metroag.de/kontakt" title="" target="_blank">Kontakt</a></li>

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
                        <li><a href="https://www.metro.de/unternehmen/impressum" title="" target="_blank">Impressum</a></li>
                        <li><a href="https://www.metro.de/unternehmen/datenschutzallgemein" title="" target="_blank">Datenschutz</a></li>
                        <li><a href="https://www.metro.de/unternehmen/agb_allgemein" title="" target="_blank">Nutzungsbedingungen</a></li>
                        <li><a href="https://www.metro.de/kontakt" title="" target="_blank">Kontakt</a></li>
                    </ul>
                </div>
                <div class="footer-socials">
                    <ul>
                        <li><a href="https://www.facebook.com/metro.deutschland" target="_blank"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/user/MetroGrossmarkt" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/metro_deutschland/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/metro-ag" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/@METRO_News" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>

                </div>
            </div>

        </div>



        <div id="pop1" class="modalx">
            <div class="modalx-content">
                <a class="btn-close-popup" onclick="closePopUp(1);">X</a>
                <h4>Schulen und fördern Sie Ihr Personal</h4>
                <p>
                    Vereinbaren Sie gemeinsam, wie Sie Mitarbeitende unterstützen können, die Angehörige oder Kinder betreuen und für die Sie gegebenenfalls kurzfristig Ersatz finden müssen. Berücksichtigen Sie bei der Erstellung von Schichtplänen die Bedürfnisse älterer und körperlich beeinträchtigter Mitarbeitender. Fördern Sie Ihr Personal durch Weiterbildungen und Beförderungen.
                </p>

            </div>
        </div>

        <div id="pop2" class="modalx">
            <div class="modalx-content">
                <a class="btn-close-popup" onclick="closePopUp(2);">X</a>
                <h4>Prüfen Sie, was zu tun ist</h4>
                <p>
                    Informieren Sie sich über die rechtlichen Anforderungen, bewerten Sie die gegenwärtige Situation, nehmen Sie Änderungen vor und überwachen Sie die eingeführten Maßnahmen. Stellen Sie sicher, dass bei Bedarf alle Mitarbeitenden mit einer persönlichen Schutzkleidung (PSA) ausgestattet sind. Bieten Sie Ihren Arbeitnehmenden zusätzlich die Möglichkeit, überschüssiges Essen mit nach Hause zu nehmen und sorgen Sie dafür, dass alle eine kostenlose Mahlzeit am Tag erhalten.
                </p>

            </div>
        </div>


        <div id="pop3" class="modalx">
            <div class="modalx-content">
                <a class="btn-close-popup" onclick="closePopUp(3);">X</a>
                <h4>Kommunizieren Sie klar und deutlich</h4>
                <p>
                    Machen Sie Ihr Engagement und Ihre Erwartungen gegenüber Ihren Mitarbeitenden deutlich. Legen Sie alle Aufgaben klar und deutlich fest. Sprechen Sie häufig mit ihnen und binden Sie sie durch Aus- und Weiterbildungen oder soziale Begegnungen (Team Events, Weihnachtsfeiern, etc.) ein. Führen Sie ein effizientes Beschwerdeverfahren ein, um besser mit Feedback umgehen zu können. Treffen Sie mit Ihren Mitarbeitenden eine Vereinbarung, wie Trinkgelder verteilt werden.
                </p>

            </div>
        </div>


        <div id="pop31" class="modalx">
            <div class="modalx-content">
                <a class="btn-close-popup" onclick="closePopUp(31);">X</a>
                <h4>Leisten Sie einen Beitrag für Ihre Region</h4>
                <p>
                    Beteiligen Sie sich an lokalen Aktivitäten und Wohltätigkeitsprojekten, z.B. an Straßenfesten. Spenden Sie überschüssige Lebensmittel. Sammeln Sie Geld für wohltätige Zwecke oder stellen Sie Mitarbeitende zur Unterstützung lokaler Wohltätigkeitsorganisationen frei. Stellen Sie Ihr Restaurant auch außerhalb der Geschäftszeiten als Treffpunkt zur Verfügung z.B. für örtliche Wohlfahrtsverbände und Organisationen. Schaffen Sie besonders tagsüber einen ansprechenden Ort für Eltern mit Kindern.
                </p>

            </div>
        </div>

        <div id="pop32" class="modalx">
            <div class="modalx-content">
                <a class="btn-close-popup" onclick="closePopUp(32);">X</a>
                <h4>Stellen Sie Personal aus der Umgebung ein und seien Sie inklusiv</h4>
                <p>
                    Machen Sie deutlich, dass Sie ein inklusives Restaurant betreiben, in dem Diskriminierungen nicht geduldet werden, weder bei Mitarbeitenden noch bei Gästen. Berücksichtigen Sie bei der Anstellung von Mitarbeitenden aus der Umgebung unterschiedliche soziale Hintergründe und Kulturen, einschließlich von Migrantinnen und Migranten.
                </p>

            </div>
        </div>

        <div id="pop33" class="modalx">
            <div class="modalx-content">
                <a class="btn-close-popup" onclick="closePopUp(33);">X</a>
                <h4>Kaufen Sie Ihre saisonalen Produkte vor Ort</h4>
                <p>
                    Beziehen Sie Ihre saisonalen Lebensmittel vor Ort und erweitern Sie Ihre Speisekarte um lokale Spezialitäten. Sorgen Sie dafür, dass Ihre Speisekarte die verschiedenen Ernährungsstile Ihrer Gäste berücksichtigt.
                </p>

            </div>
        </div>




        <script src="jquery/page1.js"></script>
        <!-- Swiper JS -->




        <script>
            $(document).ready(function() {
                $('#hide_show_content').click(function() {
                    //get collapse content selector
                    var collapse_content_selector = $(this).attr('href');

                    //make the collapse content to be shown or hide
                    var toggle_switch = $(this);
                    $(collapse_content_selector).toggle(function() {
                        if ($(this).css('display') == 'none') {
                            //change the button label to be 'Show'
                            toggle_switch.html('Read More');
                        } else {
                            //change the button label to be 'Hide'
                            toggle_switch.html('Read Less');
                        }
                    });
                });

            });
        </script>
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

            var swiper = new Swiper(".pageSwiper2", {
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
                    nextEl: ".swiper-button-next.pageSwiper2NextBtn",
                    prevEl: ".swiper-button-prev.pageSwiper2PrevBtn",
                },
                pagination: {
                    el: ".swiper-pagination.pageSwiper2Pagination",
                },
            });

            var swiper = new Swiper(".pageSwiper3", {
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
                    nextEl: ".swiper-button-next.pageSwiper3NextBtn",
                    prevEl: ".swiper-button-prev.pageSwiper3PrevBtn",
                },
                pagination: {
                    el: ".swiper-pagination.pageSwiper3Pagination",
                },
            });

            var swiper = new Swiper(".pageSwiper4", {
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
                    nextEl: ".swiper-button-next.pageSwiper4NextBtn",
                    prevEl: ".swiper-button-prev.pageSwiper4PrevBtn",
                },
                pagination: {
                    el: ".swiper-pagination.pageSwiper4Pagination",
                },
            });
        </script>
        <script>
            $(document).ready(function() {
                //first button click
                $("#nextBtn1").click(function() {
                    $("#tabLi1").removeClass("active");
                    $("#tabLink1").removeClass("active");
                    $("#home").removeClass("active")
                    //
                    $("#tabLi2").addClass("active");
                    $("#tabLink2").addClass("active");
                    $("#profile").addClass("active")
                    return false;
                });
                //second button click
                $("#nextBtn2").click(function() {
                    $("#tabLi2").removeClass("active");
                    $("#tabLink2").removeClass("active");
                    $("#profile").removeClass("active")
                    //
                    $("#tabLi3").addClass("active");
                    $("#tabLink3").addClass("active");
                    $("#messages").addClass("active")
                    return false;
                });
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