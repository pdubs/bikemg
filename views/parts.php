<div class="scroll">
	<?php
		if (isset($_GET["bike"]) && allowedToEditBike($_GET["bike"])) {
			if (isset($_GET[$GLOBALS["parts"]->frame->field])) {
				partsFinder($GLOBALS["parts"]->frame);
			} else if (isset($_GET[$GLOBALS["parts"]->fork->field])) {
				partsFinder($GLOBALS["parts"]->fork);
			} else if (isset($_GET[$GLOBALS["parts"]->wheelset->field])) {
				partsFinder($GLOBALS["parts"]->wheelset);
			} else if (isset($_GET[$GLOBALS["parts"]->brakeset->field])) {
				partsFinder($GLOBALS["parts"]->brakeset);
			} else if (isset($_GET[$GLOBALS["parts"]->seatpost->field])) {
				partsFinder($GLOBALS["parts"]->seatpost);
			} else {
				echo "<div class='prompt'>Select A Part From Your Bike Build</div>";
			}
		} else {
			echo "";
		}
	?>
</div>