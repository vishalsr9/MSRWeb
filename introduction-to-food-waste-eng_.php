<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>METRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2010.07.06dev/modernizr.min.js" integrity="sha512-HyO6DE8TAYakYahq831kmrY5Z/6HjP5wucRRPZ9XKDZhjyw5QroAPpvLRRhTSsfFh04OuEYKdcWeqKFTJCvB7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/page2_style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="./jquery/custom.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="safe-food.css">
</head>

<body class="page3-page">
    <header>
        <div class="container">
            <div class="logo">
                <a href=""> <img src="images/metro-logo.svg" /></a>
            </div>
            <div class="header-menu">
                <div class="menu-ham">
                    <ul class="top-nomarg">
                        <li class="menu-click" onclick="openNav()">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 36 26" width="36" height="26">
                                <title>New Project</title>
                                <style>
                                    .s0 {
                                        fill: #ffe500
                                    }
                                </style>
                                <g id="&lt;Group&gt;">
                                    <g id="&lt;Group&gt;">
                                        <path id="&lt;Path&gt;" class="s0" d="m0 0.6h36v5.3h-36z" />
                                        <path id="&lt;Path&gt;" class="s0" d="m0 10.4h36v5.2h-36z" />
                                        <path id="&lt;Path&gt;" class="s0" d="m0 20.1h36v5.3h-36z" />
                                    </g>
                                </g>
                            </svg>
                            <div id="myNav" class="overlay-menu">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="overlay-content">
                                    <a href="home.php">Home</a>
                                    <a href="my-sustainable-restaurant.php">My Sustainable Restaurant</a>
                                    <a href="the-msr-chapter-guide-eng.php">The MSR Chapter Guide</a>
                                    <a href="introduction-to-sustainable-menu.php">Introduction to Sustainable Menu</a>
                                    <a href="explore-sustainable-menu.php">Explore Sustainable Menu</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="custom__select top-mar-less">
                    <select>
                        <option value="introduction-to-food-waste-deu.php">DEU</option>
                        <option value="introduction-to-food-waste-eng.php" selected>ENG</option>
                    </select>
                </div>
            </div>
        </div>
    </header>
    <div id="loader-page2" class="center">
        <span class="loader__text">
            <!-- <img src="images/loader.gif" class="loader9" /> -->
        </span>
    </div>
    <section class="safeFoodl4_banner no-print">
        <div class="container-fluid no-print">
            <div class="row px-4">
                <div class="col-md-6">
                    <div class="banner_l4_title Banner_l3_title">
                        <h1 class="banner_title">WHY WE NEED TO REDUCE <br>FOOD WASTE</h1>

                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="banner_l3_img">
                        <img src="./images/safe_food/Asset 1.svg" class="img-fluid pl-5">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="didyouknow_contents waste_foot_l3">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <h3 class="text-center">Did you know that...</h3>
                <div class="col-md-6 border-right">
                    <div class="didyouknow_2culumn">
                        <img src="./images/safe_food/l3-1.svg" class="px-4">
                        <h4>we dump a massive<br> <strong>2.21 billion tons</strong> <br>of waste every year </h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="didyouknow_2culumn">
                        <img src="./images/safe_food/l3-2.svg" class="px-4 dis_img2">
                        <h4>food loss and waste costs <br>the global economy <br><strong>$940 billion each year </strong></h4>
                    </div>
                </div>
            </div>
            <div class="row border-top">
                <div class="col-md-6 border-right">
                    <div class="didyouknow_2culumn">
                        <img src="./images/safe_food/l3-3.svg" class="px-4">
                        <h4>an area larger than China and<br> <strong>1 /4 </strong>of the world’s fresh water supply <br>is used to grow food that is never eaten </h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="didyouknow_2culumn">
                        <img src="./images/safe_food/l3-4.svg" class="px-4 dis_img2" style="width: 60%;">
                        <h4><strong>36% </strong>of HoReCa customers (globally) think <br>that reducing food waste is one of the most <br>important issues to deal with in their business </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section3-inners">
        <div class="section3-inner align-normal big_issues">
            <div class="left-content">
                <h3>The <br> Big <br> Issue </h3>
            </div>
            <div class="right-content">
                <p>
                    Food waste costs you and your customers money. Throwing away valuable resources uneaten also holds enormous potential for environmental and social conflict which young and future customers are not willing to accept. Did you know that if food waste was a country, it would be the 3rd largest emitter of greenhouse gases?<br><br> In the restaurant business, we can make a real difference by eliminating food waste in our operations and thus:
                </p>
            </div>
        </div>
    </section>


    <section class="section3-grid">
        <ul>
            <li>
                <p class="font-size-30px">Benefits</p>
            </li>
            <li></li>
            <li>
                <p>Reduce costs</p>
            </li>
            <li></li>
            <li>
                <p>Increase efficiency</p>
            </li>
            <li></li>
            <!-- </ul><ul> -->
            <li></li>
            <li>
                <p>Gain knowledge</p>
            </li>
            <li></li>
            <li>
                <p>Comply with regulations</p>
            </li>
            <li></li>
            <li>
                <p>Boost staff morale</p>
            </li>
            <!-- </ul>
                <ul> -->
            <li>
                <p>Increase customer loyalty (better reviews)</p>
            </li>
            <li></li>
            <li>
                <p>Gain new customers</p>
            </li>
            <li></li>
            <li>
                <p>Build a positive image</p>
            </li>
            <li></li>
            <!-- </ul>
                <ul> -->
            <li></li>
            <li>
                <p>Build a positive community impact </p>
            </li>
            <li></li>
            <li>
                <p>Prevent pollution of local and global environment</p>
            </li>
            <li></li>
            <li>
                <p>Save natural resources </p>
            </li>
        </ul>
    </section>


    <section class="section3-inners">
        <div class="section3-inner align-normal big_issues">
            <div class="left-content">
                <h3>THE <br>GREATER <br>IMPACT </h3>
            </div>
            <div class="right-content">
                <p>
                    The demand for food is increasing as the world ́s population grows, but farmland is finite. That ́s why preventing food waste is an important issue in terms of global food security. Every year, over 1/3 of all food produced globally goes to waste while <strong>840 million people are going hungry to bed</strong>. Each one of them could be sufficiently fed with less than what is wasted in the US, UK and Europe every year. According to a global METRO study from 2019, 39% of METRO’s HoReCa customers want to tackle food waste in their own operations.
                </p>
            </div>
        </div>
    </section>


    <section class="section4 padr-60px w90-per">
        <div class="left-content noalign border-right col-md-6">
            <h3>KNOW HOW – <br>STEPS HOW TO<br> AVOID FOOD WASTE</h3>
            <p>
                Avoid food waste by identifying the types of waste and where it is generated. Food waste comes from either the back of house i.e. in the kitchen before serving or from the front of the house i.e. where customers are served. Fruit and vegetables, for example, are a major contributor to food waste in a restaurant. Learn how to store them well to avoid waste. Talk with your staff and help them understand the importance of reducing waste. Discount or donate surplus food to help people and animals in need. Practice advanced ways to reduce food waste, e.g. compost food waste at your restaurant or through a local service and learn to cook with unwanted parts. Technical solutions can also improve operational efficiency and reduce food waste e.g. by managing the food waste inventory and redistribution of food online, thereby eliminating time for waste management. You can find out more about food waste reduction in our latest <a href="https://responsibility.metroag.de/focus-areas/food-waste">Food Waste Report</a>.<br><br>Landfills should be the last place where food waste ends up!
            </p>


            <div class="read-wrap">
                <a href="explore-food-waste-eng.php" class="read-more" target="_self">Read More</a>
            </div>
        </div>
        <div class="l3-5img mr-4 col-md-6">
            <h3>Food Recovery Hierarchy</h3>
            <img src="./images/safe_food/l3-5.svg" class="img-fluid">
            <a href="https://responsibility.metroag.de/focus-areas/food-waste" target="_blank" class="imgCta">Read More</a>
        </div>
    </section>



    <section class="section5">
        <div class="bottom-left">
            <div class="top-content5">
                <h3>METRO Solutions</h3>
                <p>METRO offers a wide range of sustainable products that are regional, seasonal, organic, animal welfare assured, ethically traded, compostable and so on. </p>
                <p><strong>Applications that can support with menu design or communications are:</strong></p>
            </div>
            <div class="bottom-content5">
                <ul>
                    <li>
                        <a href="https://www.menukithd.com/" target="_blank"> <img src="images/logo-dish.png" /></a>
                    </li>
                    <li>
                        <a href="https://www.dish.co/XX/en/" target="_blank"> <img src="images/Dish_Logo-svg.svg" /></a>
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
                <h3>METRO Offer</h3>
                <p>METRO supports you with a diverse product assortment for your sustainability strategy: </p>
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
                        <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank">METRO <br> Serviceverpackungen </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <div class="footer-wrap">
        <div class="logo-fooetr">
            <img src="images/footer-logo.svg" />
        </div>
        <div class="fotter-right footer-first-page">
            <div class="fotter-right-top">
                <div class="footer-links content-foo">
                    <p>The METRO My Sustainable Restaurant is designed to help food business
                        owners adopt a more sustainable future.</p>
                </div>
                <div class="footer-links link2">
                    <ul>


                        <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a></li>

                        <li><a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a></li>

                        <li><a href="use-https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a></li>

                        <li><a href="contact-https://www.metroag.de/en/contact" title="" target="_blank">Contact</a></li>

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

                        <li><a href="use-https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a></li>

                        <li><a href="contact-https://www.metroag.de/en/contact" title="" target="_blank">Contact</a></li>

                    </ul>

                </div>
                <div class="footer-socials">
                    <ul>
                        <li><a href="https://www.facebook.com/mpulse/" target="_blank"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.metroag.de/youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/metro_mpulse/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/metro-ag" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/@METRO_News" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>

                </div>
            </div>

        </div>

    </div>

    <script src="jquery/page1.js"></script>

    <script type="text/javascript">
        var eurl = "introduction-to-food-waste-eng.php"
        var gurl = "introduction-to-food-waste-deu.php"


        //btn-test click test script

        $(document).ready(function() {
            $('#select').change(function() {
                location.href = $(this).val();
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
</body>


</html>