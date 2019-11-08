<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function index()
	{
		redirect(base_url('User/login'));
	}

	public function login()
	{
		$data['response'] = '';
		$this->load->model('Dipuser');
		//print_r($this->session);
		if ($this->session->userdata('user_master_id')) {
			$login_redirect_url = $this->session->userdata('login_redirect_url');
			redirect(base_url($login_redirect_url));
		} else {
			if (stripos($_SERVER['REQUEST_METHOD'], 'post') !== false) {
				
				if($this->input->post()){
				   $username = $this->input->post('username');
				   $password = $this->input->post('password');
			    }else{
			       $username = $_POST['username'];
			       $password = $_POST['password'];
			    }
				
				$this->load->library('form_validation');
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');

				if ($this->form_validation->run() == false) {
					$data['response'] = array('status' => 'failed', 'ErrorDesc' => 'Please enter valid username and password');
				} else {
					$user_details = $this->Dipuser->userData($username);
					if (!empty($user_details) && $password == $user_details[0]['password']) {
						$this->saveLoginSession($user_details[0]);
						$login_redirect_url = $this->session->userdata('login_redirect_url');
						//echo $login_redirect_url; exit;
						redirect(base_url($login_redirect_url));
					} else {
						$data['response'] = array('status' => 'failed', 'ErrorDesc' => 'Please enter valid username and password');
					}
				}
		    }

	        $this->load->view('User/login', $data);
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('User/index'));
	}

	public function createLoginSession($user_details)
	{
		$session_data['user_id'] = (string) $user_details['_id'];
		$session_data['username'] = $user_details['username'];
		$session_data['user_master_id'] = (int) $user_details['user_master_id'];
		$session_data['user_master_type'] = array_search($user_details['user_master_id'], $this->user_types_arr);
		$session_data['name'] = $user_details['fname'] . ' ' . $user_details['lname'];
		$this->session->set_userdata($session_data);
	}

	public function saveLoginSession($user_details)
	{ 																					
		$session_data['user_id'] =  $user_details['id'];
		$session_data['username'] = $user_details['username'];
		$session_data['user_master_id'] = (int) $user_details['id'];
		$session_data['user_master_type'] = $user_details['user_master_type'];
		$session_data['name'] = $user_details['fname'] . ' ' . $user_details['lname'];
		$session_data['login_redirect_url'] = $user_details['redirect_url'];
		$this->session->set_userdata($session_data);

	}


	public function forgotPassword() {
		$this->load->model('Dipuser');
        $this->load->config('email');
        $this->load->library('email');
        $userDetails = $this->Dipuser->userData('admin');
        $user_details = $userDetails[0];
        $from = $this->config->item('smtp_user');
        $to = $user_details['email'];
        $subject = 'Dip Tour : Forgot Password';
        $message = 'Hello '.$user_details['fname'] . ' ' . $user_details['lname']."\n\n". "The password for login to Dip Tour Admin panel is given below. \n\n Password : ".$user_details['password']."\n\n Regards \n\n Dip Tour Adminsitrator";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            $returnArray['status'] = 'success';
        } else {
        	$returnArray['status'] = 'error';
        	$filename = date('Ymd').".php";
        	$msg = $this->email->print_debugger();
        	$this->logToFile($filename,$msg);
            
        }

        echo json_encode($returnArray);
    }
}
