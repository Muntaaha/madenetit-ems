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
								<a href="task_assignment.php" class=""  aria-expanded="false">
									<i class="fa fa-folder" style="font-size: 40px; float:right; padding: 10px;"></i>
								</a>
							</div>
							<div align="center"><h1 style="color: #2A3F54;"><b>TASK TABLE</b></h1></div>
                            <div class="x_content">
								
                                <?php
								$query= "select * from task where Assigned_By = '$_SESSION[username]'";
								$data = $connect->query($query);
								echo '<table width="100%" cellpadding="15" cellspacing="15">
								<tr>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Order ID</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Task Name</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Worklist</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Employee Name</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Assigned Date</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Submission Date</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Task Status</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Cancel</th>
							</tr>';
							
							foreach($data as $row)
							{
								echo '<tr>
										<form action="" method ="POST">
											<input type="hidden" name="emp_id" value="'.$row["id"].'">
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Order_Id"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Task_Name"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["worklist"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Employee_Name"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Assignment_Date_Employee"].'</td>
											<td style="text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;">'.$row["Submission_Date_Employee"].'</td>
											<td style="text-align: center; font-size: 12px; font-weight: bold; color: #fff; background-color: #228B22; padding: 10px;">'.$row["Task_Status"].'</td>
											<td style="text-align: center; padding: 5px;">
												<button type="submit" class="btn btn-danger" value="'.$row["id"].'" name="cancel_task" id="cancel_task">CANCEL</button>
											</td>
										</form>
									</tr>';
							}
								
							echo '</table>';
							?>
							
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<?php
		if(isset($_POST["cancel_task"])){
			$sql= "UPDATE task SET Task_Status= 'Cancelled' WHERE id= '$row[id]' ";
			$statement = $connect->prepare($sql);
			$statement->execute();
		}
		
		?>

        <?php 
			include "footer.php";
		?>