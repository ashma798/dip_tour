<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TravelSimCard extends CI_Controller {

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
		$this->load->view('TravelSimCard/index');
		$this->load->view('common/common_mid_section',$data);
		$this->load->view('common/common_footer',$data);
	}


	public function add(){
		try{
			$data = $this->input->post();
	        /* Array ( [name] => banners [address] => xsdasdsadas [email] => suprabha@mailinator.com [contact_number] => 9999999999 [country_of_usage] => UAE [collection_type] => Pick_from_home ) */
	        //print_r($data); exit;
	        $this->load->model('Travelsimquery');
	        $data['user_email'] = $_SESSION['feusername'];
	        $data['user_id'] = $_SESSION['feuser_id'];
	        $tripdetails = $this->Travelsimquery->insertData($data);
	        $message = "<span style='background-color:#28a745;'>Our executives will connect with you over you query</span>";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('TravelSimCard'));
		}catch(Exception $e){
			$message = "<span style='background-color:red;'>Something went wrong... Contact us on +234 8122820856, +234 8170592433{24/7,WHATSAPP} or mail us at info@diptourltd.com</span>";
	        
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('TravelSimCard'));
		}

	}

}
?>