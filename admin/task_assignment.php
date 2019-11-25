<?php 
	
	include "header.php";
	$message = '';
	$sql= "select Employee_Level from employee_registration where Employee_Name = '$_SESSION[username]'";
	$stat= $connect->query($sql);
	$stat->execute();
	$result=$stat->fetchAll();
	foreach($result as $res){
		$emp_level = $res["Employee_Level"];
	}
	if(isset($_POST["task_name"]))
	{
		$query = "INSERT INTO task(Employee_Name, Task_Name, Order_Id, Category, worklist, Assigned_By, Submission_Date_Employee ,Discussion,Task_Status, unread_msg_num) VALUES(:employee_name, :task_name, :order_id,:category, :worklist,:assigned_by, :deadline, :discussion, :task_status, :unread_msg_num)";
		$worklist = implode(", ", $_POST["worklist"]);
		$unread_msg_num= "n";
		$user_data = array(
			':employee_name' => $_POST["employee_name"],
			':task_name' => $_POST["task_name"],
			':order_id' => $_POST["order_id"],
			':worklist' => $worklist,
			':assigned_by' => $_SESSION["username"],
			':task_status' => "Running",
			':deadline' => $_POST["deadline"],
			':category' => $_POST["category"],
			':unread_msg_num' => $unread_msg_num,
			':discussion' => $_POST["discussion"],
			
		);
		$statement = $connect->prepare($query);
		if($statement ->execute($user_data))
		{
			$message = ' <div class="alert alert-success">Registration Completed Successfully</div>';
			//echo "Data Inserted";
		}
	}
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
                                <h2>Task Assignment</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							
                                <form method="post" id="register_form">
									<ul class="nav nav-tabs">
										<li>
											<a class="nav-link active_tab1" style="border: 1px solid #ccc" id="list_recepient_details">Receipent</a>
										</li>
										<li>
											<a class="nav-link inactive_tab1" style="border: 1px solid #ccc" id="list_task_details">Task</a>
										</li>
										<li>
											<a class="nav-link active tab1" style="border: 1px solid #ccc" id="list_deadline_details">DeadLine</a>
										</li>
									</ul>
									<div class="tab-content" style="margin-top:16px;">
										<div class="tab-pane active" id="recepient_details">
											<div class="panel panel-default">
												<div class="panel-heading">Task Receipent</div>
												<div class="panel-body">
													<div class="form-group">
														<table class="table ">
															<tr>
																<td>
																	<div class="form-group">
																		<?php 
																		$select_query = "select Employee_Name, Employee_ID, Employee_Designation from employee_registration";
																		
																		try{
																			$stmt = $connect->prepare($select_query);
																			$stmt->execute();
																			$results=$stmt->fetchAll();
																		}
																		catch(Exception $ex){
																			echo($ex -> getMessage());
																		}
																		 //echo $message; ?>
																		<label>Enter Employee Name</label>
																		<div align="center">
																		<!--<input type="select" name="employee_name" id="employee_name" class="form-control" /> -->
																		<select name="employee_name" id="employee_name" class="form-control">
																			<!--<option>---Employee Name---</option>-->
																			<?php foreach ($results as $output){ 
																			
																			//$employee_id = $output["Employee_ID"];
																			?>
																			<option><?php echo $output["Employee_Name"];?>(<?php echo $output["Employee_ID"];?>)</option>
																			<?php 
																			
																			}
																			?>
																		</select><!--<button type="button" id="search" class="search btn btn-success btn-lg"  style="margin: 20px;">SEARCH</button>-->
																		
																		<span id="employee_name_error" class="text-danger"></span>
																		</div>
																		<?php
																		//if(isset($_POST["employee_name"]))
																		//{?>
																		<!--<form>
																			<div class="">
																				<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Employee Name: </label>
																				<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Employee_Name; ?>" name="Employee_Name" disabled>
																			</div>
																			<div class="">
																				<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Employee ID: </label>
																				<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Employee_ID; ?>" name="Employee_ID" disabled>
																			</div>
																			<div class="">
																				<label style="font-family: Times New Roman, sans-serif; font-size: 18px;">Employee Designation: </label>
																				<input type="text" style="font-family: Times New Roman, sans-serif; background-color: transparent; border: none; font-size: 18px;" class="" value="<?php echo $Employee_Designation; ?>" name="Employee_Designation" disabled>
																			</div>
																		</form>-->
																		<?php
																		//}
																		
																		?>
																	</div>
																</td>
																
															</tr>
														</table>
														
													</div>
													<div align="center">
														<button type="button" name="btn_recepient_details" id="btn_recepient_details" class="btn btn-info btn-lg">Next</button>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="task_details">
											<div class="panel panel-default">
												<div class="panel-heading">Task Details</div>
												<div class="panel-body">
													<div class="form-group">
														<label>Order ID</label>
														<input type="text" name="order_id" id="order_id" class="form-control" />
														<span id="error_order_id" class="text-danger"></span>
													</div>
													<div class="form-group">
														<label>Enter Task Name</label>
														<input type="text" name="task_name" id="task_name" class="form-control" />
														<span id="task_name_error" class="text-danger"></span>
													</div>
													
													<div class="form-group">
													<?php 
														$wc_query = "select * from work_category";
																		
															try{
																$wc_stmt = $connect->prepare($wc_query);
																$wc_stmt->execute();
																$wc_results= $wc_stmt->fetchAll();
															}
															catch(Exception $ex){
																echo($ex -> getMessage());
															}
													?>
													<label>Select Work Category</label>
													<select name="category" id="category" class="form-control">
														<!--<option>---Category---</option>-->
															<?php foreach ($wc_results as $wc_output){ 
															?>
															<option><?php echo $wc_output["work_category"];?></option>
															<?php }
															?>
													</select>
													</div>
													 <table class="table" id="worklist_table">
													  <tr>
													   <th>Worklist</th>
													   <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
													   <!--<tr>
													   <td><input type="text" name="worklist[]" class="form-control worklist" /></td>
													   <td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>-->
													  </tr>
													 </table>
													<!--<span id="error_worklist" class="text-danger"></span>-->
													<div align="center">
														<button type="button" name="previous_btn_task_details" id="previous_btn_task_details" class="btn btn-info btn-lg">Previous</button>
														<button type="button" name="btn_task_details" id="btn_task_details" class="btn btn-info btn-lg">Next</button>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="deadline_details">
											<div class="panel panel-default">
												<div class="panel-heading">Task DeadLine</div>
												<div class="panel-body">
													<div class="form-group">
														<label>DeadLine</label>
														<div class="form-group">
															<input type="text"  required="" id="deadline" class="form-control datepicker" name="deadline">
															<span id="deadline_error" class="text-danger"></span>
														</div>
													</div>
													<div class="form-group">
														<label>Discussion</label>
														<div class="form-group">
														<textarea name="discussion" id="discussion" row="5" class="form-control"></textarea>
														</div>
													</div>
													<div align="center">
														<button type="button" name="previous_btn_deadline_details" id="previous_btn_deadline_details" class="btn btn-info btn-lg">Previous</button>
														<button type="submit" name="btn_deadline_details" id="btn_deadline_details" class="btn btn-info btn-lg assign">Assign</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

			<script>

		$(document).ready(function(){		   
			$('#btn_recepient_details').click(function(){
			var employee_name_error= '';
			if($.trim($('#employee_name').val()).length == 0)
			{
				employee_name_error = 'Employee name is required';
				$('#employee_name_error').text(employee_name_error);
				$('#employee_name').addClass('has-error');
			}
			else
			{
				employee_name_error = '';
				$('#employee_name_error').text(employee_name_error);
				$('#employee_name').removeClass('has-error');
			}if(employee_name_error != '')
			{
				return false;
			}
			else
			{
				$('#list_recepient_details').removeClass('active active_tab1');
				$('#list_recepient_details').removeAttr('href data-toggle');
				$('#recepient_details').removeClass('active');
				$('#list_recepient_details').addClass('inactive_tab1');
				$('#list_task_details').removeClass('inactive_tab1');
				$('#list_task_details').addClass('active_tab1 active');
				$('#list_task_details').attr('href', '#personal_details');
				$('#list_task_details').attr('data-toggle', 'tab');
				$('#task_details').addClass('active in');
			}
			});
			$(document).on('click', '.add', function(){
			  var html = '';
			  html += '<tr>';
			  html += '<td><input type="text" name="worklist[]" class="form-control worklist" /></td>';
			  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
			  $('#worklist_table').append(html);
			 });
			 
			 $(document).on('click', '.remove', function(){
			  $(this).closest('tr').remove();
			 });
			 			 
			$('#previous_btn_task_details').click(function(){
				$('#list_task_details').removeClass('active active_tab1');
				$('#list_task_details').removeAttr('href data-toggle');
				$('#task_details').removeClass('active in');
				$('#list_task_details').addClass('inactive_tab1');
				$('#list_recepient_details').removeClass('inactive_tab1');
				$('#list_recepient_details').addClass('active_tab1 active');
				$('#list_recepient_details').attr('href', '#login_details');
				$('#list_recepient_details').attr('data-toggle', 'tab');
				$('#recepient_details').addClass('active in');
			});	
			$('#btn_task_details').click(function(){
			var error_order_id= '';
			var task_name_error= '';
			//var error_worklist= '';
			
			if($.trim($('#order_id').val()).length == 0)
			{
				error_order_id = 'Order Id is required';
				$('#error_order_id').text(error_order_id);
				$('#order_id').addClass('has-error');
			}
			else
			{
				error_order_id = '';
				$('#error_order_id').text(error_order_id);
				$('#order_id').removeClass('has-error');
			}
			if($.trim($('#task_name').val()).length == 0)
			{
				task_name_error = 'Task name is required';
				$('#task_name_error').text(task_name_error);
				$('#task_name').addClass('has-error');
			}
			else
			{
				task_name_error = '';
				$('#task_name_error').text(task_name_error);
				$('#task_name').removeClass('has-error');
			}
			
			//if($.trim($('#worklist_table').val()).length == 0)
			//{
				//error_worklist = 'Worklist is required';
				//$('#error_worklist').text(error_worklist);
				//$('#worklist_table').addClass('has-error');
			//}
			//else
			//{
				//error_worklist = '';
				//$('#eerror_worklist').text(error_worklist);
				//$('#worklist_table').removeClass('has-error');
			//}
			//if(order_id_error != '' || task_name_error != '' || error_worklist != '')
			if(error_order_id != '' || task_name_error != '')
			{
				return false;
			}
			else
			{
				$('#list_task_details').removeClass('active active_tab1');
				$('#list_task_details').removeAttr('href data-toggle');
				$('#task_details').removeClass('active');
				$('#list_task_details').addClass('inactive_tab1');
				$('#list_deadline_details').removeClass('inactive_tab1');
				$('#list_deadline_details').addClass('active_tab1 active');
				$('#list_deadline_details').attr('href', '#contact_details');
				$('#list_deadline_details').attr('data-toggle', 'tab');
				$('#deadline_details').addClass('active in');
			}
			});
			$('#previous_btn_deadline_details').click(function(){
				$('#list_deadline_details').removeClass('active active_tab1');
				$('#list_deadline_details').removeAttr('href data-toggle');
				$('#deadline_details').removeClass('active in');
				$('#list_deadline_details').addClass('inactive_tab1');
				$('#list_task_details').removeClass('inactive_tab1');
				$('#list_task_details').addClass('active_tab1 active');
				$('#list_task_details').attr('href', '#login_details');
				$('#list_task_details').attr('data-toggle', 'tab');
				$('#task_details').addClass('active in');
			});
			$('#btn_deadline_details').click(function(){
				var deadline_error= '';
				if($.trim($('#deadline').val()).length == 0)
				{
					deadline_error = 'DeadLine is required';
					$('#deadline_error').text(deadline_error);
					$('#deadline').addClass('has-error');
				}
				else
				{
					deadline_error = '';
					$('#deadline_error').text(deadline_error);
					$('#deadline').removeClass('has-error');
				}if(deadline_error != '')
				{
					return false;
				}
				else
				{
				$('#register_form').submit();
				}
			});
		});
		
		$('.datepicker').datepicker({
			  format: 'yyyy/mm/dd',
			  todayBtn: "linked",
			  keyboardNavigation: false,
			  forceParse: false,
			  autoclose: true,
			  todayHighlight: true
		});
		
		$('.datepicker').datepicker({
			  format: 'yyyy/mm/dd',
			  todayBtn: "linked",
			  keyboardNavigation: false,
			  forceParse: false,
			  autoclose: true,
			  todayHighlight: true
		});
	</script>
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