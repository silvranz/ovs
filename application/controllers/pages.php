<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends ABN_Controller {

	public function index() {
		$this->render();
	}

	public function about_us() {
		$this->load->vars(array(
			'site_title' => 'About Us | Oversign',
		));
		$this->render();
	}

	public function contact_us() {
		$this->load->vars(array(
			'site_title' => 'Contact Us | Oversign',
		));
		$this->render();
	}

	public function terms_of_use() {
		$this->load->vars(array(
			'site_title' => 'Terms Of Use | Oversign',
		));
		$this->render();
	}

	public function privacy_policy() {
		$this->load->vars(array(
			'site_title' => 'Privacy Policy | Oversign',
		));
		$this->render();
	}
}