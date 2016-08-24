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
			$aboutus_title = 'Hai';
			$aboutus_desc = 'longlongtext';
			$userid = $this->session->userdata("userid");
			$this->db->query('use '.$dn);
			$query = $this->db->query("UPDATE aboutus SET aboutus_title= '".$aboutus_title."', 
								aboutus_desc='".$aboutus_desc."',
								aboutus_date_edit = CURRENT_TIMESTAMP(),
								aboutus_user_edit=".$userid);
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

		public function GetDisplayName(){
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT genset_content FROM genset
						WHERE genset_type='display_name'");
			echo json_encode($query->result());
		}

		public function GetBanner(){
			$this->db->query('use '.$dn);
			$query = $this->db->query("SELECT genset_content FROM genset
						WHERE genset_type='home_banner'");
			echo json_encode($query->result());
		}


?>