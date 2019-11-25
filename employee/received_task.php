<?php 
	include "header.php";
	$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");
	$id= $_GET["id"];
	$res= mysqli_query($connect,"update task set unread_msg_num='y' where Employee_Name ='$_SESSION[username]' && id='".$id."'");
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Task</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">

                                <div class="clearfix"></div>
                            </div>
							<?php 
								$id= $_GET["id"];
								$res5=mysqli_query($connect,"select * from task where id='".$id."'");
								while($row5=mysqli_fetch_array($res5))
								{
									$Order_Id= $row5["Order_Id"];
									$Task_Name= $row5["Task_Name"];
									$Category= $row5["Category"];
									$Assignment_Date= $row5["Assignment_Date_Employee"];
									$Submission_Date= $row5["Submission_Date_Employee"];
									$Assigned_By= $row5["Assigned_By"];
									$Discussion= $row5["Discussion"];
									$worklist= $row5["worklist"];
								}
							?>
                            <div class="x_content">
                                <form class="receive_task_form" action="" method="post" class="col-lg-12" enctype="multipart/form-data">
									<div class="">
										<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Order ID: </label>
										<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Order_Id; ?>" name="Order_Id" disabled>
									</div>
									<div class="">
										<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Task Name: </label>
										<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Task_Name; ?>" name="Task_Name" disabled>
									</div>
									<div class="">
										<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Category: </label>
										<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Category; ?>" name="Category" disabled>
									</div>
									<div class="">
										<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Assignment Date: </label>
										<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Assignment_Date; ?>" name="Assignment_Date" disabled>
									</div>
									<div class="">
										<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Submission Date: </label>
										<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Submission_Date; ?>" name="Submission_Date" disabled>
									</div>
									<!--
									<div class="">
										<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Discussion: </label>
										<input type="text" style=" width: 100%, font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Discussion; ?>" name="Discussion" disabled>
									</div>-->
									<div class="">
										<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Worklists: </label>
										<?php 
										$list = explode(",",$worklist);
										$num_of_list = count($list);
										foreach($list as $work){
											?>
											</br><input type="checkbox" name="checkbox[]" id="check" value="<?php echo $row["worklist"]; ?>" /> &nbsp;<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $work; ?>" name="work" disabled>
											<?php
										}
										?>
										
									</div>
									<button type="submit" name="task_submit" id="task_submit" style="font-size: 14px; color: #fff; margin-top: 30px; font-weight: 600;" class="btn btn-info btn-sm">Submit</button>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<script>
			$(document).ready(function(){
 
			 $('#task_submit').click(function(){
			  
			  if(confirm("Are you sure you want to submit?"))
			  {
			   var id = [];
			   $(':checkbox:checked').each(function(i){
				id[i] = $(this).val();
			   });
			   var num = "<?php echo $num_of_list ?>";
			   if(id.length == num)
			   {
				alert("Done");
				
				<?php 
				if(isset($_POST["task_submit"]))
				{
					mysqli_query($connect,"update task set Task_Status= 'Complete' where id='".$id."'");
					
					//header('location: pending_tasks.php');
					//window.location="pending_tasks.php";
					
				}
				?>
			   }
			   else{
				   alert("Complete All the worklist");
			   }
			  }
			 });
			});
		</script>
		
        <?php 
			
		
			include "footer.php";
		?>