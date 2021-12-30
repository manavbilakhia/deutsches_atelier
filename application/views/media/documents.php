<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card card-lg">
			
			<div class="card-header">
				<legend>
				Documents
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
				<?php if($this->session->userdata('user_group_id')==1):?>
				<a href="index.php?/media/add_document">
					<div class=" col-sm-10 card btn btn-default flat" style=" margin-bottom:10px;">
						<label >Add Documents</label>
						<div class="clearfix"></div>
					</div>
				</a>
				<?php endif;?>
				<?php foreach($data as $item):?>
				
				<div class=" col-sm-10 card btn flat" style=" margin-bottom:10px;">
					<label class="pull-left"><?php echo $item->title;?></label>
					<label>(<i class="required"><?php echo $item->added_date;?>)</label>
					<br/>
						<a target="_blank" href="<?php echo base_url().''.$item->path;?>"><?php echo $item->title;?></a>
					
				</div>
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