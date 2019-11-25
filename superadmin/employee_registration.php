<?php 
	include "header.php";
	$connect = new PDO('mysql:host=localhost;dbname=ems_madenetit', 'root', '');
	$message = '';
	
	if(isset($_POST["employee_name"]))
	{
		$query = "INSERT INTO employee_registration(Employee_Name, Employee_ID, Password, Employee_Designation, Employee_Level, Employee_Gender, Employee_Email, Employee_Mobile_No, Employee_Address, Employee_Education_Experience, status) VALUES(:employee_name, :employee_id, :password, :employee_designation, :employee_level, :employee_gender, :employee_email, :employee_mobile_no, :employee_address, :employee_education_experience, :status)";
		
		$password_hash = password_hash(PASSWORD_DEFAULT, PASSWORD_DEFAULT);
		$employee_id = rand(10000000,999999999);
		$user_data = array(
			':employee_name' => $_POST["employee_name"],
			':employee_id' => $employee_id,
			':password' => $password_hash,
			':employee_designation' => $_POST["employee_designation"],
			':employee_level' => $_POST["employee_level"],
			':employee_gender' => $_POST["employee_gender"],
			':employee_email' => $_POST["employee_email"],
			':employee_mobile_no' => $_POST["employee_mobile_no"],
			':employee_address' => $_POST["employee_address"],
			':employee_education_experience' => $_POST["employee_education_experience"], 
			':status' => 'Active',
			
		);
		$statement = $connect->prepare($query);
		if($statement ->execute($user_data))
		{
			$message = ' <div class="alert alert-success">Registration Completed Successfully</div>';
			echo "Data Inserted";
		}
	}
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>SuperAdmin Area</h3>
                    </div>

                    <div class="title_right">
                        
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 class ="">Employee Registration</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form class="form-horizontal" method="post" id="register_form">
									<div class="form-group">
										<label class="control-label col-sm-3">Employee Name</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="" required>
											<span id="error_employee_name" class="text-danger"></span>
										</div>
								    </div>
									
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Designation</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_designation" id="employee_designation" placeholder="" required>
											<span id="error_employee_designation" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Level</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" name="employee_level" id="employee_level" placeholder="" required>
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
											<input type="text" class="form-control" name="employee_email" id="employee_email" placeholder="" required>
											<span id="error_employee_email" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Mobile Number</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="employee_mobile_no" id="employee_mobile_no" placeholder="" required>
											<span id="error_employee_mobile_no" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Address</label>
										<div class="col-sm-6">
											<textarea rows="4" class="form-control" name="employee_address" id="employee_address" placeholder="" required></textarea>
											<span id="error_employee_address" class="text-danger"></span>
										</div>
								    </div>
									<div class="form-group">
										<label class="control-label col-sm-3">Employee's Education/Experience</label>
										<div class="col-sm-6">
											<textarea rows="4" class="form-control" name="employee_education_experience" id="employee_education_experience" placeholder="" required></textarea>
											<span id="error_employee_education_experience" class="text-danger"></span>
										</div>
								    </div> 
									<div align="center">
										<button type="button" name="employee_registration" id="btn_employee_registration" class="btn btn-sucess btn-lg">Registration</button>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<script>
			$(document).ready(function(){
				$('#btn_employee_registration').click(function(){
					var error_employee__name= '';
					var error_employee_designation= '';
					var error_employee_level= '';
					var error_employee_email= '';
					var error_employee_mobile_no= '';
					var error_employee_address= '';
					var filter = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
					var mobile_validation = /\+?(88)?0?1[56789][0-9]{8}\b/;
					var name_validation= /^[a-zA-Z][a-zA-Z\\s]+$/;
					
					if($.trim($('#employee_name').val()).length == 0)
					{
						error_employee_name = 'First Name name is required';
						$('#error_employee_name').text(error_employee_name);
						$('#employee_name').addClass('has-error');
					}
					else
					{
						if(!name_validation.test($('#employee_name').val()))
						{
							error_employee_name = 'Invalid Name';
							$('#error_employee_name').text(error_employee_name);
							$('#employee_name').addClass('has-error');
						}
						else
						{
							error_employee_name = '';
							$('#error_employee_name').text(error_employee_name);
							$('#employee_name').removeClass('has-error');
						}
					}
					
					
					
					if($.trim($('#employee_designation').val()).length == 0)
					{
						error_employee_designation = 'Employee Designation is required';
						$('#error_employee_designation').text(error_employee_designation);
						$('#employee_designation').addClass('has-error');
					}
					else
					{
						if(!name_validation.test($('#employee_designation').val()))
						{
							error_employee_designation = 'Invalid Designation';
							$('#error_employee_designation').text(error_employee_designation);
							$('#employee_designation').addClass('has-error');
						}
						else
						{
							error_employee_designation = '';
							$('#error_employee_designation').text(error_employee_designation);
							$('#employee_designation').removeClass('has-error');
						}
					}
					
					if($.trim($('#employee_level').val()).length == 0)
					{
						error_employee_level = 'Level is required';
						$('#error_employee_level').text(error_employee_level);
						$('#employee_level').addClass('has-error');
					}
					else
					{
						error_employee_level = '';
						$('#error_employee_level').text(error_employee_level);
						$('#employee_level').removeClass('has-error');
					}
					
					if($.trim($('#employee_email').val()).length == 0)
					{
						error_employee_email = 'Email name is required';
						$('#error_employee_email').text(error_employee_email);
						$('#employee_email').addClass('has-error');
					}
					else
					{
						if(!filter.test($('#employee_email').val()))
						{
							error_employee_email = 'Invalid Email';
							$('#error_employee_email').text(error_employee_email);
							$('#employee_email').addClass('has-error');
						}
						else
						{
							error_email = '';
							$('#error_employee_email').text(error_employee_email);
							$('#employee_email').removeClass('has-error');
						}
					}
					
					if($.trim($('#employee_mobile_no').val()).length == 0)
					{
						error_employee_mobile_no = 'Mobile No is required';
						$('#error_employee_mobile_no').text(error_employee_mobile_no);
						$('#employee_mobile_no').addClass('has-error');
					}
					else
					{
						if(!mobile_validation.test($('#employee_mobile_no').val()))
						{
							error_employee_mobile_no = 'Invalid Mobile No';
							$('#error_employee_mobile_no').text(error_employee_mobile_no);
							$('#employee_mobile_no').addClass('has-error');
						}
						else
						{
							error_employee_mobile_no = '';
							$('#error_employee_mobile_no').text(error_employee_mobile_no);
							$('#employee_mobile_no').removeClass('has-error');
						}
					}
					
					if($.trim($('#employee_address').val()).length == 0)
					{
						error_employee_address = 'First name is required';
						$('#error_employee_address').text(error_employee_address);
						$('#employee_address').addClass('has-error');
					}
					else
					{
						error_employee_address = '';
						$('#error_employee_address').text(error_employee_address);
						$('#employee_address').removeClass('has-error');
					}
					
					if(error_employee_name != '' || error_employee_designation !='' || error_employee_level !='' || error_employee_email !='' || error_employee_mobile_no !='' || error_employee_address !='')
					{
						return false;
					}
					else
					{
							
						$('#register_form').submit();
					}
				});
			});
		</script>
        <!-- /page content -->


        <?php 
			include "footer.php";
		?>