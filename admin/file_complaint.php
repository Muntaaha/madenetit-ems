<?php 
	include "header.php";	
	$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                
                    
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>File A Complaint</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form class="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
								<table class="table table-bordered">
									<tr>
										<td>
											<select class="form-control" name="emp_name">
												<?php 
													$res= mysqli_query($connect,"select * from employee_registration");
													while($row=mysqli_fetch_array($res))
													{
														?><option value="<?php echo $row["Employee_Name"]?>">
														<?php echo $row["Employee_Name"]."(".$row["Employee_ID"].")"; ?>
														</option><?php
													}
												?>
											<option></option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" class="form-control" placeholder="Complaint Subject" name="complaint_subject">
										</td>
									</tr>
									<tr>
										<td>
											Description<br>
											<textarea class="form-control" name="complaint_body">
											
											</textarea>
										</td>
									</tr>
									<tr>
										<td>
											<input type="submit" class="btn btn-success" name="submit1" value="SEND">
										</td>
									</tr>
								</table>
							   </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<?php 
		if(isset($_POST["submit1"]))
		{
			mysqli_query($connect,"INSERT INTO complaint(emp_name, complaint_subject, complaint_body, complaint_from, unread_complaint) values('$_POST[emp_name]','$_POST[complaint_subject]','$_POST[complaint_body]', '$_SESSION[username]', 'y')") or die(mysqli_error($connect));
			?>
				<script type="text/javascript">
					alert("message has been sent!");
				</script>
			<?php
		}
		?>

        <?php 
			include "footer.php";
		?>