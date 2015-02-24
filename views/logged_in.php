<?php

$title = APP_NAME;
include("includes/header.php");

?>

<div class="column bikes">
	<div class="header">Your Bikes</div>
	<?php include("views/bikes.php"); ?>
</div>

<div class="column build">
	<div class="header">Bike Build</div>
	<?php include("views/build.php"); ?>
</div>

<div class="column parts">
	<div class="header">Parts Finder</div>
	<?php include("views/parts.php"); ?>
</div>

<div class="clear"></div>

<?php

include("includes/footer.php");

?>