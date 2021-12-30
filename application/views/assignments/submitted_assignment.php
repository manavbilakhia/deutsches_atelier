<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card card-lg">
			
			<div class="card-header">
				<legend>
					Assignments
					<?php if($this->session->userdata('user_group_id')==1):?>
						<div class="col-sm-3 pull-right filter">
							<form method="post" id ="form">
							<select type="text" name="class" class="form-control flat" id="class" required>
								<option value="0">select class</option>
								<?php foreach($classes as $class):?>
									<?php if($class->id == $class_id):?>
										<option value="<?php echo $class->id;?>" selected><?php echo $class->class_name.' (Group: '.$class->groups.'| Level: '.$class->level.')';?></option>
									<?php else:?>
										<option value="<?php echo $class->id;?>"><?php echo $class->class_name.' (Group: '.$class->groups.'| Level: '.$class->level.')';?></option>
									<?php endif;?>
									
								<?php endforeach; ?>
							</select>
							</form>
							
						</div>
						<div class="clearfix"></div>
					<?php endif;?>
				</legend>
			</div>
			<div class="card-body">
				<?php foreach($assignments as $assignment):?>
				
				<a href="index.php?/assignment/view_assignment?id=<?php echo $assignment->submission_id;?>">
				<div class=" col-sm-10 card btn flat" style=" margin-bottom:10px;">
					<label class="pull-left"><?php echo $assignment->title;?></label>
					<label class="">Submitted On:<?php echo $assignment->submission_date;?> </label>
					<label class="pull-right">Submitted By:<?php echo $assignment->fullname;?></label>

					<p>
					<?php echo $assignment->message;?><br/>
					
					</p>
					
				</div>
				</a>
				<?php endforeach;?>
			</div>
			<div class="card-footer"></div>	
				<div class="clearfix"></div>
		</div>
	</div>
		<div class="clearfix"></div>
</div>


<script>
$(document).ready(function(){
	$('#class').on('change',function(){
		$('#form').submit();
	});
})
</script>


<?php $this->load->view('common/footer');?>