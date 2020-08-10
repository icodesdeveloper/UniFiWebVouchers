<!DOCTYPE html>
<html lang="en">
<?php 
//Require config file
require("../config.php");
//Start PHP Session
session_start();
//If there is no voucher in the session, redirect back to home.
if($_SESSION['voucher'] === "N/A") {
	header("Location: ../");
}
//If there is no UUID in the session, then te login process has not succeeded, force redirect to authentication.
if(!$_SESSION['uuid']) {
	header("Location: ../auth/");
}

//Convert te name of the current user to a simple var
$name = $_SESSION['name'];


/*
->Start Greeting System
*/
date_default_timezone_set($timezone);

$Hour = date("G");

if ( $Hour >= 6 && $Hour <= 11 ) {
    $greeting = $good_morning;
} else if ( $Hour >= 12 && $Hour <= 17 ) {
    $greeting = $good_afternoon;
} else if ( $Hour >= 18 && $Hour <= 23 ) {
    $greeting = $good_evening;
} else if ( $Hour >= 0 || $Hour <= 5 ) {
    $greeting = $good_night;
}
/*
-<End Greeting System
*/
?>
<head>
	<title><?php echo $page_title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<script src="https://kit.fontawesome.com/3b616cf204.js" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
</head>
<style>
.container {
width: 80%; margin: 0px auto;
  display: flex;
  justify-content: center;
}
.icon1,
.icon2 {
    width: 260px;
    height: 200px;
    display: inline-block;
    background: <?php echo $voucher_background_color; ?>

}

.icon1 {

	background: <?php echo $voucher_background_color; ?>;
	border-radius: 10px;
}

.center{
                text-align: center; 
                width: 100%; 
}

.icon1 p {
	color: black;
}
</style>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="<?php echo $side_image; ?>" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="../generate.php" >
				<span class="contact1-form-title">
					<?php echo "$greeting $name!" ?>
				</span>

				<div class="squares container">
				  <div class="icon1"><p><br></p>
				  <i class="fas fa-ticket-alt center" style="text-align: center; font-size: 45px; margin-bottom: 8px;"></i>
					 <h5 class="center" style="font-weight: bolder;"><?php echo $your_voucher; ?></h5> 
					 <h6 class="center"><?php echo $_SESSION['voucher']; ?></h6>
					 <p class="center" style="font-size: 17px; font-weight: bold; margin-top: 5px;"><?php echo $network_name_static; ?></p>
					 <p class="center"><?php echo $network_name; ?></p>
				  </div>

				</div>
				<br>
				<!--Define the name of the user for on the new voucher-->
				<input type="hidden" value="<?php echo $_SESSION['name']; ?>" name="user" />
				<div class="container-contact1-form-btn">
					<a class="contact1-form-btn" style="color: white;" href="../"><?php echo $back; ?>
						</a>
					</input>
				</div><br>
								<div class="container-contact1-form-btn">
					<input type="submit" class="contact1-form-btn" value="<?php echo $generate_new_voucher; ?>">
					
						</span>
					</input>
				</div>

				<p class="center" style="margin-top: 40px; margin-bottom: -40px;">Made with <i class="fas fa-heart" style="color: red"></i> by iCodes
								<a href="../logout">
				<i class="fas fa-sign-out-alt" style="float: right; font-size: 30px; margin-bottom: -80px; margin-top: -2px; color: red;"></i>
				</a>
				</p>

			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>





<!--===============================================================================================-->
	<script src="../assets/js/main.js"></script>

</body>
</html>
