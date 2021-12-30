<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card card-lg">
			
			<div class="card-header"><legend>Courses</legend></div>
			<div class="card-body">
				<?php if($this->session->userdata('user_group_id')==1):?>
				<a href="index.php?/courses/add_course">
					<div class=" col-sm-10 card btn btn-default flat" style=" margin-bottom:10px;">
						<label >Add Course</label>
						<div class="clearfix"></div>
					</div>
				</a>
				<?php endif;?>
				<?php foreach($courses as $course):?>
				
				<div class=" col-sm-10 card btn flat" style=" margin-bottom:10px;">
					<label class="pull-left title"><?php echo $course['title'];?></label>
					<label>(<i class=""><?php echo $course['startdate'].' TO '.$course['enddate'];?></i>)</label>
					<?php if($this->session->userdata('user_group_id')==1):?>
					<a href="index.php?/courses/update_course?id=<?php echo $course['id'];?>" class="btn btn-warning pull-right"> Edit </a>
					<?php endif;?>
					<div class="clearfix"></div>
					<pre>
					<?php echo $course['message'];?><br/>
					
					</pre>
					<div class="clearfix"></div>
					
				</div>
				<?php endforeach;?>
			</div>
			<div class="card-footer"></div>	
				<div class="clearfix"></div>
		</div>
	</div>
		<div class="clearfix"></div>
</div>





<?php $this->load->view('common/footer');?>