<?php 
	include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Chat History</h3>
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
													   <th>Sent From </th>
													   <th>Received</th>
													   <th>Time</th>
													   <th>Messages</th>
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
													$prs="SELECT * FROM chat_message WHERE chat_message.time BETWEEN '$from' AND '$to' ORDER BY chat_message_id DESC";
												  }
												  else {
													$prs="SELECT * FROM chat_message ORDER BY chat_message_id DESC";
												  }

												  $prstb = $connect->query($prs);
												  $cnt=1;

												  if ($prstb->num_rows > 0)
												   {
														while( $val = $prstb->fetch_assoc())
														  {
															  echo'
																  <tr>
																	  <td>'.$cnt.'</td>
																	  <td>'.$val["from_user"].'</td>
																	  <td>'.$val["to_user"].'</td>
																	  <td>'.$val["time"].'</td>
																	  <td>'.$val["chat_message"].'</td>


																	  </tr>';
															$cnt++;
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