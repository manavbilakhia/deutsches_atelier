<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card card-lg">
			
			<div class="card-header"><legend>View Assignment</legend></div>
			<div class="card-body">
				
				<div class=" col-sm-11 card flat" style=" margin-bottom:10px;">
					<label>File Name:<?php echo $assignment_details->filename;?> </label>
					<a href="<?php echo base_url().''.$assignment_details->path;?>" class="pull-right"> Downalod</a>
				</div>
				<div class=" col-sm-11 card flat" style=" margin-bottom:10px;">
					<label>Draw: </label> ON <input type="radio" name="draw" value="On"/>  OFF<input type="radio" name="draw" value="Off"/>
					
				</div>
				<div class=" col-sm-11 card flat" style=" margin-bottom:10px;">
				
					<iframe src="https://docs.google.com/viewer?embedded=true&url=<?php echo base_url().''.$assignment_details->path;?>" class="col-sm-12"> </iframe>
					
				</div>
			</div>
			<div class="card-footer"></div>	
				<div class="clearfix"></div>
		</div>
	</div>
		<div class="clearfix"></div>
</div>





<?php $this->load->view('common/footer');?>