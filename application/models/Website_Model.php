<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website_Model extends CI_Model {
	public $dn;
	public function __construct(){
		$this->dn = $this->session->userdata('currentDomain');
	}
	public function setDomainNameStore($storeId){
		$queryString = "CALL GetDomainName ('$storeId')";
		$dbObj = $this->db->query($queryString);
		$this->dn = $dbObj->result()[0]->StoreDomain;
		$dbObj->next_result();
	}
	public function getDomainNameStore($storeId){
		$queryString = "CALL GetDomainName ('$storeId')";
		$dbObj = $this->db->query($queryString);
		$this->dn = $dbObj->result()[0]->StoreDomain;
		$dbObj->next_result();
		return $this->dn;
	}
	public function GetNewestProducts(){  
		$this->dn = 'thelana'; //domain name 
		$this->db->query('use '.$this->dn); 
		$query = $this->db->query("SELECT prod_id, prod_name,  
					prod_desc, prod_image 
					FROM prod p 
					ORDER BY UNIX_TIMESTAMP(prod_date) DESC LIMIT 2"); 
		return $query->result();
	}
	public function setDomainName($newDn){
		$this->dn = $newDn;
	}
	public function getWebsite($userId,$limit,$offset){
		$queryString = "CALL GetMyWebsite('$userId',$limit,$offset)";
		return $this->db->query($queryString)->result();
	}
	public function getTemplateType($storeId){
		$queryString = "CALL GetTemplateType (NULL,'$storeId')";
		$dbRes = $this->db->query($queryString);
		$dbRes->next_result();
		return $dbRes->result();
	}
	public function getGeneralInfo(){
		$logo = $this->getLogo();
		$name = $this->GetDisplayName();
		$banner = $this->GetBanner();
		return array("logo"=>$logo,"name"=>$name,"banner"=>$banner);
	}
	
	/* Inline query buat akses database luar */
	public function GetMenu($templateType){
		$query = $this->db->query("SELECT MenuID, MenuSeq, MenuName, BackendMenuName FROM menu 
					WHERE AuditedActivity <> 'D' AND TemplateType = '".$templateType."'
					ORDER BY MenuSeq");
		return $query->result();
	} 

	public function GetAboutUs(){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("SELECT aboutus_id, aboutus_title, aboutus_desc
						FROM aboutus
						ORDER BY UNIX_TIMESTAMP(aboutus_date) DESC");
		return $query->result();
	} 

	public function InsertAboutUs($aboutus_title,$aboutus_desc){
		$userid = $this->session->userdata("userid");
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("INSERT INTO aboutus (aboutus_title, aboutus_desc, aboutus_date, aboutus_user_input) 
			VALUES('".$aboutus_title."', '".$aboutus_desc."', CURRENT_TIMESTAMP(),'".$userid."')");
	} 

	public function UpdateAboutUs($aboutus_title,$aboutus_desc,$aboutus_id){
		$userid = $this->session->userdata("userid");
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("UPDATE aboutus SET aboutus_title= '".$aboutus_title."', 
								aboutus_desc='".$aboutus_desc."',
								aboutus_date_edit = CURRENT_TIMESTAMP(),
								aboutus_user_edit=".$userid." WHERE aboutus_id=".$aboutus_id);
	}
	
	public function UpdateLogo($logo){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("UPDATE genset SET genset_content = '".$logo."' 
					WHERE genset_type='logo'");
	}
	public function UpdateBanner($banner){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("UPDATE genset SET genset_content='".$banner."' 
					WHERE genset_type='home_banner'");
	}

	public function DeleteAboutUs($aboutus_id){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("DELETE FROM aboutus WHERE aboutus_id =".$aboutus_id);
	} 

	public function GetContactUs(){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("SELECT contactus_id, contactus_name, 
					contactus_email, contactus_message, contactus_isread,
					DATE_FORMAT(contactus_date, '%d %b %Y %h:%i %p') AS contactus_date
					FROM contactus
					ORDER BY UNIX_TIMESTAMP(contactus_date) DESC");
		return $query->result();
	} 

	public function GetProducts(){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("SELECT prod_id, prod_name, 
					prod_desc, prod_image, p.prod_cat_id, pc.prod_cat_name
					FROM prod p
					JOIN prod_cat pc ON pc.prod_cat_id=p.prod_cat_id
					ORDER BY UNIX_TIMESTAMP(prod_date) DESC");
		return $query->result();
	} 
	public function GetProductCategory(){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("SELECT DISTINCT prod_cat_id, prod_cat_name from prod_cat order by prod_cat_id");
		return $query->result();
	}
	public function InsertProducts($param_prod_cat_id,$param_prod_cat_name,$param_prod_name,$param_prod_desc,$param_prod_image){
		$user_id=$this->session->userdata("userid");
		$this->db->query('use '.$this->dn);
		if($param_prod_cat_id != -1)
			$prod_cat_id_inserted = $param_prod_cat_id;
		ELSE{
			$check_cat = $this->db->query("SELECT COUNT(prod_cat_id) 'CountProdCat' FROM prod_cat WHERE prod_cat_name='".$param_prod_cat_name."'")->result()[0];
			if ($check_cat->CountProdCat != 0){
				$prod_cat_id_inserted = $this->db->query("SELECT prod_cat_id FROM prod_cat WHERE prod_cat_name='".$param_prod_cat_name."'")->result()[0]->prod_cat_id;
			} else {
				$prod_cat_id_inserted = $this->db->query("INSERT INTO prod_cat(prod_cat_name, prod_cat_date, prod_cat_user_input)
					VALUES ('".$param_prod_cat_name."', CURRENT_TIMESTAMP(), ".$user_id.");");
					$prod_cat_id_inserted = $this->db->insert_id();
			}
		}
		$query = $this->db->query("INSERT INTO prod
		(prod_name, prod_desc, prod_image, prod_cat_id, prod_date, prod_user_input)
		VALUES
		('".$param_prod_name."', '".$param_prod_desc."', '".$param_prod_image."', ".$prod_cat_id_inserted.", CURRENT_TIMESTAMP(), ".$user_id.");");
		//return $query->result();
	}
	public function UpdateProducts($prod_id,$param_prod_cat_id,$param_prod_cat_name,$param_prod_name,$param_prod_desc,$param_prod_image){
		$user_id=$this->session->userdata("userid");
		$this->db->query('use '.$this->dn);
		if($param_prod_cat_id != -1)
			$prod_cat_id_inserted = $param_prod_cat_id;
		ELSE{
			$check_cat = $this->db->query("SELECT COUNT(prod_cat_id) 'CountProdCat' FROM prod_cat WHERE prod_cat_name='".$param_prod_cat_name."'")->result()[0];
			if ($check_cat->CountProdCat != 0){
				$prod_cat_id_inserted = $this->db->query("SELECT prod_cat_id FROM prod_cat WHERE prod_cat_name='".$param_prod_cat_name."'")->result()[0]->prod_cat_id;
			} else {
				$prod_cat_id_inserted = $this->db->query("INSERT INTO prod_cat(prod_cat_name, prod_cat_date, prod_cat_user_input)
					VALUES ('".$param_prod_cat_name."', CURRENT_TIMESTAMP(), ".$user_id.");");
					$prod_cat_id_inserted = $this->db->insert_id();
			}
		}
		$query = $this->db->query("
			UPDATE prod SET 
			prod_name ='".$param_prod_name."', 
			prod_desc = '".$param_prod_desc."',
			prod_image = '".$param_prod_image."',
			prod_cat_id = ".$prod_cat_id_inserted.",
			prod_date_edit=CURRENT_TIMESTAMP(),
			prod_user_edit=".$user_id."
			WHERE prod_id=".$prod_id);
		//return $query->result();
	}

	public function DeleteProducts($prod_id){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("DELETE FROM prod WHERE prod_id =".$prod_id);
	} 

	public function GetLogo(){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("SELECT genset_content FROM genset
					WHERE genset_type='logo'");
		return $query->result()[0]->genset_content;
	}

	public function GetDisplayName(){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("SELECT genset_content FROM genset
					WHERE genset_type='display_name'");
		return $query->result()[0]->genset_content;
	}

	public function GetBanner(){
		$this->db->query('use '.$this->dn);
		$query = $this->db->query("SELECT genset_content FROM genset
					WHERE genset_type='home_banner'");
		return $query->result()[0]->genset_content;
	}
	/* Selesai inline*/
}
