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
  <link rel="stylesheet" href="./assets/css/common.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style type="text/css">
    .popup-exists .overlay {
      z-index: 0 !important;
    }
  </style>
</head>

<body class="popup-exists page-animation">
  <header class="no-print page1-header">
    <div class="container">
      <div class="logo">
        <a href="home.php">
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
            <option value="home.php" selected>DEU</option>
            <option value="index.php" ENG></option>
          </select>
        </div>
        <nav>
          <ul class="main">
            <li>
              <a href="http://msr.bdevtestservers.com/home.php">Home</a>
            </li>
            <li>
              <a href="http://msr.bdevtestservers.com/mein-nachhaltiges-restaurant.php">Mein Nachhaltiges Restaurant</a>
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
                <a href="introduction-to-safe-food-deu.php">Sichere Lebensmittel</a>
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
              <a href="https://www.metroag.de/en/contact">Kontakt</a>
            </li>
          </ul>
          <!-- <div class="about"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p></div> -->
          <div class="social">
            <p>Hilfreiche Links</p>
            <a href="https://www.menukithd.com/" target="_blank">
              <img src="images/logo-dish.png" style="width: 5rem;">
            </a>
            <a href="https://www.dish.co/XX/en/" target="_blank">
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
          <h1 class="article__title--strong"><span>Willkommen bei</span> METRO <br>Mein Nachhaltiges Restaurant</h1>
        </header>

      </div>
      <article class="article--home">

        <div class="article__copy">

          <section class="article__columns">
            <div class="article__subheading">
              Der digitale Leitfaden, der Sie durch die wichtigsten Nachhaltigkeitsthemen führt.
            </div>
            <div class="article__content">
              <p class="article__user-story">Wir bedienen Milliarden Menschen auf der ganzen Welt und unser Einfluss ist groß. Gleichzeitig wächst damit unsere Verantwortung, die richtigen Entscheidungen zu treffen. Mein Nachhaltiges Restaurant ist unser Beitrag dazu, Sie als Restaurantbesitzerin oder -besitzer zu unterstützen, fokussierter, vielfältiger, verantwortungsvoller und damit erfolgreicher zu werden.</p>
              <a href="mein-nachhaltiges-restaurant.php" class="btn-changing click-cta1">Mein Nachhaltiges Restaurant</a>
            </div>
          </section>
        </div>
      </article>
    </div>
    <div class="right-bottom-section">
      <div class="bulb-section animate__animated">
        <div class="blink__text1 arrow1">Klicken Sie hier für interessante Fakten</div>
        <div class="bulb-wrap" onclick="mynewFunction()" id="selectFact"><img src="images/bulb.svg" /></div>
        <div class="bulb-text">
          <!-- <p>Für 1 Kilogramm Rindfleisch aus industrieller Landwirtschaft werden 15.500 Liter Wasser benötigt – das entspricht der Menge von 100 Badewannen.</p> -->
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


            <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Impressum</a></li>

            <li><a href="https://www.metroag.de/datenschutz" title="" target="_blank">Datenschutz</a></li>

            <li><a href="https://www.metroag.de/nutzungsbedingungen" title="" target="_blank">Nutzungsbedingungen</a></li>

            <li><a href="https://www.metroag.de/kontakt" title="" target="_blank">Kontakt</a></li>

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
  <script>
    function mynewFunction() {
      idArray = new Array()
      idArray[1] = "Jedes Jahr produzieren wir 2,21 Milliarden Tonnen Abfall."
      idArray[2] = "Etwa 40 %der weltweit produzierten Lebensmittel wandern direkt in den Müll."
      idArray[3] = "Weltweit leidet jeder neunte Mensch an Hunger."
      idArray[4] = "Ein Viertel des weltweiten Trinkwasservorrats wird für den Anbau von Lebensmitteln verwendet, die nie gegessen werden. "
      idArray[5] = "Wenn die Menge an weggeworfenen Lebensmitteln ein Land wäre, wäre es der drittgrößte Emittent von Treibhausgasen. "
      idArray[6] = "Wenn wir nichts dagegen unternehmen, wird es bis 2050 mehr Plastik als Fisch (nach Gewicht) in den Meeren geben.  "
      idArray[7] = "Nur 14 %der weltweit verwendeten Kunststoffverpackungen werden recycelt. "
      idArray[8] = "Kartoffelabfälle, Fischhäute und Orangenschalen – weltweit arbeiten Wissenschaftler daran, neue Materialien für Verpackungen zu entwickeln."
      idArray[9] = "Kompaktleuchtstofflampen und -birnen verbrauchen 75 %weniger Energie als Glühbirnen und halten zehnmal länger. "
      idArray[10] = "Beim Kochen mit Induktionsherdengeht nur 10 %der Wärme verloren, während es bei Gasherden fast 55 %sind. "
      idArray[11] = "Europäische Metropolen wie Istanbul, Barcelona und London sind bereits von Wasserknappheit betroffen."

      document.getElementById("selectFact").onclick = mynewFunction;
      randomParagraph = Math.floor(Math.random() * 5);

      document.getElementById("result_fact").innerHTML = idArray[randomParagraph + 1];
      console.log(idArray);
    }
  </script>


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
  <script src="jquery/page1.js"></script>
</body>

</html>