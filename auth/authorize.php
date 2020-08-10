<?php
//Include the user list file.
include('../users.php');


$arr = json_decode($users,true);


//Check if password exists on each user.
foreach($arr as $current_user) {
	//Verify PIN on current user.
	if(password_verify($_POST['pin'], $current_user['pin'])) {
		//If the PIN is this user, start a session and send vars.
		session_start();
		$_SESSION['name'] = $current_user['name']; //Provide the users name in the session.
		$_SESSION['uuid'] = uniqid(); //Assign an unique ID to the current session so the rest of the code knows that there is a user logged in.
		$_SESSION['voucher'] = "N/A"; //Set the code of the latest voucher on N/A.
		header("Location: ../"); //Redirect to te home page.
		exit(); //Exit the code so the password incorrect redirection wouldnt start.
	}
}
//When the code is still running so there is no PIN like the one entered found.
session_start(); //Start a session
$_SESSION['error'] = "password"; //Set the error type to password to the auth pages know that there was an incorrect PIN.
Header("Location: ./"); //Redirect back to the auth page.

?>