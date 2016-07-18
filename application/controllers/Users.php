<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends ABN_Controller {

	public function login() {
		$this->load->vars(array(
			'site_title' => 'Login',
		));
		$this->render();
	}
}