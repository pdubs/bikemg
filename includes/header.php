<?php 

include("includes/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/bikes.ico" />
	<title><?php echo $title ?></title>

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300">

	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div id="header">
    	<div class="container">
			<div class="banner">
				<img src="img/banner.png">
			</div>
			<div class="links">
				<?php if (isset($login) && $login->isUserLoggedIn() == true): ?>
					Hey, <span><?php echo $_SESSION["user_name"]; ?></span>. Welcome back! <a class="logout" href="index.php?logout">Logout</a>
				<?php else: ?>
					<!-- <a href="register.php">Register</a> -->
				<?php endif ?>
			</div>
    		<div class="clear"></div>
    	</div>
    </div>
    <div id="wrapper">
    	<div class="container">