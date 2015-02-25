<?php

$conn;
db_open();

// Open Database Connection
function db_open() {
	$GLOBALS["conn"] = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($GLOBALS["conn"]->connect_error) {
		die("Connection failed: " . $GLOBALS["conn"]->connect_error);
	}
}

// Close Database Connection
function db_close() {
	$GLOBALS["conn"]->close();
}

function messages($var) {
	echo "<div class='messages' style='display: " . ((isset($var) && ($var->errors || $var->messages)) ? "block" : "none") . "'>";

	if (isset($var)) {
		if ($var->errors) {
			foreach ($var->errors as $error) {
				echo $error;
			}
		}
		if ($var->messages) {
			foreach ($var->messages as $message) {
				echo $message;
			}
		}
	}
	
	echo "</div>";
}

/////////////////////////////////////////////////////////////////////////////////////

// Output all users and their bikes
function userBikes() {
	$sql = ($_SESSION["user_name"] == "admin") ? "SELECT user_name, user_id FROM Users WHERE user_name != 'admin' ORDER BY user_id ASC" : "SELECT user_name, user_id FROM Users WHERE user_name = '" . $_SESSION["user_name"] . "' ORDER BY user_id ASC";
	$res_1 = $GLOBALS["conn"]->query($sql);

	if ($res_1 && $res_1->num_rows > 0) {
		while ($user = $res_1->fetch_object()) {
			buildUser($user);
		}
	} else {
		echo "No Users";
	}
}

// Build a user display: Username + Bikes
function buildUser($user) {
	$sql = "SELECT * FROM Bikes_View b WHERE " . $user->user_id . " = b.user_id ORDER BY b.bike_id ASC";
	$res_2 = $GLOBALS["conn"]->query($sql);
	
	echo ($_SESSION["user_name"] == "admin") ? "<div class='user'>" . $user->user_name . " (" . $res_2->num_rows . ")</div>" : "";
	echo "<div class='bikes'>";
	
	if ($res_2 && $res_2->num_rows > 0) {
		while ($bike = $res_2->fetch_object()) {
			echo userBike($bike);
		}
	} else {
		echo "<div class='prompt'>No Bikes</div>";
	}
	
	echo "</div>";
}

// Build a user bike display: Name + Image + Part Details
function userBike($bike) {
	return "
		<div class='bike row " . highlight("bike", $bike->bike_id) . "' onclick='load(\"bike=" . $bike->bike_id . "\")'>
			<div class='inner'>
				<div class='img'>
					<table width='100%' height='100%' cellpadding='0' cellspacing='0'><tr>
						<td style='vertical-align: middle'><img src='" . $bike->image . "'></td>
					</tr></table>
				</div>
				<div class='info'>
					<div class='name'>" . $bike->name . "</div>
					<div class='total'>Total Weight: " . weight($bike->total_weight) . "</div>
					<div class='total'>Total Price: " . price($bike->total_price) . "</div>
				</div>
				<div class='clear'></div>
			</div>
			<div class='arrow right'></div>
			<div class='clear'></div>
		</div>";
}

// Number to weight, in grams
function weight($w) {
	return number_format($w, 0, '', '') . "g";
}

// Number to price, in USD
function price($p) {
	return "$" . number_format($p, 0, '', '');
}

// Returns highlight class for active row
function highlight($param, $var) {
	return (isset($_GET[$param]) && $_GET[$param] === $var) ? "highlight" : "";
}

/////////////////////////////////////////////////////////////////////////////////////

function allowedToEditBike($id) {
	$sql = ($_SESSION["user_name"] == "admin") ?  "SELECT * FROM Bikes_View WHERE bike_id = " . $id : "SELECT * FROM Bikes_View WHERE user_id = " . $_SESSION["user_id"] . " AND bike_id = " . $id;
	$res = $GLOBALS["conn"]->query($sql);

	return ($res && $res->num_rows === 1);
}

function bikeBuild($id) {
	$sql = ($_SESSION["user_name"] == "admin") ?  "SELECT * FROM Bikes_View WHERE bike_id = " . $id : "SELECT * FROM Bikes_View WHERE user_id = " . $_SESSION["user_id"] . " AND bike_id = " . $id;
	$res = $GLOBALS["conn"]->query($sql);
	
	if ($res && $res->num_rows == 1) {
		$bike = $res->fetch_assoc();
		bikeDetails($bike);
	} else {
		echo "<div class='prompt'>Select Your Bike</div>";
	}
}

function bikeDetails($bike) {
	foreach($GLOBALS["parts"] as $key => $value) {
		echo buildRow($value, $bike[$value->field]);
	}
}

// Display of a user bike part detail
function buildRow($part_info, $part_id) {
	$sql = "SELECT * FROM " . $part_info->table . " WHERE part_id = " . $part_id;
	$res = $GLOBALS["conn"]->query($sql);
	
	if ($res->num_rows == 1) {
		$part = $res->fetch_object();
		return buildRowPart($part_info, $part);
	} else {
		return "Error: Unable to fetch part";
	}
}

function buildRowPart($part_info, $part) {
	return "
		<div class='part_type'>" . $part_info->title . "</div>
		<div class='part row " . highlight($part_info->field, $part->part_id) . "' onclick='load(\"" . partSelect($part_info->field, $part->part_id) . "\")'>
			<div class='inner'>
				<div class='img'>
					<table width='100%' height='100%' cellpadding='0' cellspacing='0'><tr>
						<td style='vertical-align: middle'><img src='" . $part->image . "'></td>
					</tr></table>
				</div>
				<div class='info'>
					<div class='name'>" . $part->brand . " " . $part->name . "</div>
					<div class='total'>Weight: " . weight($part->weight) . "</div>
					<div class='total'>Price: " . price($part->price) . "</div>
				</div>
				<div class='clear'></div>
			</div>
			<div class='arrow right'></div>
			<div class='clear'></div>
		</div>";
}

function partSelect($field, $id) {
	return "bike=" . $_GET['bike'] . "&" . $field . "=" . $id;
}

/////////////////////////////////////////////////////////////////////////////////////

function partsFinder($part_info) {
	$sql = "SELECT * FROM " . $part_info->table . " ORDER BY weight ASC";
	$res = $GLOBALS["conn"]->query($sql);
	
	if ($res && $res->num_rows > 0) {
		while ($part = $res->fetch_object()) {
			echo buildRowPartFinder($part_info, $part);
		}
	} else {
		echo "";
	}
}

function buildRowPartFinder($part_info, $part) {
	return "
		<div class='part row' onclick='load(\"" . partSelect($part_info->field, $part->part_id) . "\")'>
			<div class='arrow left'></div>
			<div class='inner'>
				<div class='img'>
					<table width='100%' height='100%' cellpadding='0' cellspacing='0'><tr>
						<td style='vertical-align: middle'><img src='" . $part->image . "'></td>
					</tr></table>
				</div>
				<div class='info'>
					<div class='name'>" . $part->brand . " " . $part->name . "</div>
					<div class='total'>Weight: " . weight($part->weight) . "</div>
					<div class='total'>Price: " . price($part->price) . "</div>
				</div>
				<div class='clear'></div>
			</div>
			<div class='clear'></div>
		</div>";
}


?>