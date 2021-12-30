<?php $this->load->view('common/header');?>

<div class="content">
<a class="btn btn-success pull-right" href="index.php?/configuration/add_user">Add User </a></br></br></br>
	<div class="col-md-12"> 
		<div  class="card">
			 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Status</th>
  
    </tr>
  </thead>
  <tbody>
  <?php foreach($user_list as $user_lists):?>
    <tr>
      <th scope="row"><?php echo $user_lists->fullname;?></th>
	  <th scope="row"><?php echo $user_lists->username;?></th>
	   <th scope="row"><?php if($user_lists->status=1){ echo "Enable"; }else {echo "Disable"; }?></th>
       
    </tr>
     	<?php endforeach;?>
  </tbody>
</table>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		
		$('#class').on('change',function(){
			var id = $('#class option:selected').val();
			$.ajax({
				url: '<?php echo base_url();?>index.php?/configuration/get_alloc_students?id='+id+'',
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