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
		try{
			$data = $this->input->post();
			$pathToFile = $this->uploadImageFileToPath($_FILES, 'partners_logo', 'file_name');
			$inputData = array();
			$inputData['first_name'] = $data['first_name'];
			$inputData['last_name'] = $data['last_name'];
			$inputData['file_path'] = $pathToFile;
			$this->load->model('Partnerdetails');
			if($pathToFile !== 0){
				$partnerLogo = $this->Partnerdetails->insertData($inputData);
				$message = "<span style='background-color:green;'>Partner data saved successfully</span>";
				$this->session->set_flashdata('item', $message);
				redirect(base_url('Dashboard/partnersDetails'));
			}
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
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
		try{
			$inputData['banner1'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_1');
			$inputData['banner2'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_2');
			$inputData['banner3'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_3');

			$this->load->model('Banners');
			if($inputData['banner1'] != 0 && $inputData['banner2'] != 0 && $inputData['banner3'] != 0){
				$partnerLogo = $this->Banners->insertData($inputData);
				$message = "<span style='background-color:green;'>Banner data saved successfully</span>";
				$this->session->set_flashdata('item', $message);
				redirect(base_url('Dashboard/banners'));
			}
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/banners'));
         }
	}


	public function footerInfo(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/footer_info';
		$data['viewName'] = 'CMS | Footer Info';
		$this->load->model('Footerinfo');
        $getAboutUsData = $this->Footerinfo->get();
        $data['footer_info'] = html_entity_decode($getAboutUsData);
        $this->load->view('template',$data);

	}


	public function addfooterInfo(){
		try{
			$data = $this->input->post();
			$this->load->model('Footerinfo');
	        $tripdetails = $this->Footerinfo->update($data);
	        $message = "<span style='background-color:green;'>Footer info saved</span>";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('Dashboard/footerInfo'));
	    }catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/footerInfo'));
         }
	}


	public function contactUs(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/contact_us';
		$data['viewName'] = 'CMS | Contact Us Info';
		//$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}



	public function addContactInfo(){
		try{
			$data = $this->input->post();
			$this->load->model('Contactinfo');
	        $tripdetails = $this->Contactinfo->insertData($data);
	        $message = "<span style='background-color:green;'>Contact Info saved</span>";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('Dashboard/contactUs'));
	    }catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/contactUs'));
         }
	}


	public function editAboutUs(){
		$data['v'] = 'Dashboard/edit_about_us';
		$data['viewName'] = 'CMS | About Us';
		$this->load->model('Aboutus');
        $getAboutUsData = $this->Aboutus->get();
        $data['about_us'] = html_entity_decode($getAboutUsData);
        $this->load->view('template',$data);

	}

	public function addAboutUs(){
		try{
			$data = $this->input->post();
	        $this->load->model('Aboutus');
	        $inserData['about_us'] = htmlentities($data['about_us']);
	        $this->Aboutus->update($inserData);
	        $message = "<span style='background-color:green;'>About us Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editAboutUs'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editAboutUs'));
         }
	}

	// our network

	public function editServices(){
		$data['v'] = 'Dashboard/services';
		$data['viewName'] = 'CMS | Services';
		$this->load->model('Services');
        $getServicesData = $this->Services->get();
        $data['services'] = html_entity_decode($getServicesData);
        $this->load->view('template',$data);

	}

	public function addServices(){
		try{
			$data = $this->input->post();
	        $this->load->model('Services');
	        $inserData['services'] = htmlentities($data['services']);
	        $this->Services->update($inserData);
	        $message = "<span style='background-color:green;'>Services Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editServices'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editServices'));
         }
	}


	public function editPrivacyPolicy(){
		$data['v'] = 'Dashboard/privacy_policy';
		$data['viewName'] = 'CMS | Privacy Policy';
		$this->load->model('Privacypolicy');
        $getServicesData = $this->Privacypolicy->get();
        $data['privacy_policy'] = html_entity_decode($getServicesData);
        $this->load->view('template',$data);

	}

	public function addPrivacyPolicy(){
		try{
			$data = $this->input->post();
	        $this->load->model('Privacypolicy');
	        $inserData['privacy_policy'] = htmlentities($data['privacy_policy']);
	        $this->Privacypolicy->update($inserData);
	        $message = "<span style='background-color:green;'>Privacy policy Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editPrivacyPolicy'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editPrivacyPolicy'));
        }
	}

	public function editOurNetwork(){
		$data['v'] = 'Dashboard/our_network';
		$data['viewName'] = 'CMS | Our Network';
		$this->load->model('Ournetwork');
        $getServicesData = $this->Ournetwork->get();
        $data['our_network'] = html_entity_decode($getServicesData);
        $this->load->view('template',$data);

	}

	public function addOurNetwork(){
		try{
			$data = $this->input->post();
	        $this->load->model('Ournetwork');
	        $inserData['our_network'] = htmlentities($data['our_network']);
	        $this->Ournetwork->update($inserData);
	        $message = "<span style='background-color:green;'>Our Network Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editOurNetwork'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editOurNetwork'));
        }
	}


	public function hotel(){
		$this->load->model('Hotelquery');
		$getDataForVisaQuery = $this->Hotelquery->get();
		$data['v'] = 'Dashboard/hotel';
		$data['viewName'] = 'Hotel';
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);
	}
}