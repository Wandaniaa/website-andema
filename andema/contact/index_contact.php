<!DOCTYPE html>


<html lang="en">

<head>
	<?php 

	include ($_SERVER['DOCUMENT_ROOT']."/part/head.php");
	?>
	<title>Contact Us - PT. Andema Makmur Sejahtera</title>
    <meta name="author" content="PT. Andema Makmur Sejahtera">
	<meta name="keywords" content="Contact Us page">
	<meta name="keywords" content="PT. Andema Makmur Sejahtera">
	<style>
		#map {
			width: 75%;
			height: 300px;
			background-color: white;
			border:2px solid green;
		  }
    </style>
	
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<!-- <script src="/assets/js/validate.min.js"></script> -->
	<script src="/assets/js/validator.js"></script>
	<script src="/assets/js/contact.js"></script>
</head>

<body class="contact-page">
	<?php 
	$page='contact';
	include ($_SERVER['DOCUMENT_ROOT']."/part/header.php");
	?>
	
	<div class="container wrapped">
		<img class="img-responsive" src="/assets/images/contact-page.jpg"/>
		
		<hr/>
        <div class="blue-bar"><h2 style="color:#fff;text-align:center;margin-bottom:30px;">Contact Us</h2></div>
		<hr/>
 
        <div class="container"> <!-- message form -->

            <div class="row">

                <div class="col-lg-6">

                    <br/>
                    <form id="contact-form" method="post" action="submit-mail" role="form">

                        <div class="messages">
						
					</div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="form_phone">Phone *</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone" required="required" data-error="Phone Number is required ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
						<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="form_company">Your Company *</label>
                                        <input id="form_company" type="text" name="company" class="form-control" placeholder="Please enter your company name *" required="required" data-error="Company name is required for verification.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="form_address">Your Company Address *</label>
                                        <input id="form_address" type="text" name="address" class="form-control" placeholder="Please enter your company address" required="required" data-error="Your company address is required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="text-muted"><strong>*</strong> send mail to us.</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->
			
			<div class="col-lg-6">
				<h4>Location: </h4>
				<div id="map"></div>
				<hr/>
				<div class="row text-center">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                    <i class="fa fa-phone-square" aria-hidden="true"></i>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
						<p><button type="button" class="btn btn-success"><a style='color: white;text-decoration:none;' href="whatsapp">WHATSAPP US</a></button></p>
					</div> <!-- some data mumbling for the web -->
				</div>
				<div class="row text-center">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
						<p>marketing@andema.co.id</p>
					</div>
				</div>
				
			</div>
			
            </div> <!-- /.row-->
        </div> <!-- /.container message form--> 
		
    </div><!-- all container div-->
	<script>
      function initMap() {
        var  andema= {lat: 5.179728, lng: 97.137118};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: andema
        });
        var marker = new google.maps.Marker({
          position: andema,
          map: map
        });
      }
    </script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOn4_o3-0oRmmCZexECBzr0gFucGVzNuQ&callback=initMap">
    </script>
	
	<?php include ($_SERVER['DOCUMENT_ROOT']."/part/footer.php");?>
    
	<span id="back-top"><a href="#">Back to top</a></span>
	
	
<!-- 	
		<script type="text/javascript">
			document.getElementById('frmSearch').onsubmit = function() {
				window.location = 'http://www.google.com/search?q=site:yoursitename.com ' + document.getElementById('txtSearch').value;
				return false;
			}
		</script> -->
		
			

	
    </body>
</html>
