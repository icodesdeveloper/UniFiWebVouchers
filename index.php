<!DOCTYPE html>
<html lang="en">
<?php 
//Require config file
require("config.php");
//Start PHP Session
session_start();

//If there is no UUID in the session, then te login process has not succeeded, force redirect to authentication.
if(!$_SESSION['uuid']) {
	header("Location: auth/");
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
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<script src="https://kit.fontawesome.com/3b616cf204.js" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="<?php echo $side_image; ?>" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="generate.php" >
				<!--Show the greeting and the username.-->
				<span class="contact1-form-title">
					<?php echo "$greeting $name!" ?>
				</span>

				<input type="hidden" value="<?php echo $_SESSION['name']; ?>" name="user" />
				<div class="container-contact1-form-btn">
					<input type="submit" class="contact1-form-btn" value="<?php echo $generate_voucher; ?>">
					</input>
				</div>

				<?php
				//If there is a voucher created in this session, show the button "View Most Recent Voucher".
				if($_SESSION['voucher'] != "N/A") {
					?> <br>
					<div class="container-contact1-form-btn">
						<a class="contact1-form-btn" href="view/"><?php echo $most_recent_voucher; ?>
						</a>
				</div>
					<?php
				}
				?>
				<p class="" style="text-align: center; margin-top: 80px; margin-bottom: -60px;">Made with <i class="fas fa-heart" style="color: red"></i> by iCodes
								<a href="logout">
				<i class="fas fa-sign-out-alt" style="float: right; font-size: 30px; margin-bottom: -80px; margin-top: -2px; color: red;"></i>
				</a>
				</p>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>



<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>
