<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_Model extends CI_Model {
	
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
}
