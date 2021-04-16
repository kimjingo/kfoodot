<?php
// foreach($products->{$cat_id} as $product){
//     foreach (glob("assets/img/".$product->id."*.jpg") as $filename) {
//         if($filename != "assets/img/".$product->id."*.jpg") $product_images[] = $filename;
//         // echo "$filename size " . filesize($filename) . "\n";
//     }    
// }
?>

<!---------- OUR PRODUCTS ---------------->

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
            <h1><?=ucfirst($cat_id)?></h1>
            <p>Sharing Korean Flavor	    </p>
        </div>
    </div>


    <div class="down-arrow down-arrow-dark"></div>

    <?php foreach($products->{$cat_id} as $product) : ?>
    <?php 
        $product_images = array();
        foreach (glob("assets/img/".$product->id."*.jpg") as $filename) { 
            if($filename != "assets/img/".$product->id."-00.jpg") $product_images[] = $filename;
        }    
    ?>
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
                                <?php foreach($product_images as $img) : ?>
                                    <div class="item"><a href="" target="_blank"><img src="<?=$img?>" alt="" title=""  /></a></div>
                                <?php endforeach ; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach ; ?>

</div>

   <!---------- OUR PRODUCTS END ------------>
   
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