<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarRental extends CI_Controller {

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
		$this->load->model('Airport');
		$airports = $this->Airport->getAirportData();
        $returnAirport = array();
        foreach($airports as $v){
        	$returnAirport[] = $v->airport_name;
        }
        $data['airport'] = $returnAirport;
        $this->load->model('TourPackage');
		$data['tour_packages'] =  json_decode(json_encode($this->TourPackage->getActive()), true);
        $this->load->model('Contactinfo');
		$this->load->model('Footerinfo');
		$data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
		$data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
        $this->load->view('common/common_header',$data);
		$this->load->view('Transfer/index',$data);
		$this->load->view('common/common_mid_section',$data);
		$this->load->view('common/common_footer',$data);
	}


	public function add(){
		try{
			$data = $this->input->post();
	        /* [pick_up_city] => Kuwait [drop_off_city] => Katar [pick_up_date] => 2019-11-16 [pick_up_time] => 09:00 [drop_off_date] => 2019-11-23 [drop_off_time] => 1:00 [vechical_type] => 2 [vehicle_class] => Business Class [vehicle_transmission_type] => Select [vehicle_air_conditioning] => Select [vehicle_charge_type] => Select */

	        $this->load->model('Cartransfer');
	        $data['user_email'] = $_SESSION['feusername'];
	        $data['user_id'] = $_SESSION['feuser_id'];
	        $tripdetails = $this->Cartransfer->insertData($data);
	        $message = "Our executives will connect with you over you query";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('car-rental'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Please contact us on +234 8122820856, +234 8170592433{24/7,WHATSAPP} or mail us at info@diptourltd.com</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('car-rental'));
         }
	}

}
?>