<?php
require("../config.php");
session_start();
//If there is no error var, create one but leave it empty.
if(!isset($_SESSION['error'])) {
	$_SESSION['error'] = "";
}
if(!isset($_SESSION['crypt'])) {
	$_SESSION['crypt'] = "";
}
if(!isset($_SESSION['cryptedPIN'])) {
	$_SESSION['cryptedPIN'] = "";
}

?>
<!DOCTYPE html>
<html lang="en">
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
<style>
/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="../<?php echo $auth_side_image; ?>" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="crypt.php">
				<span class="contact1-form-title">
					<?php echo $crypt_title; ?>
					<p><?php echo $crypt_subtitle; ?></p>
				</span>
				<!--When the error is password, the PIN is incorrect.-->
				<?php if($_SESSION['crypt'] === "success") { session_destroy(); ?>

				<div class="wrap-input1 validate-input selin" data-validate = "Name is required" onclick="myFunction()">
					<input class="input1 " id="insel" readonly="readonly" type="text" value="<?php echo $_SESSION['cryptedPIN'] ?>" onClick="selectCrypt()" style="user-select : none; cursor: pointer;">
				</div>
				<script>
					function selectCrypt() {
						document.getElementById("insel").select();

					}
				</script>
				<?php } else {?>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="password" name="pin" placeholder="PIN" maxlength="4" size="4" pattern="[0-9]*" inputmode="numeric">
				</div>

					<span class="shadow-input1"></span>

				<div class="container-contact1-form-btn">
					<input type="submit" class="contact1-form-btn" value="<?php echo $crypt_submit; ?>">
				
						</span>
					</input>
				</div>
								<?php } ?>
								<p class="" style="text-align: center; margin-top: 80px; margin-bottom: -60px;">Made with <i class="fas fa-heart" style="color: red"></i> by iCodes

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
