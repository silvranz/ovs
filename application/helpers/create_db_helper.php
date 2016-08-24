<?php

function execSql($templateType,$domainName,$Instance){
	if($templateType=="CC1"){
		ExecSQL_CC1($domainName,$Instance);
	}
}

// jalanin fungsi ini setelah domain udah tervalidasi available
function ExecSQL_CC1($dn,$CI){
	if ($CI->dbforge->create_database($dn))
	{
		$CI->db->query('use '.$dn);
		// table prod
		$prod_fields = array(
					'prod_id' => array(
											 'type' => 'INT',
											 'constraint' => 11,
                                              'auto_increment' => TRUE
									  ),
					'prod_name' => array(
											 'type' => 'VARCHAR',
											 'constraint' => '50',
											  'null' => TRUE
									  ),
					'prod_desc' => array(
											 'type' => 'LONGTEXT',
											 'null' => TRUE
									  ),
					'prod_image' => array(
											 'type' => 'VARCHAR',
											 'constraint' =>100,
											 'null' => TRUE
									  ),
					'prod_cat_id' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  ),
					'prod_date' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'prod_user_input' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  ),
					'prod_date_edit' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'prod_user_edit' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  )
			);
		$CI->dbforge->add_field($prod_fields);
		$CI->dbforge->add_key('prod_id', TRUE);
		$CI->dbforge->create_table('prod');
		// table product category prod_cat
					$prod_cat_fields = array(
					'prod_cat_id' => array(
											 'type' => 'INT',
											 'constraint' => 11,
                                                  'auto_increment' => TRUE
									  ),
					'prod_cat_name' => array(
											 'type' => 'VARCHAR',
											 'constraint' => '50',
											  'null' => TRUE
									  ),
					'prod_cat_date' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'prod_cat_user_input' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  ),
					'prod_cat_date_edit' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'prod_cat_user_edit' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  )
			);
		$CI->dbforge->add_field($prod_cat_fields);
		$CI->dbforge->add_key('prod_cat_id', TRUE);
		$CI->dbforge->create_table('prod_cat');
		 // table aboutus
					$aboutus_fields = array(
					'aboutus_id' => array(
											 'type' => 'INT',
											 'constraint' => 11,
                                                  'auto_increment' => TRUE
									  ),
					'aboutus_title' => array(
											 'type' => 'VARCHAR',
											 'constraint' => '50',
											  'null' => TRUE
									  ),
					'aboutus_desc' => array(
											 'type' => 'LONGTEXT',
											  'null' => TRUE
									  ),
					'aboutus_date' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'aboutus_user_input' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  ),
					'aboutus_date_edit' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'aboutus_user_edit' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  )
			);
		$CI->dbforge->add_field($aboutus_fields);
		$CI->dbforge->add_key('aboutus_id', TRUE);
		$CI->dbforge->create_table('aboutus');
		// table contactus
					$contactus_fields = array(
					'contactus_id' => array(
											 'type' => 'INT',
											 'constraint' => 11,
                                                  'auto_increment' => TRUE
									  ),
					'contactus_name' => array(
											 'type' => 'VARCHAR',
											 'constraint' => '100',
											  'null' => TRUE
									  ),
					'contactus_email' => array(
											  'type' => 'VARCHAR',
											 'constraint' => '100',
											  'null' => TRUE
									  ),
					'contactus_message' => array(
											  'type' => 'VARCHAR',
											 'constraint' => '2000',
											  'null' => TRUE
									  ),
					'contactus_isread' => array(
											 'type' => 'INT',
											 'constraint' => 11
									  ),
					'contactus_date' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  )
			);
		$CI->dbforge->add_field($contactus_fields);
		$CI->dbforge->add_key('contactus_id', TRUE);
		$CI->dbforge->create_table('contactus');
		// table genset
					$genset_fields = array(
					'genset_id' => array(
											 'type' => 'INT',
											 'constraint' => 11,
                                                  'auto_increment' => TRUE
									  ),
					'genset_type' => array(
											 'type' => 'VARCHAR',
											 'constraint' => '100',
											  'null' => TRUE
									  ),
					'genset_content' => array(
											  'type' => 'VARCHAR',
											 'constraint' => '100',
											  'null' => TRUE
									  ),
					'genset_date' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'genset_user_input' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  ),
					'genset_date_edit' => array(
											 'type' => 'DATETIME',
											 'null' => TRUE
									  ),
					'genset_user_edit' => array(
											 'type' => 'INT',
											 'constraint' => 11,
											 'null' => TRUE
									  )
			);
		$CI->dbforge->add_field($genset_fields);
		$CI->dbforge->add_key('genset_id', TRUE);
		$CI->dbforge->create_table('genset');

		$userId = $CI->session->userdata("userid");
		$input = $CI->input->post();
		$CI->db->QUERY("use ".$dn);
		 $CI->db->QUERY("INSERT INTO genset
            (genset_type, genset_content, genset_date, genset_user_input)
            VALUES('logo', NULL, CURRENT_TIMESTAMP(), ".$userId.")");
          $CI->db->QUERY("INSERT INTO genset
            (genset_type, genset_content, genset_date, genset_user_input)
            VALUES('home_banner', NULL, CURRENT_TIMESTAMP(), ".$userId.")");
          $CI->db->QUERY("INSERT INTO genset
            (genset_type, genset_content, genset_date, genset_user_input)
            VALUES('display_name', '".$dn."', CURRENT_TIMESTAMP(), ".$userId.")");
            die();
	}
}
?>
