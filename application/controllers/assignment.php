<?php
 error_reporting(E_ALL);
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignment extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
		$this->load->model('assignment_model');
		$this->load->model('configuration_model');
        if (!$this->session->userdata('user_id'))
            return redirect('/');
    } 
	public function index()
	{
		$class='';
		$classes=$this->configuration_model->get_classes();
		if($this->session->userdata('user_group_id')==1){
			
			if(isset($_POST['class'])){
				$class = $_POST['class'];
				$assignments = $this->assignment_model->get_assignments_class($class);
			}else{
				$assignments = array();
			}
		}else{
			$assignments = $this->assignment_model->get_assignments();
		}
		$all_assignments= array();
		foreach($assignments as $assignment){
			$data=array();
			$files = $this->assignment_model->get_assignment_files($assignment->id);
			$data['id'] = $assignment->id;
			$data['title'] = $assignment->title;
			$data['message'] = $assignment->message;
			$data['deadline'] = $assignment->deadline;
			$data['added_by'] = $assignment->added_by;
			$data['status'] = $assignment->status;
			$data['submission'] = $assignment->submission;
			$data['files'] = $files;
			$all_assignments[] = $data;
		}
		
		$this->load->view('assignments/assignment',['assignments'=>$all_assignments,'classes'=>$classes,'class_id'=>$class]);
	}
	
	public function add_assignment()
	{
		$classes=$this->configuration_model->get_classes();
		$this->load->view('assignments/add_assignment',['classes'=>$classes]);
	}
	public function submitted_assignments()
	{
		$class='';
		if($this->session->userdata('user_group_id')==1){
			
			if(isset($_POST['class'])){
				//echo $_POST['class'];exit;
				// $data = $this->media_model->get_media_class('photo',$_POST['class']);
				$assignments = $this->assignment_model->get_submitted_assignments($_POST['class']);
				$class=$_POST['class'];
			}else{
				$assignments =array();
			}
		}else{
			$assignments =array();
			
		}
		$classes=$this->configuration_model->get_classes();
		$this->load->view('assignments/submitted_assignment',['assignments'=>$assignments,'classes'=>$classes,'class_id'=>$class]);
	}
	public function view_assignment()
	{	
		$id = $this->input->get('id');
		$assignment_details=$this->assignment_model->get_submitted_assignment($id);
		$this->load->view('assignments/view_assignment',['assignment_details'=>$assignment_details]);
	}
	public function submit_assignment(){
		$id = $this->input->get('id');
		$assignment = $this->assignment_model->get_assignment_details($id);
		$this->load->view('assignments/submit_assignment',['assignment'=>$assignment]);
	}
	
	public function submitassignment(){
		$data['assignment_id']=$this->input->post('assignment_id');
		$data['discription']=$this->input->post('message');
		$data['submitted_by']=$this->session->userdata('user_id');
		if(!empty($_FILES['files']['name'])){
			$filename = $_FILES['files']['name'];
			$_FILES['file']['name']     = strtotime(date('Y-m-d H:i:s')).''.$filename;
			$_FILES['file']['type']     = $_FILES['files']['type'];
			$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'];
			$_FILES['file']['error']     = $_FILES['files']['error'];
			$_FILES['file']['size']     = $_FILES['files']['size'];
			// File upload configuration
			$uploadPath = 'assets/uploads/assignments/submission/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
			
			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			// Upload file to server
			if($this->upload->do_upload('file')){
				// Uploaded file data
				$fileData = $this->upload->data();
				$uploadData['file_name'] = $uploadPath.''.$fileData['file_name'];
				$uploadData['uploaded_on'] = date("Y-m-d H:i:s");
				$data['path'] = $uploadPath.''.$fileData['file_name'];
				$data['filename'] =  $filename;
				$data['submission_date'] =  $uploadData['uploaded_on'];
				$data['status'] =  1;
				$this->assignment_model->submit_assignment_file($data);
			}
			
			$this->session->set_flashdata('feedback', "Assignment submitted successfully.");
			$this->session->set_flashdata('feedback_class', 'alert-success');
		}else{
			$this->session->set_flashdata('feedback', "Unable to submit assignment.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		redirect('index.php?/assignment');
	}
	
	public function addassignment()
	{
		$data['title']=$this->input->post('class');
		$data['title']=$this->input->post('title');
		$data['message']=$this->input->post('message');
		$data['deadline']=$this->input->post('deadline');
		$data['added_by']=$this->session->userdata('user_id');
		$data['status']= 1;
		$assignment_id = $this->assignment_model->add_assignment($data);
		// If file upload form submitted
		if(!empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
				$filename = $_FILES['files']['name'][$i];
                $_FILES['file']['name']     = strtotime(date('Y-m-d H:i:s')).''.$filename;
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath = 'assets/uploads/assignments/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = '*';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
				$data=array();
				if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $uploadPath.''.$fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
					$data['assignment_id'] =  $assignment_id;
					$data['path'] = $uploadPath.''.$fileData['file_name'];
					$data['filename'] =  $filename;
					$data['added_date'] =  $uploadData[$i]['uploaded_on'];
					$data['status'] =  1;
					$this->assignment_model->add_assignment_files($data);
                }
            }
		}
		$this->session->set_flashdata('feedback', "New assignment created successfully.");
		$this->session->set_flashdata('feedback_class', 'alert-success');
		redirect('index.php?/assignment');
	}
	public function manage_class()
	{
		$this->load->view('settingss/manage_class');
	}
}
