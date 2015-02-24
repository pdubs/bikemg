<?php

// include the configs / constants for the database connection
require_once("includes/config.php");

// load the registration class
require_once("classes/Registration.php");

// create the registration object
$registration = new Registration();

// show the register view
include("views/register.php");

?>