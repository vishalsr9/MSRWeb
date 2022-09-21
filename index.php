<!DOCTYPE html>
<html>

<head>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://unpkg.com/konva@8.2.2/konva.min.js"></script>
  <script src="./jquery/custom.js"></script>
  <meta charset="utf-8" />
  <title>METRO</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="popup-exists page-animation1">
  <header class="page1-header">
    <div class="container">
      <div class="logo">
        <a href=""> <img src="images/new-logo.svg" class="l0-logo" /></a>
        <a href=""> <img src="images/metro-logo.svg" class="l1-logo" /></a>
      </div>
      <div class="pag1-ham">
        <div class="menu-ham">
          <ul>
            <li class="menu-click" onclick="openNav()">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 36 26" width="36" height="26">
                <title>New Project</title>
                <style>
                  .s0 {
                    fill: #003b7e
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




        <div class="custom__select">
          <select>
            <option value="home.php">DEU</option>
            <option value="index.php" selected>ENG</option>
          </select>
        </div>
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
</body>

</html>