<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

	public function index(){
             $this->load->view('Register/index');
	}

	public function add(){
	    $data = $this->input->post(); 
        /*Array ( [salutation] => 2 [first_name] => Su [middle_name] => Prabha [last_name] => MIshra [login_email] => suprabha.a.mishra@gmail.com [cell_phone] => 9999999999 [company_name] => tkies [address] => aaaaaaaaaaaaaaaa [city] => [state] => [country] => [zip_code] => [password] => tttttttt [i_agree] => accept ) Array ( [passport_photo] => Array ( [name] => Screenshot from 2019-11-19 23-04-12.png [type] => image/png [tmp_name] => /tmp/phpcOJIR0 [error] => 0 [size] => 181889 ) )*/
        
             $data['file_path'] = $this->uploadImageFileToPath($_FILES, 'Register_photo', 'passport_photo');

             $this->load->model('Registeruser');
             $tripdetails = $this->Registeruser->insertData($data);
             $message = "Your account has been created successfully";
             $this->session->set_flashdata('item', $message);
             redirect(base_url('Register'));
	}

        public function login()
        {
                //$data =  $this->input->post();
                $data['response'] = '';
                $this->load->model('Registeruser');
                //print_r($this->session);
                if ($this->session->userdata('user_register_id')) {
                        redirect(base_url('Home'));
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
                                        $user_details = $this->Registeruser->userData($username);
                                        if (!empty($user_details) && $password == $user_details[0]['password']) {
                                                $this->saveLoginSession($user_details[0]);
                                                $login_redirect_url = $this->session->userdata('login_redirect_url');
                                                //echo $login_redirect_url; exit;
                                                redirect(base_url('Home'));
                                        } else {
                                                $data['response'] = array('status' => 'failed', 'ErrorDesc' => 'Please enter valid username and password');
                                        }
                                }
                    }

                 $this->load->view('Register/login', $data);
                }

        }


        public function saveLoginSession($user_details)
        {                                                                                                                                                                       
                $session_data['user_id'] =  $user_details['id'];
                $session_data['username'] = $user_details['username'];
                $session_data['name'] = $user_details['fname'] . ' ' . $user_details['lname'];
                $this->session->set_userdata($session_data);

        }
}
?>