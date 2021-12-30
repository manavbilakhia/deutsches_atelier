<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<form action="index.php?/configuration/addclass" method="post">
			<div class="card-header"><legend class="text-center">Add Class</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label class="" for="group">Class Name</label>
					<input type="text" name="classname" value="" class="form-control flat" placeholder="Enter Class Name" required/>
					<label class="" for="group">Group Name</label>
					<input type="text" name="group" value="" class="form-control flat" placeholder="Enter Group Name" required/>
					<label for="level">Level</label>
					<input type="text" name="level" value="" class="form-control flat" placeholder="Enter Level" required/>
					<br/>
					<input type="submit" value="Create Class" class="btn form-control flat btn-primary pull-right">
				</div>
				<div class="col-md-6">
					<strong>Students list<strong>
					<div class="box" style="height:350px;overflow-y:auto;">
					<?php $cnt=0;?>
					<?php foreach($students as $student):?>
					<div class="col-sm-12 border-bottom">
						<div class="col-sm-1 border-right">
							<?php echo ++$cnt;?>
						</div>
						<div class="col-sm-9 border-right">
							<label> <?php echo $student->fullname;?></label>
						</div>
						<div class="col-sm-2 ">
							<input type="checkbox" name="student[]" value="<?php echo $student->user_id;?>" /> 
						</div>
					</div>
					<?php endforeach;?>
					</div>
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