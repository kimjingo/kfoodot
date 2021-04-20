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

<?php
require("footer.php");
?>