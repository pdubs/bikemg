<?php

// include the configs / constants for the database connection
require_once("includes/config.php");

// load the login class
require_once("classes/Login.php");

// create a login object
$login = new Login();

// ask if we are logged in
if ($login->isUserLoggedIn() == true) {
    include("views/logged_in.php");
} else {
    include("views/not_logged_in.php");
}

include("includes/footer.php");

?>