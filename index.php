<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>METRO</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://unpkg.com/konva@8.2.2/konva.min.js"></script>
  <script src="./jquery/custom.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="css/page2_style_1.css">
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="./assets/css/common.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    .popup-exists .overlay {
      z-index: 0 !important;
    }

    .footer-socials.side_nav>ul {
      margin-left: 0rem;
    }

    .custom__select:hover {
      columns: #ffe500;
    }

    .y-select {
      color: #ffe500 !important;
    }
  </style>
</head>

<body class="popup-exists page-animation1">
  <header class="no-print page1-header">
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
          <select class="y-select">
            <option value="home.php">DEU</option>
            <option value="index.php" selected>ENG</option>
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




            <!-- <a href="https://www.metro-go.de/de-DE/home" target="_blank">
              <img src="images/Eitiketten.png">
            </a> -->
          </div>
          <!-- <div class="social">
            <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
              <img src="images/Logo_METRO-Regio_weiss.png">
            </a>
            <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
              <img src="./images/safe_food/foot_nav2.PNG">
            </a>
            <a style="width: 9rem;" class="bottom-right" href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank"><img src="./images/safe_food/foot_nav.PNG"></a>
          </div> -->
          <div class="footer-socials side_nav">
            <ul>
              <li>
                <a href="https://www.facebook.com/HOSPITALITY.digitaI" target="_blank">
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
        <div class="overlay2"></div>
      </div>
    </div>
  </header>
  <!-- <img src="images/screen-l.jpg" class="drag-image"/> -->

  <div class="wrapper">
    <div class="overlay"><span class="close_btn">
        <button class="article__close"></button>
      </span></div>
    <div class="artcle-top-wrap">
      <div class="artcle-top-header">
        <header class="article__header">
          <h1 class="article__title--strong"><span>Welcome to the</span> METRO <br> My Sustainable Restaurant</h1>
        </header>

      </div>
      <article class="article--home">

        <div class="article__copy">

          <section class="article__columns">
            <div class="article__subheading">
              The most comprehensive guide to re-imagine the sustainability footprint of our food business.
            </div>
            <div class="article__content">
              <p class="article__user-story">As we serve billions of consumers across the world, the impact our businesses have on the planet is steadily increasing. We all need to do our choices. The METRO MSR initiative is our contribution to empower you, the restaurant owner, to become more diverse, resilient and hence successful.</p>
              <a href="my-sustainable-restaurant.php" class="btn-changing click-cta1">Experience My Sustainable Restaurant</a>
            </div>
          </section>
        </div>
      </article>
    </div>
    <div class="right-bottom-section">
      <div class="bulb-section animate__animated">
        <div class="blink__text1 arrow1">SELECT FOR INTERESTING FACTS</div>
        <div class="bulb-wrap" onclick="mynewFunction()" id="selectFact"><img src="images/bulb.svg" /></div>
        <div class="bulb-text main">
          <p id="result_fact"></p>
        </div>
      </div>
    </div>
  </div>
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

  <script>
    function mynewFunction() {
      idArray = new Array()
      idArray[1] = "For 1kg beef, 15,500 litres of water are needed which corresponds to 100 bathtubs"
      idArray[2] = "Every year a massive 2,21 billion tons of waste are dumped."
      idArray[3] = "Approximately 40% of all food produced globally goes to waste."
      idArray[4] = "1 in 9 people on this planet are going hungry to bed"
      idArray[5] = "1/4 of the world’s fresh water supply is used to grow food that is never eaten."
      idArray[6] = "If food waste was a country it would be the 3rd largest emitter of greenhouse gases after China and the US."
      idArray[7] = "By 2050 there will be more plastic than fish (by weight) in the oceans if we don’t do something about it."
      idArray[8] = "Only 14% of plastic packaging is collected globally for recycling."
      idArray[9] = "Potato waste, fish skin, orange waste – they may soon turn into new forms of packaging, scientists are working on it."
      idArray[10] = "Compact fluorescent bulbs and lamps use 75% less energy than incandescent bulbs and last 10 times longer."
      idArray[11] = "When cooking with an induction stove, only 10% of the heat gets lost, while with a gas stove almost 50% of heat is wasted."

      document.getElementById("selectFact").onclick = mynewFunction;
      randomParagraph = Math.floor(Math.random() * 5);

      document.getElementById("result_fact").innerHTML = idArray[randomParagraph + 1];
      console.log(idArray);
    }
  </script>
  <script src="jquery/page1.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#nav-icon4').click(function() {
        $(this).toggleClass('open');
      });
    });



    $('.burger, .overlay2').click(function() {
      $('.burger').toggleClass('clicked');
      $('.overlay2').toggleClass('show');
      $('nav').toggleClass('show');
      $('body').toggleClass('overflow');
    });
  </script>


</body>

</html>