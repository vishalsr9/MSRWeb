<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>METRO</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="css/page2_style_1.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="required1/bootstrap.min.css" />
  <link rel="stylesheet" href="required1/font-awesome.min.css" />
  <link rel="stylesheet" href="required1/normalize.min.css" />
  <link rel="stylesheet" href="required1/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/common.css">
  <link href="safe-food.css" rel="stylesheet">
  <script src="required1/bootstrap.bundle.min.js"></script>
  <script src="required1/jquery-3.6.0.min.js"></script>
  <script src="required1/modernizr.min.js"></script>
  <script src="required1/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="./assets/js/common.js"></script>

  <link href="pageslider.css" rel="stylesheet">
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

    .sldImg01>img {
      width: 5rem;
      transition: 0.5s;
    }

    .sldImg02>img {
      width: 11rem;
      transition: 0.5s;
    }

    .sldImg03>img {
      width: 14rem;
      transition: 0.5s;
    }

    .sldImg04>img {
      width: 23rem;
      margin-top: 1rem;
      margin-bottom: .5rem;
      transition: 0.5s;
    }

    .sldImg05>img {
      width: 8rem;
      transition: 0.5s;
    }

    .sldImg06>img {
      width: 22rem;
      margin-top: 2rem;
      margin-bottom: 2rem;
      transition: 0.5s;
    }

    .sldImg07>img {
      width: 3.5rem;
      transition: 0.5s;
    }

    .sldImg08>img {
      width: 11rem;
      transition: 0.5s;
    }


    .sldImg09>img {
      width: 12rem;
      transition: 0.5s;
    }

    .sldImg10>img {
      width: 22rem;
      margin-top: 2rem;
      margin-bottom: 2rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg01>img {
      width: 9rem;
      margin-bottom: 1rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg02>img {
      width: 21rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg03>img {
      width: 27rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg04>img {
      width: 34rem;
      margin-top: 3rem;
      margin-bottom: 4rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg05>img {
      width: 15rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg06>img {
      width: 36rem;
      margin-top: 3rem;
      margin-bottom: 6rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg07>img {
      width: 7rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg08>img {
      width: 21rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg09>img {
      width: 23rem;
      transition: 0.5s;
    }

    .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg10>img {
      width: 35rem;
      margin-top: 5rem;
      margin-bottom: 5rem;
      transition: 0.5s;
    }
  </style>
</head>

<body class="stage1">
  <header>
    <div class="container no-print">
      <div class="logo">
        <a href="/"> <img src="images/metro-logo.svg" /></a>
      </div>
      <div class="header-menu">
        <div class="menu-ham">
          <ul class="no-margin-bottom">
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
            </li>

          </ul>
          <div id="myNav" class="overlay-menu overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="/">Home</a>
              <a href="my-sustainable-restaurant.php">My Sustainable Restaurant</a>
              <a href="the-msr-chapter-guide-eng.php">The MSR Chapter Guide</a>
              <a href="introduction-to-sustainable-menu.php">Introduction to Sustainable Menu</a>
              <a href="explore-sustainable-menu.php">Explore Sustainable Menu</a>
            </div>
          </div>

        </div>
        <div class="custom__select">
          <select id="select">
            <option value="explore-to-plastic-waste-deu.php">DEU</option>
            <option value="explore-to-plastic-waste-eng.php" selected>ENG</option>
          </select>
        </div>
      </div>
    </div>
  </header>
  <div id="loader-page2" class="center">
    <span class="loader__text">
      <img src="images/yellow_pan.gif" class="loader9" />
    </span>
  </div>

  <div class="container-full">
    <div class="page-3_stage page-4_stage plastic_waste_l4_page">


      <section class="section1 no-print plastic_waste no-print">
        <div class="left-content no-print">
          <h3>How to use energy efficiently</h3>
          <h4>Energy usage and your business</h4>
          <p>Energy is a major expense for your business, and you need a lot of it. With
            rising energy costs and the scarcity of fossil resources, as well as
            customers’ growing attention to environmental issues, it’s time to
            become more sustainable and save money at the same time.<span id="dots"></span>

          </p>
          <!-- <button class="read-more-btn" href="#" id="myBtn" onclick="expand-next('#more')">Read more</button> -->
          <!-- <button class="read-more-btn" id="myBtn_cust-a" href="#clickTohide" target="#more">Read more</button> -->
        </div>
        <div class="right-content no-print">
          <img src="./images/safe_food/eng-1.svg">
        </div>
      </section>

      <section class="plastic-waste_yellow" id="clickTohide">
        <div class="container-fluid">
          <div class="row bg_yellow px-5">
            <div class="col-md-3">
              <img src="./images/plastic-waste/Asset 2.svg">
            </div>
            <div class="col-md-9">
              <h3>The impact of gastronomy on the plastic waste challenge</h3>
              <p>We must act now: the pollution of our oceans from plastic waste has reached dramatic proportions. Even today, a truckload of plastic waste on average ends up in the ocean every minute. If you can picture this, then it should be clear to you that we must act immediately! With your gastronomy business, you can make an important contribution to sustainable development, because your business is closely tied to people and the environment. You may notice plastic waste floating around your local environment and this is something that consumers and the younger generation are no longer tolerating.</p>
            </div>
          </div>
        </div>
      </section>


      <section class="good_to_know no-print mtcsutom energy_page">
        <div class="container">
          <div class="row">
            <h3 class="food_wasteTitle">Good to know</h3>
            <p class="exploreFood_discripsn mb-5"></p>
            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4 safe_foodBox_l4">
                <img src="./images/safe_food/eng-2.svg" class="img-fluid">
                <p>On an induction cooktop, you can boil water in under half the time it takes for water to boil on a <br>gas cooktop.</p>
              </div>
              <div class="good_to_know_box p-4 safe_foodBox_l4">
                <img src="./images/safe_food/eng-5.svg" class="img-fluid">
                <p>Induction cooktops may be more expensive to buy, but they end up saving money in the long run. </p>
              </div>

            </div>

            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4 safe_foodBox_l4 engery_box">
                <img src="./images/safe_food/eng-3.svg" class="img-fluid">
                <p>Did you know that in general, induction is faster, safer, cleaner, and more
                  efficient than either gas or electric? Food
                  being cooked with induction will receive
                  <strong>90%</strong> of the heat generated, as opposed
                  to only 40 – 55% for gas.
                </p>
              </div>
              <div class="good_to_know_box p-4 safe_foodBox_l4" style="    margin-top: -2.18rem;">
                <img src="./images/safe_food/eng-6.svg" class="img-fluid">
                <p>Induction cooktops stay cool to the touch. This means that they don’t heat up your kitchen and they won’t burn you either.</p>
              </div>

            </div>

            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4 safe_foodBox_l4">
                <img src="./images/safe_food/eng-4.svg" class="img-fluid">
                <p>Induction cooktops are much more energy efficient and cost-effective. Most of the heat energy they generate goes into the pots.</p>
              </div>
              <div class="good_to_know_box p-4 safe_foodBox_l4">
                <img src="./images/safe_food/eng-7.svg" class="img-fluid">
                <p>Liquids and foods will not burn and stick on them, thus making induction cooktops much cleaner and easier to clean.</p>
              </div>

            </div>



          </div>
        </div>
      </section>


      <section class="simple_wayTo_preventing no-print energy_page_slider">
        <div class="section-div">
          <div class="container-fluid">
            <h3 class="wayT0Title">Simple ways to save energy</h3>
            <p class="disc">As a restaurateur, there are many ways to save energy in your restaurant.<br>There are some actions you can implement straight away. This is how you can start:</p>


            <!-- NEW SWIPER START -->

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
                                            <img src="images/safe_food/e1.svg" class="img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText01">
                                            TURN OFF UNNECESSARY<br>LIGHTS AND ELECTRIC EQUIPMENT
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-button">
                                          <span class="sldBtn01">
                                            <button class="read-more-btn" onclick="openPopUp(1);">Read more</button>
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
                                            <img src="images/safe_food/e2.svg" class="img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText02">
                                            SET A STARTING POINT<br>AND MAKE AN ACTION PLAN
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
                                  <div class="swiper-slide pageSlider-slide text-center">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-image">
                                          <span class="sldImg03">
                                            <img src="images/safe_food/e3.svg" class=" img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText03">
                                            CONTACT<br>YOUR UTILITY COMPANY
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
                                            <img src="images/safe_food/e4.svg" class=" img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText04">
                                            PAY ATTENTION TO<br>YOUR COOLING EQUIPMENT
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
                                            <img src="images/safe_food/e5.svg" class=" img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText05">
                                            CHECK<br>YOUR REFRIGERATOR
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
                                            <img src="images/safe_food/e6.svg" class="img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText06">
                                            DON’T WASTE ICE
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
                                  <div class="swiper-slide pageSlider-slide text-center">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-image">
                                          <span class="sldImg07">
                                            <img src="images/safe_food/e7.svg" class="img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText07">
                                            CHANGE YOUR LIGHTS FOR<br>ENERGY-EFFICIENT ONES
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-button">
                                          <span class="sldBtn07">
                                            <button class="read-more-btn" onclick="openPopUp(7);">Read more</button>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide pageSlider-slide text-center">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-image">
                                          <span class="sldImg08">
                                            <img src="images/safe_food/e8.svg" class="img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText08">
                                            CCLEAN AND MAINTAIN<br>YOUR EQUIPMENT
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-button">
                                          <span class="sldBtn08">
                                            <button class="read-more-btn" onclick="openPopUp(8);">Read more</button>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide pageSlider-slide text-center">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-image">
                                          <span class="sldImg09">
                                            <img src="images/safe_food/e9.svg" class="img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText09">
                                            DECREASE HEAT USAGE
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-button">
                                          <span class="sldBtn09">
                                            <button class="read-more-btn" onclick="openPopUp(9);">Read more</button>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide pageSlider-slide text-center">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-image">
                                          <span class="sldImg10">
                                            <img src="images/safe_food/e10.svg" class="img-fluid">
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-text">
                                          <span class="sldText10">
                                            REORGANISE YOUR KITCHEN
                                          </span>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="pageSlider-slide-button">
                                          <span class="sldBtn10">
                                            <button class="read-more-btn" onclick="openPopUp(10);">Read more</button>
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
            <!-- NEW SWIPER START -->


          </div>

        </div>
      </section>




      <section class="advance_way no-print plastic_waste_expl">
        <div class="container">
          <div class="row">
            <h3>Advanced ways to save energy</h3>
            <p>Once you have managed to implement some simple steps,<br>
              you can consider investing in more advanced ways to save energy:</p>
          </div>
        </div>
      </section>


      <section class="plastic-waste_productRecycle no-print energy_page_img">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="plastic-wasteStep">
                <h2>02</h2>
                <h4>Change your equipment</h4>
                <p>Go for energy-efficient equipment
                  such as ENERGY STAR equipment for
                  small domestic style electronics or
                  Label ABCDEFG for kitchen machinery
                  where A is the best quality.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="plastic-wasteStep">
                <h2>04</h2>
                <h4>Change the ventilation</h4>
                <p>By changing the ventilation to
                  anti-stratification fans (heating energy
                  saving), electronic control fans or free
                  cooling in AC you can save energy.</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="plastic-wasteStep">
                <h2>06</h2>
                <h4>Improve isolation</h4>
                <p>Save energy by improving isolation in
                  your business so that your room
                  temperature is affected as little as
                  possible. You can do so by installing
                  automatic doors, night blinds or
                  heavy curtains around the entry door.</p>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="plastic-wasteStepImg">
              <img src="./images/safe_food/eng-p.svg">
            </div>
          </div>

          <div class="row plastic-wasteStepLastRow energy_img_row_main">
            <div class="col-md-4">
              <div class="plastic-wasteStep energy_img_row_main1">
                <h2>01</h2>
                <h4>Install compact<br>fluorescent bulbs/lamps (CFL)</h4>
                <p>Did you know that compact fluorescent bulbs/lamps, or short CFL, use 75% less energy
                  and last 10 times longer than incandescent
                  bulbs? In the long term, they represent a strong
                  environmental and economic advantage.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="plastic-wasteStep energy_img_row_main2" style="left: 60px;">
                <h2>03</h2>
                <h4>Reduce ambient<br>temperatures<br> in your kitchen</h4>
                <p>Use equipment that doesn’t heat up the kitchen unnecessarily. Reduce instead ambient
                  temperatures in your kitchen e.g. by using induction equipment (such as induction cooktops),
                  condensate hoods or spot air conditioners.</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="plastic-wasteStep energy_img_row_main3" style="left: 105px;padding-left: 58px;">
                <h2>05</h2>
                <h4>Source renewable energy</h4>
                <p>Using renewable energy will help to save the planet but also will give
                  you economic advantages in the long term. Contact your local
                  service provider and town facilities management to see what they
                  can offer and if they give financial assistance.<span id="dots"></span><span id="moreless"><br class="mb-4">
                    Here are some ways to use renewable energies:<br>
                    <i class="fa fa-caret-right"></i> Install solar panels. The thermal panels can heat water and the
                    system could pay for itself within 2 or 3 years<br class="mb-4">
                    <i class="fa fa-caret-right"></i> Use solar-powered outdoor lights that are self-charging<br class="mb-4">
                    <i class="fa fa-caret-right"></i> Build in PV facade elements<br class="mb-4">
                    <i class="fa fa-caret-right"></i> Introduce electric vehicle chargers</span>
                </p>
                <span class="read-more-btn33" id="myBtn_readmore" onclick="myFunction()"><b>Read more</b></span>



              </div>
            </div>
          </div>




        </div>
      </section>



      <section class="safeFoodl4_banner no-print">
        <div class="container-fluid">
          <div class="row px-4">
            <div class="col-md-5">
              <div class="banner_l4_title">
                <h1 class="banner_title2">Track and Talk <br>About Your Progress</h1>

                <p>Once you have taken some steps, check the change in energy consumption and
                  keep track of it. Look out for simple tracking solutions that don’t need too much
                  input from you. For example, ask your energy management company if they have
                  a digital tool you can use. Talk to your staff about how much energy you saved and
                  how they have helped in doing so. Seeing the progress visibly can motivate them
                  to continue saving energy. Publicise what you are doing: a sign in the bathroom to
                  “switch off the light”, information in your menu or your homepage can be a visible
                  reminder to your customers about your responsible actions. You can have an
                  impact this way as staff and customers will take these messages home with them.</p>
              </div>
            </div>
            <div class="col-md-5 offset-md-1">
              <div class="banner_l4_img talk_prog_img">
                <img src="./images/safe_food/Asset 44.svg" class="img-fluid pl-5">
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="action_plan mt-5" id="section-to-print">
        <div class="container">
          <div class="top-content mb-4">
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
                  Analyse your consumption and hunt for wasted energy
                </p>
              </li>
              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">Use energy efficient equipment
                </p>
              </li>
              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">
                  Implement low cost actions to save energy and go even further
                  by adapting advanced ways
                </p>
              </li>
              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">
                  Contact your local service provider and town facilities management
                  for renewable energy and energy efficiency solutions
                </p>
              </li>
              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">
                  Ask your energy management company if they have a digital tool
                  to track your energy consumption
                </p>
              </li>

              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">
                  Find out where there are energy leaks, peaks in energy usage and
                  equipment that wastes energy
                </p>
              </li>

              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">
                  Make an action plan and set realistic goals for energy saving
                </p>
              </li>

              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">
                  Inform and engage your staff
                </p>
              </li>

              <li>
                <label class="check-wrap">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <p class="">
                  Tell your customers about your progress
                </p>
              </li>



              <li class="print-li"><button onclick="window.print();" class="no-print">Print</button></li>
            </ul>
          </div>
        </div>
      </section>



      <section class="no-side-margin no-print">
        <div class="section5">
          <div class="bottom-left">
            <div class="top-content5">
              <h3>METRO Solutions</h3>
              <p>METRO offers the digital tool PROTRACE where you can find out about both the product itself and the supply routes from its origin to the journey to METRO. </p>
              <p>
                <strong>Applications that can support with menu design or communications are:</strong>
              </p>
            </div>
            <div class="bottom-content5">
              <ul>
                <li>
                  <a href="https://www.menukithd.com/" target="_blank">
                    <img src="images/logo-dish.png">
                  </a>
                </li>
                <li>
                  <a href="https://www.dish.co/XX/en/" target="_blank">
                    <img src="images/Dish_Logo-svg.svg">
                  </a>
                </li>
                <li>
                  <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank">
                    <img src="images/Protrace_Logo-ai.svg">
                  </a>
                </li>
                <li>
                  <a href="https://www.metro-go.de/de-DE/home" target="_blank">
                    <img src="images/Eitiketten.png">
                  </a>
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
                  <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                    <img src="images/Logo_METRO-Regio_weiss.png">
                  </a>
                </li>
                <li>
                  <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 373 192" width="373" height="192">
                      <title>METRO_Bio-ai</title>
                      <style>
                        .sf {
                          fill: #fff
                        }
                      </style>
                      <g id="Ebene 1">
                        <g id="<Group>">
                          <path id="<Compound Path>" fill-rule="evenodd" class="sf" d="m104.1 0.8h6.4q1.2 0.4 2.3 1.1 1.2 0.6 2.6 1.9 2.4 1.7 5.5 2.3 3 0.5 6.1 0.5 1.9 0 3.5-0.3 1.7-0.3 2.8-0.3 2.6 0 4.4 0.3 1.8 0.3 3.7 0.3 1.8 0.4 3.1 1.1 1.3 0.6 3.2 1.1 0.5 0 1.5 0.3 1.1 0.3 1.6 0.3 2.3 0 4.3 0.5 2 0.6 4.4 1 1.9 1.1 4.1 1.7 2.2 0.7 4.8 1.8 2.9 1.3 5.7 2.9 2.8 1.6 5.2 3.7 2.6 2.2 4 4.9 1.4 2.7 3 5.3 0.8 1.1 0.9 2.1 0.1 1.1 0.1 2.2 0 1.7 0.1 2.9 0.1 1.2 0.6 2.3 0 1.7-0.1 3.2-0.1 1.5-0.6 3.2-0.7 2.2-1.2 4-0.5 1.9-0.5 4-0.4 2.2-1.1 4.2-0.7 2.1-2.6 3.6-1.4 1.7-2.6 3-1.2 1.3-1.7 2.4-2.3 4.3-5.4 7.6-3.1 3.4-7.3 6-1.9 1-3.5 2.6-1.7 1.5-4.3 3.2-3 2.4-6.4 4.1-3.5 1.7-7 3.9-3.1 1-5.5 2.5-2.5 1.6-5.6 3.3-0.7 0-0.7 1.5 0.5 1.7 1.3 3.1 0.8 1.4 3.4 1.9 1.7 1 3.3 2.2 1.7 1.2 2.4 2.9 1.9 2.2 3.1 3.9 1.1 1.7 3 3.9 0.7 0.9 0.7 3.7v0.8q0.7 1.7 1.2 3.7 0.5 1.9 0.5 4.1 0.4 2.4 1 4.5 0.6 2.2 0.6 4.3-0.7 1.1-0.9 2.2-0.3 1.1-0.7 2.1-0.5 0.5-0.6 1.4-0.1 1-0.1 1.4 0.4 1.8 0.1 3.4-0.4 1.6-1.1 3.3-0.5 1.8-1.2 3.7-0.7 1.9-2.5 3.7-1.2 1.7-2.4 3.3-1.2 1.6-2.6 3.8-0.5 0.4-1.2 0.9-0.7 0.6-1.1 1.2-1.9 1.8-3.1 3.6-1.2 1.8-3.1 2.3-0.9 0-0.9 0.6-2.8 3-8 5-2.4 1-5 2.7-2.6 1.6-5.2 2.7h-1.6q-2.4 0-4.6 0.4-2.2 0.4-4.8 0.8-1.2 0.5-2.5 0.6-1.3 0.1-3.2 0.1-1.9 0-3.4-0.2-1.5-0.2-3.4 0.2-1.9 1.1-3.3 0.9-1.4-0.3-3.3-0.9-1.9-0.4-3.4-0.7-1.6-0.2-2.7-0.6h-5l-0.5-0.2h-0.2v0.2q-0.7 0.4-1.3 0.2-0.6-0.2-1-0.2-2.4-1.7-4.9-2.4-2.4-0.6-5.5-1.5-2.4-0.8-4.7-2.1-1.2-0.5-2.4-1-1.2-0.5-2.3-1-4.7-2.1-8-5.2-1.2-1-2.3-1.7-1-0.6-2.2-1.9-0.7-0.4-1.5-1.5-0.9-1.1-0.2-2.2v-0.6q-0.7-2.2-0.1-4.2 0.6-2.1 1.8-4.5 0.5-2.3 1-3.9 0.6-1.7 1.1-3.2 0.2 0 0.2-0.4-0.2-0.2-0.2-0.4v-1.3q1.2-0.7 1.9-1.6 0.7-1 1.4-1.7 1.9-3.6 3.1-8.4 0.4-1.7 1.3-3.3 0.8-1.6 2.7-2.7v-1.3q0.7-1.1 1.3-2.2 0.5-1 1-2.8 0-0.4 0.5-1 0.5-0.7 0.5-1.3 2.1-2.2 2.1-4.4l0.9-0.6q0.5-2.2 1.6-4 1-1.8 2.2-4.2 0.5-1.1 0.6-2.2 0.1-1 0.1-2.8v-10.1l0.9-0.6q1.9-1.8 3.8-3.3 1.9-1.5 4.3-3.2 1.4-1.7 1.4-3 1.1-1.7 1.9-2.8 0.7-1.1 1.4-2.8 1.1-3.5 2.4-6.7 1.3-3.3 3.2-6.5 0.7-0.6 0.7-2.8 0.5-1.3 1.2-2.4 0.7-1 1.2-2.1 0.5-1.7 1.5-2.8 1.1-1.1 1.5-2.8 3.3-5.6 5.2-11.3 1.9-5.8 3.6-11.2 0-1-0.2-2.1-0.1-1.1-0.5-1.5v-0.7q-1.2 0-2.4 0.1-1.2 0.2-2.4 0.6-5.4 2.8-10.6 5.8-5.1 3-9.8 6.5-1 0-1.7 0.8-3.5 3.1-7.2 6-3.6 2.9-6.9 6.3-1.2 1.1-2 1.8-0.9 0.6-2 1.7-1.9 2.8-4.2 5.5-2.2 2.7-4.6 5.5l-0.4 0.4q-0.5 0.4-0.5 0.9-2.4 2.1-4.6 4.8-2.2 2.7-3.4 6.2-1.7 2.6-3 5.2-1.2 2.7-2.4 5.6-0.5 1-0.8 2.1-0.4 1.1 0.1 2.2v0.6q0.4 2.2-0.4 4.8-0.8 2.5-2 4.7v1.5q1.2 2.6 2.4 4.9 1.2 2.2 2.3 4.6 0 0.6-0.7 1.3-0.7 0.4-1.6 1.1-1 0.6-1.4 1h-1q-2.6-2.1-5.4-3.8-2.8-1.8-5.7-4.1v-2q0-0.2-0.2-0.3-0.2-0.1-0.5-0.5-1.1-1.1-1.9-2.3-0.7-1.2-1.6-2.7 0-1.7-0.5-3-0.4-1.3-0.9-3-1.2-3.5-4.7-3.5v-18.1q0.4 0 1.5-0.4 1.1-0.5 1.5-0.5l1-0.8q0.5-3.7 2.5-6.5 2-2.8 3.8-5.8 2.4-2.6 4.6-5.6 2.3-3 4.9-5.8-0.3-0.3 0-0.5 0-0.4 0.9-0.4 0.5-1.1 1.5-1.7 1.1-0.7 2.3-1.8 1.2-1 2.4-2.4 1.3-1.4 3-2.5 1.9-1.7 3.8-3 1.8-1.3 4.2-3.1 1.9-1 3.5-2.4 1.7-1.4 3.6-2.5 3.5-1.7 7.3-4.5l1.4-1.3q5.4-2.2 10.8-4.7 5.4-2.5 10.9-4.6 1.1-1.3 2.3-1.5 1.2-0.2 3.1-0.2v-0.3q0-0.4 0.7-0.4 0.5 0 0.7-0.4 0.2-0.4 0.7-1.1 2.6-0.4 4.9-1 2.4-0.5 4.8-0.9 3-1.1 4.9-2.6 1.9-1.5 3.8-3.3 0.7-1 1.3-2.1 0.6-1.1 1-1.5zm57.7 43.5v-2.1q-0.4-1.7-0.5-3-0.2-1.3-0.2-3.1-0.7-0.6-0.7-1.2-0.7-1.1-0.9-2.2-0.3-1.1-0.7-2.2-1.2-1.7-2.1-3.6-1-2-2.9-3-1.9-1.8-3.5-3.2-1.7-1.4-3.5-3.1-0.3 0.2-0.5 0-0.2 0-0.2-0.9-2.4 0-5.2-0.4-2.9-0.4-5.2-0.9-1.2-0.8-2.4-0.3-1.1 0.6-2.3 1-1.7 1.1-2.3 2.3-0.5 1.1 0.2 3.3 0 0.6-0.5 1.2-0.5 0.5-0.5 1 0 0.6-0.4 1.1-0.5 0.6-0.5 1 0 0.4-0.1 1.2-0.2 0.8-0.6 1.2-1 0.6-1 2.8-0.4 1.1-0.9 2.1-0.5 1.1-0.5 2.2-0.7 1.1-0.8 2.3-0.1 1.1-0.1 2.9l-2.1 6.4q-0.8 0.5-1.3 1.4-0.6 1-1.1 2.1-1.2 1.3-1.5 2.4-0.4 1-0.9 2.1 0 1.7-0.2 2.8-0.2 1.1-1.4 2.2-0.7 1.1-0.9 2.1-0.3 1.1-0.8 2.4-0.7 1.7-1.4 3.2-0.7 1.6-1.9 3.3l-0.7 0.6q-0.4 1.8-1.1 3.4-0.7 1.6-1.2 4-1.2 2.1-2.3 4.6-1 2.5-1.5 4.6-0.7 1.8-0.2 2.5 0.4 0.8 1.6 1.2 0.7 0.6 1.3 0.9 0.6 0.2 1.1 0.6h2.3q0.5 0 1.2-0.3 0.7-0.3 1.2-0.3 2.6-0.7 4.4-1.2 1.7-0.6 3.6-1.6 1.2 0 2.4-0.5 1.1-0.4 2.3-0.4 1.4 0 1.4-0.9 0.7 0 1.3-0.3 0.6-0.3 1.3-0.3 0.7-0.7 1.6-0.9 0.8-0.2 0.8-0.6 4-2.6 8.6-5.7 4.6-3.2 7.9-6.6 2.6-2.8 5.2-5.5 2.5-2.7 4.4-6.2 1.9-3.6 2.7-7.4 0.9-3.8 2-7.7 0.5-0.4 0.6-1.4 0.1-0.9 0.1-1.4zm-53-26.7q0.5 1.1 1.3 1.2 0.9 0.1 2.7 0.1-1.1-0.4-2-1.2-0.8-0.7-2-0.1zm-1.6 15.7h1.6v-0.6h-0.4q-0.3 0-0.5 0.2-0.2 0.2-0.7 0.4zm1.6-0.6q-0.4-1.1-0.5-1.8-0.2-0.8-0.2-1.9-0.7 0.7-0.9 1.1-0.2 0.4-0.7 0.4zm-1.7 15.1v-2.1q-1.1 0.6-1.3 0.8-0.1 0.3-0.1 1.3zm-3.7-17.2q0.4 0.4 1.1 0.6 0.7 0.2 1.2 0.9v-2.2q-0.7 0.7-2.3 0.7zm2.3-4.5h0.7v1.7q0.5 0 1.2 0.3 0.7 0.3 1.2 0.3h0.7q0.7-0.4 0.9-1.1 0.3-0.6 0.7-0.6-1.2-0.4-0.9-1 0.1-0.1 0.1-0.3h-1.5q-0.5 0-0.5-0.8 0-0.7-1.2-0.7v1.5q0 0.7-0.4 0.7h-0.3q0-0.5-0.2-1.3-0.3-0.9 0.9-0.9 0-0.4-0.3-0.7-0.4-0.2-0.4-0.6h1.7q0-0.9-1-0.9h-3q-1 2.2 0.9 2.2l0.7 0.9v1.3h-1.6l-0.5 0.4q-0.2 0.2-0.2 1.3-0.8 0 0 0.6h0.7q1.6 0 1.6-2.3zm4.6-0.7h0.1q0-0.3 0-0.6 0 0 0 0 0 0.3-0.1 0.6zm0.8 0.7v0.6q0.5 0 0.6 0.6 0.1 0.7 0.1 1.1 1.9 0 1-2.3-1.4-2 0-4.4v-0.6q-0.7 0.4-1.7-0.1-0.9-0.6-1.6-0.6v2.2h1.6q-0.6 0.5-0.7 2.2 0.7 0 0.7 1.3zm1.7-5.7q0.4 0 1.2 0.3 0.7 0.2 1.4-0.9-1.9 0-2.6 0.6zm-9.4 14.5h-1.7v0.6q1.7 0 1.7-0.6zm-2.4 25.2q0.7-0.6 2.4-0.6-1.5-1.3-2.4 0.6zm-3.3 7.4q0-1.1-0.1-1.2-0.1-0.1-0.6-0.1 0 1.3 0.7 1.3zm-1.7 7.7h1.7v-0.6h-1.7zm-1.4 6h1.4l-0.7-0.6zm0 10.7q0 0.7-0.5 1.3-0.6 0.7-1.1 1.8 0.7-0.9 2.3-0.9 0-0.4-0.3-1-0.4-0.5-0.4-1.2zm-5.4 5h3.8q-1.4-1.3-2.4-1.9-1.4 1.3-1.4 1.9zm0-9.3q1.4-1.7 1.4-2.1h1v-0.9q-0.3 0-0.3-0.2-0.4-0.4-0.7-0.4h-0.7q-0.4 0.4-1.1 1-0.8 0.7-1.5 1.1 0.7 0.5 1 0.7 0.2 0.2 0.9 0.8zm3.8 3.1q0-0.7 0.2-0.7h0.5q0.5-0.4 0.4-0.5-0.2-0.1-0.2-0.6-0.2-0.2-0.2-0.6-1.4 0-1.4 0.8-0.5 0.7-0.7 1.2-0.3 0.6-1 1 0-0.4-0.3-1-0.4-0.5-0.4-1.2-0.4 1.1-1.3 1.1-0.8 0-2 0.5 0.7 0 1.7 0.6 1.6 0 1.6 0.6l0.7 0.9h2.4zm-6.4 9.3q0-0.7 0.7-0.9 0.7-0.2 0-1.3h-1.6q0.7-0.6 0.2-1.2-0.5-0.5-0.9-0.9 0-0.5-0.4-1.1-0.3-0.7-0.3-1.1h4q1.6 0 1.6-0.6h-2.6q0-1.5-1.6 0-1.9 0-2.1 0.2-0.3 0.2-0.3 1.9 0 2.8 2.4 2.8v2.2q-0.7-0.9-3.1-0.9 0 0.7 0.4 1.2 0.3 0.5 0.3 1.2-0.4 0-1-0.4-0.6-0.5-1.1-0.5-0.9 0.9-0.9 2.4-0.3 0-0.3 0.4 0 0.2 0.3 0.2h1.6q-0.2 0.3-0.5 0.3-0.2 0.2-0.2 0.6v1.3h0.5q0.2 0 0.9-0.6l0.7-0.7q0-0.6-0.3-1.2-0.4-0.5-0.4-0.9 0.5 0 1.4 0.1 1 0.1 1 1.1 0.5 0.7 0.8 0.7 0.4 0 1.5-0.7-0.7-0.6-0.7-2.1h1.7q-0.7-0.7-1-1.4-0.2-0.8-0.7-0.1zm0-9.9q0-0.7-0.6-0.9-0.5-0.2-1-0.9v1.8zm-2.4-2.4q2.6-1.7 1.4-3.7-0.7 0-2.3 1.5 1.2 0.5 0.7 1-0.5 0.5 0.2 1.2zm-0.9 20.9q1.4-0.9 2.3-2.1h-3q0 1.5 0.7 2.1zm2.3-8.6h1v1.5h-1zm15.4 8.6q-4.3-0.4-7.8 2.2-3.6 2.6-4 6-0.7 1.5-1.6 3-0.8 1.5-2 3.3-0.4 1.7-1 3.3-0.6 1.6-1.3 3.4-1.2 2.5-2.4 5.2-1.2 2.7-3 5.5-1.4 1.8-1.4 2.2-1.2 3.7-2.5 7.2-1.3 3.6-3.2 7.2-0.7 1.1-1.2 2.3-0.5 1.2-0.5 2.9 0 1.5-0.7 1.5-0.7 0-0.7 1.5v5.6q1.2 1.1 2.3 1.8 1 0.6 2.2 1-0.2 0.5 0 0.7 0 0.4 1 0.4 1.1 0 2.8-0.5 1.6-0.6 3.5-0.6 2.4-0.8 4.7 0h1.4q4.5-1 8.6-2.4 4.2-1.4 8.4-2.5 1.9-1.1 3.4-1.7 1.5-0.7 3.4-1.8 0.7-0.6 1.4-1.2 0.7-0.5 1.9-0.9 2.4-3.5 6.4-6.1 2.3-1.7 4.7-4.9 0.5 0 0.9-0.8 0.5-0.7 0.5-1.4 0.7-2.8 1.9-4.8 1.2-2.1 2.4-3.8 0.2-0.4 0.4-0.6 0.3-0.3 0.3-0.5v-0.4q0-2.4 0.3-4.1 0.4-1.7 0.4-3.9v-5q-1-7.5-7.1-13.1-3.1-2.8-6.5-4.2-3.4-1.4-7.9-1zm-21.4 3.7h-0.7q0.7 0 0.7 0.4zm0-2.8q0-0.6-0.2-1-0.3-0.3-1.5 0.1 0 0.9 1.7 0.9zm-2.4-2.1q1-1.3 3.1-2.2-1.9 0-2.2 0.2-0.4 0.2-0.9 2zm1.7-8.2l-0.5 0.4q-0.5 0.4-0.5 1.1h3.3q-0.7-0.5-0.9-1-0.2-0.5-0.7-0.5l0.7-0.7q-0.7 0-1.4 0.7v-1.3l-0.5-0.5q-0.5-0.4-0.5-1-0.4 0.4-1 1-0.6 0.7-1.1 1.1 2.1 0 3.1 0.7zm-1-2.8q1.2 0 2.4 0.1 1.2 0.1 2.4 0.5 0-1.5-0.2-2.7-0.1-1.2-0.5-2.3h1.4v-2.8q-1.2 0-1.3 0.3-0.2 0.2-0.1 1.3v1.2q-0.5-0.2-0.8-0.4-0.2-0.2-0.4-0.2h-0.5q-0.7 0.6-1.4 1.5 1.4 0 2.3 0.7-0.9 0-0.9 0.4-0.2 0.2 0 0.2l0.9-0.6q0 0.4 0.4 0.6 0.4 0.2 0.4 0.9-1.2 0.4-2.1 0.2-0.8-0.2-2-0.2c0 0 0 1.3 0 1.3zm0-2.8q-0.7 0-1.4 0.6h1.4zm-0.7 9.5v1.5l0.7 0.6v-0.6q1 0 1-1.5h-1.7v-1.5q-0.4 0-0.9 0.4l-0.5 0.4q-0.7-0.6-0.8-1.3-0.1-0.6-0.1-1v3zm-3.3 22.4v-1.5l-1.7 1.5v0.9q1 0 1.7-0.9zm-1.7 2.2q0-0.5-0.4-0.9-0.3-0.2-0.3-0.4l-0.7 0.6v0.7zm-1.4-13q-0.7 0.5-0.3 1.1 0.3 0.7 0.3 1.7 0.5-0.4 0.5-1.4 0-0.9-0.5-1.4zm-1.6 5q0.4 1.1 0.7 1.7 0.2 0.7 0.9 1.1v-2.8zm-1.4 11.6h0.7v-1.5h-0.7zm12.5-20.5h1.6v-1.3h-2.3q0 0.5 0.3 0.7 0.4 0.2 0.4 0.6zm-13.4 14.7q0 0 0 0zm0.4 0.4q0.5 0.5 1.2 0.5v-1.8q-0.9 0.9-1.2 0.9-0.2 0.2-0.4 0zm-5.9 26.3q0.4-1.1 0.7-1.8 0.2-0.8 0.9-1.8-0.7 0.6-1.2 0.6h-0.4l-1 0.9q-0.9 0.8 0 1.5zm-3.3 12.3v0.8q0.5 0 0.7-0.4 0.3-0.4 0.7-0.4zm-2.3-17.5q1.2 0.4 2.2 0.7 1.1 0.2 1.6 0.8 0-1.1-0.4-1.8-0.3-0.8-0.3-1.9-2.2 1.3-3.1 2.2zm-0.7 11.6v2.2q0.7 0 0.9-0.2l0.5-0.4q0-0.7-0.5-0.9-0.4-0.2-0.9-0.7zm-1-0.6q-0.4-0.6-0.7-1.1-0.2-0.4-0.7-0.4v1.5zm-1.4-3h-3q0 0.6 0.4 1 0.5 0.3 1-0.2 0.7-0.6 0.9-0.7 0.2-0.1 0.7-0.1zm-4 8.2v1.3l1 0.8q0-1.5-1-2.1zm1.7-0.9v-0.9q-1.7 0.1-2.4 0.9zm62.4-128.9q0-0.7 1.7-2.2h-2.6q0 1.5 0.9 2.2zm-25.4 48.5h-0.7-1z"></path>
                          <path id="<Compound Path>" fill-rule="evenodd" class="sf" d="m232.8 30.3q0.7 0.7 1.7 1.1 1.1 0.4 1.8 1.1 1.4 1.1 2.6 2.6 1.2 1.5 1.6 3.2 1 1.1 1.1 1.8 0.1 0.8 0.1 1.9 0 1.9-0.1 4.6-0.1 2.7-1.1 4.6-0.4 0.7-0.9 1.7-0.5 0.9-0.5 1.6-1.2 1.9-2.7 3.7-1.5 1.9-2.7 3.8-2.6 3-5.5 4.7-3 1.6-7 2.9-5.6 0.6-11.3 0l-0.9-0.9q-1.9-1.1-3.2-2-1.3-1-3.2-2.5-1.9-1.1-3.2-2.3-1.3-1.2-1.3-3.5v-0.5q0-1.3-0.4-1.8-0.5-0.5-0.5-1.6-0.7 0-0.7-0.5 0-0.4 0.7-0.4 0.7-1.1 1-2.1 0.4-1.1 0.4-1.6 1.2-1.7 2-3.3 0.8-1.6 2-3.3 1.9-1.8 3.8-3.4 1.8-1.6 4.4-2.9 1.2-1.3 3-1.8 1.8-0.6 3.9-1.2 0.7-0.9 1.2-1 0.4-0.1 1.1-0.5 1.9-0.7 3.8-1.4 1.9-0.8 3.8-0.8zm-13.7 21.8v-2.2q-0.5 0.5-0.5 2.2zm1-3.4q0.9 1 1.4 0.7 0.5-0.3 1.2-0.3-0.7-1.1-2.3-1.6-1.5-0.6-2.7-0.6 0.7 0.7 0.8 1.2 0.2 0.6 0.6 1 1 0 1-0.4zm1.6 3.8h1.9v-0.4h-1.9zm-63.8 121.8q0.5-1 0.5-1.9v-1.9q0-1.3 0.4-2.4 0.5-1.1 0.5-2.2 1.4-1.9 1.4-5.4 0-1.2 0.5-2.4 0.5-1.2 0.5-2.3 0-0.9 0.2-1.1 0-0.2 0.2-0.4 1.4-1.7 2.5-3.4 1.1-1.6 1.1-3.3 0.7-1.1 1.1-2 0.5-1 1.2-2.3 4.3-8.6 7.8-17.5 1.2-2.8 2.6-5.3 1.4-2.4 2.8-4.6v-0.9q0-3.4 2.4-7.1 1.8-3.4 3.6-6.8 1.8-3.3 3.7-7 1.1-1.1 1.4-2.6 0.2-1.5 0.2-3.2-0.5-1.1 0.5-2 0.9-1 2.8-1h8.7q3.3 2.4 6.4 5 3 2.7 6.3 6l0.5 0.4q-0.5 2.4-0.6 4.5-0.1 2.2-0.8 4.6v1.3q-1.6 3.6-3.5 5.8-0.5 1.1-0.5 2.4v3l-0.5 0.4q-0.4 0.4-0.4 0.9-0.5 0.4-1.1 0.9-0.6 0.6-1.3 1.7 0 1.5-0.4 2-0.3 0.5-1 1.6v1.7q0 1.1-0.6 2.1-0.6 1-1.1 2-1.1 3.5-2.7 6.7-1.5 3.3-2.9 6.7-0.5 1.1-1.1 2.6-0.6 1.5-1 3.2 0 3.5-2.4 7.2-0.7 1-1.3 1.9-0.6 0.9-1 1.5-1.2 2.4-2.4 5-1.2 2.6-1.2 4.5v1.3q-0.4 1.3 0.3 2.4 0.7 1 0.7 2.1 0 0.9 0.4 0.9 0.3 0.2 0.5 0 1.2-0.7 2.2-0.8 1.1-0.1 2.3-0.1 1.9-0.4 3.2-1.5 1.3-1.1 2.7-2.2 2.1-2.5 4.6-5.2 2.4-2.7 4.6-5.3 1.1-1.5 2.8-2.8 1.6-1.3 3-3 0.5-0.7 1-1.3 0.5-0.7 0.9-1.1 1.7-1.7 3.3-3.4 1.7-1.6 3.1-3.3 0.2 0 0.5-0.2 0.4-0.4 0.4-1.1-0.7-0.6-0.3-0.7 0.3-0.2 0.3-0.6 2.6-1.7 4.3-3.9 1.6-2.1 3.5-4.1 1.9-2.1 4.1-5 2.3-2.9 4.6-6 2.4-3 4.4-5.9 2-2.9 3.4-5.3 0-0.6 0.6-0.7 0.6-0.1 1.1-0.1h2.3v7.9q0 0.5-0.1 0.6-0.1 0.1-0.8 0.7-0.5 1.3-1.7 3.1-1.2 1.7-2.6 3.6-1.4 2-2.7 3.9-1.3 1.9-2.2 3.2-0.5 0.5-1.3 1.4-0.8 1-1.5 2.1-1.9 1.7-3.2 3.7-1.3 1.9-3.2 4.3-2.8 2.6-5 5.8-1.1 0.4-2 1.5-0.8 1.1-2 2.2-1.1 1.7-2.2 3.3-1.1 1.6-2.5 3.3-1.2 1.1-2 2.1-0.8 1-2 2-0.5 0.7-1.2 1.5-0.7 0.9-2.5 1.6v0.4q-0.5 0.4-0.8 0.7-0.2 0.4-0.4 0.6-0.3 0.4-0.5 0.4-2.8 2.8-5.5 5-2.7 2.1-5.6 4.5-1.9 1.1-3.1 2-1.3 1-3.2 2.5-1.2 0.5-2.3 0.6-1 0.1-1.7 0.7-1.9 0-3.2 0.3-1.3 0.4-3.2 1h-1.4q-1.9-0.6-3.7-1.1-1.7-0.4-3.6-1-2.1 0-5-0.6-2.8-0.5-4.2-2.2-0.7-0.7-1.8-1.2-1-0.6-1.7-1-1.9-1.1-3.3-2.7-1.4-1.6-1.9-4zm33-48.9q1.1 0.4 1.7 0.4 0.6 0-0.1-0.4zm1 12.9q0-0.9 0.7-0.9h-2.6q1.9 0 1.9 0.9zm-10.6 8q0 0.6 0.4 1.1 0.5 0.4 0.5 1v-2.1zm0 15.1q-0.5 1.1-0.5 1.4v0.9h0.5zm-1.4 0h2.3v-0.8h-1.4q-0.9 0-0.9 0.8zm0 10.4q0.7-1.7 0.7-1.9 0-0.3-1.2-0.3 0.5 0.9 0.5 2.2zm-3.1-6.7h1.4q1-1.1 1.1-1.6 0.1-0.5 0.1-1-1.9 0.7-2.6 2.6zm-0.9-6.2v1.7h4q0-0.4-0.5-0.4-0.9-0.7-1.6-0.8-0.7-0.1-1.9-0.5zm0-4.1q-0.7 0-0.7 0.2 0 0.2 0.7 1.7zm0 8.2q-1 0.9-1.4 0.9h1.4zm15.1-35.4q0 0.4 0.7 0.9 0.7 0.4 1.8 0.4 0-1.1-0.9-1.2-0.9-0.1-1.6-0.1z"></path>
                          <path id="<Compound Path>" fill-rule="evenodd" class="sf" d="m232 161.9v-2.4q0-1.1 0.5-1.5 0.5-0.4 0.5-1.5-0.7-2.8 0.3-5.5 1.1-2.7 2.7-5.5 1.9-1.7 3.1-3.6 1.2-1.8 1.9-3.8 1.2-1.7 1.9-3 0.7-1.3 1.2-3 1.1-1.3 2.7-3 1.5-1.7 2.2-3.5 1.2-1 1.8-2.4 0.6-1.4 1.3-2.5 0.7-1.1 0.8-2.1 0.1-0.9 0.6-2 2.3-4.5 5-9.1 2.8-4.5 6.1-8.4 1.8-2.4 3.3-4.3 1.4-1.9 3.7-3 0.7-1.1 1.8-1.9 1-0.7 2.2-1.8 3.1-2.8 6.7-4.5 3.7-1.7 7.7-2.8 1.2-0.4 2-0.9 0.8-0.4 2-0.4h0.5q1.1 0.6 2.8 0.7 1.6 0.2 2.8 0.2h8q1 0 1.5 0.4 1.8 1.1 3.7 2.4 1.9 1.2 3.8 2.3 7.8 5.4 11.1 15.1v0.5q0.4 1.2 0.6 1.9 0.1 0.6 0.8 1.7v3.3q0 1.5 0.4 2.5 0.8 2.8 0.4 5.5-0.4 2.7-0.4 5.5-0.4 2.8-1.2 5.4-0.9 2.6-3.2 4.8-1.4 1.9-1.4 4.9 0 1.1-0.3 2.6-0.2 1.5-1.4 2.6-0.7 1.1-1.3 1.8-0.6 0.8-1 1.9-1.2 1.7-1.5 3.1-0.2 1.4-0.2 3.1 0 2.4 2.1 2.4h4l1.4-1.3q0.7-0.9 1.8-1.4 1.1-0.5 1.8-1 1.9-1 3.2-2.1 1.2-1.1 2.7-2.8h1.1q1.9-0.9 3.1-2.1 1.2-1.2 2.4-2.7 1.1-1.3 2.3-2.6 1.2-1.2 2.6-2.3 1.7-1.1 3-2.5 1.2-1.4 3.1-2.5 1.2-1.5 4-4.7 2.9-3.3 4.7-5 0.5-1.1 1.6-2 1-1 1.5-2.1 0.7-0.8 1.2-1.6 0.5-0.8 1.4-1.2 1.2-1.5 1.7-1.5 0.4 0 2.3 1.5 1.2 0.4 1.3 0.5 0.1 0.2 0.1 1.2-0.7 0.9-0.8 1.4-0.1 0.6-0.1 1-0.5 1.1-1.1 2.1-0.6 0.9-1 1.6-0.7 1.7-1.8 2.8-1.1 1.1-2.2 2.1-0.8 0.9-2.3 2.5-1.5 1.6-1.5 2.3-1.9 1.7-3.1 3.6-1.2 2-2.3 3.7-0.5 0-0.7 0.1-0.3 0.1-0.7 0.1-0.5 0.2-0.8 0.2-3 2.2-5.4 5-0.4 1.7-1.5 2.8-1.1 1.1-2.5 1.9-1.6 1.3-3.4 3-1.8 1.6-3.6 3.3-1.2 0.9-2.3 1.6-1 0.8-1.7 1.2-1.5 1.1-3.1 2.2-1.7 1-2.8 1.5-2.6 1-4.6 2.2-2 1.2-4.6 2.3-2.1 0-4.5 1.5-0.9 0.4-3.5 0.4-1.2 0.7-2.3 0.9-1 0.2-2.2 0.9-1.9 1-3.7 2-1.7 1-3.1 2.1-1.2 0.8-2.4 1.7-1.2 0.8-1.6 1.9-1 1.1-1.9 2.1-1 0.9-2.2 2-2.3 1.5-4.2 2.6-1.9 1.1-3.8 2.2-2.3 1-4.3 1.9-2 0.9-4.1 1.7h-1.2q-1.2 0.5-2.3 0.5h-2.2q-4.9 1.3-9.4 0-4-0.5-8.1-2.3-4.2-1.8-7.9-4.6-3.1-2.8-5.2-5.6-2.1-2.8-2.9-6.3-0.4-1.1-0.5-2-0.2-1-0.9-1.7-0.4-1-1-2-0.6-1-0.6-2.1 0-0.8-0.5-1.3-0.5-0.4-0.5-1zm34-21.2v2.4h1.1q0-0.4-0.1-1-0.1-0.5-1-1.4zm0-4.1h2.1v-0.8h-2.1zm0-8.7h2.1v-0.8q-0.7 0-1-0.2-0.2-0.2-1.1-0.2zm1.1 1.2q-0.9 0.1-1.4 0.6-0.4 0.5-1.6 0.5h3zm-5.1 17.5q1.6 0 1.9-0.1 0.2-0.1 0.7-1.2-1 0-2.6 1.3zm-1.4-7.3q0.7 0.6 1.7 0.9 1.1 0.4 1.8 0.4-0.7-1.1-1.2-1.2-0.5-0.1-2.3-0.1zm-0.5 3.2h-1.4q-2.6 0-2.6 1.7 0 0.5 0.2 0.7 0.5 0.4 1.2 0.4 0 1.1-0.1 1.2-0.1 0.1-1.3 0.1h-3.1v1.3q-2.3 0-2.3 1.1v0.8q0 0.5 0.4 0.5 0.7-0.7 1-0.8 0.2-0.1 0.9-0.5h1.7v2.6q0 0.8 0.2 1 0 0.3 0.2 0.5l1.4 1.3q0.8 0 1-0.3 0.2-0.2 1.2-0.2v-1.3h-1.2q-0.7 0-1.2 0.2-0.5 0.3-1.2 0.3 0-0.5 0.4-1.1 0.3-0.7-0.4-1.3 0-0.4 0.5-0.9 0.5-0.4 0.9-0.4 0-0.4 0.6-0.5 0.6-0.1 1.6-1 0-0.4 0.2-1.3 0.2-0.9 0.2-1.3h-1.6q0-0.9 0.6-1 0.6-0.1 1-0.5h0.5q0.5 0 1 0.4-0.5-0.4-0.5-0.8v-0.9h1.9l-0.5-0.9q0 0.7-0.5 0.8-0.5 0.1-0.9 0.1zm1.4-14.7q-1.4 1.3-2.4 1.3h2.4zm5.6 33.5h-4q-2.6 1.9-2.5 4.1-0.5 2.1-1.3 4.4-0.9 2.2-1.8 4.2v1.1q0.9 0.4 1.4 0.8 0.5 0.5 1.2 0.9 0 0.6 0.7 1.3 0.2 0.4 0.7 0.6 4.2-1.5 7.7-3 3.4-1.5 6.4-4.3 0-0.9 0.5-1.4 0.5-0.6 0.5-1.8v-2q0-0.8-1-1.3-1.2-0.6-2.2-1.3-1.1-0.6-1.8-1.1-1.2-1-2.2-1.5-1.1-0.4-2.3 0.3zm-5.6-10.6q-1.2-0.4-2-0.6-0.8-0.1-2-0.7v1.3zm0-14.2q0-1.3-1-2.2-1.1-0.4-1.6 0.2-0.5 0.7-1.4 0.7 1.2 0.4 2 0.5 0.8 0.1 2 0.8zm-5 2.8q-0.4 0.6-0.9 0.7-0.5 0.1-0.5 0.6v1h1q0.4 0 0.9-0.4 0.2-0.2 0.5-0.6 1.9 0 2.2-0.2 0.4-0.1 0.8-1.1v-2.4h-1.4v-0.4l-0.2 0.4h0.2q0 1.1-0.4 1.1h-1.2q0.2 0.2 0.5 0.2 0.2 0.2 0.4 0.2 0.3 0 0.3 0.4-1.2 0-1.2 1.3zm-1.4-2.4v-1.2h-0.5q0 0.8 0.2 1 0 0.2 0.3 0.2zm0.9 18.4q-0.7 0-1.2 0.5-0.4 0.6-1.4 1 1 0.6 1.1 0.7 0.1 0.2 0.6 0.1 0-0.6 0.4-1 0.5-0.5 0.5-1.3zm-5.4-11q0 1.1 2.3 1.1v-2.8q-0.7 0.4-0.9 0.8-0.2 0.4-0.9 0.4l-0.3 0.5zm9.7 3.4q-0.3 0.5 0.2 1.3 0 0.5 1 0.5h0.2q0.2-0.3 0.2-0.5v-0.4q0-0.7-0.4-0.7-0.3 0-0.3-0.2-0.2-0.2-0.2-0.4 0-0.2-0.5-0.6 0 0.6-0.2 1zm-10.9 9.9q-0.4-0.8-1.4-1.2v1.2zm59.6-63.6q-1.8-1.5-3.3-2.9-1.4-1.4-3.3-3.1h-5.4q-1.9-0.7-3.5-0.1-1.7 0.5-3.5 1.6-1.2 0.7-2.8 1.4-1.5 0.8-2.7 1.2-1.8 1.7-4.1 3.3-2.2 1.7-4.8 2.7l-0.3 0.2q-0.2 0.3-0.2 0.7-0.9 0.4-1.4 1.1-0.5 0.6-1.2 1.7-0.7 0.6-1.2 0.8-0.4 0.1-1.4 0.5v6q1.2 0.5 2.6 0.9 1.4 0.4 2.6 0.4 5.4 0 9.4 4.1 1.2 1.5 1.8 2.6 0.6 1.1 2.2 2.2 0.5 0.8 0.5 1.3-0.5 0.6-0.5 1.6v2q-0.7 1.1-0.9 2.2-0.2 1.1-1.2 2.4-2.6 3.8-5.9 7.9-3.3 4.1-5.4 9.1 0 0.6-0.6 1.2-0.6 0.5-0.6 0.9 0 0.9 0.6 1.3 0.6 0.5 1.1 1.1 2.6 2.2 4.8 3.7 2.3 1.5 4.6 2.4h1.4q1.7-1.6 3.1-2.7 1.4-1.2 3-3l0.5-0.4q0-1.1 0.5-2.5 0.5-1.4 0.9-2.4 1.2-1.8 2.6-3.7 1.4-1.9 2.6-3.7 1.4-3.9 2.7-7.1 1.3-3.2 1.8-6.7 1.2-2.8 2.3-5.5 1.2-2.7 1.2-5.5 0-1.3 0.3-3 0.2-1.7 0.2-3.9 0.7-2.3 0.3-4.2-0.3-1.8-0.3-4-0.9-2.3 0.9-4.1z"></path>
                          <path id="<Path>" class="sf" d="m331.9 44.6v1.8c0 0.3-0.1 0.7-0.7 0.7h-6v-3.3h6c0.7 0 0.7 0.5 0.7 0.8z"></path>
                          <path id="<Path>" class="sf" d="m351.1 44.4v9c0 0.2-0.1 0.7-0.8 0.8h-5.6c-0.6-0.1-0.7-0.6-0.7-0.8v-9c0-0.2 0.1-0.6 0.7-0.6h5.6c0.7 0 0.8 0.4 0.8 0.6z"></path>
                          <path id="<Compound Path>" fill-rule="evenodd" class="sf" d="m257.8 33.4h105.1v31.2h-105.1zm78.7 10.2c-0.1-1.9-1.5-3-3.2-3.1h-13.3v17.1h5.2v-7.1h1.8l3.6 7.1h5.9l-4-7.1h0.8c1.6-0.1 3.2-1.2 3.2-3.1zm-18.5-3.1h-14.8v3.4h4.9v13.7h5.1v-13.7h4.8zm-16.8 0h-13.5v17.1h13.5v-3.4h-8.4v-3.6h8.4v-3.3h-8.4v-3.4h8.4zm-16.1 0h-6.9l-3.3 8.4-3.3-8.4h-6.9v17.1h5.1v-10.8l3.4 10.8h3.4l3.4-10.8v10.8h5.1zm71.1 2.9c-0.1-1.9-1.5-2.8-3.2-2.9h-11c-1.6 0.1-3 1-3.2 2.9v11.1c0.2 2 1.6 3 3.2 3.1h11c1.7-0.1 3.1-1.1 3.2-3.1z"></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank">METRO <br> Serviceverpackungen </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>


    </div>
  </div>

  <div class="footer-wrap no-print">
    <div class="logo-fooetr">
      <img src="images/footer-logo.svg">
    </div>
    <div class="fotter-right footer-first-page">
      <div class="fotter-right-top">
        <div class="footer-links content-foo">
          <p>The METRO My Sustainable Restaurant is designed to help food business owners adopt a more sustainable future.</p>
        </div>
        <div class="footer-links link2">
          <ul>
            <li>
              <a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a>
            </li>
            <li>
              <a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a>
            </li>
            <li>
              <a href="https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a>
            </li>
            <li>
              <a href="https://www.metroag.de/en/contact" title="" target="_blank">Contact</a>
            </li>
          </ul>
        </div>
        <div class="footer-links link3">
          <ul>
            <li>
              <a href="#" title="">Link 1</a>
            </li>
            <li>
              <a href="#" title="">Link 1</a>
            </li>
            <li>
              <a href="#" title="">Link 1</a>
            </li>
            <li>
              <a href="#" title="">Link 1</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-socials">
        <ul>
          <li>
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-youtube-play"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="fotter-right page-ani-footer">
      <div class="fotter-right-top">
        <div class="footer-links link2">
          <ul>
            <li>
              <a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a>
            </li>
            <li>
              <a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a>
            </li>
            <li>
              <a href="https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a>
            </li>
            <li>
              <a href="https://www.metroag.de/en/contact" title="" target="_blank">Contact</a>
            </li>
          </ul>
        </div>
        <div class="footer-socials">
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
      </div>
    </div>
  </div>






  <div id="pop1" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(1);">X</a>
      <h4> Turn off unnecessary lights and electric equipment</h4>
      <p>Save energy by turning off unnecessary lights and electric equipment: e.g. turn off the range or the fryer during downtime and begin preheating when business picks up. You should also shut down the Point of Sale (POS) system and the computer when you don’t use it during off days or at night after the service.</p>
    </div>
  </div>
  <div id="pop2" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(2);">X</a>
      <h4> Set a starting point and make an action plan
      </h4>
      <p>Set a starting point from which you can make improvements. Looking back on your success can be a great motivator! Further, make an action plan and set realistic goals to save energy. </p>
    </div>
  </div>
  <div id="pop3" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(3);">X</a>
      <h4> Contact your utility company</h4>
      <p>To get to know how much energy you use per month, contact your utility company. Check when the highest use occurs and check your invoices to get an idea of the costs. You can use a simple tracker to see how much you are using. </p>

    </div>
  </div>
  <div id="pop4" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(4);">X</a>
      <h4> Pay attention to your cooling equipment
      </h4>
      <p>It is important to know how your cooling equipment works. For example, you should pay attention to how much ice you can put to not go over the ventilation. If the air flow is interrupted, the machine will use more energy to produce the same amount of ice. </p>

    </div>
  </div>
  <div id="pop5" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(5);">X</a>
      <h4> Check your refrigerator </h4>
      <p>If the seals on your refrigerator are not kept clean and tight, the fridge has to work harder to stay cool, as warm air can get in. Also, ensure that the fans of your refrigerator are not obstructed and that the cooling and ventilation slots behind stand-alone refrigerators and freezers are not obstructed.</p>

    </div>
  </div>
  <div id="pop6" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(6);">X</a>
      <h4> Don’t waste ice
      </h4>
      <p>Ice is expensive to produce, water and energy wise, so don’t waste it or automatically refill it. Only add as much as you need. </p>

    </div>
  </div>
  <div id="pop7" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(7);">X</a>
      <h4> Change your lights for energy-efficient ones</h4>
      <p>Energy-efficient lights are one way to save energy. Use LED, halogen incandescent bulbs, CFL lightbulbs for your kitchen and main area. You can also use lights with autonomous light sensors and motion sensors. That kind of intelligent lighting can be used in restrooms, storage or technical rooms.
      </p>
    </div>
  </div>
  <div id="pop8" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(8);">X</a>
      <h4> Clean and maintain your equipment </h4>
      <p>If you don’t clean and maintain your equipment, it will work harder and use more energy than needed. For example, for equipment that uses water, use a water filtration system to prevent damage to your equipment from calcification and mineral deposits.
      </p>

    </div>
  </div>
  <div id="pop9" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(9);">X</a>
      <h4> Decrease heat usage </h4>
      <p>Turn down unnecessary heating, e.g. by lowering the water temperatures. But keep in mind the mandatory dish washing temperatures for your area. You could also use energy-efficient hand dryers for your bathrooms that don’t use heating elements.
      </p>

    </div>
  </div>
  <div id="pop10" class="modalx">
    <div class="modalx-content">
      <a class="btn-close-popup" onclick="closePopUp(10);">X</a>
      <h4> Reorganise your kitchen</h4>
      <p>Reposition heat generating equipment away from cooling equipment. For example, ensure the oven is not next to the ice machine where it will have to work harder than needed.
      </p>

    </div>
  </div>









  <script type="text/javascript">
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("moreless");
      var btnText = document.getElementById("myBtn_readmore");

      if (dots.style.display === "none") {
        dots.style.display = "block";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }
  </script>







  <script type="text/javascript">
    var eurl = "explore-to-plastic-waste-eng.php"
    var gurl = "explore-to-plastic-waste-deu.php"


    //btn-test click test script

    $(document).ready(function() {
      $('#select').change(function() {
        location.href = $(this).val();
      });
    });


    $(document).ready(function() {
      $('#myBtn_cust').click(function() {
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
      initialSlide: 2,
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