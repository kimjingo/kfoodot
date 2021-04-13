<?php
$title = "Our Products";
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
   <div class="our-brands-frame">
      <div class="back-dark ptb-50">
	 <div class="container page-title">
	    <h1> Our Brands</h1>
	    <p>
	     Inspiring a New Life of Health, Happiness and Convenience	    </p>
	 </div>
      </div>
      <div class="back-dark pb-70">
	 <div style="clear: both"></div>
	 <div id="projects-grid ptb-30">
	    	    	    <a href="https://foodot.com/our-brands/bibigo-1">
	       <div class="portfolio-box-1 photo">
               <img src="https://foodot.com/assets/media/portfolio/pdf/bibigo-logo-white.png" alt=" " class="brand-white-logo">
              <div class="mask"></div>
              <img src="https://foodot.com/assets/media/portfolio/bibi-cta-img.jpg" alt=" ">   
	       </div>
	    </a>   
	    	    <a href="https://foodot.com/our-brands/annie-chuns">
	       <div class="portfolio-box-1 photo">
               <img src="https://foodot.com/assets/media/portfolio/pdf/anniechuns-logo-white.png" alt=" " class="brand-white-logo">
              <div class="mask"></div>
              <img src="https://foodot.com/assets/media/portfolio/annie-cta-1.jpg" alt=" ">   
	       </div>
	    </a>   
	    	    <a href="https://foodot.com/our-brands/cj-cheiljedang-1">
	       <div class="portfolio-box-1 photo">
               <img src="https://foodot.com/assets/media/portfolio/pdf/cheiljedang-logo-white.png" alt=" " class="brand-white-logo">
              <div class="mask"></div>
              <img src="https://foodot.com/assets/media/portfolio/cheil-img-cta.jpg" alt=" ">   
	       </div>
	    </a>   
	    	    	    <div style="clear: both"></div>
         </div>
      </div>
      <div class="back-white pb-30">
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
