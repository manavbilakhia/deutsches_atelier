<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<form action="index.php?/assignment/submitassignment" method="post" enctype="multipart/form-data">
			<div class="card-header"><legend>Submit Assignment</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label class="" for="name">Assignment Title: </label> <?php echo $assignment->title?>
					<br/>
					<label for="group">Files</label>
					<input type="file" name="files" value="" class="form-control flat" placeholder="Select files" accept=".doc,.docx,application/msword"/>
					<label for="usernmae">Message</label>
					<textarea name="message" value="" class="form-control flat" placeholder="Enter Message"></textarea>
					<br/>
					<input type="hidden" name="assignment_id" value="<?php echo $assignment->id?>">
					<a href="index.php?/assignment" class="btn btn-warning flat pull-right" style="margin-left:10px;">Cancel</a>
					<input type="submit" value="Submit" class="btn flat btn-primary pull-right">
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