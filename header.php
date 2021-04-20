<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>
	<!-------------------- meta tags ------------------------>
	<title><?=$title?> | foodot.com</title>
            <meta name="description" content="">
	                   <meta name="author" content="Ade-concept">
            <meta charset="UTF-8">
            <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1,requiresActiveX=true'><![endif]-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
	       <link rel="icon" href="https://foodot.com/assets/img/fav-icon.png" type="image/x-icon">
	<!-------------------- meta tags ------------------------>
	
	<!----------------------------------- Stylesheet starts ------------------->
        
        <!-- Mobile Specific Metas==================================================-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
    <!-- CSS==================================================-->
    
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" />
    
    <link rel="stylesheet" href="/assets/css/base.css" />
    <link rel="stylesheet" href="/assets/css/skeleton.css" />
    <link rel="stylesheet" href="/assets/css/layout.css" />
    <link rel="stylesheet" href="/assets/css/color.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.css" />
    <link rel="stylesheet" href="/assets/css/et-line.css" />
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="/assets/css/owl.transitions.css" />
    <link rel="stylesheet" href="/assets/css/retina.css" />
    <link rel="stylesheet" href="/assets/css/jsor-slider.css" />
    <!-- <link rel="stylesheet" href="/assets/css/ionicons.min.css" /> -->
    <link href="/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="/assets/css/custom.css" />
    
    <!----------------------------------- Stylesheet ends------------------->
    
    <!-- Favicons==================================================-->
    <!--    <link rel="shortcut icon" href="favicon.png">-->
    <script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/assets/js/modernizr.custom.js"></script>   
    <script src="https://use.fontawesome.com/046f477665.js"></script>
    
    <!--<script type="text/javascript" src="/assets/js/royal_preloader.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins.js"></script>
    <script type="text/javascript" src="/assets/js/custom-home.js"></script>
    <script type="text/javascript" src="/assets/js/custom-services.js"></script>-->

    
<!--    <script src="/assets/js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>-->
     <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
        <script>
            var site_url = 'https://foodot.com/';
            var base_url = 'https://foodot.com/';
            var theme_url = '/assets/';
        </script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47085500-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-47085500-4');
</script>    </head>
<body class="" >
    
        
        <!--========================================================
    HEADER
=========================================================-->
<!--<div id="royal_preloader"></div>-->
    <nav id="menu-wrap" class="menu-back cbp-af-header menu-have-back-color">
        <div class="dark-over"></div>
        <div class="menu-container">
            <div class="logo">
                <a href="/">
                    <img src="/assets/img/foodot-logo.png" alt="Foodot"/>
                </a>
            </div>
            <div class="menu">
                <ul id="menu-nav" style="position:relative">
                    
                    <li class="page-scroll"><a href="/#about-section">About us</a></li>
                    <li class="page-scroll"><a href="/#mission-section">Mission</a></li>
                    <li class="menu-dropdown-icon">
                        <a href="/products.php">Products</a>
                        <ul>
                            <li class="full-width">
                                <ul>
                                    <li>
                                        <a target="_self" class="page-scroll"  href="/products-natural.php">
                                            Natural                                                                     
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_self" class="page-scroll"  href="/products-healthy.php">
                                            Healthy                                                                    
                                        </a>
                                    </li>

                                    <li>
                                        <a target="_self" class="page-scroll"  href="/products-unique.php">
                                            Unique                                                                
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_self" class="page-scroll"  href="/products-innovative.php">
                                            Innovative
                                        </a>
                                    </li>
                                </ul>
                            </li>                                                                                                                                                        
                        </ul>
                    </li>
                    <li class="page-scroll"><a href="/#safety">Saftey</a></li>
                    <li class="page-scroll"><a href="/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END MENU==================================================-->
