<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_Model extends CI_Model {
	
	public function getCategory(){
		return $this->db->query('CALL GetTemplateCategoryMenu()')->result();
	}
}
