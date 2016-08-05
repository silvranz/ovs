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
			"additional_js"=>[
				"view/Template/find",
				"bootstrap/bootstrap-rating.min"],
			"additional_css"=>["bootstrap/bootstrap-rating"]
		));
		$listCategory = $this->template->getCategory();
		$this->render(array("listCategory"=>$listCategory));
	}
	public function preview($jsonName) {
		$this->load->helper('preview');
		$pageData = json_decode(file_get_contents('Template/'.$jsonName.'.json'),true);
		renderDOM($pageData);
	}
	public function form_fillment(){
		if(!$this->session->userdata('loggedin')){
			$this->load->helper('url');
			redirect($this->domain);
		}
		$this->load->vars(array("additional_js"=>["view/Template/form_fillment"]));
		$this->render(["key"=>$this->input->get("key")]);
	}
	/*** end page load ***/
	
	/*** service ***/
	public function getTemplate(){
		$input = $this->input->post();
		$listTemplate = $this->template->getTemplate($input["categoryId"],$this->session->userdata("userid"),$input["mode"],$input["limit"],$input["offset"]);
		echo json_encode($listTemplate);
	}
	public function checkDomain(){
		$result = $this->template->checkDomain($this->input->post("domainName"));
		echo json_encode($result[0]->Result);
	}
	public function createStore(){
		$databaseObj = $this->template->getTemplateJSON($this->input->post("key"));
		$templateJSON = $databaseObj->result()[0]->TemplateJson;
		$databaseObj->next_result();
		$this->template->createStore($this->input->post("domainName"),$this->input->post("key"),$templateJSON);
	}
	public function rateTemplate(){
		if(!$this->session->userdata('loggedin'))return;
		$post = $this->input->post();
		$this->template->insertRating($post["template"],$this->session->userdata("userid"),$post["rate"]);
	}
	/*** end service ***/
}