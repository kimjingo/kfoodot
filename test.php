<?php
$title = "Contact US";
require("header.php");
?>
   <div class="contact-frame">


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
			<option value="Sales / Club" > Sales / Club</option>
			<option value="Sales / Foodservice"  > Sales / Foodservice</option>
			<option value="Marketing"  >Marketing</option>
		       <option value="Customer Service" >  Customer Service</option>
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
		    <!-- <button type="submit" style="float: left;" class="btn btn-default btn-red">Submit <strong class="fa fa-caret-right" aria-hidden="true"></strong></button>-->
		    <button type="submit"  class="g-recaptcha btn btn-default btn-red" data-sitekey="6LeJYrkZAAAAAM7W6KXCCQX9V9W8G2XEEtgp--fo" data-callback="onSubmit">
                Submit
                <strong class="fa fa-caret-right" aria-hidden="true"></strong>
            </button>
		  </div>
	       </div>
	    </form>
	 </div>
   </div>


<?php
require("footer.php");
?>