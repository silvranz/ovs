<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ABN_Controller extends CI_Controller {

	public $domain = 'http://localhost/ovs';

	public function __construct() {
		parent::__construct();

		$this->load->helper('common');
	    $this->webroot = $_SERVER['DOCUMENT_ROOT'].'/ovs/';
		$this->load->vars(array(
			'domain' => $this->domain,
			'webroot' => $_SERVER['DOCUMENT_ROOT'].'/ovs/',
		));
	}

	public function render( $data = array(), $content_name = false, $layout = 'default', $is_admin = false ) {
		
		$controller_name = ucwords($this->router->fetch_class());
		$method_name = $this->router->fetch_method();

		$default_content_path = $controller_name.'/'.$method_name;

		if( !empty($content_name) ) {
			$default_content_path = $content_name;
		}

		if( !empty($is_admin) ) {
			$default_content_path = 'Admin/'.$controller_name.'/'.$content_name;
		}

		$this->load->vars(array(
			'request' => $data,
		));

		$content_view = $this->load->view($default_content_path, '',  TRUE);
		$this->load->view('Layouts/'.$layout, array(
			'content_view' => $content_view,
		));
	}

	public function setCustomError( $field_name = false, $error = false ) {
		if( !empty($field_name) && !empty($error) ) {
			$validator = &_get_validation_object();
			$validator->_field_data[$field_name] = array(
				'field' => $field_name,
				'rules' => false,
				'postdata' => false,
				'is_array' => false,
				'error' => $error,
			);
		}
	}
}

/* End of file AB_Controller.php */