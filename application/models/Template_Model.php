<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_Model extends CI_Model {
	
	public function createStore($domainName,$templateId,$json){
		return $this->db->query("CALL InsertStore('$domainName','$domainName','1','$templateId','$json')")->result();
	}
	public function checkDomain($domainName){
		return $this->db->query("CALL ValidateStoreDomain('$domainName')")->result();
	}
	public function getCategory(){
		return $this->db->query('CALL GetTemplateCategoryMenu()')->result();
	}
	public function getTemplate($category,$mode,$limit,$offset){
		$queryString = "";
		if(empty($category))
			$queryString = "CALL GetTemplateByCategory(NULL,'$mode',$limit,$offset)";
		else
			$queryString = "CALL GetTemplateByCategory('$category','$mode',$limit,$offset)";
		return $this->db->query($queryString)->result();
	}
	public function getTemplateJSON($templateID){
		return $this->db->query("CALL GetTemplateByTemplateID('$templateID')");
	}
}
