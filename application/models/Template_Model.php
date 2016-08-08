<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_Model extends CI_Model {
	
	public function createStore($storeName,$domainName,$userId,$templateId){
		return $this->db->query("CALL InsertStore('$storeName','$domainName','$domainName','$domainName','$userId','$templateId',NULL)")->result();
	}
	public function checkDomain($domainName){
		return $this->db->query("CALL ValidateStoreDomain('$domainName')")->result();
	}
	public function insertRating($templateId,$userId,$rate){
		return $this->db->query("CALL InsertTemplateRating('$rate','$userId','$templateId')")->result();
	}
	public function getCategory(){
		return $this->db->query('CALL GetTemplateCategoryMenu()')->result();
	}
	public function getTemplate($category,$userId,$mode,$limit,$offset){
		$queryString = "";
		$catString=empty($category)?"NULL":"'$category'";
		$userString=isset($userId)?"'$userId'":"NULL";
		$queryString = "CALL GetTemplateByCategory(".$catString.",".$userString.",'$mode',$limit,$offset)";
		//echo $queryString;
		return $this->db->query($queryString)->result();
	}
	public function getTemplateName($templateID){
		return $this->db->query("CALL GetTemplateByTemplateID('$templateID')");
	}
}
