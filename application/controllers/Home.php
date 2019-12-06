<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('Banners');
		$this->load->model('Footerinfo');
		$this->load->model('Partnerdetails');
		$this->load->model('TourPackage');
		$data['tour_packages'] =  json_decode(json_encode($this->TourPackage->getActive()), true);
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['banners'] = json_decode(json_encode($this->Banners->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
		$data['partner_details'] = json_decode(json_encode($this->Partnerdetails->get()), true);

		$this->load->view('Home/index',$data);
	}


}
?>