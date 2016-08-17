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
	public function preview($templateID) {
		$pageData = $this->template->getTemplateName($templateID)->result()[0]->TemplateProjectName;
		$this->load->view("Template/preview",array("page"=>$pageData));
	}
	public function form_fillment(){
		if(!$this->session->userdata('loggedin')){
			$this->load->helper('url');
			redirect($this->domain."/users/login");
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
	public function getTemplateByCategory(){
		$input = $this->input->post();
		$listTemplate = $this->template->getTemplateByCategory($input["categoryId"],$this->session->userdata("userid"),$input["mode"],$input["limit"],$input["offset"]);

		if( !empty($input["filterByParentCategory"]) ) {

			foreach($listTemplate as $key => $row) {
				if( $row->TemplateCategoryID != $input["filterByParentCategory"] ) {
					unset($listTemplate[$key]);
				}
			}
		}

		$listTemplate = array_values($listTemplate);
		echo json_encode($listTemplate);
	}
	public function checkDomain(){
		$result = $this->template->checkDomain($this->input->post("domainName"));
		echo json_encode($result[0]->Result);
	}
	public function createStore(){
		$this->load->helper('file_helper');
		$this->load->helper('Mobile_Detect_helper');
		$detect = new Mobile_Detect;
		$deviceName="";
		if($detect->isMobile()){
			$deviceName="mobile";
		}
		else if($detect->isTablet()){
			$deviceName="tablet";
		}
		else{
			$deviceName="pc";
		}
		$post = $this->input->post();
		$clientInfo = $post["clientInfo"];
		$userId = $this->session->userdata("userid");
		$databaseObj = $this->template->getTemplateName($post["key"]);
		$resultObj = $databaseObj->result()[0];
		$projectName = $resultObj->TemplateProjectName;
		$projectImage = $resultObj->TemplateImage;
		recursive_copy("assets/template/".$projectName,"../".$post["domainName"]);
		copy("assets/images/screen-shot/".$projectImage,"assets/images/screen-shot/".$post["domainName"].".jpg");
		$databaseObj->next_result();
		$databaseObj = $this->template->createStore($post["storeName"],$post["domainName"],$userId,$post["key"]);
		$newId = $databaseObj->result()[0]->StoreID;
		$databaseObj->next_result();
		$this->template->ExecSp($post["domainName"],$post["key"],$newId,$userId,$clientInfo["appCodeName"],$clientInfo["appVersion"],$this->input->ip_address(),$deviceName,$clientInfo["platform"]);
	}
	public function rateTemplate(){
		if(!$this->session->userdata('loggedin'))return;
		$post = $this->input->post();
		$this->template->insertRating($post["template"],$this->session->userdata("userid"),$post["rate"]);
	}
	/*** end service ***/
}