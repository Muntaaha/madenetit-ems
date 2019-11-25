<?php

//fetch_user.php

include('connection.php');

session_start();

$query = "
SELECT * FROM employee_registration 
WHERE Employee_ID != '".$_SESSION['user_id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <th width="70%">Username</th>
  <th width="20%">Status</th>
  <th width="10%">Action</th>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['Employee_ID'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">Online</span>';
 }
 else
 {
  $status = '<span class="label label-danger">Offline</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['Employee_Name'].' '.count_unseen_message($row['Employee_ID'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['Employee_ID'], $connect).'</td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['Employee_ID'].'" data-tousername="'.$row['Employee_Name'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>