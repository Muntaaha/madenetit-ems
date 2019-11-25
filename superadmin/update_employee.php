<?php 
	include "header.php";
	$connect = mysqli_connect("localhost", "root", "", "ems_madenetit");
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Superadmin Area</h3>
                    </div>

                    <div class="title_right">
                        
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php 
								$id= $_GET["id"];
								$res5=mysqli_query($connect,"select * from employee_registration where id='".$id."'");
								while($row5=mysqli_fetch_array($res5))
								{
									$employee_name= $row5["Employee_Name"];
									$employee_id= $row5["Employee_ID"];
									$employee_designation= $row5["Employee_Designation"];
									$employee_level= $row5["Employee_Level"];
									$employee_email= $row5["Employee_Email"];
									$employee_address= $row5["Employee_Address"];
									$employee_history= $row5["Employee_Education_Experience"];
									$employee_contact= $row5["Employee_Mobile_No"];
								}
							?>
							<form class="form-horizontal" method="post" id="register_form">
									<div class="form-group">
										<label class="control-label col-sm-3">Employee Name</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_name" id="employee_name" value="<?php echo $employee_name; ?>"  placeholder="" required>
											<span id="error_employee_name" class="text-danger"></span>
										</div>
								    </div>
									
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Designation</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_designation" id="employee_designation" value="<?php echo $employee_designation; ?>" placeholder="" required>
											<span id="error_employee_designation" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Level</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_level" id="employee_level" value="<?php echo $employee_level; ?>" placeholder="" required>
											<span id="error_employee_level" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Gender</label>
										<div class="col-sm-6"  class="radio-inline">
										    <label>
												<input type="radio" name="employee_gender" value="male" checked>Male</label>
												<input type="radio" name="employee_gender" value="female">Female</label>
											</label>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Email</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_email" id="employee_email" value="<?php echo $employee_email; ?>" placeholder="" required>
											<span id="error_employee_email" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Mobile Number</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_mobile_no" id="employee_mobile_no" value="<?php echo $employee_contact; ?>" placeholder="" required>
											<span id="error_employee_mobile_no" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Address</label>
										<div class="col-sm-6">
											<textarea rows="4" class="form-control" name="employee_address" id="employee_address"  placeholder="" required><?php echo $employee_address; ?></textarea>
											<span id="error_employee_address" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Education/Experience</label>
										<div class="col-sm-6">
											<textarea rows="4" class="form-control" name="employee_education_experience" id="employee_education_experience" value="" placeholder="" required><?php echo $employee_history; ?></textarea>
											<span id="error_employee_education_experience" class="text-danger"></span>
										</div>
								    </div> 
									<div align="center">
										<button type="submit" name="employee_registration" id="btn_employee_registration" class="btn btn-sucess btn-lg">UPDATE</button>
									</div>
								</form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
					
						<?php	
						if(isset($_POST["employee_registration"]))
						{
						mysqli_query($connect,"UPDATE employee_registration SET Employee_Name = '$_POST[employee_name]', Employee_Designation= '$_POST[employee_designation]', Employee_Level ='$_POST[employee_level]', Employee_Address = '$_POST[employee_address]', Employee_Gender= '$_POST[employee_gender]', Employee_Email = '$_POST[employee_email]', Employee_Mobile_No = '$_POST[employee_mobile_no]', Employee_Education_Experience = '$_POST[employee_education_experience]' where id ='$_GET[id]'");
						?>
						<script type="text/javascript">
										alert("Employee Information Updated");
									</script>
						<?php
						}
						?>
					
        <!-- /page content -->


        <?php 
			include "footer.php";
		?>