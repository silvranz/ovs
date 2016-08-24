<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website_Model extends CI_Model {
	public function getWebsite($userId,$limit,$offset){
		$queryString = "CALL GetMyWebsite('$userId',$limit,$offset)";
		return $this->db->query($queryString)->result();
	}
	public function getMenu($storeId){
		$queryString = "CALL SD_GETMENU('$storeId')";
		return $this->db->query($queryString)->result();
	}
}
