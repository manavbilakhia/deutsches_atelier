<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<form action="index.php?/assignment/addassignment" method="post" enctype="multipart/form-data">
			<div class="card-header"><legend>Add Assignment</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label class="" for="group">Class</label>
					<select type="text" name="class_id" class="form-control flat" id="class_id" required>
					<option value="">select class</option>
					<?php foreach($classes as $class):?>
						<option value="<?php echo $class->id;?>"><?php echo $class->class_name.' (Group: '.$class->groups.'| Level: '.$class->level.')';?></option>
					<?php endforeach; ?>
					</select>
					<label class="" for="name">Assignment Title</label>
					<input type="text" name="title" value="" class="form-control flat " placeholder="Enter Assignment title" required/>
					<label for="level">deadline</label>
					<input type="date" name="deadline" value="" class="form-control flat" placeholder="Enter date" required/>
					<label for="group">Files</label>
					<input type="file" name="files[]" value="" class="form-control flat" placeholder="Select files" multiple/>
					<label for="usernmae">Message</label>
					<input type="text" name="message" value="" class="form-control flat" placeholder="Enter Message"/>
					<br/>
					<a href="index.php?/assignment" class="btn btn-warning flat pull-right" style="margin-left:10px;">Cancel</a>
					<input type="submit" value="Add Assignment" class="btn flat btn-primary pull-right">
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