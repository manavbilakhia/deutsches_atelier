<?php

//Super Admin
class Login extends CI_Controller {

    public function index() {
        $this->load->view('common/login_page');
    }

    public function user_login() {
        $this->load->library('form_validation');
		
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            
            $this->load->model('loginmodel');
            $login_id = $this->loginmodel->login_valid($username, $password);
			
            if ($login_id) {
  $sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$login_id."')
				";
				 
				$query = $this->db->query($sub_query);
				$_SESSION['login_details_id']= $this->db->insert_id();
                $user_data = $this->loginmodel->user_details($login_id);

                $custom_session_id = date("YmdHis"); //a unique time/second

                $this->load->library('session');
				
				if($user_data->class_id==NULL){
					$classid = '0';
				}else{
					$classid = $user_data->class_id;
				}
                $newdata = array(
                    'custom_session_id' => $custom_session_id,
                    'username' => $username,
                    'user_id' => $login_id,
                    'fullname' => $user_data->fullname,
                    'user_group_id' => $user_data->group_id,
                    'class_id' => $classid,
                    'level' => $user_data->level,
					'groups' => $user_data->groups,
                );
				
                $this->session->set_userdata($newdata);

                return redirect('index.php?/home/index');
            } else {
                $this->session->set_flashdata('feedback', "Your username or password is incorrect");
              $this->session->set_flashdata('feedback_class', 'alert-danger');
                return redirect('index.php?/login');
            }
        
    }

   

    public function logout() {
//
//        $this->load->model('user_logs_model');
//        $login_id = $this->session->userdata('user_id');
//        $custom_session_id = $this->session->userdata('custom_session_id');
//        $this->user_logs_model->user_logs_logout($login_id, $custom_session_id); //saving Logs    

        $this->session->unset_userdata('user_id');
        return redirect('index.php?/login');
    }

	


    
}
