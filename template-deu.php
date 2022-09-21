<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>METRO</title>

    <link rel="stylesheet" href="required1/bootstrap.min.css" />
    <link rel="stylesheet" href="required1/font-awesome.min.css" />
    <link rel="stylesheet" href="required1/normalize.min.css" />
    <link rel="stylesheet" href="required1/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/common.css">
    <script src="required1/bootstrap.bundle.min.js"></script>
    <script src="required1/jquery-3.6.0.min.js"></script>
    <script src="required1/modernizr.min.js"></script>
    <script src="required1/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="./assets/js/common.js"></script>
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
                        <option value="introduction-to-safe-food-deu.php" selected>DEU</option>
                        <option value="introduction-to-safe-food-eng.php">ENG</option>
                    </select>
                </div>
            </div>
        </div>
    </header>


    <div class="container-full mb-5">
        <div class="page-3_stage page-4_stage">


            <div class="container mt-5 px-2 py-2 mb-5">
                <div class="row">
                    <div class="col-md-12 mt-1 mb-1">
                        <!--  
                            Page Name : Introduction to Safe Food / Explore Safe Food
                        -->
                        <h1><strong>Page Name: German</strong></h2>
                            <p>
                                Seite ist in Entwicklung
                            </p>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <script type="text/javascript">
        var eurl = "introduction-to-safe-food-eng.php"
        var gurl = "introduction-to-safe-food-deu.php"


        //btn-test click test script

        $(document).ready(function() {
            $('#select').change(function() {
                location.href = $(this).val();
            });
        });
    </script>

</body>


</html>