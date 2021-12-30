<?php

//fetch_user_chat_history.php

class Fetch_User_Chat_History extends CI_Controller {


 public function index() {
	$to_user_id = $_POST['to_user_id'];
 $this->fetch_user_chat_historys($_SESSION['user_id'], $to_user_id);
}



function fetch_user_chat_historys($from_user_id, $to_user_id)
{ 
 $sql = "
	SELECT * FROM chat_message 
	WHERE (from_user_id = '".$from_user_id."' 
	AND to_user_id = '".$to_user_id."') 
	OR (from_user_id = '".$to_user_id."' 
	AND to_user_id = '".$from_user_id."') 
	ORDER BY timestamp DESC
	";
	$query = $this->db->query($sql);
	$result=$query->result();
	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		
		$user_name = '';
		$dynamic_background = '';
		$chat_message = '';
		
		if($row->from_user_id == $from_user_id)
		{
			if($row->status == '2')
			{
				 $chat_message = '<em>This message has been removed</em>';
				$user_name = '<b class="text-success">You</b>';
			}
			else
			{
				
				
				$chat_message = $row->chat_message;				
				$user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row->chat_message_id.'">x</button>&nbsp;<b class="text-success">You</b>';
			}
			

			$dynamic_background = 'background-color:#ffe6e6;';
		}
		else
		{
			if($row->status == '2')
			{
				$chat_message = '<em>This message has been removed</em>';
			}
			else
			{
				$chat_message = $row->chat_message;
			}
			$user_name = '<b class="text-danger">'.$this->get_user_name($row->from_user_id).'</b>';
			$dynamic_background = 'background-color:#ffffe6;';
		}
		$output .= '
		<li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
			<p>'.$user_name.' - '.$chat_message.'
				<div align="right">
					- <small><em>'.$row->timestamp.'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	echo $output;
	$sqls = "
	UPDATE chat_message 
	SET status = '0' 
	WHERE from_user_id = '".$to_user_id."' 
	AND to_user_id = '".$from_user_id."' 
	AND status = '1'
	";
	$query = $this->db->query($sqls);
		
	return $output;
	
	
	
}

function get_user_name($user_id)
{
	$sql = "SELECT username FROM sch_users WHERE user_id = '$user_id'";
	$query = $this->db->query($sql);
	$result=$query->result();
	foreach($result as $row)
	{
		return $row->username;
	}
}

function insert(){

$to_user_id= $_POST['to_user_id'];
	$from_user_id=$_SESSION['user_id'];
	$chat_message=$_POST['chat_message'];
	$status	='1';


$sql = "INSERT INTO chat_message 
(to_user_id, from_user_id, chat_message, status) 
VALUES ($to_user_id, $from_user_id,'$chat_message',$status)";


$query = $this->db->query($sql);
	
		
if($query)
{
	
	 $this->fetch_user_chat_historys($_SESSION['user_id'], $_POST['to_user_id']);
}

}

function update_is_type_status (){
  $sql = "
UPDATE login_details 
SET is_type = '".$_POST["is_type"]."' 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";
$query = $this->db->query($sql);
}


function group_chat (){
	
if($_POST["action"] == "insert_data")
{
	$from_user_id =	$_SESSION["user_id"];
	$chat_message = $_POST['chat_message'];
	$status = '1';
 

	$sql = "
	INSERT INTO chat_message 
	(from_user_id, chat_message, status) 
	VALUES ('$from_user_id', '$chat_message', '$status')
	";

	$query = $this->db->query($sql);
	//$result=$query->result();

	if($query)
	{
		$this->fetch_group_chat_history();
	}

}

if($_POST["action"] == "fetch_data")
{
	$this->fetch_group_chat_history();
}
	
}

function fetch_group_chat_history()
{
	 $sql = "
	SELECT * FROM chat_message 
	WHERE to_user_id = '0'  
	ORDER BY timestamp DESC
	";

	$query = $this->db->query($sql);
	$result=$query->result();

	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		$dynamic_background = '';
		$chat_message = '';
		if($row->from_user_id == $_SESSION["user_id"])
		{
			if($row->status == '2')
			{
				$chat_message = '<em>This message has been removed</em>';
				$user_name = '<b class="text-success">You</b>';
			}
			else
			{
				$chat_message = $row->chat_message;
				$user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row->chat_message_id.'">x</button>&nbsp;<b class="text-success">You</b>';
			}
			
			$dynamic_background = 'background-color:#ffe6e6;';
		}
		else
		{
			if($row->status == '2')
			{
				$chat_message = '<em>This message has been removed</em>';
			}
			else
			{
				$chat_message = $row->chat_message;
			}
			$user_name = '<b class="text-danger">'.$this->get_user_name($row->from_user_id).'</b>';
			$dynamic_background = 'background-color:#ffffe6;';
		}

		$output .= '

		<li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
			<p>'.$user_name.' - '.$chat_message.' 
				<div align="right">
					- <small><em>'.$row->timestamp.'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	echo $output;
}

function remove_chat (){
if(isset($_POST["chat_message_id"]))
{
	$sql = "
	UPDATE chat_message 
	SET status = '2' 
	WHERE chat_message_id = '".$_POST["chat_message_id"]."'
	";

	$query = $this->db->query($sql);
	 

}
}

 function update_last_activity() {

  $sql = "
UPDATE login_details 
SET last_activity = now() 
WHERE login_details_id = '".$_SESSION["user_id"]."'
";
$query = $this->db->query($sql);


}


function fetch_is_type_status($user_id)
{
	$sql = "
	SELECT is_type FROM login_details 
	WHERE user_id = '".$user_id."' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";	
	$query = $this->db->query($sql);
	$result=$query->result();
	$output = '';
	foreach($result as $row)
	{
		if($row->is_type == 'yes')
		{
			$output = ' - <small><em><span class="text-muted">Typing...</span></em></small>';
		}
	}
	return $output;
}


function count_unseen_message($from_user_id, $to_user_id)
{
	  
 $query = $this->db->query("SELECT * FROM chat_message 
	WHERE from_user_id = '$from_user_id' 
	AND to_user_id = '$to_user_id' 
	AND status = '1'");
    $count= $query->num_rows();
	 
	 
	$output = '';
	if($count > 0)
	{
		$output = '<span class="label label-success">'.$count.'</span>';
	}
	return $output;
}

function fetch_user_last_activity($user_id)
{
   $sql = "
	SELECT * FROM login_details 
	WHERE user_id = '$user_id' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";
	$query = $this->db->query($sql);
	$result=$query->result();
	foreach($result as $row)
	{
		return $row->last_activity;
	}
}

    public function fetch() {
  $sql = "SELECT * FROM sch_users WHERE user_id != '".$_SESSION['user_id']."' ";
 
$query = $this->db->query($sql);
	$result=$query->result();
		
 
//$result = $query->fetchAll();

$output = '
<table class="table table-bordered table-striped">
	<tr>
		<th width="70%">Username</td>
		<th width="20%">Status</td>
		<th width="10%">Action</td>
	</tr>
';

foreach($result as $row)
{
	 
	$status = '';
	$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	$user_last_activity = $this->fetch_user_last_activity($row->user_id);
	 
	
	if($user_last_activity > $current_timestamp)
	{
		$status = '<span class="label label-success">Online</span>';
	}
	else
	{
		$status = '<span class="label label-danger">Offline</span>';
	}
	$output .= '
	<tr>
		<td>'.$row->username.' '.$this->count_unseen_message($row->user_id,$_SESSION['user_id']).' '.$this->fetch_is_type_status($row->user_id).'</td>
		<td>'.$status.'</td>
		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row->user_id.'" data-tousername="'.$row->username.'">Start Chat</button></td>
	</tr>
	';
}

$output .= '</table>';

echo $output;
    }
	public function upload(){
	if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
	{
		$ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
		$allow_ext = array('jpg', 'png');
		if(in_array($ext, $allow_ext))
		{
			$_source_path = $_FILES['uploadFile']['tmp_name'];
			$target_path = 'upload/' . $_FILES['uploadFile']['name'];
			if(move_uploaded_file($_source_path, $target_path))
			{
				echo '<p><img src="'.$target_path.'" class="img-thumbnail" width="200" height="160" /></p><br />';
			}
			//echo $ext;
		}
	}
}
	}


}
?>