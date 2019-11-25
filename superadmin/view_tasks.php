<?php 
	include "header.php";
	$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Employee Area</h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Employee Area</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table width="100%" cellpadding="15" cellspacing="15">
									<tr>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Order ID</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Task Name</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Worklist</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Employee Name</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Assigned Date</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Submission Date</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Task Status</th>
								<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Cancel</th>
							</tr>
									
									<?php 
									$res1=mysqli_query($connect,"select * from task where Assigned_By = '$_SESSION[username]'");
									while($row1=mysqli_fetch_array($res1)){
										echo "<tr>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Order_Id"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Task_Name"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["worklist"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Employee_Name"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Assignment_Date_Employee"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Submission_Date_Employee"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Task_Status"]; echo "</td>";
										echo "<td style='text-align: center; padding: 5px;'>"; ?> <a href="cancel_task.php?id=<?php echo $row1["id"] ?>">
											<button type="submit" class="btn btn-danger" name="cancel_task" id="cancel_task">CANCEL</button>
										</a><?php echo "</td>";
									echo "</tr>";
									}
									?>
								</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <?php 
			include "footer.php";
		?>