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
	public function my_website(){
		$this->load->vars(array(
			'site_title' => 'Edit website',
			"additional_js"=>["view/Website/edit"]
		));
		$this->render();
	}

	public function edit($storeId){
		$this->load->vars(array(
			'site_title' => 'My Website',
			"additional_js"=>["view/Website/edit"]
		));
		$templateType = $this->website->getTemplateType($storeId);
		$listMenu = $this->website->GetMenu($templateType[0]->TemplateType);
		$this->website->setDomainNameStore($storeId);
		$generalSetting = $this->website->getGeneralInfo();
		$listAboutUs = $this->website->GetAboutUs();
		$listProduct = $this->website->GetProducts();
		$listProductCat = $this->website->GetProductCategory();
		$listContactUs = $this->website->GetContactUs();
		$this->render(array(
			"listMenu"=>$listMenu,
			"generalSetting"=>$generalSetting,
			"aboutUs"=>$listAboutUs,
			"Product"=>$listProduct,
			"ProductCat"=>$listProductCat,
			"ContactUs"=>$listContactUs,
			"storeId"=>$storeId
		));
	}
	/*** end page load ***/
	
	/*** service ***/
	public function getWebsite(){
		$input = $this->input->post();
		$listWebsite = $this->website->getWebsite($this->session->userdata("userid"),$input["limit"],$input["offset"]);
		echo json_encode($listWebsite);
	}
	public function addAboutUs(){
		$post = $this->input->post();
		$this->website->setDomainNameStore($post["store"]);
		$this->website->InsertAboutUs($post["title"],$post["content"]);
	}
	public function editAboutUs(){
		$post = $this->input->post();
		$this->website->setDomainNameStore($post["store"]);
		//$post["aboutUs"] -> id aboutus nya yang mau diganti
		$this->website->UpdateAboutUs($post["title"],$post["content"]);
	}
	public function delAboutUs(){
		$post = $this->input->post();
		$this->website->setDomainNameStore($post["store"]);
		$this->website->DeleteAboutUs($post["aboutUs"]);
	}
	public function addProduct(){
		$post = $this->input->post();
		$this->website->setDomainNameStore($post["store"]);
		$this->website->InsertProducts($post["category"],$post["categoryName"],$post["name"],$post["desc"],$post["image"]);
	}
	public function editProduct(){
		$post = $this->input->post();
		$this->website->setDomainNameStore($post["store"]);
		$this->website->UpdateProducts();
	}
	public function delProduct(){
		$post = $this->input->post();
		$this->website->setDomainNameStore($post["store"]);
		$this->website->DeleteProducts($post["product"]);
	}
	/*** end service ***/
}