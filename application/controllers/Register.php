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


}
?>