<?php

//update_last_activity.php

include('connection.php');

session_start();

$query = "UPDATE employee_last_activity SET last_activity = now() WHERE Employee_Name = '".$_SESSION['username']."' ";

$statement = $connect->prepare($query);

$statement->execute();

?>