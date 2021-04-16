<?php
$title = "Contact US";
require("header.php");
?>
<!--------- CONTACT ----------->
   
   <div class="contact-frame">
      <div class="back-dark ptb-50">
			 <div class="container page-title">
	    <h1>Your comments and concerns are important to us.</h1>
	    <p>
	     Please complete the form below so that your request </br> can be forwarded to the appropriate department.	    </p>               
	    <!--<p>Thank you for contacting Foodot, Inc.</p>-->
	 </div>
      </div>
      <div class="down-arrow down-arrow-dark"></div>
      <div class="back-white ptb-50">
	 <div class="container contact-form">
	     <form method="post" id="contact-us-form" action="/contact_form_submit.php">
	         	       <div class="row">
		  <div class="col-md-6">
		     <div class="form-group">
			<label for="firstname">FIRST NAME *</label>
			<input name="form[first_name]"  value="" type="text" class="form-control" id="firstname">
		     </div>
		  </div>
		  <div class="col-md-6">
		     <div class="form-group">
			<label for="lastname">LAST NAME *</label>
			<input name="form[last_name]"  value="" type="text" class="form-control" id="lastname">
		     </div>
		  </div>
	       </div>
	       
	       <div class="row">
		  <div class="col-md-6">
		     <div class="form-group">
			<label for="email">YOUR EMAIL *</label>
			<input name="form[email]"  value=""  type="email" class="form-control" id="email">
		     </div>
		  </div>
		  <div class="col-md-6">
		     <div class="form-group">
			<label for="division">DIVISION</label>
			<select class="form-control" name="form[division]" value="" id="division" >
			<option>Select</option>
			<option value="Sales / Retail" >Sales / Retail</option>
			<option value="Sales / Club" >Sales / Club</option>
			<option value="Sales / Foodservice"  >Sales / Foodservice</option>
			<option value="Marketing"  >Marketing</option>
		    <option value="Customer Service" >Customer Service</option>
		    <option value="etc" >Etc.</option>
                       </select>
			<!--<input type="text" class="form-control" id="division">-->
			</div>
		  </div>
	       </div>
	       
	       <div class="row">
		  <div class="col-md-12">
		     <div class="form-group">
			<label for="subject">SUBJECT</label>
			<input type="text" name="form[subject]"  value="" class="form-control" id="subject">
		     </div>
		  </div>
	       </div>
	       
	       <div class="row">
		  <div class="col-md-12">
		     <div class="form-group">
			<label for="message">COMMENTS</label>
			<textarea name="form[message]"  value="" id="message" class="form-control"></textarea>
		     </div>
		  </div>
	       </div>
	       
           
            
	       <div class="row">
		  <div class="col-md-12">
		    <button type="submit" style="float: left;" class="btn btn-default btn-red">Submit <strong class="fa fa-caret-right" aria-hidden="true"></strong></button>
		    <!-- <button type="submit"  class="g-recaptcha btn btn-default btn-red" data-sitekey="6LeJYrkZAAAAAM7W6KXCCQX9V9W8G2XEEtgp--fo" data-callback="onSubmit">Submit<strong class="fa fa-caret-right" aria-hidden="true"></strong></button> -->
		  </div>
	       </div>
		   <?php if(!empty($messsage)) : ?>
		   	<div class="form-response text-center status alert alert-danger contact-status <?=$class?>"><?=$message?></div>');
			<?php endif ; ?>

	    </form>
	 </div>
      </div>
   </div>
   
   <!--------- CONTACT END-------->
   <style>
		.center {
			border: 5px solid #FFFF00;
			text-align: center;
			margin-bottom: 50px;
		}
   </style>
   <!---------- MAP ---------->
   <div class="section" style="margin">
      <div id="map center">
		  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3314.824916392682!2d-118.3050278459485!3d33.81683106000662!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd4a9cad596d31%3A0xa3dd90143ee548af!2s22912%20Lockness%20Ave%2C%20Torrance%2C%20CA%2090501!5e0!3m2!1sen!2sus!4v1618360102942!5m2!1sen!2sus" style="border:0;width:100%; height:600px;" allowfullscreen="" loading="lazy"></iframe>
	  </div>
   </div>
   <!-------- MAP END ---------->
   <style>
      .contact-status p {
    font-size: 14px;
    padding-bottom: 3px;
    text-align: center;
}
   </style>
        <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<script>
		
		function onSubmit() {
			console.log("aa");
		    return new Promise(function(resolve, reject) {
				var action = jQuery('#contact-us-form').attr('action');
					var $formData = jQuery('#contact-us-form').serialize();
					jQuery('.form-response').remove();
					jQuery.ajax({
						url: action,
						dataType: "json",
						type: "POST",
						data: $formData,
						success: function(response) {
							console.log(response);
							return;
							if (response.status_msg['class']=="success") {
								jQuery('#contact-us-form input').val('');
								resolve();
								window.location.href = site_url+'thank-you.php';
							}else{
								jQuery('#contact-us-form').append('<div class="form-response text-center status alert alert-danger contact-status '+response.status_msg['class']+'">'+response.status_msg['msg']+'</div>');
								grecaptcha.reset();
							}
						},
						error: function() {
							grecaptcha.reset();
						}
					});
				});
		}
		
		</script>

<?php
require("footer.php");
?>