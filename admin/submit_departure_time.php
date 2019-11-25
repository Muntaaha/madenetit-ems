<?php
include "connection.php";
	session_start();
	if(isset($_SESSION["entry_time"]))
	{
		
		$date=date("Y-m-d");
		//$time=strftime("%H:%M:%S");
		$time=date("H:i:s");
		$sub_query = "UPDATE employee_attendance SET exit_time = :exit_time, exit_date= :exit_date, Active= '0' WHERE login_id = '$_SESSION[login_id]' && Active='1' ";
							
		$data= array(
			':exit_time' => $time,
			':exit_date' => $date,
		);
		 $statement = $connect->prepare($sub_query);
		if($statement ->execute($data))
		{
			$message = ' <div class="alert alert-success">Attendance Submitted Successfully</div>';
			echo $_SESSION["login_id"];
			echo $_SESSION["entry_time"];
		}
		
	}
	
	?>

	<script type="text/javascript">
		window.location="dashboard.php";
	</script>