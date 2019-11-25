<?php


include('connection.php');

session_start();


$qur="select Employee_ID from employee_registration where Employee_Name= '$_SESSION[username]' ";
	$stat = $connect->prepare($qur);
	$stat->execute();
	foreach($stat as $row){
		$_SESSION["user_id"]= $row["Employee_ID"];
	}
?>