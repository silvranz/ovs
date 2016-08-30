<?php

		/*ini buat dapetin menu di sebelah kanan
		MenuSeq - untuk urutan tampilan
		BackendMenuName - nama file phpnya, atau controllernya terserah
		atau any suggestion ?
		*/
		public function GetMenu(){	
			$templatetype = 'CC1' 
			$query = $this->db->query("SELECT MenuID, MenuSeq, MenuName, BackendMenuName FROM menu 
						WHERE AuditedActivity <> 'D' AND TemplateType = '".$templatetype."'
						ORDER BY MenuSeq");
			echo json_encode($query->result());
		} 

		public function GetAboutUs(){	
			$dn = 'thelana'; //domain name
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT aboutus_id, aboutus_title, aboutus_desc
							FROM aboutus
							ORDER BY UNIX_TIMESTAMP(aboutus_date) DESC");
			echo json_encode($query->result());
		} 

		public function InsertAboutUs(){	
			$dn = 'thelana'; //domain name
			$aboutus_title = 'Hai';
			$aboutus_desc = 'longlongtext';
			$userid = $this->session->userdata("userid");
			$this->db->query('use '.$dn);
			$query = $this->db->query("INSERT INTO aboutus (aboutus_title, aboutus_desc, aboutus_date, aboutus_user_input) 
				VALUES('".$aboutus_title."', '".$aboutus_desc."', CURRENT_TIMESTAMP(),'".$userid."')");
		} 

		public function UpdateAboutUs(){	
			$dn = 'thelana'; //domain name
			$aboutus_id = 1;
			$aboutus_title = 'Hai';
			$aboutus_desc = 'longlongtext';
			$userid = $this->session->userdata("userid");
			$this->db->query('use '.$dn);
			$query = $this->db->query("UPDATE aboutus SET aboutus_title= '".$aboutus_title."', 
								aboutus_desc='".$aboutus_desc."',
								aboutus_date_edit = CURRENT_TIMESTAMP(),
								aboutus_user_edit=".$userid." WHERE aboutus_id=".$aboutus_id);
		} 

		public function DeleteAboutUs(){	
			$dn = 'thelana'; //domain name
			$aboutus_id = 1;
			$this->db->query('use '.$dn);
			$query = $this->db->query("DELETE FROM aboutus WHERE aboutus_id =".$aboutus_id);
		} 

		public function GetContactUs(){	
			$dn = 'thelana'; //domain name
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT contactus_id, contactus_name, 
						contactus_email, contactus_message, contactus_isread,
						DATE_FORMAT(contactus_date, '%d %b %Y %h:%i %p') AS contactus_date
						FROM contactus
						ORDER BY UNIX_TIMESTAMP(contactus_date) DESC");
			echo json_encode($query->result());
		} 

		public function GetProductCategory(){	
			$dn = 'thelana'; //domain name
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT DISTINCT prod_cat_id, prod_cat_name from prod_cat order by prod_cat_id");
			echo json_encode($query->result());
		} 

		public function GetNewestProducts(){	
			$dn = 'thelana'; //domain name
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT prod_id, prod_name, 
						prod_desc, prod_image
						FROM prod p
						ORDER BY UNIX_TIMESTAMP(prod_date) DESC LIMIT 2");
			echo json_encode($query->result());
		} 

		public function GetProducts(){	
			$dn = 'thelana'; //domain name
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT prod_id, prod_name, 
						prod_desc, prod_image, p.prod_cat_id, pc.prod_cat_name
						FROM prod p
						JOIN prod_cat pc ON pc.prod_cat_id=p.prod_cat_id
						ORDER BY UNIX_TIMESTAMP(prod_date) DESC");
			echo json_encode($query->result());
		} 

		public function InsertProducts(){	
			$dn = 'thelana'; //domain name
			$param_prod_cat_id = 1; //kalo insert baru lempar -1
			$param_prod_cat_name='cat_tes_baru+lagi';
			$user_id=$this->session->userdata("userid");
			$param_prod_name='aaaabbbbccc';
			$param_prod_desc='aaaaabbbccc';
			$param_prod_image='aaaaabbbbccc';

			$this->db->query('use '.$dn);
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
			$this->db->query("INSERT INTO prod
			(prod_name, prod_desc, prod_image, prod_cat_id, prod_date, prod_user_input)
			VALUES
			('".$param_prod_name."', '".$param_prod_desc."', '".$param_prod_image."', ".$prod_cat_id_inserted.", CURRENT_TIMESTAMP(), ".$user_id.");");
			echo json_encode($query->result());
		} 

		public function UpdateProducts(){	
			$dn = 'thelana'; //domain name
			$prod_id=1;
			$param_prod_cat_id = 1; //kalo insert baru lempar -1
			$param_prod_cat_name='cat2';
			$user_id=$this->session->userdata("userid");
			$param_prod_name='prod2';
			$param_prod_desc='prod_desc2';
			$param_prod_image='prod_image2';
			$this->db->query('use '.$dn);
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
			$this->db->query("
				UPDATE prod SET 
				prod_name ='".$param_prod_name."', 
				prod_desc = '".$param_prod_desc."',
				prod_image = '".$param_prod_image."',
				prod_cat_id = ".$prod_cat_id_inserted.",
				prod_date_edit=CURRENT_TIMESTAMP(),
				prod_user_edit=".$user_id."
				WHERE prod_id=".$prod_id);
			echo json_encode($query->result());
		} 


		public function DeleteProducts(){	
			$dn = 'thelana'; //domain name
			$prod_id = 1;
			$this->db->query('use '.$dn);
			$query = $this->db->query("DELETE FROM prod WHERE prod_id =".$prod_id);
		} 

		public function GetLogo(){
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT genset_content FROM genset
						WHERE genset_type='logo'");
			echo json_encode($query->result());
		}

		public function UpdateLogo(){
			$logo='url';
			$this->db->query('use '.$dn);
			$query = $this->db->query("UPDATE genset SET genset_content = '".$logo."' 
						WHERE genset_type='logo'");
			echo json_encode($query->result());
		}

		public function GetDisplayName(){
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT genset_content FROM genset
						WHERE genset_type='display_name'");
			echo json_encode($query->result());
		}

		public function UpdateDisplayName(){
			$display_name='Thelana Shop'
			$this->db->query('use '.$dn);
			$query = $this->db->query("UPDATE genset SET genset_content='".$display_name."' 
						WHERE genset_type='display_name'");
			echo json_encode($query->result());
		}

		public function GetBanner(){
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT genset_content FROM genset
						WHERE genset_type='home_banner'");
			echo json_encode($query->result());
		}

		public function UpdateBanner(){
			$banner='url_banner'
			$this->db->query('use '.$dn);
			$query = $this->db->query("UPDATE genset SET genset_content='".$banner."' 
						WHERE genset_type='home_banner'");
			echo json_encode($query->result());
		}


?>