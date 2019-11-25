<?php
include "connection.php";
	session_start();
	if(isset($_SESSION["username"]))
	{	
		$date=date("Y-m-d");
		//$time=strftime("%H:%M:%S");
		$time=date("H:i:s");
		
		$time2=date_create("10:00:00",timezone_open("Asia/Dhaka"));
		//echo date_format($time2,"H:i:s");
		if($time <= $time2){
			//$status = "ON TIME";
			$status = "LATE";
		}
		else{
			$status = "LATE";
			//$status = "ON TIME";
		}
		$sub_query = " INSERT INTO employee_attendance (Employee_ID, Employee_Name, entry_date, entry_time, Active, status) VALUES(:employee_id, :employee_name, :entry_date, :entry_time, :active, :status)";
									
		$data= array(
		':employee_name' => $_SESSION["username"],
		':employee_id' => $_SESSION["user_id"],
		':entry_date' => $date, 
		':entry_time' => $time,
		 ':active' => "1",
		 ':status' => $status,
		);
		 $statement = $connect->prepare($sub_query);
		if($statement ->execute($data))
		{
			$message = ' <div class="alert alert-success">Attendance Submitted Successfully</div>';
			//echo "Data Inserted";
		}
		
	}
	
	?>

	<script type="text/javascript">
		window.location="dashboard.php";
	</script>