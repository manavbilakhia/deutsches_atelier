<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card card-lg">
			
			<div class="card-header"><legend>Choose Class</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label for="level">Level</label>
					<select name="level" class="form-control flat">
					<option value=""> Select Level </option>
					</select>
					<label for="group">Group</label>
					<select name="group" class="form-control flat">
					<option value=""> Select Group </option>
					</select>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="card-footer"></div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>



<?php $this->load->view('common/footer');?>