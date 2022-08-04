<!DOCTYPE html>
<html>
<head>   
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://unpkg.com/konva@8.2.2/konva.min.js"></script>
<script src="./jquery/custom.js"></script>
<meta charset="utf-8" />
<title>METRO</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.min.css"/>
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="popup-exists page-animation">
<header class="page1-header">
  <div class="container">
    <div class="logo">
	<a href="heim.php"> <img src="images/new-logo.svg" class="l0-logo"/></a>
	<a href="heim.php"> <img src="images/metro-logo.svg" class="l1-logo"/></a>
    </div>
	<div class="pag1-ham">
	<div class="menu-ham">
		<ul>
		<li class="menu-click" onclick="openNav()">
<svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 36 26" width="36" height="26">
	<title>New Project</title>
	<style>
		.s0 { fill: #003b7e } 
	</style>
	<g id="&lt;Group&gt;">
		<g id="&lt;Group&gt;">
			<path id="&lt;Path&gt;" class="s0" d="m0 0.6h36v5.3h-36z"/>
			<path id="&lt;Path&gt;" class="s0" d="m0 10.4h36v5.2h-36z"/>
			<path id="&lt;Path&gt;" class="s0" d="m0 20.1h36v5.3h-36z"/>
		</g>
	</g>
</svg>
<div id="myNav" class="overlay-menu">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="heim.php">Heim</a>
    <a href="mein-nachhaltiges-restaurant.php">Mein nachhaltiges Restaurant</a>
    <a href="der-leitfaden-des-msr-kapitels.php">Der Leitfaden des MSR Kapitels</a>
    <a href="übersicht-in-die-nachhaltige-speisekarte.php">Übersicht in die nachhaltige Speisekarte</a>
	<a href="tipps-für-nachhaltiges-menü.php">Tipps für nachhaltiges Menü</a>
  </div>
</div>
			</li>
		</ul>
	</div>
	<div class="custom__select">
<select>
  <option value="heim.php" selected>DEU</option>
  <option value="index.php">ENG</option>
</select>
</div>
	<!-- <div class="language custom-select">
                <ul>
                    <li>
                        <select>
                            <option value="0">DEU</option>
                            <option value="1">ENG</option>
                            <option value="1">DEU</option>
                        </select>
                    </li>
                </ul>
            </div> -->
	</div>
  </div>
</header>
<!-- <img src="images/screen-l.jpg" class="drag-image"/> -->
<div id="loader" class="loader hidden">
<div class="loader__tiles">
  <img src="images/loader1.gif" alt="trees tile" class="loader__tile">
</div>
<span class="loader__text">Wird geladen METRO Neu...</span>
</div>
<div class="wrapper">
<div class="overlay"><span class="close_btn">
<button class="article__close" ></button>
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
              <p class="article__user-story">Wir bedienen Milliarden Menschen auf der ganzen Welt und unser Einfluss ist groß. Gleichzeitig wächst damit unsere Verantwortung, die richtigen Entscheidungen zu treffen.  Mein Nachhaltiges Restaurant ist unser Beitrag dazu, Sie als Restaurantbesitzerin oder -besitzer zu unterstützen, fokussierter, vielfältiger, verantwortungsvoller und damit erfolgreicher zu werden.</p>
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
<li><a href="https://www.facebook.com/mpulse/"  target="_blank"> <i class="fa fa-facebook"></i></a></li>
<li><a href="https://www.metroag.de/youtube" target="_blank" ><i class="fa fa-youtube-play"></i></a></li>
<li><a href="https://www.instagram.com/metro_mpulse/"  target="_blank"><i class="fa fa-instagram"></i></a></li>
<li><a href="https://www.linkedin.com/company/metro-ag" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li><a href="https://twitter.com/@METRO_News" target="_blank" ><i class="fa fa-twitter"></i></a></li>
</ul>

</div>
</div>

</div>

</div>
<script src="jquery/page1.js"></script>
<script>
function mynewFunction() {
  idArray = new Array()
  idArray [1] = "Jedes Jahr produzieren wir 2,21 Milliarden Tonnen Abfall."
  idArray [2] = "Etwa 40 %der weltweit produzierten Lebensmittel wandern direkt in den Müll."
  idArray [3] = "Weltweit leidet jeder neunte Mensch an Hunger."
  idArray [4] = "Ein Viertel des weltweiten Trinkwasservorrats wird für den Anbau von Lebensmitteln verwendet, die nie gegessen werden. "
  idArray [5] = "Wenn die Menge an weggeworfenen Lebensmitteln ein Land wäre, wäre es der drittgrößte Emittent von Treibhausgasen. "
  idArray [6] = "Wenn wir nichts dagegen unternehmen, wird es bis 2050 mehr Plastik als Fisch (nach Gewicht) in den Meeren geben.  "
  idArray [7] = "Nur 14 %der weltweit verwendeten Kunststoffverpackungen werden recycelt. "
  idArray [8] = "Kartoffelabfälle, Fischhäute und Orangenschalen – weltweit arbeiten Wissenschaftler daran, neue Materialien für Verpackungen zu entwickeln."
  idArray [9] = "Kompaktleuchtstofflampen und -birnen verbrauchen 75 %weniger Energie als Glühbirnen und halten zehnmal länger. "
  idArray [10] = "Beim Kochen mit Induktionsherdengeht nur 10 %der Wärme verloren, während es bei Gasherden fast 55 %sind. "
  idArray [11] = "Europäische Metropolen wie Istanbul, Barcelona und London sind bereits von Wasserknappheit betroffen."

  document.getElementById("selectFact").onclick = mynewFunction;
  randomParagraph = Math.floor(Math.random()*5);

  document.getElementById("result_fact").innerHTML = idArray[randomParagraph + 1];   
  console.log(idArray);    
}


</script>
</body> 