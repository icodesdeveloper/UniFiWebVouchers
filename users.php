<?php
/*To add a user, add this:
    array(
        "name" => "(The name of the user)",
        "pin" => '(The encrypted PIN/Password. You can obtain the encrypted PIN/password with the crypt.php file, put your PIN/Password in the PIN variable then open the page and copy that code into here.)'
    ),
*/
$users = array(
    array(
        "name" => "Example User",
        "pin" => '$2y$12$a9iIGUCFhnwZzHB0ZyTuOOkGxKNDynYu5wOIys4DfkutJIRgDBW7a'
    ),


);

$users = json_encode($users);
?>

