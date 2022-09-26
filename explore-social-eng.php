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
  <script src="required1/jquery-3.6.0.min.js"></script>
  <script src="required1/modernizr.min.js"></script>
  <script src="required1/swiper-bundle.min.js"></script>
  <!------EXPLORE SAFE FOOD L4 PAGE----------->
  <script src=safe-food.js></script>
  <link href="safe-food.css" rel="stylesheet">
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
  <header>
    <div class="container no-print">
      <div class="logo">
        <a href="/">
          <img src="images/metro-logo.svg" />
        </a>
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
              <div id="myNav" class="overlay-menu">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="/">Home</a>
                  <a href="my-sustainable-restaurant.php">My Sustainable Restaurant</a>
                  <a href="the-msr-chapter-guide-eng.php">The MSR Chapter Guide</a>
                  <a href="introduction-to-sustainable-menu.php">Introduction to Sustainable Menu</a>
                  <a href="explore-sustainable-menu.php">Explore Sustainable Menu</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="custom__select">
          <select>
            <option value="explore-safe-food-deu.php">DEU</option>
            <option value="explore-safe-food-eng.php" selected>ENG</option>
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
    <div class="page-3_stage page-4_stage">
      <!--BANNER-->
      <section class="section1 no-print">
        <div class="left-content no-print">
          <h3>How to engage socially<br>
            as a restaurateur</h3>
          <h4>Social engagement and your business</h4>
          <p>As a restaurateur, you have a huge impact on social matters. Social engagement not
            only applies to a restaurant’s staff, but also includes how the restaurant acts in the
            community and treats its suppliers. Thanks to established practices in Human Resource
            operations, we know what our jobs entail, that our social and health insurances are taken
            care of our wages or salaries are paid on time and so on. But beyond good practice,
            there are other aspects that are important for us to perform to the best of our ability.
            The very same aspects are relevant for restaurant workers, who unfortunately don’t
            necessarily experience the protection and fulfilment that we do.</p>
          <button class="read-more-btn" id="hide_show_content" href="#clickTohide">Read more</button>
        </div>
        <div class="right-content no-print">
          <img src="./images/safe_food/s-1.svg" class="img-fluid mt-4" />
        </div>
        <!-- <a href="#devid01">DEV. Link</a> -->
      </section>
      <section class="soFood_importants no-print" id="clickTohide">
        <div class="container-fluid px-5">
          <div class="row bg_yellow no-print">
            <h4 style="padding-left: 10rem;">What it means to be a socially engaged restaurant owner</h4>
            <div class="col-md-4 px-4">
              <div class="import_box mt-5">
                <img src="./images/safe_food/s-2.svg" class="img-fluid" style="margin-top: 0;">

              </div>
            </div>
            <div class="col-md-4 px-4">
              <div class="import_box">

                <p>Being a sustainable employer means a lot more than just
                  complying with the law. A successful, sustainable business
                  will keep and attract motivated staff. And it will ensure that
                  employees are given the possibility to perform their best
                  and get the opportunity to develop. Worrying about
                  receiving their pay in time affects an employee’s ability to
                  focus on their job, and the feeling of being unsafe affects
                  staff relations and can make the work environment
                  uncomfortable. When back-of-house staff is not properly
                  trained, it can result in injuries and poor quality meals, and
                  in poor customer service for the front-of-house which can
                  affect customer retention.</p>
                <p>The hospitality and food industries are among the biggest
                  employers in the world, but many businesses lack the
                  basic good practices we would expect. Unfortunately,
                  underpaid and abused workers are still commonplace
                  whether in their physical working conditions, the working
                  hours, safety or contractual matters like working on a
                  temporary or seasonal basis. Extreme challenges also exist</p>
              </div>
            </div>
            <div class="col-md-4 px-4">
              <div class="import_box">

                <p>such as forced labour, discrimination or other unethical
                  business behaviour. When the basic rights are not
                  respected, the ‘on top’ aspects which are crucial for a
                  person’s self-fulfilment are most certainly not considered.
                  All together, these aspects are deemed as Human Rights.</p>
                <p>As a restaurant owner, you have direct responsibility for
                  your staff. You also have an indirect (shared) responsibility
                  for every worker in the supply chain who provides
                  products for you, whether that is the produce farmer or the
                  driver who delivers the supplies to your back door. Being a
                  socially engaged restaurant owner also includes the way
                  you act in your community, for example, with fellow
                  gastronomes, associations and charities. Especially in
                  extremely challenging times, the way you treat your staff
                  and your suppliers, and the way you interact with your
                  community, hold high potential to make a real positive
                  difference and influence the regeneration of the food
                  economy.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="good_to_know no-print social_box" style="padding-bottom: 12rem;">
        <div class="container-fluid">
          <div class="row mb-5">
            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4">
                <img src="./images/safe_food/s-3.svg" class="img-fluid">
                <p>Human Rights are crucial for a person’s self-fulfilment
                  and the 1948 United Nations Universal Declaration of
                  Human Rights lay the foundation for basic human

                  rights requirements for all businesses. </p>
              </div>
            </div>
            <div class="col-md-4 px-4">
              <h3>Good to know</h3>
            </div>

            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4">
                <img src="./images/safe_food/s-4.svg" class="img-fluid">
                <p>Clear guidance on implementing the basic human
                  rights requirements was developed by the UN in 2011 as
                  a part of the United Nations Guiding Principles for

                  Business and Human Rights (UNGP).</p>
              </div>
            </div>
          </div>
          <div class="row margin_top">
            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4">
                <img src="./images/safe_food/s-20.svg" class="img-fluid">
                <p>Labour legislations exist which must be complied with
                  irrespective of your employees’ contracts, be it
                  permanent or temporary and full time and part-time.</p>
              </div>
            </div>
            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4">
                <img src="./images/safe_food/s-5.svg" class="img-fluid">
                <p>Extreme challenges to fair working conditions are
                  forced labour, discrimination or other unethical business

                  behaviour. </p>
              </div>
            </div>
            <div class="col-md-4 px-4">
              <div class="good_to_know_box p-4">
                <img src="./images/safe_food/s-6.svg" class="img-fluid">
                <p>Human Rights mean that employees have the right to be treated fairly in the workplace which includes, among others, the right not to be unfairly dismissed, or unfairly discriminated against, the right to freedom of association and the right of fair labour practices.</p>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="simple_wayTo_preventing no-print social_l4_yellow_slider pt-5" style="padding-bottom: 10rem;background: #ffe500;margin-top: 0;">
        <div class="section-div">
          <div class="container-fluid">
            <p class="text-center"><img src="./images/safe_food/s-new.svg" style="width: 30rem;
    margin-top: -15rem;"></p>
            <h3 class="wayT0Title" style="color:#000;margin-top: 0;">The 7 Basic Human Rights</h3>

            <div class="sw-holder">
              <!--<div class="sw-btn-prev-container"><div class="swiper-button-prev btn-y pbtn"></div></div>-->
              <div class="swholder1">
                <div class="swholder-sw food_wasteSlide">
                  <div class="swiper swx swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper swx-wrapper" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-42.5px, 0px, 0px);" id="swiper-wrapper-9329353e60f736c3" aria-live="polite">
                      <div class="swiper-slide sl-box swiper-slide-prev" role="group" aria-label="1 / 11">
                        <div class="slide-inner">
                          <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                            <span class="slimg-holder socils_one">
                              1
                            </span>
                          </div>
                          <div class="sl-text sl-text-1 text-center">
                            <span class="sltext-holder"> Freedom of association
                              and effective recognition of
                              the right to collective bargaining </span>
                            <p>For example, employees who have decided to join a union will not
                              be subject to any sort of discrimination or dismissal as a result of

                              their union membership.</p>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide sl-box swiper-slide-active" role="group" aria-label="2 / 11">
                        <div class="slide-inner">
                          <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                            <span class="slimg-holder">
                              2
                            </span>
                          </div>
                          <div class="sl-text sl-text-1 text-center">
                            <span class="sltext-holder"> Elimination of all forms of forced
                              or compulsory labour including

                              disciplinary measures</span>
                            <p>For example, employees can leave when they want to. You cannot
                              withhold any part of an employee’s salary, benefits, property, or
                              documents in order to force them to continue working. Thus, you
                              cannot force extra hours to compensate for accommodation you

                              might provide.</p>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide sl-box social_slde swiper-slide-next" role="group" aria-label="3 / 11">
                        <div class="slide-inner">
                          <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                            <span class="slimg-holder">
                              3
                            </span>
                          </div>
                          <div class="sl-text sl-text-1 text-center">
                            <span class="sltext-holder">No child labour

                              (and respect the needs of
                              young employees) </span>
                            <p>The international Labour Organisation (ILO) defines the general
                              minimum age for admission to employment or work as 15 years
                              (or 13 for light work). You must ask the age of an applicant prior to
                              employment and a copy of the passport or ID document must be

                              kept in the personnel file.</p>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide sl-box" role="group" aria-label="4 / 11">
                        <div class="slide-inner">
                          <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                            <span class="slimg-holder">
                              4
                            </span>
                          </div>
                          <div class="sl-text sl-text-1 text-center">
                            <span class="sltext-holder"> No discrimination in employment

                              and occupation</span>
                            <p>Decisions on hiring, wages, promotion, training, discipline,
                              retirement and termination are always based on unbiased criteria
                              and are not linked to any direct or indirect discriminatory
                              characteristics. Also, offer equal pay for equal work performed at
                              equal levels at similar locations. This means that employees must
                              be treated equally and judged by their skills, not their gender, age,

                              ethnicity, sexual orientation or physical ability.</p>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide sl-box" role="group" aria-label="5 / 11">
                        <div class="slide-inner">
                          <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                            <span class="slimg-holder">
                              5
                            </span>
                          </div>
                          <div class="sl-text sl-text-1 text-center">
                            <span class="sltext-holder">
                              Fair renumeration</span>
                            <p>Your staff must have formal contracts, receive pay slips and
                              payment on a regular basis, and be paid at least the (legal)
                              minimum wage. To be sustainable, that remuneration would mean
                              a living wage or income that ensures a decent life. Overtime must

                              be paid.</p>
                          </div>

                        </div>
                      </div>

                      <div class="swiper-slide sl-box" role="group" aria-label="6 / 11">
                        <div class="slide-inner">
                          <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                            <span class="slimg-holder">
                              6
                            </span>
                          </div>
                          <div class="sl-text sl-text-1 text-center">
                            <span class="sltext-holder"> Fair working hours </span>
                            <p>Your staff can work full-time for a maximum of 48 hours/week and
                              as an exemption maximum 12 hours/week overtime and has

                              enough spare time in between.</p>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide sl-box" role="group" aria-label="7 / 11">
                        <div class="slide-inner">
                          <div class="sl-image sl-image-1 plastic_waste_slider1 social_slde text-center">
                            <span class="slimg-holder">
                              7
                            </span>
                          </div>
                          <div class="sl-text sl-text-1 text-center">
                            <span class="sltext-holder"> Health and safety </span>
                            <p>Ensure that your staff is provided with effective personal
                              protective equipment (PPE) and training to safely perform their
                              job. This may be, for example, the proper equipment to protect

                              employees from pollution.</p>
                          </div>

                        </div>
                      </div>


                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>


                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                </div>
                <!--<div class="swholder-pg"><div class="swiper-pagination"></div></div>-->
              </div>
              <!--<div class="sw-btn-next-container"><div class="swiper-button-next nbtn btn-y"></div></div>-->
            </div>
          </div>
        </div>
      </section>







      <section class="three-step_food_safety no-print">
        <div class="container-fluid px-4">
          <div class="row">
            <h3>Ways to be socially engaged<br>as a restaurateur</h3>
            <p class="text-center">There are three main ways to be a socially engaged business. This is through your<br>staff, your suppliers and your local community.</p>

          </div>
          <div class="row mt-5">
            <div class="test">
              <div class="tab-container-one">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li id="tabLi1" class="col-md-4 nav-item">
                    <a id="tabLink1" class="nav-link active" href="#home" role="tab" aria-controls="home" data-bs-toggle="tab">Engage with your employees</a>
                  </li>
                  <li id="tabLi2" class="col-md-4 nav-item">
                    <a id="tabLink2" class="nav-link" href="#profile" role="tab" aria-controls="profile" data-bs-toggle="tab">Engage with your suppliers </a>
                  </li>
                  <li id="tabLi3" class="col-md-4 nav-item">
                    <a id="tabLink3" class="nav-link" href="#messages" role="tab" aria-controls="messages" data-bs-toggle="tab">Connect with your community </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                      <div class="col-md-3 offset-md-1">
                        <div class="three-step_img" style="margin-top:0;">
                          <img src="./images/safe_food/s-7.svg" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-md-6 offset-md-1">
                        <div class="three-step_para">
                          <p>As an employer you achieve having sustainable working conditions by: </p>

                          <ol>
                            <li>Complying with your national employment legislation.</li>
                            <li> Fulfilling the basic human rights of your employees. </li>
                          </ol>
                          <p class="mt-0">
                            <strong>The 7 main principles of human rights defined by the UN can serve as your guidance.</strong>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2 mb-5">
                      <div class="section-div">
                        <div class="container-fluid">
                          <div class="sw-holder">
                            <!--<div class="sw-btn-prev-container"><div class="swiper-button-prev btn-y pbtn"></div></div>-->
                            <div class="swholder1">
                              <div class="swholder-sw">
                                <div class="swiper swx">
                                  <div class="swiper-wrapper swx-wrapper">
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-1 socialSlide-1 text-center">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-8.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-1 text-center">
                                          <span class="sltext-holder"> TRAIN AND EMPOWER <br>YOUR STAFF </span>
                                        </div>
                                        <div class="sl-button sl-button-1 text-center">
                                          <button class="read-more-btn socialL4_btn-1" id="sl-button sl-button-1">Read more</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-2 text-center socialSlide-2">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-9.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-2 text-center">
                                          <span class="sltext-holder">CHECK WHAT YOU NEED TO DO </span>
                                        </div>
                                        <div class="sl-button sl-button-2 text-center">
                                          <button class="read-more-btn SocialL4_btn-2" id="sl-button sl-button-2">Read more</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-3 text-center socialSlide-3">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-10.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-3 text-center">
                                          <span class="sltext-holder"> COMMUNICATE CLEARLY </span>
                                        </div>
                                        <div class="sl-button sl-button-3 text-center">
                                          <button class="read-more-btn socialL4_btn-3" id="sl-button sl-button-3">Read more</button>
                                        </div>
                                      </div>
                                    </div>


                                  </div>
                                  <div class="swiper-button-next"></div>
                                  <div class="swiper-button-prev"></div>
                                </div>
                              </div>
                              <!--<div class="swholder-pg"><div class="swiper-pagination"></div></div>-->
                            </div>
                            <!--<div class="sw-btn-next-container"><div class="swiper-button-next nbtn btn-y"></div></div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-center nextStepCta mt-4">
                      <a id="nextBtn1" href="#tabLi2">Next Step <i class="fa fa-long-arrow-right"></i>
                      </a>
                    </p>
                  </div>
                  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                      <div class="col-md-3 offset-md-1">
                        <div class="three-step_img" style="margin-top: 0;">
                          <img src="./images/safe_food/s-11.svg" class="img-fluid" style="width: 20rem;">
                        </div>
                      </div>
                      <div class="col-md-6 offset-md-1">
                        <div class="three-step_para">
                          <p>
                            Workers’ rights in the supply chain are an issue in almost all countries. You can make a
                            difference by asking your suppliers to ensure fair working conditions. By recognising this and
                            asking your suppliers how they guarantee workers’ rights is an aspect of responsible sourcing
                            through which you can make an impact on another level of the food system.
                          </p>
                          <p class="mt-0"><strong>Here are some simple steps to engage with your suppliers:</strong></p>

                        </div>
                      </div>
                    </div>
                    <div class="row mt-2 mb-5">
                      <div class="section-div">
                        <div class="container-fluid">
                          <div class="sw-holder">
                            <!--<div class="sw-btn-prev-container"><div class="swiper-button-prev btn-y pbtn"></div></div>-->
                            <div class="swholder1 slider_2">
                              <div class="swholder-sw">
                                <div class="swiper swx">
                                  <div class="swiper-wrapper swx-wrapper">
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-1 text-center socialSlide2-1">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-12.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-1 text-center">
                                          <span class="sltext-holder"> KEEP IN TOUCH </span>
                                          <p>Connect regularly with your suppliers</p>
                                        </div>

                                      </div>
                                    </div>
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-2 socialSlide2-2 text-center">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-13.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-2 text-center">
                                          <span class="sltext-holder"> BUY LOCALLY</span>
                                          <p>Connect regularly with your suppliers</p>
                                        </div>
                                        <!-- <div class="sl-button sl-button-2 text-center">
                                            <button class="read-more-btn safe_food_btn2-2" id="sl-button sl-button-2">Read more</button>
                                          </div> -->
                                      </div>
                                    </div>
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-3 text-center socialSlide2-3">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-14.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-3 text-center">
                                          <span class="sltext-holder"> TALK TO YOUR SUPPLIER </span>
                                          <p>Engage with your suppliers to know more about the
                                            measures they take to ensure fair working conditions</p>
                                        </div>
                                        <!--  <div class="sl-button sl-button-3 text-center">
                                            <button class="read-more-btn safe_food_btn2-3" id="sl-button sl-button-3">Read more</button>
                                          </div> -->
                                      </div>
                                    </div>
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-4 text-center sl-img-4 socialSlide2-4">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-15.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-4 text-center">
                                          <span class="sltext-holder"> SHARE WHAT YOU KNOW </span>
                                          <p>Share what you have learned with your supplier</p>
                                        </div>
                                        <!-- <div class="sl-button sl-button-4 text-center">
                                            <button class="read-more-btn safe_food_btn2-4" id="sl-button sl-button-4">Read more</button>
                                          </div> -->
                                      </div>
                                    </div>



                                  </div>
                                  <div class="swiper-button-next"></div>
                                  <div class="swiper-button-prev"></div>
                                </div>
                              </div>
                              <!--<div class="swholder-pg"><div class="swiper-pagination"></div></div>-->
                            </div>
                            <!--<div class="sw-btn-next-container"><div class="swiper-button-next nbtn btn-y"></div></div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <p class="text-center nextStepCta mt-4">
                        <a id="nextBtn2" href="#tabLi3">Next Step <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <div class="row">
                      <div class="col-md-3 offset-md-1">
                        <div class="three-step_img" style="margin-top:0">
                          <img src="./images/safe_food/s-16.svg" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-md-6 offset-md-1">
                        <div class="three-step_para">
                          <p>Connecting with the local community is crucial and can help you to become resilient to difficult
                            times. People who are engaged in your business will be more likely to support it, especially
                            when your restaurant is a regular part of their lives. </p>
                          <p class="mt-4">
                            <strong>When you want to be fully integrated and wish to actively contribute to your community,
                              here are some steps you can take:</strong>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2 mb-5">
                      <div class="section-div">
                        <div class="container-fluid">
                          <div class="sw-holder">
                            <!--<div class="sw-btn-prev-container"><div class="swiper-button-prev btn-y pbtn"></div></div>-->
                            <div class="swholder1 slider_3">
                              <div class="swholder-sw">
                                <div class="swiper swx">
                                  <div class="swiper-wrapper swx-wrapper">
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-6 slider_3-1 social_slideL4-1 text-center">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-17.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-6 text-center">
                                          <span class="sltext-holder"> CONTRIBUTE TO <br>THE LOCAL COMMUNITY </span>
                                        </div>
                                        <div class="sl-button sl-button-6 text-center">
                                          <button class="read-more-btn socialL4_btn2-1" id="sl-button sl-button-6">Read more</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-6 text-center social_slideL4-2 slider_3-2">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-18.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-6 text-center">
                                          <span class="sltext-holder"> HIRE LOCAL EMPLOYEES<br>AND BE INCLUSIVE </span>
                                        </div>
                                        <div class="sl-button sl-button-6 text-center">
                                          <button class="read-more-btn socialL4_btn2-2" id="sl-button sl-button-6">Read more</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="swiper-slide sl-box">
                                      <div class="slide-inner">
                                        <div class="sl-image sl-image-6 text-center social_slideL4-3 slider_3-3">
                                          <span class="slimg-holder">
                                            <img src="./images/safe_food/s-19.svg" class="img-fluid mb-2 mt-2">
                                          </span>
                                        </div>
                                        <div class="sl-text sl-text-6 text-center">
                                          <span class="sltext-holder"> SOURCE SEASONAL<br>PRODUCTS LOCALLY </span>
                                        </div>
                                        <div class="sl-button sl-button-6 text-center">
                                          <button class="read-more-btn socialL4_btn2-3" id="sl-button sl-button-6">Read more</button>
                                        </div>
                                      </div>
                                    </div>



                                  </div>
                                  <div class="swiper-button-next"></div>
                                  <div class="swiper-button-prev"></div>
                                </div>
                              </div>
                              <!--<div class="swholder-pg"><div class="swiper-pagination"></div></div>-->
                            </div>
                            <!--<div class="sw-btn-next-container"><div class="swiper-button-next nbtn btn-y"></div></div>-->
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
                <h3>Track and Talk <br>About Your Progress </h3>
                <p>Once you have decided to emphasize your efforts to become a socially engaged
                  restaurateur, talk to your staff, your suppliers, and with your community. Look out
                  for simple solutions that don’t need too much input from you. Let your customers
                  know about your social engagement. Publicise what you are doing. For example, a
                  sign in the restaurant or in your menu can be a visible reminder to your customers
                  about your responsible actions. Your staff and customers will take these messages
                  home with them, making your impact go even further!</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="track-and_talk_img">
                <img src="./images/safe_food/Asset 30.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container section4-6" id="section-to-print">
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
              <p class=""> Get informed about the national legislation on working conditions and the 7 Basic Human Rights Principles that were defined by the UN</p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class=""> Engage with your employees and your suppliers </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class=""> Connect with your local community </p>
            </li>

            <li class="print-li">
              <button onclick="window.print();" class="no-print">Print</button>
            </li>
          </ul>
        </div>
      </section>
      <!-----FOOTER--------->
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
                    <img src="images/logo-dish.png" />
                  </a>
                </li>
                <li>
                  <a href="https://www.dish.co/XX/en/" target="_blank">
                    <img src="images/Dish_Logo-svg.svg" />
                  </a>
                </li>
                <li>
                  <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank">
                    <img src="images/Protrace_Logo-ai.svg" />
                  </a>
                </li>
                <li>
                  <a href="https://www.metro-go.de/de-DE/home" target="_blank">
                    <img src="images/Eitiketten.png" />
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
                  <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                    <img src="images/Logo_METRO-Regio_weiss.png" />
                  </a>
                </li>
                <li>
                  <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 373 192" width="373" height="192">
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
      <img src="images/footer-logo.svg" />
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



  <div id="socialL4_c1" class="modalx">
    <div class="modalx-content">
      <h4>Train and empower your staff</h4>
      <p>Agree together how you will support staff who perform care work and who might need cover at the last moment for example those with sick or elderly relatives or parents with young children. Ensure that your shift plans accommodate older and less physically able members of staff. Promote from within your restaurant from within – train and empower your staff through training and promotion.</p>
      <a class="read-more-btn btn btn-sm socialL4_c1_close1">X</a>
    </div>
  </div>
  <div id="socialL4_c2" class="modalx">
    <div class="modalx-content">
      <h4>Check what you need to do </h4>
      <p>Identify your legal and human rights requirements, assess your status, make changes and monitor ongoing. Ensure Personal Protective Equipment (PPE) is provided for all staff as needed. Allow staff to take home surplus meals and establish one free meal during their shift.
      </p>
      <a class="read-more-btn btn btn-sm socialL4_c1_close2">X</a>
    </div>
  </div>
  <div id="socialL4_c3" class="modalx">
    <div class="modalx-content">
      <h4>Communicate clearly</h4>
      <p>State your commitment and expectations towards your staff explicitly. Be clear what your and their responsibilities are. Communicate often and involve your staff through education, training and socially interacting. Install a robust remediation and grievance procedure to deal with feedback and complaints. Agree at the same time with your staff how to distribute tips.
      </p>
      <a class="read-more-btn btn btn-sm socialL4_c1_close3">X</a>
    </div>
  </div>



  <div id="socialL4-2_c1" class="modalx">
    <div class="modalx-content">
      <h4>Contribute to the local community</h4>
      <p>Contribute to local activities and charitable projects such as street-festivals. Donate your surplus food. Collect money for charity or donate your employees` time to support local charities. Let your restaurant serve as a welcoming space outside busy hours, for those who need it such as local charities and organisations. Create a welcoming space for parents with children, especially during the day.
      </p>
      <a class="read-more-btn btn btn-sm socialL4-2_c1_close1">X</a>
    </div>
  </div>
  <div id="socialL4-2_c2" class="modalx">
    <div class="modalx-content">
      <h4>Hire local employees and be inclusive</h4>
      <p>Make it clear that you run an inclusive restaurant and that you do not tolerate discrimination whether it be employees or customers. When you are hiring, consider local employees, and people with different social backgrounds, cultures, and histories, including migrants.

      </p>
      <a class="read-more-btn btn btn-sm socialL4-2_c1_close2">X</a>
    </div>
  </div>
  <div id="socialL4-2_c3" class="modalx">
    <div class="modalx-content">
      <h4>Source seasonal products locally</h4>
      <p>Purchase your seasonal products locally and look for local specialties for your menu. Try to provide menu options that can accommodate different dietary preferences for your customers.
      </p>
      <a class="read-more-btn btn btn-sm socialL4-2_c1_close3">X</a>
    </div>
  </div>







  <script type="text/javascript">
    $(document).ready(function() {
      //slide one
      $(".socialL4_btn2-1").click(function() {
        $("#socialL4-2_c1").css("display", "block");
      });
      $(".socialL4-2_c1_close1").click(function() {
        //alert("Hi")
        $("#socialL4-2_c1").css("display", "none");
      });
    });

    $(document).ready(function() {
      //slide one
      $(".socialL4_btn2-2").click(function() {
        $("#socialL4-2_c2").css("display", "block");
      });
      $(".socialL4-2_c1_close2").click(function() {
        //alert("Hi")
        $("#socialL4-2_c2").css("display", "none");
      });
    });

    $(document).ready(function() {
      //slide one
      $(".socialL4_btn2-3").click(function() {
        $("#socialL4-2_c3").css("display", "block");
      });
      $(".socialL4-2_c1_close3").click(function() {
        //alert("Hi")
        $("#socialL4-2_c3").css("display", "none");
      });
    });


    $(document).ready(function() {
      //slide one
      $(".socialL4_btn-1").click(function() {
        $("#socialL4_c1").css("display", "block");
      });
      $(".socialL4_c1_close1").click(function() {
        //alert("Hi")
        $("#socialL4_c1").css("display", "none");
      });
    });

    $(document).ready(function() {
      //slide one
      $(".SocialL4_btn-2").click(function() {
        $("#socialL4_c2").css("display", "block");
      });
      $(".socialL4_c1_close2").click(function() {
        //alert("Hi")
        $("#socialL4_c2").css("display", "none");
      });
    });

    $(document).ready(function() {
      //slide one
      $(".socialL4_btn-3").click(function() {
        $("#socialL4_c3").css("display", "block");
      });
      $(".socialL4_c1_close3").click(function() {
        //alert("Hi")
        $("#socialL4_c3").css("display", "none");
      });
    });
  </script>



  <script src="jquery/page1.js"></script>
  <!-- Swiper JS -->
  <script>
    var swiper = new Swiper(".swx", {
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
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".nextStepCta a").click(function() {
        $(".nav-tabs .nav-item").removeClass("active");
        $(this).addClass("active");
      });
    });
  </script>



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
</body>

</html>