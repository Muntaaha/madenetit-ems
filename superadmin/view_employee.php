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
                                <table class="table table-bordered" style="width: 100%">
									<tr>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Employee Name</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Employee ID</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Password</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Designation</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Email</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Contact</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Address</th>										
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">History</th>										
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Status</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">UPDATE</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Block</th>
										<th style="width: 9%; text-align: center; font-size: 12px; padding: 3px; color: #fff; background-color: #2A3F54;">Unblock</th>
									</tr>
									
									<?php 
									$res1=mysqli_query($connect,"select * from employee_registration");
									while($row1=mysqli_fetch_array($res1)){
										echo "<tr>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Employee_Name"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Employee_ID"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Password"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Employee_Designation"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Employee_Email"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Employee_Mobile_No"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Employee_Address"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["Employee_Education_Experience"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-weight: bold; font-size: 12px; color: #2A3F54; padding: 3px;'>"; echo $row1["status"]; echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-size: 10px; color: #2A3F54; padding: 3px;'>"; ?> <a href="update_employee.php?id=<?php echo $row1["id"] ?>"><button type="submit" class="btn btn-primary" name="update_employee" id="update_employee">UPDATE</button></a><?php echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-size: 10px; color: #2A3F54; padding: 3px;'>"; ?> <a href="block_employee.php?id=<?php echo $row1["id"] ?>"><button type="submit" class="btn btn-primary" name="update_employee" id="update_employee">Block</button></a><?php echo "</td>";
										echo "<td style='width: 9%; text-align: center; font-size: 10px; color: #2A3F54; padding: 3px;'>"; ?> <a href="unblock_employee.php?id=<?php echo $row1["id"] ?>"><button type="submit" class="btn btn-primary" name="update_employee" id="update_employee">Unblock</button></a><?php echo "</td>";
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