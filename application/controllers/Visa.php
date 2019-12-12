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
		$this->load->model('TourPackage');
		$data['tour_packages'] =  json_decode(json_encode($this->TourPackage->getActive()), true);
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
		$this->load->model('TourPackage');
		$data['tour_packages'] =  json_decode(json_encode($this->TourPackage->getActive()), true);
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
			//$data['user_email'] = $_SESSION['feusername'];
	        //$data['user_id'] = $_SESSION['feuser_id'];
	        $tripdetails = $this->Visaquery->insertData($data);
	        $message = "<span style='background-color:#28a745; color:white'>Our executives will connect with you over your query</span>";;
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

	public function DubaiUAE(){
		$this->load->model('Contactinfo');
		$this->load->model('Footerinfo');
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
		$this->load->view('common/common_header',$data);
		$this->load->view('Visa/DubaiUAE');
		$this->load->view('common/common_footer',$data);
	}

	public function addDubaiUAE(){
		try{
			$data = $this->input->post();
			$this->load->model('Visaquery');
			/*
			Array ( [prefix] => Ms [first_name] => Suprabha [last_name] => Mishra [dob] => 1985-01-03 [nationality] => India [marital_status] => single [gender] => Female [email] => suprabha@mailinator.com [telephone] => 9999999999 [address] => aaaaaaaaa [city] => Mumbai [state] => Maharashtra [employment_status] => Self-employed [intended_arrival_date] => 2019-12-20 [intended_return_date] => 2019-12-28 [uae_contact_info] => 44444444444 [went_to_uk] => yes [went_to_usa] => yes [went_to_uae] => yes [went_to_south_africa] => yes [went_to_asia] => yes [went_to_others] => yes [pasport_number] => sasasaSA [pasport_expiry] => 2022-07-15 ) 
			Array ( [scanned_data_page] => Array ( [name] => tour3.jpg [type] => image/jpeg [tmp_name] => /tmp/php6bj6Ht [error] => 0 [size] => 35135 ) [scanned_data_page_parent_guardian_spouse] => Array ( [name] => tour2.jpg [type] => image/jpeg [tmp_name] => /tmp/phpWtQoR0 [error] => 0 [size] => 35881 ) )
		*/	

			$data['scanned_data_page'] = $this->uploadImageFileToPath($_FILES, 'visa_docs', 'scanned_data_page');
			$data['scanned_data_page_parent_guardian_spouse'] = $this->uploadImageFileToPath($_FILES, 'visa_docs', 'scanned_data_page_parent_guardian_spouse');
	        $tripdetails = $this->Visaquery->insertDubaiUAE($data);
	        $message = "<span style='background-color:green;color:white;'>Our executives will connect with you over your query</span>";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('Visa/DubaiUAE'));
	    }catch(Exception $e){
	    	 $message = "<span style='background-color:red;'>Something went wrong... Please contact us on +234 8122820856, +234 8170592433{24/7,WHATSAPP} or mail us at info@diptourltd.com</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Visa/DubaiUAE'));
	    }
	}
}
?>