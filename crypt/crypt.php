<?php
//Starting a session 
session_start();
$_SESSION['crypt'] = "success"; //Telling the rest of the code to view the PIN.
$_SESSION['cryptedPIN'] = password_hash($_POST['pin'], PASSWORD_DEFAULT, ['cost' => 12]); //Creating a HASH for the PIN and saving it in the session.
header("Location: ./"); //Redirecting back

?>