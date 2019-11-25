<?php

//update_is_type_status.php

include('connection.php');

session_start();

$query = "
UPDATE employee_last_activity 
SET is_type = '".$_POST["is_type"]."' 
WHERE Employee_last_activity_id = '".$_SESSION["Employee_last_activity_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>