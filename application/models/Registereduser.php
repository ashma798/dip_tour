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

class Registereduser extends CI_Model{
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
		return "register_user";
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

	public function insertData($data){
		return $this->dip->insert($this->getTableName(), $data);
	}


	public function get(){
		$query = $this->dip->get($this->getTableName());
		$result = array();
		foreach ($query->result() as $row)
		{
		        $result[] = $row;
		}
		return $result; 

	}
	public function deleteDataForId($id){
		$this->dip->where('id',$id);
		$query = $this->dip->delete($this->getTableName());
		//print_r($query);die;
		$result = $query;
		return $result; 
	}
	public function getDataId($id){
		$this->dip->where('id',$id);
		$query = $this->dip->get($this->getTableName());
		$result = $query->result();
		return $result; 
	}
		public function edit($data){
		$this->dip->where('id',$data['id']);
		$update['salutation'] = $data['salutation'];
		$update['first_name'] = $data['fname'];
		$update['middle_name'] = $data['mname'];
		$update['last_name'] = $data['lname'];
		$update['login_email'] = $data['email'];
		$update['cell_phone'] = $data['phone'];
		$update['company_name'] = $data['company_name'];
		$update['address'] = $data['address'];
		$update['city'] = $data['city'];
		$update['state'] = $data['state'];
		$update['country'] = $data['country'];
		$update['zip_code'] = $data['zip_code'];
		$update['password'] = $data['password'];
		$update['i_agree'] = $data['terms'];
		//print_r($update); exit;
		$this->dip->update($this->getTableName(), $update);
	}

	
}
