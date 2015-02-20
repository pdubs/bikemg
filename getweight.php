<?php

$name = strval($_GET['name']);
$type = strval($_GET['type']);

$con = mysqli_connect('localhost', 'root', 'root', 'scotchbox');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"bikeMg");

$sql = "SELECT * FROM ".$type." WHERE name = '".$name."'";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $row['weight'];
}

mysqli_close($con);
?>