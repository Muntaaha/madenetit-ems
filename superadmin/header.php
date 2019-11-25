<?php 
	include "connection.php";
	session_start();
	
	$qur="select Employee_ID from employee_registration where Employee_Name= '$_SESSION[username]' ";
	$stat = $connect->prepare($qur);
	$stat->execute();
	foreach($stat as $row){
		$_SESSION["user_id"]= $row["Employee_ID"];
	}
    //$_SESSION["user_id"] = $connect->lastInsertId();
	$not = 0;
	$query = "select * from complaint where unread_complaint ='n'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$not = $statement->rowCount();
	?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Madenet IT | EMS </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css3clock.css" />
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span> Madenet | EMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    
                    <div class="profile_info">
                        <span>Welcome,</span>

                        <h2><?php echo $_SESSION["username"]; ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3></h3>
                        <ul class="nav side-menu">
                            <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard  <span class="fa fa-chevron-down"></span></a>
							
                            </li>
							<li><a href="view_employee.php"><i class="fa fa-edit"></i>Employee Table<span class="fa fa-chevron-down"></span></a>

                            </li>
							<li><a href="employee_registration.php"><i class="fa fa-edit"></i>Employee Registration<span class="fa fa-chevron-down"></span></a>

                            </li>
							<li><a href="task_assignment.php"><i class="fa fa-edit"></i>Task_assignment<span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="view_tasks.php"><i class="fa fa-edit"></i>View Task<span class="fa fa-chevron-down"></span></a>

                            </li>
							<li><a href="view_report.php"><i class="fa fa-table"></i> View Report <span class="fa fa-chevron-down"></span></a>

                            </li>
							<li><a href="chat_history.php"><i class="fa fa-table"></i> Chat History <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="rating.php"><i class="fa fa-desktop"></i> Rating <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
                            
                            <li><a href="view_attendance.php"><i class="fa fa-bar-chart-o"></i> View Attendance <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
							
							<li><a href="receive_notification.php"><i class="fa fa-bar-chart-o"></i> View Complaint <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
							
							<!--<li><a href="#"><i class="fa fa-mail-forward"></i> Menu 6 <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>-->

                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a><!--
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li></li>
								</ul>-->
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-left">
                        <li role="presentation" class="dropdown">
                            <a href="receive_notification.php" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-globe"></i>
                                <span class="badge bg-green" onclick="window.location='receive_notification.php';"><?php echo $not; ?></span>
                            </a>
							
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->