<?php
$title = "Thank you";
require("header.php");
?>
<!-- Page Layout==================================================-->
 <div class="career-frame">

      <div class="back-dark ptb-50">

	 <div class="container page-title">

	    <h3>Thank you</h3>

	 </div>

      </div>
    <div class="section padding-top-bottom ">
        <div class="container">
            <h4>			    Thank you for your submission.<br />
Your request is important to us. We are reviewing your information and will respond shortly.	 </h4>
	 <p style="text-align: center;" id="counter"> </p>
            <div class="clear"></div>
           <!-- <div id="ajaxsuccess">Successfully sent!!</div>-->
            <div class="clear"></div>
        </div>
    </div>
    </div>
    </div>
   <script type="text/javascript">
        var count = 10;
        var myVar = setInterval(myTimer, 1000);

        function myTimer() {
            if(count>0){
                document.getElementById('counter').innerHTML = "Now, you will be redirected to homepage in " + count.toString() + " seconds.";
                count--;
            }else{
                window.location.href = "/";
                clearInterval(myVar);
            }
        }
</script>   
      <!-- JAVASCRIPT==================================================-->
    <script type="text/javascript" src="https://cjfoods.com/application/views/themes/theme-1/assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="https://cjfoods.com/application/views/themes/theme-1/assets/js/royal_preloader.min.js"></script>
    <script type="text/javascript" src="https://cjfoods.com/application/views/themes/theme-1/assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>
    <!--==================Go to this link to activated your google map API KEY https://developers.google.com/maps/documentation/javascript/tutorial#api_key your key replace in script link for google map after .../maps/api/js?key=HERE_YOUR_API_KEYcoordinates for map you can change in custom.js file==================-->
    <script type="text/javascript" src="https://cjfoods.com/application/views/themes/theme-1/assets/js/contact.js"></script>
    <script type="text/javascript" src="https://cjfoods.com/application/views/themes/theme-1/assets/js/custom-contact.js"></script>
    <!-- End Document==================================================-->        
<?php
require("footer.php");
?>