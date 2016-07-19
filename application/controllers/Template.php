<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends ABN_Controller {

	public function find() {
		$this->load->vars(array(
			'site_title' => 'Find Template',
		));
		$this->load->model("Template_Model","template");
		$listCategory = $this->template->getCategory();
		$this->render(array("listCategory"=>$listCategory));
	}
	public function preview($jsonName) {
		$this->load->helper('preview');
		$pageData = json_decode(file_get_contents('Template/'.$jsonName.'.json'),true);
		renderDOM($pageData);
	}
}