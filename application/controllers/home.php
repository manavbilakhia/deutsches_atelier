<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('assignment_model');
    }
	public function index()
	{
		$events=array();
		$assignments = array();
		$events = $this->configuration_model->get_events();
		$assignments = $this->assignment_model->get_assignments_deadlines();
		$calender = array_merge($events,$assignments);
		$all_events = $this->configuration_model->get_event_details();
		$this->load->view('home/index',['events'=>json_encode($calender),'all_events'=>$all_events]);
	}
	public function get_events(){
		$events = $this->configuration_model->get_events();
		echo json_encode($events);
	}
	public function create_event(){
		if($this->input->post()){
			$data['event_name'] = $this->input->post('title');
			$data['discription'] = $this->input->post('description');
			$data['start_date'] = $this->input->post('startdate');
			$data['end_date'] = $this->input->post('enddate');
			$data['added_by'] = $this->session->userdata('user_id');
			$data['status'] = 1;
			if($this->configuration_model->add_event($data)){
				$this->session->set_flashdata('feedback', "Event created successfully.");
				$this->session->set_flashdata('feedback_class', 'alert-success');
			}else{
				$this->session->set_flashdata('feedback', "Unable to create event.");
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			}
			
			return redirect('index.php?/home');
		}
	}
}
