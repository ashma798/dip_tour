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
		$this->load->view('common/common_mid_section',$data);
		$this->load->view('common/common_footer',$data);
	}

	public function visaquery(){
		$this->load->model('Contactinfo');
		$this->load->model('Footerinfo');
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
		$this->load->view('common/common_header',$data);
		$this->load->view('Visa/visaquery');
		$this->load->view('common/common_mid_section',$data);
		$this->load->view('common/common_footer',$data);
	}

	public function add(){
		try{
			$data = $this->input->post();
			$this->load->model('Visaquery');
			$data['user_email'] = $_SESSION['feusername'];
	        $data['user_id'] = $_SESSION['feuser_id'];
	        $tripdetails = $this->Visaquery->insertData($data);
	        $message = "Our executives will connect with you over you query";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('Visa/visaquery'));
	    }catch(Exception $e){
	    	 $message = "<span style='background-color:red;'>Something went wrong... Please contact us on +234 8122820856, +234 8170592433{24/7,WHATSAPP} or mail us at info@diptourltd.com</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Visa/visaquery'));
	    }
	}

	public function visa_search(){
		$this->load->model('Contactinfo');
		$this->load->model('Footerinfo');
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);

		$this->load->model('Visasearchinformation');
		$data['nationality'] = json_decode(json_encode($this->Visasearchinformation->getNationalityList()),true);
		$data['destination'] = json_decode(json_encode($this->Visasearchinformation->getDestinationList()),true);
		$data['country_of_resident'] = json_decode(json_encode($this->Visasearchinformation->getCountryOfResidentList()),true);
		$data['purpose_of_travel'] = json_decode(json_encode($this->Visasearchinformation->getPurposeOfTravelList()),true);
		$this->load->view('common/common_header',$data);
		$this->load->view('Visa/visa_search');
		//$this->load->view('common/common_mid_section',$data);
		$this->load->view('common/common_footer',$data);

	}

	public function getDataByAjax(){
		$data = $this->input->post();
		$this->load->model('Visasearchinformation');
		$getReleventData = json_decode(json_encode($this->Visasearchinformation->get($data)),true);
		$getReleventData[0]['visa_application_center'] = html_entity_decode($getReleventData[0]['visa_application_center']);
		$getReleventData[0]['embassy'] = html_entity_decode($getReleventData[0]['embassy']);
		echo json_encode($getReleventData[0]);
	}
}
?>