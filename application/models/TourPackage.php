<?php

/**
 * 
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Model
 * @author     Prashant Swami <prashant.swami@samco.in>
 * 
 */

class TourPackage extends CI_Model{
	public function __construct()
	{
		$this->dip = $this->load->database("dip", TRUE);
	}

	/**
	 * @description get Table name
	 * @param no params
	 * @author Suprabha Mishra
	 * @date_created 13-08-2019
	 * @date_modified 13-08-2019
	 * 
	 * @return array
	 */

	public function getTableName()
	{
		return "tour_package";
	}

	/**
	 * @description get user data according username
	 * @param String $username
	 * @author Suprabha Mishra
	 * @date_created 04-10-2019
	 * @date_modified 04-10-2019
	 * 
	 * @return Array $results
	 */

	public function insert($data){
		return $this->dip->insert($this->getTableName(), $data);
	}


	/**
	 * @description get user data according username
	 * @param String $username
	 * @author Suprabha Mishra
	 * @date_created 04-10-2019
	 * @date_modified 04-10-2019
	 * 
	 * @return Array $results
	 */

	public function get(){
		//$this->dip->where('status','1');
		$query = $this->dip->get($this->getTableName());
		$result = array();
		foreach ($query->result() as $row)
		{
		        $result[] = $row;
		}
		return $result; 

	}

	public function getDataForId($id){
		$this->dip->where('id' , $id);
		$query = $this->dip->get($this->getTableName());
		$result = $query->result();
		return $result; 
	}

	public function edit($data){
		//print_r($data); exit;
		$this->dip->where('id',$data['id']);
		$update['title'] = $data['title'];
		$update['duration'] = $data['duration'];
		$update['no_of_reviews'] = $data['no_of_reviews'];
		$update['rating'] = $data['rating'];
		$update['cost_per_head'] = $data['cost_per_head'];
		$update['tour_image'] = $data['tour_image'];
		$update['status'] = $data['status'];
		//print_r($update); exit;
		$this->dip->update($this->getTableName(), $update);
	}

	public function getActive(){
		$this->dip->where('status','1');
		$query = $this->dip->get($this->getTableName());
		$result = array();
		foreach ($query->result() as $row)
		{
		        $result[] = $row;
		}
		return $result; 

	}

}
