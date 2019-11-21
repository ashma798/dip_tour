<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Controller {

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
                $this->load->model('Contactinfo');
                $this->load->model('Footerinfo');
                $this->load->model('Services');
                $data['contact_info'] = json_decode(json_encode($this->Contactinfo->get()), true);
                $data['footer_info'] = json_decode(json_encode($this->Footerinfo->get()), true);
                $this->load->view('common/common_header',$data);
		$this->load->view('Flight/index',$data);
                $this->load->view('common/common_footer',$data);
	}

	public function add(){
		$data = $this->input->post();
        /*Array ( [flight_search_type] => One-Way [origin] => [destination] => [departure_date] => 11/16/2019 [adult_count] => 5 [child_count] => 3 [infant_count] => 1 [class] => Economy [airline] => Select Airline [return_date] => 11/10/2019 [non_stop_only] => [search_time] => ) */
                $insertData =  array();
                if($data['flight_search_type'] == 'One-Way'){
                	$insertData['flight_search_type'] = $data['flight_search_type'];
                	$insertData['origin'] = $data['origin'];
                	$insertData['destination'] = $data['destination'];
                	$insertData['departure_date'] = $data['departure_date'];
                	$insertData['adult_count'] = $data['adult_count'];
                	$insertData['child_count'] = $data['child_count'];
                	$insertData['infant_count'] = $data['infant_count'];
                	$insertData['class'] = $data['class'];
                	$insertData['airline'] = $data['airline'];
                	$insertData['non_stop_only'] = $data['non_stop_only'];
                	$insertData['search_time'] = $data['search_time'];
                        $insertData['user_email'] = $_SESSION['feuser_id'];
                        $insertData['user_id'] = $_SESSION['feusername'];
                }

                if($data['flight_search_type'] == 'Round-Trip'){
                	$insertData['flight_search_type'] = $data['flight_search_type'];
                	$insertData['origin'] = $data['origin_1'];
                	$insertData['destination'] = $data['destination_1'];
                	$insertData['departure_date'] = $data['departure_date_1'];
                	$insertData['departure_date'] = $data['departure_date_1'];
                	$insertData['adult_count'] = $data['adult_count_1'];
                	$insertData['child_count'] = $data['child_count_1'];
                	$insertData['infant_count'] = $data['infant_count_1'];
                	$insertData['class'] = $data['class_1'];
                	$insertData['airline'] = $data['airline_1'];
                	$insertData['non_stop_only'] = $data['non_stop_only_1'];
                	$insertData['search_time'] = $data['search_time_1'];
                        $insertData['user_email'] = $_SESSION['feuser_id'];
                        $insertData['user_id'] = $_SESSION['feusername'];
                }

                if(isset($insertData['non_stop_only'])){
                	$insertData['non_stop_only']= 'Yes';
                }else{
                	$insertData['non_stop_only']= 'No';
                }
                if(isset($insertData['search_time'])){
                	$insertData['search_time']= '1';
                }else{
                	$insertData['search_time']= '0';
                }

                $this->load->model('Flightsearch');
                $tripdetails = $this->Flightsearch->insertData($insertData);
                $message = "Our executives will connect with you over you query";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Flight'));
	
	}


}
?>