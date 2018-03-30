

<html>
<head>

	<meta charset="utf-8">
	<title>My profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <!-- <link rel="stylesheet" href="style/profil.css"> -->
    		<link rel="stylesheet" href="style/home.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="style/gallery-grid.css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

</head>

<body>
  <?php include("header_lilt.php")?>


<!-- VIDEO & SEARCHBAR  -->
  <div class="homepage-hero-module">
      <div class="video-container">
				<div class="Welcome">
					<h1>Welcome on Lilt !</h1>
				</div>
        <div class="searchbar">
					<form class="searchbar" action="php/search.php" method="post">
          	<input type="text" name="search" id="search-bar" required>
          	<input type="submit" class="button" value="Search !"></input>
					</form>
        </div>
          <div class="filter"></div>
          <video autoplay loop class="fillWidth">
              <source src="videos/Ma-Vibes.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
              <source src="videos/Ma-Vibes.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
          </video>
          <div class="poster hidden">
              <img src="videos/Snapshots/Ma-Vibes.jpg" alt="bgMusichVideo">
          </div>
      </div>
  </div>


<!-- SLIDERS  -->


<div class="sliders">

	<div class="title_contents"><h1> <span class="hashtag">#</span>BROWSE </h1></div>





 <script src="js/jssor.slider-26.7.0.min.js" type="text/javascript"></script>

 <script type="text/javascript">

// Création d'une fonction qui initialise un slider: avec les conditions de départs.
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*	Pour le rendre responsive */

            var MAX_WIDTH = 980;

            function ScaleSlider() { //nouvelle fonction
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*Fin du code responsive*/
        };
    </script>



<style>

         jssor slider loading skin spin css
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}

  </style>



    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
            <div data-p="43.75">
                <a href="#"><img data-u="image" src="Images/Latin .png" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/Soul.png"/></a>
            </div>
            <div data-p="43.75">
                 <a href="#"><img data-u="image" src="Images/Rock.png"/></a>
            </div>
            <div data-p="43.75">
                 <a href="#"><img data-u="image" src="Images/Electro.png" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/Pop .png" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/Acoustique1.png"/></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/Reaggae.png"/></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/R’nB.png" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/Kids.png" /></a>
            </div>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>



<!---------------------------------------------------
	NEW RELEASES
---------------------------------------------------->


	<div class="title_contents"><h1> <span class="hashtag">#</span>NEW RELEASES </h1></div>


	 <script type="text/javascript">
        jssor_2_slider_init = function() {

            var jssor_2_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_2_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_2_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>


    <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
            <div data-p="43.75">
                <a href="#"><img data-u="image" src="Images/dj.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/bakelite-1595847_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                 <a href="#"><img data-u="image" src="Images/gangsta-810777_1280.png"/></a>
            </div>
            <div data-p="43.75">
                 <a href="#"><img data-u="image" src="Images/dj.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/people-2563491_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/music-instruments-2887457_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/concert-768722_1280.jpg"/></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/people-2606347_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/elvis-presley-1482026_1280.jpg" /></a>
            </div>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_2_slider_init();</script>




<!---------------------------------------------------
	MY PLAYLISTS
---------------------------------------------------->


<div class="title_contents"><h1> <span class="hashtag">#</span>MY PLAYLISTS </h1></div>




<script type="text/javascript">
        jssor_3_slider_init = function() {

            var jssor_3_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_3_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_3_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>


    <div id="jssor_3" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
            <div data-p="43.75">
                <a href="#"><img data-u="image" src="Images/dj.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/bakelite-1595847_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                 <a href="#"><img data-u="image" src="Images/gangsta-810777_1280.png"/></a>
            </div>
            <div data-p="43.75">
                 <a href="#"><img data-u="image" src="Images/dj.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/people-2563491_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/music-instruments-2887457_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/concert-768722_1280.jpg"/></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/people-2606347_1280.jpg" /></a>
            </div>
            <div data-p="43.75">
                <a href="#"> <img data-u="image" src="Images/elvis-presley-1482026_1280.jpg" /></a>
            </div>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_3_slider_init();</script>


  </div>





<!-- PLAYLISTS  -->

  		<a href="lecteur.php">
  			<div class="container-playlist">
  				<div class="lien-playlist">
  					<h3>Check our playlist now</h3>
  				</div>
  			</div>
  		</a>


<!-- #CONTEST -->

<div class="contest">
  <div class="contenu_contest">
    <h1> #Contest </h1>
    <p> Show us your talent thanks to the #Contest !</p>
    <button class="button_contest">For more informations ></button>
  </div>
</div>


  <?php include("footer_lilt.php") ?>
</body>
