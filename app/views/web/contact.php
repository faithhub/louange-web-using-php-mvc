<?php
	
	if(!empty($_POST['token'])){
		if($_POST){
			$name = $_POST['name'];
			$from = $_POST['email'];
			$phone = $_POST['phone'];
			$subject = stripslashes( nl2br( $_POST['subject'] ) );
			$message = stripslashes( nl2br( $_POST['message'] ) );
			
			$headers ="From: Form Contact <$from>\n";
			$headers.="MIME-Version: 1.0\n";
			$headers.="Content-type: text/html; charset=iso 8859-1";
			
			
			
			$body = "Hi Louange!<br /><br />
			$name  has sent you a message via contact form on your website!
			<br /><br />
			
			Name: $name <br />
			Email:  $from <br />
			Phone:  $phone<br />
			Subject: $subject <br />
			Message: <br />
			<b> $message</b>
			<br />";
			// echo $body;
			
			
			
			$s =  true;
			$to = 'support@louangeherbals.com.ng';
		
			$s = mail($to,$subject,$body,$headers,"-t -i -f $from");
		
			if($s){
				$send = "1";
			}else{
				$send = "0";
			}
	}
	}
	?>

<!DOCTYPE html>
<html lang="en">
<?php require_once 'includes/header.php' ?>
<body>
	
	
	<!--PreLoader-->
    
    <!--PreLoader Ends-->
	
	<!-- header -->
  <?php require_once 'includes/menu.php' ?>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Get 24/7 Support</p>
						<h1>Contact us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Have you any question?</h2>
						<p></p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" action="contact.php"  >
							<p>
								<input type="text" placeholder="Name" name="name" id="name" >
								<input type="email" placeholder="Email" name="email" id="email" >
							</p>
							<p> 
								<input type="tel" placeholder="Phone" name="phone" id="phone" >
								<input type="text" placeholder="Subject" name="subject" id="subject" >
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message" ></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
							<!-- <button type="submit" name="submit" class="btn btn-dark">Dark</button> -->
							<?php
							if (isset($send) && $send == "1") {
							echo '<div class="success"><h3>Thank You!</h3>Your message has been sent successfully.</div>';
							}elseif(isset($send) && $send == "0"){
								echo "<div>Your message sending failed!</div>";
							}
							?>
							
						</form>
					</div>
				</div>
				
                
                
	
	
	


                

				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Office Address</h4>
							<p>NO 76, Post-Service Housing Development Phase II Shopping Complex, beside Police Headquarters, Eleyele, Ibadan, Oyo State. Nigeria</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Office Hours</h4>
							<p>MONDAY - FRIDAY: 9 AM to 4 PM </p>
							<p>SATURDAY: 11 AM to 4 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>Call Us :<br>+234 803 966 9882,<br>+234 805 985 3395,<br>+234 803 579 6464<br> Email: support@louangeherbals.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14894.753018085314!2d3.862699752830755!3d7.407484649516578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x742372577a60be55!2sLOUANGE%20HERBALS%20INTERNATIONAL%20LTD.!5e0!3m2!1sen!2sng!4v1602777746953!5m2!1sen!2sng" width="300" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<!-- end google map section -->


	<!-- footer -->
  <?php require_once "includes/footer.php" ?>
<!--End of Tawk.to Script-->

</body>
</html>