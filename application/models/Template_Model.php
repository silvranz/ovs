<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_Model extends CI_Model {
	
	public function getCategory(){
		return $this->db->query('CALL GetTemplateCategoryMenu()')->result();
	}
	public function getTemplate($category,$mode){
		$queryString = "";
		if(empty($category))
			$queryString = "CALL GetTemplateByCategory(NULL,'$mode')";
		else
			$queryString = "CALL GetTemplateByCategory('$category','$mode')";
		return $this->db->query($queryString)->result();
	}
}
