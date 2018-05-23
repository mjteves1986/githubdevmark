<?php
$title = __("Let's have an obligation free chat about your current investment project","sage");
	if( class_exists('acf') ) {

        if(!empty(get_field('footer_form_title', 'option'))) {   
        	$title = get_field('footer_form_title', 'option');  
        }
        
        if( get_field('footer_form_description', 'option')) {   
        	$description = get_field('footer_form_description', 'option');  
        }

    } 
?>
<section id="footer-form" class="py-5 my-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 offset-lg-1">
				<h2><?php echo $title; ?></h2>
			</div>
			<div class="col-lg-5">
				<form>
					<label>I'd like to chat about...</label>
					<select class="form-control">
						<option>Rapid Design Review</option>
						<option>Rapid Design Review</option>
					</select>
					<label>Full Name</label>
					<input type="text" class="form-control" placeholder="Ray Eames">
					<label>Phone Number</label>
					<input type="text" class="form-control" placeholder="0411234567">
					<label>Email Address</label>
					<input email="email" class="form-control" placeholder="ray.eames@buildmyhouse.com.au">	
					<label>Project Details</label>
					<input type="text" class="form-control" placeholder="Please check my plans ">	
					<button class="btn mt-5 btn-default" type="submit">Submit Enquiry</button>				
		        </form>
			</div>
		</div>
	</div>
</section>