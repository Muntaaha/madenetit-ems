<?php 
	include "header.php";
	$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>COMPLAINTS</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered">
									<tr>
										<th style="width :15%; text-align: center; font-size: 15px; padding: 5px; color: #fff; background-color: #2A3F54;">Complaint Against</th>
										<th style="width :15%; text-align: center; font-size: 15px; padding: 5px; color: #fff; background-color: #2A3F54;">Complaint From</th>
										<th style="width :30%; text-align: center; font-size: 15px; padding: 5px; color: #fff; background-color: #2A3F54;">Subject</th>
										<th style="width :40%; text-align: center; font-size: 15px; padding: 5px; color: #fff; background-color: #2A3F54;">Details</th>
									</tr>
									
									<?php 
									$res1=mysqli_query($connect,"select * from complaint where unread_complaint ='n'");
									while($row1=mysqli_fetch_array($res1)){
										echo "<tr>";
										echo "<td style='width :15%; text-align: center; font-size: 12px; color: #2A3F54; padding: 5px;'>"; echo $row1["emp_name"]; echo "</td>";
										echo "<td style='width :15%; text-align: center; font-size: 12px; color: #2A3F54; padding: 5px;'>"; echo $row1["complaint_from"]; echo "</td>";
										echo "<td style='width :30%; text-align: center; font-size: 12px; color: #2A3F54; padding: 5px;'>"; echo $row1["complaint_subject"]; echo "</td>";
										echo "<td style='width :40%; text-align: center; font-size: 12px; color: #2A3F54; padding: 5px;'>"; echo $row1["complaint_body"]; echo "</td>";
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
		
		$not_qur ="UPDATE complaint SET unread_complaint='y'";
		mysqli_query($connect, $not_qur);


		include "footer.php";
		?>