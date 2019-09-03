<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
    <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
      <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
      <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include "includes/header.php"; ?>

    <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">

					<h2>SIGN UP</h2>

                    <form  action="signup_script.php" method="POST">

                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Enter Valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password (Min. 6 characters)" pattern=".{6,}" name="password" required>
                        </div>

                        <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Valid Phone Number (Ex:8448444853)" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>
						
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                </form>
			</div>
		</div>
    </div>
</div>

	<?php include "includes/footer.php"; ?>
    </body>
</html>
