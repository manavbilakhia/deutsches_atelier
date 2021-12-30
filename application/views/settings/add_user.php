<?php $this->load->view('common/header');?>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<form action="index.php?/configuration/adduser" method="post">
			<div class="card-header"><legend>Add User</legend></div>
			<div class="card-body">
				<div class="col-md-6">
					<label for="group">User</label>
					<select  name="user" id="user" value="" class="form-control" required>
						<option value="2">Student</option>
						<option value="1">Teacher</option>
					</select>
					<label class="" for="name">Student Name</label>
					<input type="text" name="student_name" value="" class="form-control" placeholder="Enter Student Name" required/>
					<label class="" for="group">Class</label>
					<select type="text" name="class" id="class" class="form-control flat" id="class" required>
					<option value="">select class</option>
					<?php foreach($classes as $class):?>
						<option value="<?php echo $class->id;?>"><?php echo $class->class_name.' (Group: '.$class->groups.'| Level: '.$class->level.')';?></option>
					<?php endforeach; ?>
					</select>
					<label for="usernmae">Username</label>
					<input type="text" name="username" value="" class="form-control" placeholder="Enter Username" required/>
					<label for="password">Password</label>
					<input type="password" name="password" value="" class="form-control" placeholder="Enter Password" required/>
					<br/>
					<input type="submit" value="Add User" class="btn btn-flat btn-primary pull-right">
				</div>
				<div class="col-md-6" style="border-left:1px #c6c6c6 solid;min-height:360px;overflow-y:auto;">
					<table class="table table-striped">
						<thead>
							<th>Sr</th>
							<th>Name</th>
							<th>User type</th>
							<th>Action</th>
						</thead>
						<tbody>
						<?php $cnt=0; foreach($users as $user):?>
							<tr>
							<td><?php echo ++$cnt;?></td>
							<td><?php echo $user->fullname;?> <?php if($user->group_id == '2') echo ' <span style="font-size:12px;color:#c6c6c6; ">'. $user->class_name .' (Group: '. $user->groupname .'| Level: '. $user->levelname .')</span>';?></td>
							<td><?php if($user->group_id == '1'){echo 'Admin'; }elseif($user->group_id =='2'){ echo 'Student'; };?> </td>
							<td><?php if($user->user_id != $this->session->userdata('user_id')){?><a class="remove" href="index.php?/configuration/removeuser?id=<?php echo $user->user_id;?>"><i class="fa fa-times" title="Remove this user"></i></a> <?php }else{?><?php  echo 'Current User';}?></td>
							
							</tr>
						<?php endforeach;?>
						</tbody>
					</table>
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
	$('.remove').on('click',function(){
		var r = confirm("Do you really want to delete this user?");
		if (r == true) {
			return true;
		}else{
			return false;
		}
	});
	$('#user').on('change',function(){
		if($(this).val()==='1'){
			$('#class').attr('disabled',true);
		}else{
			$('#class').attr('disabled',false);
		}
	});
})
</script>
<?php $this->load->view('common/footer');?>