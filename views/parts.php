<div class="scroll">
	<?php
		$match = 0;
	
		if (isset($_GET["bike"]) && allowedToEditBike($_GET["bike"])) {
			foreach($GLOBALS["parts"] as $key => $value) {
				if (isset($_GET[$value->field])) {
					$match = 1;
					partsFinder($value);
					break;
				}
			}

			if ($match == 0) {
				echo "<div class='prompt'>Select A Part From Your Bike Build</div>";
			}
		} else {
			echo "";
		}
	?>
</div>