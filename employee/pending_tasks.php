<?php 
	include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3 style="color: #2A3F54;">Employee Area</h3>
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
							<div class="title_right">
								</a>
							</div>
							<div align="center"><h1 style="color: #2A3F54;"><b>PENDING TASKS </b></h1></div>
                            <div class="x_content">
								
                                <?php
								$query= "select * from task where Task_Status ='Running' && Employee_Name = '$_SESSION[username]'";
								$data = $connect->query($query);
								echo '<table width="100%" cellpadding="15" cellspacing="15">
								<tr>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Order ID</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Task Name</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Assigned By</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Assigned Date</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Deadline</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #41ACE9;">View Task</th>
							</tr>';
							
							foreach($data as $row)
							{
								echo '<tr>
										<form action="" method ="POST">
											<input type="hidden" name="emp_id" value="'.$row["id"].'">
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Order_Id"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Task_Name"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Assigned_By"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Assignment_Date_Employee"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Submission_Date_Employee"].'</td>
											<td style="text-align: center; padding: 5px;">
												<button type="submit" class="btn btn-primary" value="'.$row["id"].'" name="view_task" id="view_task">VIEW TASK</button>
											</td>
										</form>
									</tr>';
								if(isset($_POST["view_task"]))
								{
									//$id= $_GET["id"];
							?>
									<script type="text/javascript">
										
										window.location="received_task.php";
									</script>
								<?php }
							}
							echo '</table>';
							?>
							
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script>
		
		
		</script>
        <!-- /page content -->


        <?php 
			include "footer.php";
		?>