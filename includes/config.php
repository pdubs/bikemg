<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "bikeMg");
define("DB_USER", "root");
define("DB_PASS", "root");

define("APP_NAME", "bikeMg");

$parts = (object) 
[
	"frame" => (object) ['table' => 'Frames', 'field' => 'frame', 'title' => 'Frame'],
	"fork" => (object) ['table' => 'Forks', 'field' => 'fork', 'title' => 'Fork'],
	"wheelset" => (object) ['table' => 'Wheelsets', 'field' => 'wheelset', 'title' => 'Wheelset'],
	"brakeset" => (object) ['table' => 'Brakesets', 'field' => 'brakeset', 'title' => 'Brakeset'],
	"seatpost" => (object) ['table' => 'Seatposts', 'field' => 'seatpost', 'title' => 'Seatpost']
];

?>