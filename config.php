<?PHP
//Configuration for the UniFi Simple Voucher Gen by iCodes

//UI and Timezone
$page_title = "UniFi Voucher Generator - by iCodes"; //Set page titles for all pages.
$side_image = "images/img-01.png"; //Provide the URL of the image shown on the left side of all the pages exept the auth page.
$auth_side_image = "images/img-01.png"; //Provide the URL of the image shown on the left side of the auth page.
$timezone = "Europe/Brussels"; //Set the timezone for the greeting system. Select your living area and use the official PHP name for it -> https://www.php.net/manual/en/timezones.php
$voucher_background_color = "#3849FF"; //Set the background color of the voucher from the view page.
//UniFi Configuration
$controlleruser = ''; //Enter a permitted username for your UniFi controller.
$controllerpassword = ''; //Enter the password for the permitted user on your UniFi controller.
$siteid = "default"; //Enter the ID of the site where you want to manage the vouchers on. For the default site enter 'default'.
$controllerurl = ''; //Enter the full url of the UniFi controller where te above user is permitted to. For example https://10.0.0.1:8443
$controllerversion  = ''; //Enter the version of the above specified UniFi controller. For example:'5.13.32'.

//App And Voucher Behaviour
$network_name = ""; //Set the WiFI network name shown on the voucher page.
$voucher_expiration = ; //Set the predefined voucher expiration time in minutes.
$voucher_usages = ; //Set the predefined voucher usage limit.
$voucher_note = ""; //Set the predefined note of the voucher in UniFi. Use {name} for the name of the user that is generating the voucher.
$voucher_up = ""; //Set the predefined upload speed in KBPS for the voucher. Leave blank for unlimited.
$voucher_down = ""; //Set the predefined download speed in KBPS for the voucher. Leave blank for unlimited.
$voucher_bandwith = ""; //Set the predefined bandwith in MB for the voucher. Leave blank for unlimited.

//Lang
	//Greetings
	$good_morning = ""; //Enter the good morning greeting in your language.
	$good_afternoon = ""; //Enter the good afternoon greeting in your language.
	$good_evening = ""; //Enter the good evening greeting in your language.
	$good_night = ""; //Enter the good night greeting in your language.

	//Global
	$generate_voucher = ""; //Enter "Generate Voucher" or something like that in your language.
	$back = ""; //Enter "Back" in your language.

	//Home
	$most_recent_voucher = ""; //Enter "View Most Recent Voucher" in your language.

	//Authentication
	$auth_title = ""; //Enter the title show on the auth page.
	$auth_submit = ""; //Enter the content for the submit button on the auth page.
	$incorrect_pin = ""; //Enter the error message for when the PIN is not correct on the auth page.

	//Voucher View
	$your_voucher = ""; //Enter "Your Voucher" or something like that in your language.
	$network_name_static = ""; //Enter "Network Name" or something like that in your language for in the voucher on the view page.
	$generate_new_voucher = ""; //Enter "Generate New Voucher" or something like that for on the view page.

	//Crypt
	$crypt_title = ""; //Enter the title for the crypt page.
	$crypt_subtitle =  ""; //Enter the subtitle shown on the crypt page.
	$crypt_submit = ""; //Enter the content for the submit button on the crypt page.



/**
 *!!Setting For UniFi API | Further no behaviour on our app.
 * set to true (without quotes) to enable debug output to the browser and the PHP error log
 */
$debug = false;
