<!doctype html>
<html lang="en">
<head>
  <?php include "includes/page-header.php"; ?>
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <!--META-->
  <meta name="language" content="EN">
  <meta name="description" content="Visit the Metro My Sustainable Restaurant digital immersive experience to explore the future of sustainability in the HoReCa industry.">
  <meta name="keywords" content="metro,sustainability,restaurant">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="imagetoolbar" content="no">
  <meta http-equiv="x-dns-prefetch-control" content="off">
  <!--OPEN GRAPH AND OTHER-->
  <meta name="og:title" content="METRO">
  <meta name="og:type" content="blog">
  <meta name="og:url" content="">
  <!--current page url-->
  <meta name="og:site_name" content="METRO">
  <meta name="og:description" content="Visit the Metro My Sustainable Restaurant digital immersive experience to explore the future of sustainability in the HoReCa industry.">
  <meta name="og:email" content="">
  <meta name="og:phone_number" content="">
  <meta name="apple-mobile-web-app-title" content="METRO">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#003b7e">
  <meta name="mssmarttagspreventparsing" content="true">
  <meta name="IE=edge,chrome=1" content="X-UA-Compatible">
  <meta name="msapplication-starturl" content="">
  <!--current page url-->
  <meta name="msapplication-tooltip" content="METRO">
  <meta http-equiv="cleartype" content="on">
  <meta name="canonical" content="">
  <!--current page url-->
</head>

<body class="popup-exists page-animation1">
  <?php include "includes/header-eng.php"; ?>


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
              <a href="my-sustainable-restaurant-eng.php" class="btn-changing click-cta1-rev">Experience My Sustainable Restaurant <span class="homeArrow"><i class="bi bi-arrow-right-circle-fill"></i></span> </a>
            </div>
          </section>
        </div>
      </article>
    </div>
    <div class="right-bottom-section">
      <div class="bulb-section animate__animated">
        <div class="blink__text1 arrow1">SELECT FOR INTERESTING FACTS</div>
        <div class="bulb-wrap" onclick="mynewFunction();" id="selectFact"><img src="assets/images/bulb.svg" /></div>
        <div class="bulb-text main">
          <p id="result_fact">Hello</p>
        </div>
      </div>
    </div>
  </div>



  <?php include "includes/footer-eng.php"; ?>


  <?php include "includes/page-footer.php"; ?>
  <script src="assets/prev/jquery/page1.js"></script>
  <script>
    function mynewFunction() {
      idArray = new Array()
      idArray[0] = "For 1kg beef, 15,500 litres of water are needed which corresponds to 100 bathtubs"
      idArray[1] = "Every year a massive 2,21 billion tons of waste are dumped."
      idArray[2] = "Approximately 40% of all food produced globally goes to waste."
      idArray[3] = "1 in 9 people on this planet are going hungry to bed"
      idArray[4] = "1/4 of the world’s fresh water supply is used to grow food that is never eaten."
      idArray[5] = "If food waste was a country it would be the 3rd largest emitter of greenhouse gases after China and the US."
      idArray[6] = "By 2050 there will be more plastic than fish (by weight) in the oceans if we don’t do something about it."
      idArray[7] = "Only 14% of plastic packaging is collected globally for recycling."
      idArray[8] = "Potato waste, fish skin, orange waste – they may soon turn into new forms of packaging, scientists are working on it."
      idArray[9] = "Compact fluorescent bulbs and lamps use 75% less energy than incandescent bulbs and last 10 times longer."
      idArray[10] = "When cooking with an induction stove, only 10% of the heat gets lost, while with a gas stove almost 50% of heat is wasted."

      document.getElementById("selectFact").onclick = mynewFunction;
      randomParagraph = Math.floor(Math.random() * 5);

      document.getElementById("result_fact").innerHTML = idArray[randomParagraph + 1];
      //console.log(idArray);
    };

    function randomIntFromInterval(min, max) { // min and max included 
      return Math.floor(Math.random() * (max - min + 1) + min)
    };
    //page params
    $(document).ready(function() {
      var cur_page_name = "Home";
      var cur_nav_link_id = "1";
      var eng_page_path = "index.php";
      var deu_page_path = "home.php";
      //manipulation
      pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
    });
  </script>
  <script src="assets/js/jquery-ui.min.js"></script>
</body>

</html>
