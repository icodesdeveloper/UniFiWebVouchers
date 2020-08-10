<?php
session_start();
$name = $_POST['user'];
require("config.php");
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example basic PHP script to create a set of vouchers, returns an array containing the newly created vouchers
 */

 //Replace {name} in the note variable by the name of the user.
 $voucher_note = str_replace("{name}", $name, $voucher_note);
/**
 * using the composer autoloader
 */
require_once('client.php');

/**
 * include the config file (place your credentials etc. there if not already present)
 * see the config.template.php file for an example
 */
require_once('config.php');



/**
 * initialize the UniFi API connection class and log in to the controller
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $siteid, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

/**
 * then we create the required number of vouchers with the requested expiration value
 */
$voucher_result = $unifi_connection->create_voucher($voucher_expiration, "1", $voucher_usages, $voucher_note, $voucher_up, $voucher_down, $voucher_bandwith);

/**
 * we then fetch the newly created vouchers by the create_time returned
 */
$vouchers = $unifi_connection->stat_voucher($voucher_result[0]->create_time);

/**
 * provide feedback (the newly created vouchers) in json format
 */
echo json_encode($vouchers, JSON_PRETTY_PRINT);

foreach($vouchers as $voucher) {
	$_SESSION['voucher'] = $voucher->code;
	echo $_SESSION['voucher'];
	header("Location: view/");
}


?>