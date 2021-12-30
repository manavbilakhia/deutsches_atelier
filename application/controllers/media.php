<?php
 error_reporting(E_ALL);
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('media_model');
		$this->load->model('configuration_model');
        if (!$this->session->userdata('user_id'))
            return redirect('/');
    } 
	
	public function photos()
	{	$class='';
		if($this->session->userdata('user_group_id')==1){
			
			if(isset($_POST['class'])){
				//echo $_POST['class'];exit;
				$data = $this->media_model->get_media_class('photo',$_POST['class']);
				$class=$_POST['class'];
			}else{
				$data =array();
			}
		}else{
			$data = $this->media_model->get_media('video');
			
		}
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/photos',['data'=>$data,'classes'=>$classes,'class_id'=>$class]);
	}
	public function videos()
	{
		$class='';
		if($this->session->userdata('user_group_id')==1){
			if(isset($_POST['class'])){
				$data = $this->media_model->get_media_class('video',$_POST['class']);
				$class=$_POST['class'];
			}else{
				$data =array();
			}
		}else{
			$data = $this->media_model->get_media('video');
		}
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/videos',['data'=>$data,'classes'=>$classes,'class_id'=>$class]);
	}
	public function audios()
	{
		$class='';
		if($this->session->userdata('user_group_id')==1){
			if(isset($_POST['class'])){
				$data = $this->media_model->get_media_class('audio',$_POST['class']);
				$class=$_POST['class'];
			}else{
				$data =array();
			}
		}else{
			$data = $this->media_model->get_media('audio');
		}
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/audios',['data'=>$data,'classes'=>$classes,'class_id'=>$class]);
	}
	public function documents()
	{
		$class='';
		if($this->session->userdata('user_group_id')==1){
			if(isset($_POST['class'])){
				$data = $this->media_model->get_media_class('document',$_POST['class']);
				$class=$_POST['class'];
			}else{
				$data =array();
			}
		}else{
			$data = $this->media_model->get_media('document');
		}
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/documents',['data'=>$data,'classes'=>$classes,'class_id'=>$class]);
	}
	
	public function add_photo()
	{
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/add_photo',['classes'=>$classes]);
	}
	public function add_video()
	{
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/add_video',['classes'=>$classes]);
	}
	public function add_audio()
	{
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/add_audio',['classes'=>$classes]);
	}
	public function add_document()
	{
		$classes=$this->configuration_model->get_classes();
		$this->load->view('media/add_document',['classes'=>$classes]);
	}
	public function add_media()
	{
		$data['class_id']=$this->input->post('class');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['added_by']=$this->session->userdata('user_id');
		$data['status']= 1;
		// If file upload form submitted
		if(!empty($_FILES['files']['name'])){
            
			$filename = $_FILES['files']['name'];
			$_FILES['file']['name']     = strtotime(date('Y-m-d H:i:s')).''.$filename;
			$_FILES['file']['type']     = $_FILES['files']['type'];
			$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'];
			$_FILES['file']['error']     = $_FILES['files']['error'];
			$_FILES['file']['size']     = $_FILES['files']['size'];
			
			// File upload configuration
			if($this->input->post('type')=='photo'){
				$uploadPath = 'assets/uploads/media/photos';
			}elseif($this->input->post('type')=='video'){
				$uploadPath = 'assets/uploads/media/videos';
			}elseif($this->input->post('type')=='audio'){
				$uploadPath = 'assets/uploads/media/audios';
			}elseif($this->input->post('type')=='document'){
				$uploadPath = 'assets/uploads/media/documents';
			}
			
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = '*';
			
			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			// Upload file to server
			if($this->upload->do_upload('file')){
				// Uploaded file data
				$fileData = $this->upload->data();
				$uploadData['file_name'] = $uploadPath.''.$fileData['file_name'];
				$uploadData['uploaded_on'] = date("Y-m-d H:i:s");
				$data['path'] = $uploadPath.'/'.$fileData['file_name'];
				$data['filename'] =  $filename;
				$data['added_date'] =  $uploadData['uploaded_on'];
				if($this->media_model->add_media($data)){
					$this->session->set_flashdata('feedback', $this->input->post('type')." added successfully.");
				$this->session->set_flashdata('feedback_class', 'alert-success');
				}else{
					$this->session->set_flashdata('feedback', "Unable to add ".$this->input->post('type'));
					$this->session->set_flashdata('feedback_class', 'alert-danger');		
				}
			}else{
				$this->session->set_flashdata('feedback', "Unable add assignment".$this->input->post('type')	);
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			}
            
		}
		redirect("index.php?/media/".$this->input->post('type')."s");
	}
	
}
