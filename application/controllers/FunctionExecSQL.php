<?php 
// jalanin fungsi ini setelah domain udah tervalidasi available
public function ExecSQL_CC1(){
		$post = $this->input->post();
		$dn = $post["domainName"];
		if ($this->dbforge->create_database($dn))
		{
		    $this->db->query('use '.$dn);
		    // table prod
		    $prod_fields = array(
                        'prod_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11
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
		   	$this->dbforge->add_field($prod_fields);
		   	$this->dbforge->add_key('prod_id', TRUE);
		    $this->dbforge->create_table('prod');
		    // table product category prod_cat
		    		    $prod_cat_fields = array(
                        'prod_cat_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11
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
		   	$this->dbforge->add_field($prod_cat_fields);
		   	$this->dbforge->add_key('prod_cat_id', TRUE);
		    $this->dbforge->create_table('prod_cat');
		     // table aboutus
		    		    $aboutus_fields = array(
                        'aboutus_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11
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
		   	$this->dbforge->add_field($aboutus_fields);
		   	$this->dbforge->add_key('aboutus_id', TRUE);
		    $this->dbforge->create_table('aboutus');
		    // table contactus
		    		    $contactus_fields = array(
                        'contactus_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11
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
		   	$this->dbforge->add_field($contactus_fields);
		   	$this->dbforge->add_key('contactus_id', TRUE);
		    $this->dbforge->create_table('contactus');
		    // table genset
		    		    $genset_fields = array(
                        'genset_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11
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
		   	$this->dbforge->add_field($genset_fields);
		   	$this->dbforge->add_key('genset_id', TRUE);
		    $this->dbforge->create_table('genset');
		}
	}
?>
