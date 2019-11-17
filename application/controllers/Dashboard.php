<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		//echo "Inside";
		//echo "<a href='".base_url('User/logout')."'>Logout</a>";
		$data['v'] = 'Dashboard/index';
		$data['viewName'] = 'Dashboard';
		$this->load->view('template',$data);
	}

	public function flights(){
		$this->load->model('Flightsearch');
		$getDataForFlightQuery = $this->Flightsearch->getFlightQueryData();
		$data['viewName'] = 'Flights';
		$data['v'] = 'Dashboard/flights';
		$data['data'] = $getDataForFlightQuery;
		$this->load->view('template',$data);
	}

	public function transfer(){
		$this->load->model('Cartransfer');
		$getDataForTransferQuery = $this->Cartransfer->getTransferQueryData();
		$data['v'] = 'Dashboard/transfer';
		$data['viewName'] = 'Transfer';
		$data['data'] = $getDataForTransferQuery;
		$this->load->view('template',$data);
	}


	public function visa(){
		$this->load->model('Visaquery');
		$getDataForVisaQuery = $this->Visaquery->get();
		$data['v'] = 'Dashboard/visa';
		$data['viewName'] = 'Visa';
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);
	}

	public function partnersDetails(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/partnerDetails';
		$data['viewName'] = 'CMS | Our Partners';
		//$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}

	public function addPartnerLogo(){
		$data = $this->input->post();
		$pathToFile = $this->uploadImageFileToPath($_FILES, 'partners_logo', 'file_name');
		$inputData = array();
		$inputData['first_name'] = $data['first_name'];
		$inputData['last_name'] = $data['last_name'];
		$inputData['file_path'] = $pathToFile;
		$this->load->model('Partnerdetails');
		if($pathToFile !== 0){
			$partnerLogo = $this->Partnerdetails->insertData($inputData);
			$message = "Partner data saved successfully";
			$this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/partnersDetails'));
		}
	}


	public function banners(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/banners';
		$data['viewName'] = 'CMS | Banners';
		//$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}


	public function addBanner(){
		$inputData['banner1'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_1');
		$inputData['banner2'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_2');
		$inputData['banner3'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_3');

		$this->load->model('Banners');
		if($inputData['banner1'] != 0 && $inputData['banner2'] != 0 && $inputData['banner3'] != 0){
			$partnerLogo = $this->Banners->insertData($inputData);
			$message = "Banner data saved successfully";
			$this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/banners'));
		}
	}


	public function footerInfo(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/footer_info';
		$data['viewName'] = 'CMS | Footer Info';
		//$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}


	public function addfooterInfo(){
		$data = $this->input->post();
		print_r($data);
		$this->load->model('Footerinfo');
        $tripdetails = $this->Footerinfo->insertData($data);
        $message = "Footer info saved";
        $this->session->set_flashdata('item', $message);
        redirect(base_url('Dashboard/footerInfo'));
	}


	public function contactUs(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/contact_us';
		$data['viewName'] = 'CMS | Contact Us Info';
		//$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}



	public function addContactInfo(){
		$data = $this->input->post();
		$this->load->model('Contactinfo');
        $tripdetails = $this->Contactinfo->insertData($data);
        $message = "Contact Info info saved";
        $this->session->set_flashdata('item', $message);
        redirect(base_url('Dashboard/contactUs'));
	}
}