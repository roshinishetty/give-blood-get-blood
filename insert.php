<?php
require 'global_vars.php';
$con = connect_to_db();


session_start();
$username = $_SESSION["username"];

$days = "";
if(isset($_POST["submit"])) {
if(!empty($_POST['day'])) {
	$counter = 0;
	foreach($_POST['day'] as $check) {
		$days .= $check;
		$counter++;
	}
} 
}

if(isset($_POST["submit"])) {
$time = "";
if(!empty($_POST['time'])) {
	$counter = 0;
	foreach($_POST['time'] as $check) {
		$time .= $check;
		$counter++;
	}
} 
}

$sql="INSERT INTO donor_form (username,height, weight, day, time) VALUES ($username,'$_POST[height]','$_POST[weight]', $days,$time,'$_POST[area]')";
header("location: user-registered.html");
echo "1 record added";
?>
