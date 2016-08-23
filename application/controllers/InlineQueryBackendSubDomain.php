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

?>