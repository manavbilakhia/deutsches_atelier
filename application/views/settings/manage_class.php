<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<form action="index.php?/configuration/update_class" method="post">
			<div class="card-header"><legend class="text-center">Manage Class</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label class="" for="class">Class</label>
					<select type="text" name="class" class="form-control flat" id="class">
					<option value="">select class</option>
					<?php foreach($classes as $class):?>
						<option value="<?php echo $class->id;?>" data-class="<?php echo $class->class_name;?>" data-group="<?php echo $class->groups;?>" data-level="<?php echo $class->level;?>"><?php echo $class->class_name.'-'.$class->groups.'-'.$class->level;?></option>
					<?php endforeach; ?>
					</select>
					<div id="manage_class"></div>
					<br/>
					<input type="submit" value="Save the changes" class="btn form-control flat btn-primary pull-right">
				</div>
				<div class="col-md-6">
					<div class="box">
						<div class="box-header"> Added Users</div>
						<div class="box-body" style="height:200px;overflow-y:auto;" id="alloc"></div>
					</div>
					<br/>
					<div class="box">
						<div class="box-header">New Users</div>
						<div class="box-body"style="height:200px;overflow-y:auto;" id="unalloc"></div>
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

<script>
	$(document).ready(function(){
		
		$('#class').on('change',function(){
			var id = $('#class option:selected');
			if(id.val()==""){
				$('#manage_class').html('');
			}else{
				$('#manage_class').html('<label class="" for="class">Class Name</label><input type="text" class="form-control flat" name="class_name" value="'+id.attr('data-class')+'" required/>');
				$('#manage_class').append('<label class="" for="class">Group</label><input type="text" class="form-control flat" name="groups" value="'+id.attr('data-group')+'" required/>');
				$('#manage_class').append('<label class="" for="class">Level</label><input type="text" class="form-control flat" name="level" value="'+id.attr('data-level')+'" required/>');
			}
			$.ajax({
				url: '<?php echo base_url();?>index.php?/configuration/get_alloc_students?id='+id.val()+'',
				type: "GET",
				dataType: "JSON",
				success: function (data)
				{   
					$('#alloc').html('');
					var cnt =0;
					$.each(data.alloc,function(index,val){
						cnt = cnt+1;
						$('#alloc').append('<div col-sm-12>'+val.fullname+'<a href="index.php?/configuration/remove_student?id='+val.user_id+'"><a href="index.php?/configuration/delloc_student?c='+val.class_id+'&s='+val.user_id+'"><i class="fa fa-times pull-right"> </i></div>');
					});
					$('#unalloc').html('');
					var cnt =0;
					$.each(data.unalloc,function(index,val){
						cnt = cnt+1;
						$('#unalloc').append('<div class="col-sm-12 border-bottom"><div class="col-sm-1 border-right">'+cnt+'</div><div class="col-sm-9 border-right"><label>'+val.fullname+'</label></div><div class="col-sm-2 "><input type="checkbox" name="student[]" value="'+val.user_id+'" /></div></div>');
					});
					
				}
			});
		});
		
	})
</script>

<?php $this->load->view('common/footer');?>