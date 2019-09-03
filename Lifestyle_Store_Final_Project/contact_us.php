<?php
require("includes/common.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Us | Life Style Store</title>
		<!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-lg-10">
		  <h2 class="title">Live Support</h2>
          <div>
             <p align="justify">The Contact Us page is one of the most visited pages on any website. That seems like a compelling enough reson to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds of beautifully made websites, yet their Contact Us pages were, for the most part, disappointing. Most Contact pages are made for show, with just an email address, phone, location, and some short boring text on a plain background.reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-lg-8">
        <div class="contact-form">
            <h2>CONTACT US</h2>
			<form action="contact_script.php" method="POST">
				<div class="form-group col-lg-9">
                    <input class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group col-lg-9">
                    <input class="form-control" name="e-mail" placeholder="Email" required>
                    <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                </div>
                <div class="form-group col-lg-9">
                    <textarea class="form-control" rows="5" name="message" placeholder="Your Message Here" required></textarea>
                </div>
				<div class="form-group col-sm-7">
					<button type="submit" name="submit"  class="btn btn-primary">Submit</button>
				</div>
            </form>
        </div>
    </div>
	    		
        <div class="col-lg-4">
	       <div class="contact-info">
	           <h3 class="title">COMPANY INFORMATION :</h3>
	               <address>
				    <p>Gurgaon, India - 122018</p><br>
				    <p>Phone: +91 8448444853</p><br>
				    <p>Email: trainings@internshala.com</p>
	               </address>
            </div>
        </div>
    </div>
</div>




      <?php include 'includes/footer.php'; ?>
    </body>
</html>
