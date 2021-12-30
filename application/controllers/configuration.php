<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id'))
            return redirect('/');
		
		$this->load->model('configuration_model');
    } 
	public function index()
	{
		$this->load->view('home/index');
	}
	public function add_user()
	{
		$classes=$this->configuration_model->get_classes();
		$users= $this->configuration_model->get_users();
		$this->load->view('settings/add_user',['classes'=>$classes,'users'=>$users]);
	}
	public function adduser()
	{
		if($this->input->post()){
			if($this->input->post('class')){
			$data['class_id'] = $this->input->post('class');
			}
			$data['group_id'] = $this->input->post('user');
			$data['fullname'] = $this->input->post('student_name');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['status'] = 1;
			
			$user_id = $this->configuration_model->add_user($data);
			// $allocation_data['student_id'] = $user_id;
			// $allocation_data['added_by'] = $this->session->userdata('user_id');
			// $allocation_data['status'] = 1;
			// $this->configuration_model->add_student_class($allocation_data);
			if($this->input->post('user')==1){
				$user = 'student';
			}elseif($this->input->post('user')==2){
				$user = 'teacher';
			}
			
			$this->session->set_flashdata('feedback', "New $user added successfully.");
			$this->session->set_flashdata('feedback_class', 'alert-success');
		}else{
			$this->session->set_flashdata('feedback', "Failed to add $user.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('index.php?/configuration/add_user');die();
	}
	
	public function removeuser(){
		if($this->input->get('id')){
			if($this->configuration_model->remove_user($this->input->get('id'))){
				$this->session->set_flashdata('feedback', "User removed successfully.");
				$this->session->set_flashdata('feedback_class', 'alert-success');
			}else{
				$this->session->set_flashdata('feedback', "Unable to remove user.");
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			}
		}else{
			$this->session->set_flashdata('feedback', "Unable to remove user.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('index.php?/configuration/add_user');die();
		
	}
	public function classes(){
		$this->load->view('settings/class');
	}
	public function choose_class(){
		$this->load->view('settings/choose_class');
	}
	public function add_class()
	{
		$students=$this->configuration_model->get_unallocated_students();
		$this->load->view('settings/add_class',['students'=>$students]);
	}
	public function addclass()
	{
		if($this->input->post()){
			$data['class_name'] = $this->input->post('classname');
			$data['level'] = $this->input->post('level');
			$data['groups'] = $this->input->post('group');
			$data['status'] = 1;
			$class_id = $this->configuration_model->add_class($data);
			$students = $this->input->post('student');
			foreach($students as $index=>$student){
				$stddata=array();
				$stddata['class_id'] = $class_id;
				$stddata['student_id'] = $student;
				$stddata['added_by'] = $this->session->userdata('user_id');
				$stddata['status'] = 1;
				$this->configuration_model->add_student_class($stddata);
			}
			$this->session->set_flashdata('feedback', "New class created successfully.");
			$this->session->set_flashdata('feedback_class', 'alert-success');
		}else{
			$this->session->set_flashdata('feedback', "Failed to create new class.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('index.php?/configuration/add_class');
		//$this->load->view('settings/add_class');
	}
	public function manage_class()
	{
		$classes=$this->configuration_model->get_classes();
		$this->load->view('settings/manage_class',['classes'=>$classes]);
	}
	public function delloc_student(){
		$class_id = $this->input->get('c');
		$student_id = $this->input->get('s');
		if($this->configuration_model->dealloc_student_class($class_id,$student_id)){
			$this->session->set_flashdata('feedback', "Student removed from class successfully.");
			$this->session->set_flashdata('feedback_class', 'alert-success');
		}else{
			$this->session->set_flashdata('feedback', "Unable  to remove student from class.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('index.php?/configuration/manage_class');
	}
	public function get_alloc_students(){
		$class_id=$this->input->get('id');
		$students['alloc'] = $this->configuration_model->get_allocated_students($class_id);
		$students['unalloc'] = $this->configuration_model->get_unallocated_students();
		echo json_encode($students);die();
	}
	public function update_class(){
		if($this->input->post()){
			
			$stddata['added_by'] = $this->session->userdata('user_id');
			$class = array();
			$class['class_name']=  $this->input->post('class_name');
			$class['groups']=  $this->input->post('groups');
			$class['level']=  $this->input->post('level');
			
			$this->configuration_model->update_class($class,$this->input->post('class'));
			
			$students = $this->input->post('student');
			foreach($students as $index=>$student){
				$stddata['class_id'] = $this->input->post('class');
				$stddata['student_id'] = $student;
				$stddata['added_by'] = $this->session->userdata('user_id');
				$students = $this->input->post('student');
				$stddata['status'] = 1;
				$this->configuration_model->add_student_class($stddata);
				
			}
			$this->session->set_flashdata('feedback', "Class details updated successfully.");
			$this->session->set_flashdata('feedback_class', 'alert-success');
		}else{
			$this->session->set_flashdata('feedback', "Unable to update class details.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('index.php?/configuration/manage_class');
	}
}
