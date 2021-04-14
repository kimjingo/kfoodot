<?php
$title = "Nature";
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
	    <h1>Nature</h1>
	    <p>
	     Food You Can Feel Good About	    </p>
	 </div>
      </div>
      <div class="down-arrow down-arrow-dark"></div>
      <div class="back-white pb-30">
	 <div class="">
	    <div class=" annie-brand" id="bibigo-brand">
	       <img class="responsive-img" src="https://foodot.com/assets/media/portfolio/annie-main-img.jpg" alt="Food You Can Feel Good About" title="Food You Can Feel Good About">
	       <div class="section products-frame">
		  <div class="container">
		     <div class="full-width">
			<div class="detail-left-text">
			   <img src="https://foodot.com/assets/media/portfolio/pdf/ann.png" alt="annie-brand" title="annie-brand">
			   <h2>Made Simple and Better For You</h2>

<p>Annie Chun&rsquo;s makes delicious, easy-to-prepare, Asian-inspired dishes that you can feel good about. That&rsquo;s our promise, and we don&rsquo;t take it lightly. It&rsquo;s what drives us each day to make our foods easier to enjoy and better for you, without sacrificing the vibrant aromas, flavors and textures that we all love.</p>
<h3>Key Products</h3>
<div class="food-categories">
<ul>
	<li><span>Entrees and Bowls: </span> With over a dozen different flavors of soup bowls, noodle bowls and curry entrees, there&rsquo;s something to satisfy every Asian food craving for your whole family.</li>
	<li><span>Seaweed: </span> Elevate your snack sessions with our guilt-free seaweed snacks and crisps, and feel good about every bite.</li>
	<li><span>Cooking Asian Food at Home: </span> Our line of dry noodles and sauces makes it easy to enjoy your favorite Asian dishes without having to crowd your pantry with even more ingredients.</li>
</ul>
</div>			    <div class="share-frame annie">
<ul>
	<li><a href="http://www.facebook.com/anniechunsinc" target="_blank"><img alt="anniechun-fb-icon" src="http://devweb1.com/foodot.com/v1/application/views/themes/theme-1/assets/img/logos/annie/facebook.jpg" title="anniechun-fb-icon" /></a></li>
	<li>
	<h4 class="share-link"><a href="#">@AnnieChunsInc</a></h4>
	</li>
	<li><a class="btn btn-default" href="http://www.anniechun.com/" target="_blank">Visit Website <strong aria-hidden="true" class="fa fa-caret-right">&nbsp;</strong> </a></li>
</ul>
</div>			  
			</div>   
		     </div>
		  </div>
		  
		  <div class="section back-black padding-top-bottom-tiny">
		     <div class="z-bigger">
			 <div class="twelve columns">
			     <div id="" class="owl-carousel owl-theme brands-owl">
			       				<!-- <div class="item"><img src="<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: slide</p>
<p>Filename: views/details_view.php</p>
<p>Line Number: 54</p>

</div>https://foodot.com/assets/media/" alt="" /></div>-->
				  				
									<div class="item">
						<a href="" target="_blank">
							<img src="https://foodot.com/assets/media/cta/brand-annie-01.jpg" alt="annie-chuns" title="annie-chuns"  />
						</a>
					</div>
									<div class="item">
						<a href="" target="_blank">
							<img src="https://foodot.com/assets/media/cta/brand-annie-02.jpg" alt="noodle bowls.annie chun" title="noodle bowls.annie chun"  />
						</a>
					</div>
									<div class="item">
						<a href="" target="_blank">
							<img src="https://foodot.com/assets/media/cta/brand-annie-03.jpg" alt="Seaweed" title="Seaweed"  />
						</a>
					</div>
									<div class="item">
						<a href="" target="_blank">
							<img src="https://foodot.com/assets/media/cta/brand-annie-04.jpg" alt="organic seaweed snacks" title="organic seaweed snacks"  />
						</a>
					</div>
									<div class="item">
						<a href="" target="_blank">
							<img src="https://foodot.com/assets/media/cta/brand-annie-06.jpg" alt="sesame soy noodles" title="sesame soy noodles"  />
						</a>
					</div>
				 
			     </div>
			 </div>
		     </div>
		  </div>
		  
	       </div>
	    </div>
	 </div>
      </div>
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