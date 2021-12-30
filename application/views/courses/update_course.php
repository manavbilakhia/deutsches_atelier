<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<form action="index.php?/courses/updatecourse" method="post" enctype="multipart/form-data">
			<div class="card-header"><legend>Update Course</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label class="" for="title">Course Title</label>
					<input type="text" name="title" value="<?php echo$course->course_title?>" class="form-control flat " placeholder="Enter Course title" required/>
					<label for="startdate">Course starts from</label>
					<input type="date" name="startdate" value="<?php echo$course->start_date;?>" class="form-control flat" placeholder="Enter date" required/>
					<label for="enddate">Course end on</label>
					<input type="date" name="enddate" value="<?php echo$course->end_date;?>" class="form-control flat" placeholder="Enter date" required/>
					<label for="message">Course Discription</label>
					<textarea name="message" value="" class="form-control flat" placeholder="Enter Course Discription"><?php echo $course->description;?></textarea>
					<br/>
					<input type="hidden" value="<?php echo$course->course_id;?>" name="course_id" >
					<a href="index.php?/Courses" class="btn btn-warning flat pull-right" style="margin-left:10px;">Cancel</a>
					<input type="submit" value="Add Course" class="btn flat btn-primary pull-right">
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="card-footer"></div>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>



<?php $this->load->view('common/footer');?>