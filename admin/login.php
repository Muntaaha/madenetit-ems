<?php

include('connection.php');

session_start();

$message = '';


if(isset($_POST["login"]))
{
 $query = "SELECT * FROM employee_registration WHERE Employee_Name = :username && Password = :password && Employee_Level = '2' && status !='Blocked'";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':username' => $_POST["username"],
	  ':password' => $_POST["password"],
     )
  );
  
  $count = $statement->rowCount();
  
  if($count > 0)
  {
		$_SESSION["username"] = $_POST["username"];
        //$sub_query = " INSERT INTO employee_attendance (Employee_ID, Employee_Name)";
        //$statement = $connect->prepare($sub_query);
        //$statement->execute();
        header("location:dashboard.php");
      
  }
  
 else
 {
  $message = "<label>Wrong Username or Password or You Have Been Blocked !</labe>";
  
 }
}

?>
<html>  
    <head>  
        <title>Admin Login</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
   <br />
   <div class="panel panel-default">
      <div class="panel-heading">Admin Login</div>
    <div class="panel-body">
     <form method="post">
      <p class="text-danger"><?php echo $message; ?></p>
      <div class="form-group">
       <label>Enter Username</label>
       <input type="text" name="username" class="form-control" required />
      </div>
      <div class="form-group">
       <label>Enter Password</label>
       <input type="password" name="password" class="form-control" required />
      </div>
      <div class="form-group">
       <input type="submit" name="login" class="btn btn-info" value="Login" />
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>  
</html>
