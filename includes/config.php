<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "bikeMg");
define("DB_USER", "root");
define("DB_PASS", "root");

define("APP_NAME", "bikeMg");

$parts = (object) 
[
	(object) ['table' => 'Frames', 'field' => 'frame_id', 'title' => 'Frame'],
	(object) ['table' => 'Forks', 'field' => 'fork_id', 'title' => 'Fork'],
	(object) ['table' => 'Wheelsets', 'field' => 'wheelset_id', 'title' => 'Wheelset'],
	(object) ['table' => 'Brakesets', 'field' => 'brakeset_id', 'title' => 'Brakeset'],
	(object) ['table' => 'Seatposts', 'field' => 'seatpost_id', 'title' => 'Seatpost']
];

?>