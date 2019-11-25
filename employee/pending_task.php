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
                                <h2>Employee Area</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered">
									<tr>
										<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Order ID</th>
										<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Task Name</th>
										<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Assigned By</th>
										<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Assigned Date</th>
										<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #2A3F54;">Deadline</th>
										<th style="text-align: center; font-size: 15px; padding: 10px; color: #fff; background-color: #41ACE9;">View Task</th>
									</tr>
									
									<?php 
									$res1=mysqli_query($connect,"select * from task where Task_Status ='Running' && Employee_Name = '$_SESSION[username]'");
									while($row1=mysqli_fetch_array($res1)){
										echo "<tr>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Order_Id"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Task_Name"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Assigned_By"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Assignment_Date_Employee"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; echo $row1["Submission_Date_Employee"]; echo "</td>";
										echo "<td style='text-align: center; font-size: 12px; color: #2A3F54; padding: 10px;'>"; ?> <a href="received_task.php?id=<?php echo $row1["id"] ?>"><button type="submit" class="btn btn-primary" name="view_task" id="view_task">VIEW TASK</button></a><?php echo "</td>";
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