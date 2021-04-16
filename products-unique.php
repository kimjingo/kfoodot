<?php
$title = "Unique Products";
$cat_id = "unique";
$string = file_get_contents("products.json");
// echo $string;
$products = json_decode($string);
// echo $products->natural;
// $cat_id;
// foreach($products->{$cat_id} as $product) echo $product->title;
// var_dump($json_products->natural);
// echo $json_products[$cat_id];
require("header.php");
?>
<!---------- OUR BRANDS ---------------->


   <style>
   
   .item img {
    /* filter: url(filters.svg#grayscale); Firefox 3.5+ */
      filter: gray; /* IE5+ */
      -webkit-filter: grayscale(1); /* Webkit Nightlies & Chrome Canary */
      -webkit-transition: all .8s ease-in-out;  
    }

    .item img:hover {
    filter: none;
      -webkit-filter: grayscale(0);
      -webkit-transform: scale(1.01);
    }
   
   </style>

   
<div class="our-brands-frame our-brands-details-frame">
    <div class="back-dark ptb-50">
        <div class="container page-title">
            <h1>Natural</h1>
            <p>Sharing Korean Flavor	    </p>
        </div>
    </div>


    <div class="down-arrow down-arrow-dark"></div>

    <?php foreach($products->{$cat_id} as $product) : ?>

    <div class="back-white pb-30">
        <div class="">
            <div class=" bibigo-brand" id="bibigo-brand">
                <img class="responsive-img" src="/assets/img/<?=$product->id?>-00.jpg" alt="" title="">
                <div class="section products-frame">
                <div class="container">
                    <div class="full-width">
                        <div class="detail-left-text">
                            <h2><?=$product->title?></h2>
                            <?php foreach($product->bullets as $bullet) : ?>
                            <p><?=$bullet?></p>
                            <?php endforeach ; ?>
                            <br>
                            <h3>Description</h3>
                            <div class="food-categories">
                                <ul>
                                    <?php foreach($product->descriptions as $description) : ?>
                                        <li>
                                            <?=$description?>
                                        </li>
                                    <?php endforeach ; ?>
                                </ul>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="section back-black padding-top-bottom-tiny">
                    <div class="z-bigger">
                        <div class="twelve columns">
                            <div id="" class="owl-carousel owl-theme brands-owl">
                                <?php for($i=0; $i < 5; $i++) : ?>
                                    <div class="item"><a href="" target="_blank"><img src="/assets/img/<?=($product->id . str_pad(($i+1), 2, '0', STR_PAD_LEFT).".jpg")?>" alt="" title=""  /></a></div>
                                <?php endfor ; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach ; ?>

    <!-- <div class="back-white pb-30">
        <div class="">
            <div class=" bibigo-brand" id="bibigo-brand">
                <img class="responsive-img" src="https://cjfoods.com/assets/media/portfolio/bibi-main-img.jpg" alt="Sharing Korean Flavor" title="Sharing Korean Flavor">
                <div class="section products-frame">
                <div class="container">
                    <div class="full-width">
                        <div class="detail-left-text">
                            <img src="https://cjfoods.com/assets/media/portfolio/pdf/newbrandmark-011.png" alt="bibigo-brand" title="bibigo-brand">
                            <h2>The Pride of Korean Food</h2>
                            <p>Bibigo takes 5,000 years of delicious Korean cuisine and updates it for today&#39;s modern, non-stop lifestyles. That&rsquo;s why the name combines the Korean word &quot;bibim,&quot; from a long cultural tradition of &quot;mixed&quot; flavors with the English word &quot;go.&quot; Inspired by authentic recipes, we make the exciting tastes of Korean cuisine easily accessible on grocery store shelves all over the U.S.</p>
                            <p>Bibigo is the only Korean food brand for consumer packaged goods that makes it deliciously simple for American consumers to share the excitement of creating, enjoying and falling in love with the uniquely modern flavors of Korea by tapping into the immersive sensory quality of the Korean dining experience while inviting consumers to adventurously mix and match tastes.</p>
                            <h3>Key Products</h3>
                            <div class="food-categories">
                                <ul>
                                    <li><span>Dumplings:</span> Perfectly seasoned ingredients in a delicate wrapper, great as an appetizer or for a light meal</li>
                                    <li><span>Frozen Ready Meals: </span>Korean-style bowls packed with flavor</li>
                                    <li><span>Sauces: </span>Making it easier than ever to add Korean flavor to any dish</li>
                                </ul>
                            </div>
                            <div class="share-frame bibigo">
                                <ul>
                                    <li><a href="http://www.facebook.com/bibigousa" target="_blank"><img alt="fb-icon" src="http://devweb1.com/cjfoods.com/v1/application/views/themes/theme-1/assets/img/facebook.jpg" title="fb-icon" /></a></li>
                                    <li><a href="https://www.instagram.com/bibigousa/" target="_blank"><img alt="instagram-icon" src="http://devweb1.com/cjfoods.com/v1/application/views/themes/theme-1/assets/img/instagram.png" title="instagram-icon" /></a></li>
                                    <li><h4 class="share-link"><a href="#">@BibigoUSA</a></h4></li>
                                    <li><a class="btn btn-default" href="http://www.bibigousa.com/" target="_blank">Visit Website </a></li>
                                </ul>
                            </div>			  
                        </div>   
                    </div>
                </div>
                <div class="section back-black padding-top-bottom-tiny">
                    <div class="z-bigger">
                        <div class="twelve columns">
                            <div id="" class="owl-carousel owl-theme brands-owl">
                                <div class="item"><a href="" target="_blank"><img src="https://cjfoods.com/assets/media/cta/brand-bibi-01.jpg" alt="BIBIGOS" title="BIBIGOS"  /></a></div>
                                <div class="item"><a href="" target="_blank"><img src="https://cjfoods.com/assets/media/cta/brand-bibi-02.jpg" alt="KOREAN FOOD_cjfoods" title="KOREAN FOOD_cjfoods"  /></a></div>
                                <div class="item"><a href="" target="_blank"><img src="https://cjfoods.com/assets/media/cta/brand-bibi-03.jpg" alt="Sauces.cjfood" title="Sauces.cjfood"  /></a></div>
                                <div class="item"><a href="" target="_blank"><img src="https://cjfoods.com/assets/media/cta/brand-bibi-04.jpg" alt="Frozen Ready Meals" title="Frozen Ready Meals"  /></a></div>
                                <div class="item"><a href="" target="_blank"><img src="https://cjfoods.com/assets/media/cta/brand-bibi-05.jpg" alt="Korean food" title="Korean food"  /></a></div>
                                <div class="item"><a href="" target="_blank"><img src="https://cjfoods.com/assets/media/cta/brand-bibi-06.jpg" alt="Dumplings" title="Dumplings"  /></a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

   <!---------- OUR BRANDS END ------------>
   
   <script type="text/javascript">
    $(document).ready(function() {
	    $('.brands-owl').owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            navigation : true,
            /*navigationText: [
            "<i class='icon-chevron-left icon-white'><</i>",
            "<i class='icon-chevron-right icon-white'>></i>"
            ],*/
            pagination:false,
            items : 3,
            /*itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]*/
            responsive: {
            0: {
            items: 1,
            nav: true, 
            dots: false 
            },
            700: {
            items: 3,
            nav: true, 
            dots: false 
            },
            1000: {      
            items: 3,
            nav: true, 
            dots: false 
            },
            1200: {      
            items: 3,
            nav: true, 
            dots: false 
            }
        }
	 })
    });
   </script>
<?php
require("footer.php");
?>