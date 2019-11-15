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

}