<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends ABN_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Website_Model","website");
	}
	
	/*** page load ***/
	public function index(){
		$this->load->vars(array(
			'site_title' => 'My website',
			"additional_js"=>["view/Website/index"]
		));
		$this->render();
	}
	public function edit1(){
		$this->load->vars(array(
			'site_title' => 'Edit website',
			"additional_js"=>["view/Website/edit"]
		));
		$this->render();
	}

	public function edit($storeId){
		$this->load->vars(array(
			'site_title' => 'My Website',
		));
		$listMenu = $this->website->getMenu($storeId);
		$this->render(array("listMenu"=>$listMenu));
	}
	/*** end page load ***/
	
	/*** service ***/
	public function getWebsite(){
		$input = $this->input->post();
		$listWebsite = $this->website->getWebsite($this->session->userdata("userid"),$input["limit"],$input["offset"]);
		echo json_encode($listWebsite);
	}
	/*** end service ***/
}