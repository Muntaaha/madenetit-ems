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
		<div class="container" style="width: 800px;">
			<h2 align="center">Task Rating</h2>
			<br/>
			<span id="task_list"></span>
			<br/>
			<br/>
		</div>
	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
$(document).ready(function(){
	
	load_task_data();
	
	function load_task_data()
	{
	$.ajax({
		url:"rating/fetch.php",
		method:"POST",
		success: function(data)
		{
			$('#task_list').html(data);
		}
	});
	}
	$(document).on('mouseenter', '.rating', function(){
		var index = $(this).data("index");
		var task_id = $(this).data('task_id');
		remove_background(task_id);
		
		for(var count =1; count <= index; count++)
		{
			$('#'+task_id+'-'+count).css('color', '#ffcc00');
		}
	});
	
	function remove_background(task_id)
	{
		for(var count = 1; count <= 5; count++)
		{
			$('#'+task_id+'-'+count).css('color', '#ccc');
		}
	}
	
	$(document).on('mouseleave','.rating', function(){
		var index = $(this).data('index');
		var task_id = $(this).data('task_id');
		var rating = $(this).data("rating");
		remove_background(task_id);
		
		for(var count = 1; count<=rating; count++)
		{
			$('#'+task_id+'-'+count).css('color','#ffcc00');
		}
	});
	
	$(document).on('click', '.rating', function(){
		var index = $(this).data("index");
		var task_id = $(this).data('task_id');
		$.ajax({
			url:"rating/insert_rating.php",
			method:"POST",
			data:{index:index, task_id:task_id},
			success:function(data)
			{
				if(data == 'done')
				{
					load_task_data();
					alert("You have rate"+index+" out of 5");
				}
				else
				{
					alert("There is some problem in System");
				}
			}
		});
	});
	
});
</script>

<!-- /page content -->


        <?php 
			include "footer.php";
		?>