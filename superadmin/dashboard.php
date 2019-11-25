<?php 
	include "header.php";
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
								//echo $_SESSION["user_id"]; ?>
								<div class="row" style=""> 
								<div class="" style="float: left; margin: 10px; display: block; background-color: #3083A3; width: 180px; height: 250px;">
								<a class="quick-button"  href="view_employee.php">
								
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-user" style="font-size: 80px; padding-top: 20px;"></i></br>Active Employee</p>
									<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
									<?php
										$act_imp="select * from employee_attendance where Active= '1' ";
										$statement = $connect->prepare($act_imp);
										$statement->execute();
										$total_act_emp = $statement->rowCount();
										
									?></span>
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_act_emp; ?></p>
								</a>
								</div>
								<div class="" style="float: left; margin: 10px; display: block; background-color: #F8FB4A; width: 180px; height: 250px;">
								<a class="quick-button"  href="view_employee.php">
								
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-check" style="font-size: 80px; padding-top: 20px;"></i></br>Running Task</p>
									<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
									<?php
										$act_task="select * from task where Task_Status = 'Running' ";
										$statement = $connect->prepare($act_task);
										$statement->execute();
										$total_act_task = $statement->rowCount();
										
									?></span>
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_act_task; ?></p>
								</a>
								</div>
								<div class="" style="float: left; margin: 10px; display: block; background-color: #12820F; width: 180px; height: 250px;">
								<a class="quick-button"  href="view_employee.php">
								
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-edit" style="font-size: 80px; padding-top: 20px;"></i></br>Total Complaints </p>
									<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
									<?php
										$act_imp="select * from complaint";
										$statement = $connect->prepare($act_imp);
										$statement->execute();
										$total_act_imp = $statement->rowCount();
										
									?></span>
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_act_imp; ?></p>
								</a>
								</div>
								<div class="" style="float: left; margin: 10px; display: block; background-color: #DA2A2A; width: 180px; height: 250px;">
								<a class="quick-button"  href="view_employee.php">
								
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-ban" style="font-size: 80px; padding-top: 20px;"></i></br>Total Block Employees</p>
									<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
									<?php
										$act_imp="select * from employee_registration where status = 'Blocked' ";
										$statement = $connect->prepare($act_imp);
										$statement->execute();
										$total_act_imp = $statement->rowCount();
										
									?></span>
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_act_imp; ?></p>
								</a>
								</div>
								<div class="" style="float: left; margin: 10px; display: block; background-color: #FA5BB7; width: 180px; height: 250px;">
								<a class="quick-button"  href="view_employee.php">
								
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-envelope-o" style="font-size: 80px; padding-top: 20px;"></i></br>Total Messages</p>
									<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
									<?php
										$act_imp="select * from chat_message";
										$statement = $connect->prepare($act_imp);
										$statement->execute();
										$total_unread_chat = $statement->rowCount();
										
									?></span>
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_unread_chat; ?></p>
								</a>
								</div>
								</div>	
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