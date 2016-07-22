<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends ABN_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Template_Model","template");
	}
	/*** page load ***/
	public function find() {
		$this->load->vars(array(
			'site_title' => 'Find Template',
		));
		$this->load->vars(array("additional_js"=>["view/Template/find"]));
		$listCategory = $this->template->getCategory();
		$this->render(array("listCategory"=>$listCategory));
	}
	public function preview($jsonName) {
		$this->load->helper('preview');
		$pageData = json_decode(file_get_contents('Template/'.$jsonName.'.json'),true);
		renderDOM($pageData);
	}
	/*** end page load ***/
	
	/*** service ***/
	public function getTemplate(){
		$input = $this->input->post();
		$listTemplate = $this->template->getTemplate($input["categoryId"],$input["mode"],$input["limit"],$input["offset"]);
		echo json_encode($listTemplate);
	}
	/*** end service ***/
}