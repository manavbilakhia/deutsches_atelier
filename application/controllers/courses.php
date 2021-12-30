<?php
 error_reporting(E_ALL);
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

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
		$this->load->model('course_model');
		$this->load->model('configuration_model');
        if (!$this->session->userdata('user_id'))
            return redirect('/');
    } 
	public function index()
	{
		$courses = $this->course_model->get_courses();
		
		$all_courses= array();
		foreach($courses as $course){
			$data=array();
			$data['id'] = $course->course_id;
			$data['title'] = $course->course_title;
			$data['message'] = $course->description;
			$data['startdate'] = $course->start_date;
			$data['enddate'] = $course->end_date;
			$data['added_by'] = $course->added_by;
			$data['status'] = $course->status;
			$all_courses[] = $data;
		}
		
		$this->load->view('courses/courses',['courses'=>$all_courses]);
	}
	public function add_course()
	{
		$classes=$this->configuration_model->get_classes();
		$this->load->view('courses/add_course',['classes'=>$classes]);
	}
	public function addcourse()
	{
		if($this->input->post()){
			$data['class_id']=$this->input->post('class');
			$data['course_title']=$this->input->post('title');
			$data['start_date']=$this->input->post('startdate');
			$data['end_date']=$this->input->post('enddate');
			$data['description']=$this->input->post('message');
			$data['added_by']=$this->session->userdata('user_id');
			$data['status']= 1;
			$assignment_id = $this->course_model->add_course($data);
			if($assignment_id){
				$this->session->set_flashdata('feedback', "New course created successfully.");
				$this->session->set_flashdata('feedback_class', 'alert-success');
			}else{
				$this->session->set_flashdata('feedback', "Something went wrong, course is not created.");
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			}
		}else{
			
			$this->session->set_flashdata('feedback', "Something went wrong, Invalid user inputs.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
        
		redirect('index.php?/courses');
	}
	public function update_course()
	{
		if($this->input->get()){
			$id=$this->input->get('id');
			$course = $this->course_model->get_course_details($id);
			$this->load->view('courses/update_course',['course'=>$course]);
			$this->session->set_flashdata('feedback', "Course updated successfully.");
			$this->session->set_flashdata('feedback_class', 'alert-success');
		}else{
			$this->session->set_flashdata('feedback', "Unable to updated course details.");
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			redirect('index.php?/courses');
		}
		
	}
	public function updatecourse()
	{
		if($this->input->post()){
			$data['course_title']=$this->input->post('title');
			$data['start_date']=$this->input->post('startdate');
			$data['end_date']=$this->input->post('enddate');
			$data['description']=$this->input->post('message');
			$data['added_by']=$this->session->userdata('user_id');
			$course_id=$this->session->userdata('course_id');
			$assignment_id = $this->course_model->update_course($data,$course_id);
		}
		redirect('index.php?/courses');
	}
	
}
