<?php

$title = APP_NAME . " | Login";
include("includes/header.php");

messages($login);

?>

<div class="box border form" id="login-form">

	<form method="post" action="index.php" name="loginform">
		<label for="login_input_username">Username</label>
		<input id="login_input_username" class="login_input" type="text" name="user_name" required />
	
		<label for="login_input_password">Password</label>
		<input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
	
		<input type="submit" name="login" value="Log in" />
	</form>
	
	<a href="register.php">Register new account</a>
	
</div>

<?php

include("includes/footer.php");
	
?>
