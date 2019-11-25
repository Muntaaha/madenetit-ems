<?php 
	include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Attendance Table</h3>
                    </div>

                    <div class="title_right">
                        
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="card">
							  
							  <div class="card-body card-block">
								<form action="" method="GET" class="form-inline">
								  <div class="form-group">
									<label class="pr-1  form-control-label">From</label>
									<input type="text"  required="" class="form-control datepicker" name="from">
								  </div>

								  <div class="form-group">
									<label class="px-1  form-control-label">To</label>
									<input type="text"  required="" class="form-control datepicker" name="to">
								  </div>
								  <button type="submit" class="btn btn-outline-dark btn-sm"><i class="	fa fa-search"></i></button>
								</form>
							  </div>
							</div>
                            <div class="x_content">
                                <div class="content mt-3">
									<div class="animated fadeIn">
										<div class="row">

										<div class="col-md-12">
											<div class="card">
												
												<div class="card-body">
								<!-- table start-->
												  <table id="bootstrap-data-table" class="table table-striped table-bordered">

												   <thead>
													<tr>
													   <th>Serial</th>
													   <th>Employee Name</th>
													   <th>Employee ID</th>
													   <th>Entry Date</th>
													   <th>Entry Time</th>
													   <th>Exit Date</th>
													   <th>Exit Time</th>
													   <th>Status</th>
													   <th>Working Hours</th>
													 </tr>
												   </thead>
												  <tbody>

												  <?php

												  include "conection.php";

												  //checking active mode of the user

												  if(isset($_GET['from']) && isset($_GET['to']))
												  {
													$from=$_GET['from'];
													$to=$_GET['to'];
													$prs="SELECT * FROM employee_attendance WHERE employee_attendance.entry_date BETWEEN '$from' AND '$to' && Employee_ID = '$_SESSION[user_id]'ORDER BY login_id DESC";
												  }
												  else {
													$prs="SELECT * FROM employee_attendance where Employee_ID = '$_SESSION[user_id]' ORDER BY login_id DESC";
												  }

												  $prstb = $connect->query($prs);
												  $cnt=1;

												  if ($prstb->num_rows > 0)
												   {
														while( $val = $prstb->fetch_assoc())
														  {
															  $entry_time = $val["entry_time"];
															  $exit_time = $val["exit_time"];
															  $duration = strtotime($exit_time) - strtotime($entry_time);
															  if($duration < 28800){
															  echo'
																  <tr>
																	  <td>'.$cnt.'</td>
																	  <td>'.$val["Employee_Name"].'</td>
																	  <td>'.$val["Employee_ID"].'</td>
																	  <td>'.$val["entry_date"].'</td>
																	  <td>'.$val["entry_time"].'</td>
																	  <td>'.$val["exit_date"].'</td>
																	  <td>'.$val["exit_time"].'</td>
																	  <td>'.$val["status"].'</td>
																	  <td style="color: red">'.gmdate("H:i:s",$duration).'</td>
																	  </tr>';
															$cnt++;
															  }else{
																  echo'
																  <tr>
																	  <td>'.$cnt.'</td>
																	  <td>'.$val["Employee_Name"].'</td>
																	  <td>'.$val["Employee_ID"].'</td>
																	  <td>'.$val["entry_date"].'</td>
																	  <td>'.$val["entry_time"].'</td>
																	  <td>'.$val["exit_date"].'</td>
																	  <td>'.$val["exit_time"].'</td>
																	  <td>'.$val["status"].'</td>
																	  <td>'.gmdate("H:i:s",$duration).'</td>
																	  </tr>';
															$cnt++;
															  
															  }
														  }
												   }

												  $connect->close();
												  ?>

												  </tbody>
												  </table>
										  <!-- Button to Open the Modal -->


												</div>
											</div>
										</div>

										</div>
									</div><!-- .animated -->
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<script>
			$('.datepicker').datepicker({
			  format: 'yyyy/mm/dd',
			  todayBtn: "linked",
			  keyboardNavigation: false,
			  forceParse: false,
			  autoclose: true,
			  todayHighlight: true
		});
		</script>

        <?php 
			include "footer.php";
		?>