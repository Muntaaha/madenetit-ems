<?php 
	include "header.php";
	include "check.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                    </div>
				</div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        
                            
                            <div class="x_content">
                                <?php 
								//echo $_SESSION["user_id"];
								//$date=date_create("10:00:00",timezone_open("Asia/Dhaka"));
								//echo date_format($date,"H:i:s");
								//$date2=date_create(date("Y-m-d"));
								//echo $_SESSION["login_id"];
								//$time=date("H:i:s");
								//echo $time;
								?>
								<div class="row">
								  <div class="col-md-3">
									<div class="" style="float: left; margin: 10px; display: block; background-color: #FA5BB7; width: 180px; height: 250px;">
										<a class="quick-button"  href="view_employee.php">
										
											<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-envelope-o" style="font-size: 80px; padding-top: 20px;"></i></br>Total Messages</p>
											<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
											<?php
												$act_imp="select * from chat_message where to_user = '$_SESSION[user_id]' ";
												$statement = $connect->prepare($act_imp);
												$statement->execute();
												$total_unread_chat = $statement->rowCount();
												
											?></span>
											<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_unread_chat; ?></p>
										</a>
								</div>
								<div class="" style="float: left; margin: 10px; display: block; background-color: #12820F; width: 180px; height: 250px;">
								<a class="quick-button"  href="view_employee.php">
								
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-ban" style="font-size: 80px; padding-top: 20px;"></i></br>Total Complaints </p>
									<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
									<?php
										$act_imp="select * from complaint where emp_name = '$_SESSION[username]'";
										$statement = $connect->prepare($act_imp);
										$statement->execute();
										$total_act_imp = $statement->rowCount();
										
									?></span>
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_act_imp; ?></p>
								</a>
								</div>
								  </div>
								  <div class="col-md-3">
									<div class="" style="float: left; margin: 10px; display: block; background-color: #000000; width: 180px; height: 250px;">
								<a class="quick-button"  href="view_employee.php">
								
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><i class="fa fa-check" style="font-size: 80px; padding-top: 20px;"></i></br>Completed Tasks</p>
									<span class="" style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;" >
									<?php
										$act_task="select * from task where Task_Status = 'Completed' && to_user = '$_SESSION[user_id]' ";
										$statement = $connect->prepare($act_task);
										$statement->execute();
										$total_act_task = $statement->rowCount();
										
									?></span>
									<p style="text-align: center; font-weight: bold; font-size: 30px; color: #ffffff;"><?php echo $total_act_task; ?></p>
								</a>
								</div>
								  </div>
								  <div class="col-md-6" style="border-left: 5px solid #2A3F54; border-radius: 5px; padding: 70px;">
								  <?php 
								  
								  if(isset($_SESSION["active"]) && ($_SESSION["active"])==0)
								  {?>
								  <h1 style="font-family: 'Comic Sans MS', cursive, sans-serif; font-weight: bold; font-size: 34px; ">Submit Your Arival Time</h1>
								  <div align="right" style="padding-bottom : 60px;">
								  <a href="submit_arrival_time.php">
								  <button type="button" name="submit_arrival_time" id="submit_arrival_time" style="font-family: 'Comic Sans MS', cursive, sans-serif; font-weight: bold; font-size: 24px; background-color: #000;" class="btn btn-info btn-lg">Submit </button>
								  </a>
								  </div>
								  <?php
								  }
								  else
								  {
									?>  
									  <h1 style="font-family: 'Comic Sans MS', cursive, sans-serif; font-weight: bold; font-size: 34px; ">Submit Your Departure Time</h1>
								  <div align="right" style="padding-bottom : 60px;">
								  <a href="submit_departure_time.php">
								  <button type="button" name="submit_departure_time" id="submit_departure_time" style="font-family: 'Comic Sans MS', cursive, sans-serif; font-weight: bold; font-size: 24px; background-color: #2A3F54;" class="btn btn-info btn-lg">Submit </button>
								  </a>
								  </div>
									  <?php
								  }
								  //echo $_SESSION["entry_time"];
								  
								  //if(isset($_SESSION["entry_time"]))
								  //{
								  
									
									
								  //}
								  ?>
									<div id="liveclock" class="outer_face">

										<div class="marker oneseven"></div>
										<div class="marker twoeight"></div>
										<div class="marker fourten"></div>
										<div class="marker fiveeleven"></div>

										<div class="inner_face">
										<div class="hand hour"></div>
										<div class="hand minute"></div>
										<div class="hand second"></div>
										</div>

										</div>
								  </div>
								</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
<script type="text/javascript">


var $hands = $('#liveclock div.hand')

window.requestAnimationFrame = window.requestAnimationFrame
                               || window.mozRequestAnimationFrame
                               || window.webkitRequestAnimationFrame
                               || window.msRequestAnimationFrame
                               || function(f){setTimeout(f, 60)}


function updateclock(){
	var curdate = new Date()
	var hour_as_degree = ( curdate.getHours() + curdate.getMinutes()/60 ) / 12 * 360
	var minute_as_degree = curdate.getMinutes() / 60 * 360
	var second_as_degree = ( curdate.getSeconds() + curdate.getMilliseconds()/1000 ) /60 * 360
	$hands.filter('.hour').css({transform: 'rotate(' + hour_as_degree + 'deg)' })
	$hands.filter('.minute').css({transform: 'rotate(' + minute_as_degree + 'deg)' })
	$hands.filter('.second').css({transform: 'rotate(' + second_as_degree + 'deg)' })
	requestAnimationFrame(updateclock)
}

requestAnimationFrame(updateclock)


</script>

        <?php 
			include "footer.php";
		?>