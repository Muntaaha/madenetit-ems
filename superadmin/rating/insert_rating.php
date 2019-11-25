<?php

$connect = new PDO('mysql:host=localhost;dbname=ems_madenetit', 'root', '');

if(isset($_POST["index"]))
{
	$query=" UPDATE task SET rating = :rating WHERE id = '$_POST[task_id]' ";
	$statement= $connect->prepare($query);
	$statement->execute(
		array(
			
			':rating'=> $_POST["index"]
		)
	);
	$result = $statement->fetchAll();
	if(isset($result))
	{
		echo 'done';
	}
}
?>