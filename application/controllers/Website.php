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

	public function edit($storeId,$active=""){
		$this->load->vars(array(
			'site_title' => 'My Website',
			"additional_js"=>["view/Website/edit"]
		));
		$splitDomain = explode("/",$this->domain);
		$websiteProject = $this->website->getDomainNameStore($storeId);
		$templateType = $this->website->getTemplateType($storeId);
		$domainName = $splitDomain[0]."/".$splitDomain[1]."/".$splitDomain[2]."/".$websiteProject."/";
		$listMenu = $this->website->GetMenu($templateType[0]->TemplateType);
		$this->session->set_userdata('currentDomain', $websiteProject);
		$this->website->__construct();
		$generalSetting = $this->website->getGeneralInfo();
		$listAboutUs = $this->website->GetAboutUs();
		$listProduct = $this->website->GetProducts();
		$listProductCat = $this->website->GetProductCategory();
		$listContactUs = $this->website->GetContactUs();
		$this->render(array(
			"activeMenu"=>$active,
			"listMenu"=>$listMenu,
			"website_domain"=>$domainName,
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
	public function updateLogo(){
		$config['upload_path'] = '../'.$this->session->userdata('currentDomain').'/images';
        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload("logoImage"))
        {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
        }
        else
        {
            $data = $this->upload->data();
            $file_id = $this->website->updateLogo($data['file_name']);
            /*if($file_id)
            {
                $status = "success";
                $msg = "File successfully uploaded";
            }
            else
            {
                unlink($data['full_path']);
                $status = "error";
                $msg = "Something went wrong when saving the file, please try again.";
            }*/
        }
        @unlink($_FILES["logoImage"]);
	}
	public function updateBanner(){
		$config['upload_path'] = '../'.$this->session->userdata('currentDomain').'/images';
        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload("bannerImage"))
        {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
        }
        else
        {
            $data = $this->upload->data();
            $file_id = $this->website->updateBanner($data['file_name']);
            /*if($file_id)
            {
                $status = "success";
                $msg = "File successfully uploaded";
            }
            else
            {
                unlink($data['full_path']);
                $status = "error";
                $msg = "Something went wrong when saving the file, please try again.";
            }*/
        }
        @unlink($_FILES["bannerImage"]);
	}
	public function addAboutUs(){
		if(empty($post["title"])){
			$msg = "Title must be filled";
		}
		else if(empty($post["content"])){
			$msg = "Content must be filled";
		}
		else{
			$post = $this->input->post();
			$this->website->InsertAboutUs($post["title"],$post["content"]);
			$msg="";
		}
		echo $msg;
	}
	public function editAboutUs(){
		if(empty($post["title"])){
			$msg = "Title must be filled";
		}
		else if(empty($post["content"])){
			$msg = "Content must be filled";
		}
		else{
			$post = $this->input->post();
			$this->website->UpdateAboutUs($post["title"],$post["content"],$post["aboutUs"]);
			$msg="";
		}
		echo $msg;
	}
	public function delAboutUs(){
		$post = $this->input->post();
		$this->website->DeleteAboutUs($post["aboutUs"]);
	}
	public function addProduct(){
		if(!(empty($post["cat"])||empty($post["categoryName"])||empty($post["name"])||empty($post["desc"]))){
			$post = $this->input->post();
			$config['upload_path'] = '../'.$this->session->userdata('currentDomain').'/images';
			$config['allowed_types'] = 'gif|jpg|png|doc|txt';
			$config['max_size'] = 1024 * 8;
			$config['encrypt_name'] = TRUE;
	 
			$this->load->library('upload', $config);
	 
			if (!$this->upload->do_upload("productImage"))
			{
				$msg = $this->upload->display_errors('', '');
			}
			else
			{
				$data = $this->upload->data();
				if($file_id)
				{
					$this->website->InsertProducts($post["cat"],$post["categoryName"],$post["name"],$post["desc"],$data['file_name']);
					$msg = "";
				}
				else
				{
					unlink($data['full_path']);
					$msg = "Something went wrong when saving the file, please try again.";
				}
			}
			@unlink($_FILES["productImage"]);
		}
		else{
			$msg = "Data must be filled.";
		}
		echo $msg;
	}
	public function editProduct(){
		if(!(empty($post["cat"])||empty($post["categoryName"])||empty($post["name"])||empty($post["desc"]))){
			$post = $this->input->post();
			$config['upload_path'] = '../'.$this->session->userdata('currentDomain').'/images';
			$config['allowed_types'] = 'gif|jpg|png|doc|txt';
			$config['max_size'] = 1024 * 8;
			$config['encrypt_name'] = TRUE;
	 
			$this->load->library('upload', $config);
	 
			if (!$this->upload->do_upload("productImage"))
			{
				$status = 'error';
				$msg = $this->upload->display_errors('', '');
			}
			else
			{
				$data = $this->upload->data();
				$this->website->UpdateProducts($post["prodId"],$post["cat"],$post["categoryName"],$post["name"],$post["desc"],$data['file_name']);
				if($file_id)
				{
					$msg = "";
				}
				else
				{
					unlink($data['full_path']);
					$msg = "Something went wrong when saving the file, please try again.";
				}
			}
			@unlink($_FILES["productImage"]);
		}
		else{
			$msg = "Data must be filled.";
		}
		echo $msg;
	}
	public function delProduct(){
		$post = $this->input->post();
		$this->website->DeleteProducts($post["product"]);
	}
	/*** end service ***/
}