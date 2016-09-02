<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {
	
	public function getProfile($userID){
		return $this->db->query("CALL GetUserProfile('$userID')");
	}
	public function getCountry(){
		return $this->db->query("CALL GetCountry()");
	}
	public function updateProfilePic($userId,$fileName){
		return $this->db->query("CALL UpdateUserPhoto('$userId','$fileName')");
	}
	public function updateProfile($userId,$name,$gender,$country){
		return $this->db->query("CALL UpdateUserProfile('$userId','$name','$gender','$country')");
	}
}
