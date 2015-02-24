<div class="scroll">
	<?php
		if (isset($_GET["bike"]) && allowedToEditBike($_GET["bike"])) {
			bikeBuild($_GET["bike"]);
		} else {
			echo "<div class='prompt'>Select Your Bike</div>";
		}
	?>
</div>