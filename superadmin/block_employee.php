<?php
$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");
$id= $_GET["id"];
mysqli_query($connect,"UPDATE employee_registration SET status = 'Blocked' where id = '".$id."'");
?>
<script type="text/javascript">
	window.location = "view_employee.php";
</script>