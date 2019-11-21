<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visa extends CI_Controller {

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
		$this->load->model('Contactinfo');
		$this->load->model('Footerinfo');
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
		$this->load->view('common/common_header',$data);
		$this->load->view('Visa/index');
		$this->load->view('common/common_footer',$data);
	}

	public function visaquery(){
		$this->load->model('Contactinfo');
		$this->load->model('Footerinfo');
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
		$this->load->view('common/common_header',$data);
		$this->load->view('Visa/visaquery');
		$this->load->view('common/common_footer',$data);
	}

	public function add(){
		$data = $this->input->post();
		$this->load->model('Visaquery');
		$data['user_email'] = $_SESSION['feusername'];
        $data['user_id'] = $_SESSION['feuser_id'];
        $tripdetails = $this->Visaquery->insertData($data);
        $message = "Our executives will connect with you over you query";
        $this->session->set_flashdata('item', $message);
        redirect(base_url('Visa/visaquery'));
	}
}
?>