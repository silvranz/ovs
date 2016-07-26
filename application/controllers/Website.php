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
	/*** end page load ***/
	
	/*** service ***/
	/*** end service ***/
}