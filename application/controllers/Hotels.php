<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {

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
		$this->load->view('Hotels/index');
	}


	public function add(){
		$data = $this->input->post();
        /* [pick_up_city] => Kuwait [drop_off_city] => Katar [pick_up_date] => 2019-11-16 [pick_up_time] => 09:00 [drop_off_date] => 2019-11-23 [drop_off_time] => 1:00 [vechical_type] => 2 [vehicle_class] => Business Class [vehicle_transmission_type] => Select [vehicle_air_conditioning] => Select [vehicle_charge_type] => Select */
        //print_r($data); exit;
        $this->load->model('Hotelquery');
        $tripdetails = $this->Hotelquery->insertData($data);
        $message = "Our executives will connect with you over you query";
        $this->session->set_flashdata('item', $message);
        redirect(base_url('Hotels'));
	
	}

}
?>