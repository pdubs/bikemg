<?php

$title = APP_NAME . " | Register";
include("includes/header.php");

messages($registration);

?>

<div class="box border form" id="register-form">

	<form method="post" action="register.php" name="registerform">
		<label for="login_input_username">Username</label>
		<input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{4,30}" name="user_name" required />
	
		<label for="login_input_email">Email</label>
		<input id="login_input_email" class="login_input" type="email" name="user_email" required />
	
		<label for="login_input_password_new">Password</label>
		<input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
	
		<label for="login_input_password_repeat">Repeat password</label>
		<input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
		<input type="submit"  name="register" value="Register" />
	</form>
	
	<a href="index.php">Back to login page</a>

</div>

<?php

include("includes/footer.php");
	
?>