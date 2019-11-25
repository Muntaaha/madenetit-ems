<?php
$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");


			if(isset($_POST["task_submit"]))
				{
					mysqli_query($connect,"update task set Task_Status= 'Completed' where id='5'");
					header("Location: dashboard.php");
				}
?>