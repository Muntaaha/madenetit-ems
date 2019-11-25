<?php

$connect = new PDO('mysql:host=localhost;dbname=ems_madenetit', 'root', '');

$query = "SELECT * FROM task where Assigned_By = 'Prince' && Task_Status = 'Completed' && Rating = '0'";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output ='';

foreach($result as $row)
{
	$rating = count_rating($row['id'],$connect);
	
	$deadline = $row["Submission_Date_Employee"];
	
	$submitting_time = $row["Submitting_Time"];
	
	if(strtotime($submitting_time) > strtotime($deadline))
	{
	$status = strtotime($submitting_time) - strtotime($deadline);
	//$delayed_status = date(($status));
	$delayed_status = 'LATE DELIVERY';
	}
	else{
		$delayed_status ='ON TIME DELIVERY';
	}
	$color = '';
	
	$output .=' 
				<h3 class="text-primary">'.$row['Order_Id'].'</h3>
				<h4 class="text-primary">'.$row['Task_Name'].'</h4>
				<ul class="list-inline" data-rating="'.$rating.'"
					title="Average Rating - '.$rating.'"> ';
					
	for($count=1;$count <= 5; $count++)
	{
		if($count <= $rating)
		{
			$color = 'color: #ffcc00;';
		}
		else
		{
			$color = 'color: #ccc;';
		}
		$output .= '<li title="'.$count.'" id="'.$row['id'].'-'.$count.'" data-index="'.$count.'" data-task_id="'.$row['id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; '.$color.' font-size: 16px;">&#9733;</li>';
	}
	$output .=' 
			</ul>
			<p>'.$row["Employee_Name"].'</p>
			<label style="color: red; text-weight: bold; ">'.$delayed_status.'</label>
			<hr />
			';
}

echo $output;

function count_rating($task_id, $connect)
{
	$output = 0;
	$query=" SELECT rating FROM task WHERE id= '".$task_id."' ";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result= $statement->fetchAll();
	$total_row= $statement->rowCount();
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output = $row["rating"];
		}
	}
	return $output;
}
?>