# UniFiWebVouchers
UniFi Web Vouchers is a PHP application that lets users generate UniFi hotspot vouchers with a PIN.

#Requirements
- A web server with PHP and the CURL extension.
- A UniFi controller and an account on the controller itself with the full permissions.
- The ID of the site were you want to the create vouchers on.
#Installation
1. Download the repository and place it on a web server with PHP the CURL module is required.

2. Open the config.php file and fill all the settings how you want. Currently all the voucher settings are predefined, a feature that (specefic) users can change (specefic) voucher settings at the creation will be coming. The most important settings are the UniFi settings. Fill in your: controller url, permitted user, password and site id.

3. Create all the users in the users.php file. An encrypted version of the PINS is required. To obtain the encrypred version of the PINS let users go to the /crypt page, then enter their PIN, press generate and let them copy the the version of the PIN.

5. Congratulations, The application is now running! Your staff, family, friends, ... can now create vouchers of your guest network.

#Planned Features
- Allow (specefic) users to change (specefic) values of the voucher at creation). 
- Multiple controller and site support.
- MySQL authentication
