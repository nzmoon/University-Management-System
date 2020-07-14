<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db_name="pciu";
	$con =mysqli_connect($host,$user,$pass,$db_name);
	/*if($con->connect_error){
		die('Error Connect :'.$con->connect_error);
	}*/
	if(!$con){
		die("Error conncect :".$con->connect_error);
	}
?>