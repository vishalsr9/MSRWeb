<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>METRO</title>

  <link rel="stylesheet" href="css/page2_style.css">
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="./jquery/custom.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <script src="./jquery/slick.js"></script>
  <style>
    .spacerx {
      margin-top: 3rem;
    }

    .nodeco {
      color: white !important;
      text-decoration: none !important;
    }

    .nowrap1 {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
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
  <header>
    <div class="container no-print">
      <div class="logo">
        <a href="/"> <img src="images/metro-logo.svg" /></a>
      </div>
      <div class="header-menu">
        <div class="menu-ham">
          <ul>
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
            <option value="explore-sustainable-menu-deu.php">DEU</option>
            <option value="explore-sustainable-menu-eng.php" selected>ENG</option>
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
      <section class="section1 no-print">
        <div class="left-content">
          <h3>How to create a <br> Sustainable Menu</h3>
          <h4>Sustainability and Your Menu</h4>
          <p>Put sustainability on the menu and you can visibly demonstrate your engagement for a food future that respects the health of the planet and its communities. With conscious choices you will win customers and employees over. By carefully picking the products you use, you can create a positive impact on the environment as well as on the health of your customers. Just think about more regional, more organic, less sugar, less salt.<span id="dots"></span>

          </p>
          <!-- <button class="read-more-btn" href="#" id="myBtn" onclick="expand-next('#more')">Read more</button> -->
          <button class="read-more-btn" href="#" id="myBtn" target="#more">Read more</button>
        </div>
        <div class="right-content">
          <img src="images/page3banner.svg" />
        </div>
      </section>
      <section class="section-text container" id="more">
        <div class="section-text-inner">
          <p> <strong>Many customers </strong> will appreciate your efforts. In addition to a growing number of established consumers, the younger generation cares about the environment and how people are treated. By being more sustainable, you will build a positive image with your customers and create opportunities to win new ones. It is also an opportunity to differentiate yourself from other competitors and you will automatically create a positive impact for your existing and potential employees. Furthermore your activities will have a positive, restorative impact on the environment and your local community. Your business will be future proof, because you can build a stable, profitable business when you buy products that are sourced and produced sustainably. As a restaurateur you can have a real impact on the health of your community and environment through the meals you serve. </p>
        </div>

      </section>

      <section class="section-simple no-print">
        <div class="section-simple-way text-center">
          <h3>Simple ways to create a Sustainable Menu</h3>
          <p>As restaurateur there are many ways how to make your menu sustainable. But as individual communities have different ideas of whatconstitutesa sustainable plate, you can employ the following steps according to yourlocation and customers.</p>
        </div>
      </section>
      <section class="section-slider1 section-slider2 no-print">
        <div class="section-slider-center text-center">
          <div class="wrap">
            <div class="slider2">
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle11">
                    Source locally,
                    regionally
                    and in season
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle9">
                    Reduce the
                    size of
                    your menu</button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle8">
                    Engage
                    your staff</button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle10">
                    Introduce
                    smaller
                    portion sizes
                    as an option</button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle12">
                    Use less
                    and
                    better meat</button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle13">
                    Go for vegetables
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle14">
                    Use sustainable fish
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle15">
                    Experiment with plant
                    proteins
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle16">
                    Avoid highly processed ingredients
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle17">
                    Put food on the menu
                    that does justice to everyone
                  </button>
                </div>
              </div>


              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle18">
                    Introduce diverse grains
                  </button>
                </div>
              </div>


            </div>
          </div>

        </div>
      </section>
      <section class="section-slider1 no-print spacerx">
        <div class="section-slider-center text-center">
          <div class="wrap">
            <h3>Good to know - Different ways of eating </h3>
            <!---////////////////////////////////////////-->
            <div class="slider">

              <div class="item vegan-item">
                <div class="inner-item modal-toggle1">
                  <span class="icon-list">
                    <img src="images/i1-svg.svg" />
                  </span>
                  <button class="modal-togg">Vegan</button>
                </div>
              </div>
              <div class="item vegi-item">
                <div class="inner-item modal-toggle2">
                  <span class="icon-list">
                    <img src="images/i5-svg.svg" />
                  </span>
                  <button class="modal-togg">Vegetarian</button>
                </div>
              </div>

              <div class="item paleo-item">
                <div class="inner-item modal-toggle3">
                  <span class="icon-list">
                    <img src="images/i7-svg.svg" />
                  </span>
                  <button class="modal-togg">Paleo</button>
                </div>
              </div>
              <div class="item keto-item">
                <div class="inner-item modal-toggle4">
                  <span class="icon-list">
                    <img src="images/i8-svg.svg" />
                  </span>
                  <button class="modal-togg">Keto</button>
                </div>
              </div>
              <div class="item fruiti-item">
                <div class="inner-item modal-toggle5">
                  <span class="icon-list">
                    <img src="images/i4-svg.svg" />
                  </span>
                  <button class="modal-togg">Fruitarian</button>
                </div>
              </div>
              <div class="item omin-item">
                <div class="inner-item modal-toggle6">
                  <span class="icon-list">
                    <img src="images/i4-svg.svg" />
                  </span>
                  <button class="modal-togg">Omnivore</button>
                </div>
              </div>
              <div class="item flexit-item">
                <div class="inner-item modal-toggle7">
                  <span class="icon-list">
                    <img src="images/i3-svg.svg" />
                  </span>
                  <button class="modal-togg">Flexitarian</button>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>
      <section class="section-text-withimages section4-4 more-text no-print">
        <div class="left-content">
          <h3>Advanced ways to create a
            sustainable menu.
            Learn all about
            diversifying protein </h3>
          <p>Around the world we get our protein from different sources including plants, meat and fish. The problem is that protein from most industrially farmed animal sources is bad for the environment through methane emissions (which are converted to carbon dioxide), the use of water and contamination of soil and water courses. Animal welfare is frequently poor.<span id="dots"></span>
            <br><br>
            <span id="more1">Farmed fish also has environmental impacts such as water pollution and the release of diseases to wild fish. In turn the amount of wild fish is steadily decreasing and becoming contaminated with micro plastics.
              <br><br>
              Consumers are ever more aware of the impact that their eating has on the environment. How we eat protein now and the way we will eat protein in the future is frequently a subject of attention in the news and on social media. You can be innovative in this space and show your customers how you really have a handle on a major sustainability topic through your menu. Additionally customers are increasingly prepared to pay more for responsibly sourced protein.
              <br><br>
              Fortunately, there are many solutions that you can choose to include conscious proteins into your sustainable menu. When you choose a conscious protein approach you will have a key element of your sustainable menu established and you will create a positive impact on the health of our planet.
            </span>
          </p>
          <button class="read-more-btn" id="myBtn1">Read more</button>
        </div>
        <div class="right-content">
          <img src="images/div-protein.svg" />
        </div>
      </section>
      <section class="container no-print">
        <ul class="grid--what">
          <li>
            <div class="grid--content more-text">
              <span class="text-img"><img src="images/grid1.svg" /></span>
              <h5>Why do we need<br>proteins?</h5>
              <p id="more2">Protein is an essential part of our diet and according to a person’s age, health and level of activity needs to be eaten in varying amounts. Protein is needed for the growth and repair of muscles as well as the proper functioning of hormones, enzymes and antibodies. All of this contributes to a healthy body that functions well. Proteins are made up from a mixture of twenty building blocks or amino acids. Different foods contain different amino acids. It is important to eat a variety of foods in order to get the right amino acids. Because of their different amino acid content, proteins can be divided into complete (meat, fish, eggs, milk, cheese) and incomplete (beans, nuts, seeds, tofu etc). Incomplete proteins can provide the right amino acids if they are mixed for example in a dish made with rice and peas.</p>
              <button class="read-more-btn" id="myBtn2">Read more</button>
            </div>
          </li>
          <li>

            <div class="grid--content more-text">
              <span class="text-img"><img src="images/grid2.svg" /></span>
              <h5>Conscious <br> protein</h5>
              <p id="more3">Conscious protein describes an approach which is based on consuming a diverse source of sustainable protein and the awareness of people in their eating habits. Conscious proteins include for instance conventional proteins obtained from animals that were raised to high welfare standards as well as alternative protein from plant sources
                <br>
                <br><b> Animal proteins</b> are from meat and fish raised responsibly. It includes products like eggs and milk.Animal proteins that come from responsibly raised meat or fish means high welfare, fed with sustainable feed and in the case of ruminants grazed on pasture, responsible use of water, assured welfare, responsible use of animal treatments for example antibiotics, a positive impact on biodiversity for example by using heritage breeds, traceable and workers’ rights are assured.
                <br><br>
                <b> Plant proteins</b> are whole ingredients which include beans, grains, pulses, nuts, chickpeas, ancient grains such as quinoa and minimally processed ingredients such as tofu, tempeh and seitan.Produced responsibly means for example that responsible tofu would be from soy beans grown on non-deforested land and responsible nuts would be grown in orchards where water is managed responsibly.
                <br><br>

                <b>Alternative proteins</b> are either not commonly eaten or are completely new, being produced with novel (new) technologies and ingredients.Exciting work is underway around the world to reproduce meat in laboratories. There is some way to go before it can be considered completely sustainable due to for example the energy required to produce the proteins. The cost remains prohibitive and for some people lab meat is a taboo. Meanwhile it is worth keeping a close eye on developments as this field of research is changing rapidly. In east Asia for example, fish has been successfully reproduced and marketed.Produced responsibly means for example responsible pea protein would be from peas grown on non-deforested land.
              </p>
              <button class="read-more-btn" id="myBtn3">Read more</button>
            </div>
          </li>
          <li>
            <div class="grid--content more-text">
              <span class="text-img"><img src="images/grid4.svg" /></span>
              <h5>Foraging from <br> the wild</h5>
              <p id="more4">Discovering local and wild ingredients connects us to the natural environment. A growing movement of chefs have adopted this ancient practice of foraging, where they roam the uncultivated land closest to their restaurants. They dig, clip and pick the freshest ingredients to complement their menus which are usually lead by the seasons.
                In recent history René Redzepi of Noma in Denmark popularised the concept and since then several chefs around the world have started foraging. While still niche, the foraging chefs have a strong connection to their communities for example Aidan Brookes of eleven98 in London. They raise awareness of eating sustainably, slowly building a wave towards a greater respect of the local environment and the need to look after their communities. Be inspired by chefs such as Ana Ros of Hisa Franko in Slovenia, Prateek Sadhu of Masque in India, HisotoNakahigashi of Miyamasou in Japan, Wojciech Modest Amaro of Atelier Amaro in Poland and Ricky Saward of Seven Swans Must Die in Germany.
              </p>
              <button class="read-more-btn" id="myBtn4">Read more</button>
            </div>
          </li>
        </ul>

      </section>


      <section class="section-highlight-withimages  section4-5 no-print">
        <div class="top-highlight text-center">
          <h3>Highlight your Sustainable Menu </h3>
          <p>It’s crucial that customers understand what you are doing. There are some things you can do to make your philosophy clear:</p>
        </div>
        <div class="mid-highlight container ">
          <ul>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">01</span>
                <h5>Explain sustainable <br> ingredients on your menu</h5>
                <p>Show where your ingredients are from and who has produced them. Explain the sustainability labels of your ingredients (check first that the label scheme owner allows this and make sure you have the certificates available).Let your customers know how the ingredient is produced. Explain when it is from a local farmer who follows sustainable principles but has decided not to be certified. It is important to make this clear to your customers.Highlight dishes with vegetables and wholegrains. Generally explain your sustainability philosophy and tell your dishes’ sustainable story wherever possible.
                </p>
              </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">03</span>
                <h5>Note allergies <br> and intolerances</h5>
                <p>Increasingly there are people with allergies and intolerances. The legal requirements to note these on the menu should be applied.

                </p>
              </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">05</span>
                <h5>Add information on the <br> origin of your ingredients</h5>
                <p>Consider adding information on the origin of your ingredients to your website and social media pages as well as in print or on your menu display. It will save space in the individual dish descriptions.

                </p>
              </div>
            </li>

          </ul>

          <div class="circle-setting">
            <img src="images/circle-icon.svg" />

          </div>
          <ul>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">02</span>
                <h5>Highlight your <br> sustainable actions</h5>
                <p>Use your menu as an opportunity to show what you are doing as a restaurant to be more sustainable for example the way you manage food waste, food donations, involvement in your community. Invite customers to take food that they have not eaten home with them. In sustainable packaging of course!
                </p>

              </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">04</span>
                <h5>Describe the dishes <br> in an enticing way</h5>
                <div class="more-text">
                  <p>Consider that many consumers are used to choosing on the basis of taste and price. Sustainable ingredients often come after that. So focus on describing the taste first. Add descriptions depending on what would appeal to the type of customers you want to attract. For example :</p>
                  </p>
                  <div id="more6">
                    <ul>
                      <li>“Slow roasted smokey bean bowl”
                        (house made casserole with mixed organic beans, organic tomato and smoked pimento. Served with a side of wild rice. A delicious and filling protein fix!)
                      </li>
                      <li>“Lemony fish cakes”
                        (house made with certified cod and served with salad and organic mayonnaise. A fresh burst of the ocean!)
                      </li>
                      <li>“Slow roasted smokey bean bowl”
                        (house made casserole with mixed organic beans, organic tomato and smoked pimento. Served with a side of wild rice. A delicious and filling protein fix!)
                      </li>

                    </ul>
                  </div>
                  </p>

                  <button href="#" class="read-text" id="myBtn6">READ MORE</button>
                </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">06</span>
                <h5>Brief your serving staff </h5>
                <p>Ensure that they can deliver the information in a knowledgeable and convincing way.</p>
              </div>
            </li>

          </ul>

        </div>
      </section>

      <script>

      </script>



      <section class="section-lena-kitchen container no-print">
        <div class="section-lena text-center">
          <h3>LENA’S KITCHEN </h3>
          <p>Mirror your substainability philosophy on your menu! Here are examples how to do it:</p>
        </div>
        <ul class="section-lena-inner" id="accordion9">
          <li class="accordian1 accor">
            <div class="collapsible__header">OUR FOOD ORIGINS</div>
            <p class="collapsible__content">
              Salads and herbs are grown in our indoor garden. Most of our vegetables are from local farms. When we need to we use sources further away. <br> Beef is from cattle pastured locally at Valley farm. <br>Fish is responsibly sourced via Mr FishMarket. Bread is from Mrs Baker in town. <br> Please tell us if you have an allergy and we will do our best to help you choose a suitable meal!
            </p>
          </li>
          <li class="accordian2 accor">
            <div class="collapsible__header">CERTIFIED SOURCES</div>
            <p class="collapsible__content">
              Milk and cream are certified organic from Mrs Wholesale. <br>Soya ingredients come from certified non-deforested land via Mrs Wholesale. <br> Frying oil is certified sustainable palm from Mrs Wholesale.<br> Spices, chocolate, coffee and tea are ethically traded from Mrs Wholesale. <br> Chicken and eggs are from certified sustainable free-range farms via Mrs Wholesale.
            </p>
          </li>
          <li class="accordian3 accor">
            <div class="collapsible__header">WE DON´T LIKE WASTE</div>
            <p class="collapsible__content">We transform our unused bread into bread crumbs and ingredients for our dishes. <br>
              All our dishes are available in 'hungry and 'very hungry sizes. Please tell us which you prefer. If it turns out you have a little too much on your plate, we will give you the rest to take home with you.
            </p>
          </li>
          <li class="accordian4 accor">
            <div class="collapsible__header">TO GO</div>
            <p class="collapsible__content">If you can't make it to Lena's kitchen yourself or are in a rush to go elsewhere, we have a delivery and takeaway service. Our containers are compostable at home. Soon we will offer a container deposit scheme so you can save even more <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank">packaging</a> going to the rubbish bin! <br> Watch this space. </p>
          </li>
        </ul>
      </section>







      <section class="section-text-withimages section4-5 no-print">
        <div class="left-content">
          <h3>Track and talk <br>
            about your progress</h3>
          <p>When you have implemented sustainable options in your menu, start measuring the impact for example via direct feedback from customers or from rating websites, number of orders or profitability of dishes. You could consider using a digital tool to track your recipes and the impact of being more sustainable. Be aware that “farm-to-table” restaurants continue to appeal to restaurant visitors. Connect your customers to the source of your ingredients by talking with them about your menu. Explain why you made the changes. If you have traceability information on your menu or your website explain how it works. As a business your impact on your community will be so much more when your customers and staff understand what you are doing. Some might copy your practices in their shopping decisions. Your impact could be greater than you imagine!</p>
        </div>
        <div class="right-content">
          <img src="images/flag-p-svg.svg" />
        </div>
      </section>
      <section class="container section4-6 " id="section-to-print">
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
                Put sustainable products on your menu and keep in mind that
                individual communities have different ideas of what constitutes a sustainable plate
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Create a menu that is inclusive for your customers meaning different portion sizes and options for different ways of eating
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Use less meat and fish and focus on vegetables or new kinds of proteins
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Highlight your sustainable ingredients on your menu and sustainable actions
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
                Track and talk to
                your customers about
                your progress
              </p>
            </li>
            <li class="print-li"><button onclick="window.print();" class="no-print">Print</button></li>
          </ul>
        </div>
      </section>

      <section class="container no-print">
        <div class="section5">
          <div class="bottom-left">
            <div class="top-content5">
              <h3>METRO Solutions</h3>
              <p>METRO offers the digital tool PROTRACE where you can find out about both the product itself and the supply routes from its origin to the journey to METRO. </p>
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

  <div class=" vegan-modal">
    <div class="modal-overlay1 modal-toggle1"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle1">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">
        <div class="modal-content1 veg-con">
          <h4>Vegan
          </h4>
          <p>No meat, poultry, fish, insects or ingredients that come from these sources. No processing aids for example isinglass used in some wine production, or non-food ingredients of animal origin. Nothing that involves harm or exploitation of animals. Honey is not eaten.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" vegi-modal">
    <div class="modal-overlay1 modal-toggle2"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle2">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">
        <div class="modal-content1 vegi-cont">
          <h4>Vegetarian
          </h4>
          <p>No meat, poultry or fish. Sometimes no insects. Milk or egg products derived from live animals, such as cheese is allowed. Honey from bees is also allowed.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" paleo-modal">
    <div class="modal-overlay1 modal-toggle3"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle3">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 paleo-cont">
          <h4>Paleo
          </h4>
          <p>This diet is based only on foods that are believed to be found in the Stone Age. These are mainly meat, eggs, fruit, vegetables, nuts and honey.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" keto-modal">
    <div class="modal-overlay1 modal-toggle4"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle4">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 keto-cont">
          <h4>Keto
          </h4>
          <p>This diet is a very low-carbohydrate and higher-fat diet. It is similar in many ways to other low-carbohydrate diets.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" fruit-modal">
    <div class="modal-overlay1 modal-toggle5"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle5">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 fruit-cont">
          <h4>Fruitarian
          </h4>
          <p>Fruit only. The diet extends the concept of vegans and makes sure that the plants are not damaged through the harvest.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" omni-modal">
    <div class="modal-overlay1 modal-toggle6"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle6">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 omni-cont">
          <h4>Omnivore
          </h4>
          <p>Contains a variety of food of both plant and animal origin.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" flexi-modal">
    <div class="modal-overlay1 modal-toggle7"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle7">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Flexitarian
          </h4>
          <p>Meat, poultry or fish is eaten occasionally to balance a person’s nutritional needs. Some flexitarians also do this to be more considerate of their consumption of animal products and are often more conscious of animal welfare aspects.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="eng-modal">
    <div class="modal-overlay1 modal-toggle8"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle8">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            <a class="nodeco" href="introduction-to-social-eng.php">Engage
              your staff</a>

          </h4>
          <ul>
            <li>Involve staff at the beginning and explain explain what you want to do and why. </li>
            <li>Your serving staff will be essential in communicating your philosophy and will be more convincing if included in your decisions.</li>
            <li>Examples of sustainable menus can help their understanding and encourage them to contribute ideas. </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class=" redu-modal">
    <div class="modal-overlay1 modal-toggle9"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle9">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            <a class="nodeco" href="introduction-to-food-waste-eng.php">Reduce the
              size of
              your menu</a>

          </h4>
          <p>A smaller menu often indicates good quality and well controlled stock. It is the opportunity
            to use more seasonal products and to reduce food waste. Try to keep single ingredients to a minimum while keeping the classics that your customers love. If you make 80% revenue from 20% of your dishes be sure to keep these. Add a dish that changes with the day / month / season.
          </p>
        </div>
      </div>
    </div>
  </div>



  <div class=" set-modal">
    <div class="modal-overlay1 modal-toggle13"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle13">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Go for vegetables</h4>
          <ul>
            <li>Introduce (more) courts where
              vegetables play the leading role.</li>
            <li>Increase the amount of unprocessed
              vegetables on the plate compared to the meat or fish portion.</li>
            <li> Offer more dishes that are completely up
              vegetable based.</li>

          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class=" ver-modal">
    <div class="modal-overlay1 modal-toggle14"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle14">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Use sustainable fish</h4>
          <ul>
            <li>Introduce uncommon species including those that are usually wasted or "by-catch".</li>
            <li>Feature fish that is caught responsibly i.e. certified, fully traceable.</li>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class=" exp-modal">
    <div class="modal-overlay1 modal-toggle15"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle15">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Experiment with plant proteins</h4>
          <ul>
            <li>Use (more) whole plant proteins for example lentils, quinoa, teff, beans and seaweed.</li>
            <li>Use different processed plant proteins for example tofu, tempeh.</li>

          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class=" neh-modal">
    <div class="modal-overlay1 modal-toggle16"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle16">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Avoid highly processed ingredients </h4>
          <p>Be mindful of imitations of traditional ingredients. Often these are highly processed, high in sugar, salt, transfats and are not particularly healthy.</p>
        </div>
      </div>
    </div>
  </div>



  <div class=" setsie-modal">
    <div class="modal-overlay1 modal-toggle17"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle17">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">
        <div class="modal-content1 flexi-cont">
          <h4>Introduce inclusive dishes</h4>
          <p>Offer dishes that accommodate different dietary preferences such as vegan.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="introdiv-modal">
    <div class="modal-overlay1 modal-toggle18"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle18">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            Introduce diverse grains
          </h4>
          <p>Use ancient varieties of grains such as teff or those that are common to your region.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class=" intro-modal">
    <div class="modal-overlay1 modal-toggle10"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle10">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            Introduce
            smaller
            portion sizes
            as an option
          </h4>
          <p>Many consumers are looking to reduce their consumption.This happens for health reasons, but it can also be an attractive element for diners with children. Increasingly restaurateurs recognize that children are best served with the same food as adults, albeit in a smaller portion.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" source-modal">
    <div class="modal-overlay1 modal-toggle11"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle11">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            <a class="nodeco" href="introduction-to-responsible-sourcing-eng.php">Source locally,
              regionally
              and in season</a>

          </h4>
          <p>Make an impact with responsible sourcing and only use responsibly sourced fish and food that is organic, nutritious, seasonal, ethically traded, local and regional. Moreover, try to buy foods that encourage biodiversity, do not involve waste and do not destroy forests. If you want to find out more, go to the responsible sourcing chapter. </p>
        </div>
      </div>
    </div>
  </div>

  <div class=" use-modal">
    <div class="modal-overlay1 modal-toggle12"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle12">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont more-text">
          <div>
            <h4>
              Use less
              and
              better meat
            </h4>
            <p>If meat is the main feature of most of your dishes, you can reduce the portion of meat, poultry and fish. When you choose meat, poultry, pork and so on look for sustainably sourced products. You can also include different parts of meat that are usually not used, in other words “nose to tail” eating.

            </p>
            <!-- <div class="listing-use" id="more13">
          </div>
          <button class="read-more-btn" href="#" id="myBtn13"">Read more</button>
                              </div> -->

          </div>
        </div>
      </div>
    </div>

    <script>
      var x, i, j, l, ll, selElmnt, a, b, c;
      /*look for any elements with the class "custom-select":*/
      x = document.getElementsByClassName("custom-select");
      l = x.length;
      for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
          /*for each option in the original select element,
          create a new DIV that will act as an option item:*/
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
      }

      function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i)
          } else {
            y[i].classList.remove("select-arrow-active");
          }
        }
        for (i = 0; i < xl; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
          }
        }
      }
      /*if the user clicks anywhere outside the select box,
      then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);



      $('.slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        prevArrow: '<button class="slick-prev"> < </button>',
        nextArrow: '<button class="slick-next"> > </button>',

        //         responsive: [                        
        //             {
        //               breakpoint: 576,
        //               settings: {
        //                 centerMode: false,
        //                 variableWidth: false,
        //               }
        //             },
        //         ]
      });



      var imgs = $('.slider img');
      imgs.each(function() {
        var item = $(this).closest('.item');
        item.css({
          'background-image': 'url(' + $(this).attr('src') + ')',
          'background-position': 'center',
          '-webkit-background-size': 'cover',
          'background-size': 'cover',
        });
        $(this).hide();
      });

      $('.slider2').slick({
        slidesToShow: 3,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        prevArrow: '<button class="slick-prev"> < </button>',
        nextArrow: '<button class="slick-next"> > </button>',

        //         responsive: [                        
        //             {
        //               breakpoint: 576,
        //               settings: {
        //                 centerMode: false,
        //                 variableWidth: false,
        //               }
        //             },
        //         ]
      });

      var imgs = $('.slider2 img');
      imgs.each(function() {
        var item = $(this).closest('.item');
        item.css({
          'background-image': 'url(' + $(this).attr('src') + ')',
          'background-position': 'center',
          '-webkit-background-size': 'cover',
          'background-size': 'cover',
        });
        $(this).hide();
      });


      /*readmorejs */

      // function myFunction() {
      //   var dots = document.getElementById("dots");
      //   var moreText = document.getElementById("more");
      //   var btnText = document.getElementById("myBtn");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "block";
      //     btnText.innerHTML = "Read more"; 
      //     moreText.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText.innerHTML = "Read less"; 
      //     moreText.style.display = "block";
      //   }
      // }

      // function myFunction13() {
      //   var dots = document.getElementById("dots");
      //   var moreText13 = document.getElementById("more13");
      //   var btnText13 = document.getElementById("myBtn13");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "block";
      //     btnText13.innerHTML = "Read more"; 
      //     moreText13.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText13.innerHTML = "Read less"; 
      //     moreText13.style.display = "block";
      //   }
      // }

      // function myFunction14() {
      //   var dots14 = document.getElementById("dots14");
      //   var moreText14 = document.getElementById("more14");
      //   var btnText14 = document.getElementById("myBtn14");

      //   if (dots14.style.display === "none") {
      //     dots14.style.display = "block";
      //     btnText14.innerHTML = "Read more"; 
      //     moreText14.style.display = "none";
      //   } else {
      //     dots14.style.display = "none";
      //     btnText14.innerHTML = "Read less"; 
      //     moreText14.style.display = "block";
      //   }
      // }
      // function myFunction1() {
      //   var dots = document.getElementById("dots");
      //   var moreText1 = document.getElementById("more1");
      //   var btnText1 = document.getElementById("myBtn1");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "block";
      //     btnText1.innerHTML = "Read more"; 
      //     moreText1.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText1.innerHTML = "Read less"; 
      //     moreText1.style.display = "block";
      //   }
      // }
      // function myFunction2() {
      //   var dots = document.getElementById("dots");
      //   var moreText2 = document.getElementById("more2");
      //   var btnText2 = document.getElementById("myBtn2");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "block";
      //     btnText2.innerHTML = "Read more"; 
      //     moreText2.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText2.innerHTML = "Read less"; 
      //     moreText2.style.display = "block";
      //   }
      // }
      // function myFunction3() {
      //   var dots = document.getElementById("dots");
      //   var moreText3 = document.getElementById("more3");
      //   var btnText3 = document.getElementById("myBtn3");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "block";
      //     btnText3.innerHTML = "Read more"; 
      //     moreText3.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText3.innerHTML = "Read less"; 
      //     moreText3.style.display = "block";
      //   }
      // }
      // function myFunction4() {
      //   var dots = document.getElementById("dots");
      //   var moreText4 = document.getElementById("more4");
      //   var btnText4 = document.getElementById("myBtn4");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "block";
      //     btnText4.innerHTML = "Read more"; 
      //     moreText4.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText4.innerHTML = "Read less"; 
      //     moreText4.style.display = "block";
      //   }
      // }

      // function myFunction5() {
      //   var dots = document.getElementById("dots");
      //   var moreText5 = document.getElementById("more5");
      //   var btnText5 = document.getElementById("myBtn5");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "inline";
      //     btnText5.innerHTML = "Read more"; 
      //     moreText5.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText5.innerHTML = "Read less"; 
      //     moreText5.style.display = "inline";
      //   }
      // }
      // function myFunction6() {
      //   var dots = document.getElementById("dots");
      //   var moreText6 = document.getElementById("more6");
      //   var btnText6 = document.getElementById("myBtn6");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "block";
      //     btnText6.innerHTML = "Read more"; 
      //     moreText6.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText6.innerHTML = "Read less"; 
      //     moreText6.style.display = "block";
      //   }
      // }
      // function myFunction7() {
      //   var dots = document.getElementById("dots");
      //   var moreText7 = document.getElementById("more7");
      //   var btnText7 = document.getElementById("myBtn7");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "inline";
      //     btnText7.innerHTML = "Read more"; 
      //     moreText7.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText7.innerHTML = "Read less"; 
      //     moreText7.style.display = "inline";
      //   }
      // }
      // function myFunction8() {
      //   var dots = document.getElementById("dots");
      //   var moreText8 = document.getElementById("more8");
      //   var btnText8 = document.getElementById("myBtn8");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "inline";
      //     btnText8.innerHTML = "Read more"; 
      //     moreText8.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText8.innerHTML = "Read less"; 
      //     moreText8.style.display = "inline";
      //   }
      // }
      // function myFunction9() {
      //   var dots = document.getElementById("dots");
      //   var moreText9 = document.getElementById("more9");
      //   var btnText9 = document.getElementById("myBtn9");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "inline";
      //     btnText9.innerHTML = "Read more"; 
      //     moreText9.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText9.innerHTML = "Read less"; 
      //     moreText9.style.display = "inline";
      //   }
      // }
      // function myFunction10() {
      //   var dots = document.getElementById("dots");
      //   var moreText10 = document.getElementById("more10");
      //   var btnText10 = document.getElementById("myBtn10");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "inline";
      //     btnText10.innerHTML = "Read more"; 
      //     moreText10.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText10.innerHTML = "Read less"; 
      //     moreText10.style.display = "inline";
      //   }
      // }
      // function myFunction11() {
      //   var dots = document.getElementById("dots");
      //   var moreText11 = document.getElementById("more11");
      //   var btnText11 = document.getElementById("myBtn11");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "inline";
      //     btnText11.innerHTML = "Read more"; 
      //     moreText11.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText11.innerHTML = "Read less"; 
      //     moreText11.style.display = "inline";
      //   }
      // }
      // function myFunction12() {
      //   var dots = document.getElementById("dots");
      //   var moreText12 = document.getElementById("more12");
      //   var btnText12 = document.getElementById("myBtn12");

      //   if (dots.style.display === "none") {
      //     dots.style.display = "inline";
      //     btnText12.innerHTML = "Read more"; 
      //     moreText12.style.display = "none";
      //   } else {
      //     dots.style.display = "none";
      //     btnText12.innerHTML = "Read less"; 
      //     moreText12.style.display = "inline";
      //   }
      // }

      let collapsibleHeaders = document.getElementsByClassName('collapsible__header');

      Array.from(collapsibleHeaders).forEach(header => {
        header.addEventListener('click', () => {
          header.parentElement.classList.toggle('collapsible--open');
        });
      });

      // Quick & dirty toggle to demonstrate modal toggle behavior
      $('.modal-toggle1').on('click', function(e) {
        e.preventDefault();
        $('.vegan-modal').toggleClass('is-visible');
      });
      $('.modal-toggle2').on('click', function(e) {
        e.preventDefault();
        $('.vegi-modal').toggleClass('is-visible');
      });
      $('.modal-toggle3').on('click', function(e) {
        e.preventDefault();
        $('.paleo-modal').toggleClass('is-visible');
      });
      $(' .modal-toggle4').on('click', function(e) {
        e.preventDefault();
        $('.keto-modal').toggleClass('is-visible');
      });
      $('.modal-toggle5').on('click', function(e) {
        e.preventDefault();
        $('.fruit-modal').toggleClass('is-visible');
      });
      $('.modal-toggle6').on('click', function(e) {
        e.preventDefault();
        $('.omni-modal').toggleClass('is-visible');
      });
      $('.modal-toggle7').on('click', function(e) {
        e.preventDefault();
        $('.flexi-modal').toggleClass('is-visible');
      });
      $('.modal-toggle8').on('click', function(e) {
        e.preventDefault();
        $('.eng-modal').toggleClass('is-visible');
      });
      $('.modal-toggle9').on('click', function(e) {
        e.preventDefault();
        $('.redu-modal').toggleClass('is-visible');
      });
      $('.modal-toggle10').on('click', function(e) {
        e.preventDefault();
        $('.intro-modal').toggleClass('is-visible');
      });
      $('.modal-toggle11').on('click', function(e) {
        e.preventDefault();
        $('.source-modal').toggleClass('is-visible');
      });
      $('.modal-toggle12').on('click', function(e) {
        e.preventDefault();
        $('.use-modal').toggleClass('is-visible');
      });

      $('.modal-toggle13').on('click', function(e) {
        e.preventDefault();
        $('.set-modal').toggleClass('is-visible');
      });
      $('.modal-toggle14').on('click', function(e) {
        e.preventDefault();
        $('.ver-modal').toggleClass('is-visible');
      });
      $('.modal-toggle15').on('click', function(e) {
        e.preventDefault();
        $('.exp-modal').toggleClass('is-visible');
      });
      $('.modal-toggle16').on('click', function(e) {
        e.preventDefault();
        $('.neh-modal').toggleClass('is-visible');
      });
      $('.modal-toggle17').on('click', function(e) {
        e.preventDefault();
        $('.setsie-modal').toggleClass('is-visible');
      });

      $('.modal-toggle18').on('click', function(e) {
        e.preventDefault();
        $('.introdiv-modal').toggleClass('is-visible');
      });


      $(document).on('click', '.read-more-btn, .read-text', function() {
        var $el = $(this),
          $el_wrap = $el.closest('.more-text'),
          $content = $el_wrap.find('[id^="more"]'),
          target = $el.attr('target');
        if (target != null) {
          $content = $(target);
        }
        if ($content.hasClass('active')) {
          $content.slideUp('fast').removeClass('active');
          $el.html('Read more').removeClass('btn-active');
        } else {
          $content.slideDown('fast').addClass('active');
          $el.html('Read less').addClass('btn-active');
        }
      });
    </script>

    <script src="jquery/page1.js"></script>
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