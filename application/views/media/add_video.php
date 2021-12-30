<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<form action="index.php?/media/add_media" method="post" enctype="multipart/form-data">
			<div class="card-header"><legend>Add Video</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label class="" for="group">Class</label>
					<select type="text" name="class" class="form-control flat" id="class" required>
					<option value="">select class</option>
					<?php foreach($classes as $class):?>
						<option value="<?php echo $class->id;?>"><?php echo $class->class_name.' (Group: '.$class->groups.'| Level: '.$class->level.')';?></option>
					<?php endforeach; ?>
					</select>
					<label class="" for="name"> Title</label>
					<input type="text" name="title" value="" class="form-control flat " placeholder="Enter title" required/>
					<label for="group">Files</label>
					<input type="file" name="files" value="" class="form-control flat" placeholder="Select files" accept=".mp4,.avi,.m4a,.mpg,.mov"/>
					<input type="hidden" name="type" value="video" />
					<br/>
					<a href="index.php?/media/videos" class="btn btn-warning flat pull-right" style="margin-left:10px;">Cancel</a>
					<input type="submit" value="Add Video" class="btn flat btn-primary pull-right">
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