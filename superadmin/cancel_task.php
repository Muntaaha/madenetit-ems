<?php
$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");
$id= $_GET["id"];
mysqli_query($connect,"UPDATE task SET Task_Status = 'Cancelled' where id = '".$id."'");
?>
<script type="text/javascript">
	window.location = "view_tasks.php";
</script>