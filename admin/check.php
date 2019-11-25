<?php
include "connection.php";
//session_start();
$sql ="SELECT * FROM employee_attendance where Employee_ID = '$_SESSION[user_id]' ORDER BY login_id DESC LIMIT 1";
$stat = $connect->query($sql);
$stat->execute();
foreach ($stat->fetchAll(PDO::FETCH_ASSOC) as $row) 
{
	$_SESSION["active"] =  $row["Active"];
	$_SESSION["entry_date"] =  $row["entry_date"];
	$_SESSION["entry_time"] =  $row["entry_time"];
	$_SESSION["exit_date"] =  $row["exit_date"];
	$_SESSION["exit_time"] =  $row["exit_time"];
	$_SESSION["login_id"] =  $row["login_id"];
}

//echo $_SESSION["entry_time"];
?>


