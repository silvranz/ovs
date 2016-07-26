<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends ABN_Controller {
	/*** tambahan nicholas ***/
	public function __construct(){
		parent::__construct();
		$this->load->model("User_Model","user");
	}
	
	public function profile(){
		$databaseResult = $this->user->getProfile($this->session->userdata("userid"));
		if(count($databaseResult->result())>0){
			$userProfile = $databaseResult->result();
			$databaseResult->next_result();
			$databaseResult = $this->user->getCountry();
			$country = $databaseResult->result();
			$this->load->vars(array(
								'site_title' => 'User Profile',
								"additional_js"=>["view/Users/profile"]
							));
			$this->render(array("profile"=>$userProfile[0],"country"=>$country));
		}
	}
	/*** selesai tambahan nicholas ***/
	
	public function login() {

		if( $this->session->userdata('loggedin') ) {
			$this->load->helper('url');
			redirect($this->domain);
		}
		
		$this->load->library('form_validation');
		$this->load->helper('form');

		$post = $this->input->post();
		$message = false;
		$status = false;

		// To get the parameter redirect after
		$get = $this->input->get();
		
		if( !empty($post) ) {
			
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ( $this->form_validation->run() == TRUE ) {

				$res = $this->db->query('CALL Login(?,?)', array(
					$post['email'], 
					sha1($post['password']),
				));
				$data = $res->result()[0];

				if( $data->UserID != -1 ) {

					$this->session->set_userdata('loggedin', true);
					$this->session->set_userdata('userid', $data->UserID);
					$this->session->set_userdata('username', $data->UserFullName);
					$this->session->set_userdata('useremail', $data->UserEmail);
					$this->session->set_userdata('isAdmin', $data->isAdmin);
					$this->session->set_userdata('userphoto', $data->UserPhoto);

					if( isset($get['redirect_after']) ) {
						$this->session->set_userdata('redirect_now', true);
						$this->session->set_userdata('redirect_after', $get['redirect_after']);
					}

					$message = 'Logged in successfully';
					$status = 'success';
				} else {
					$message = 'Invalid email or password. Please try again';
					$status = 'error';
				}
			} else {
				$message = 'Invalid email or password. Please try again';
				$status = 'error';
			}
		}

		$this->load->vars(array(
			'redirect_after' => isset( $get['redirect_after'] ) ? $get['redirect_after'] : false,
		));

		if( $this->input->is_ajax_request() ) {
			loadMessage($message, $status);
		} else {
			$this->load->vars(array(
				'site_title' => 'Login',
			));
		}

		$this->render($post);
	}

	public function register() {

		if( $this->session->userdata('loggedin') ) {
			$this->load->helper('url');
			redirect($this->domain);
		}

		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('build_data');

		$post = $this->input->post();
		$message = 'Please fill all the required fields.';
		$status = 'error';

		$countries = $this->db->query('CALL GetCountry()');
		$countries = buildDataDropdown($countries, 'CountryID', 'CountryName');

		// To get the parameter redirect after
		$get = $this->input->get();
		
		if( !empty($post) ) {
			
			$this->form_validation->set_rules('fullname', 'Full name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('CountryID', 'Country', 'required');

			if ( $this->form_validation->run() == TRUE ) {

				$res = $this->db->query('CALL RegisterUser(?,?,?,?,?)', array(
					$post['fullname'],
					$post['email'],
					sha1($post['password']),
					$post['gender'],
					$post['CountryID'],
				));
				$data = $res->result()[0];

				if( $data->UserID != -1 ) {
					$this->session->set_userdata('loggedin', true);
					$this->session->set_userdata('userid', $data->UserID);
					$this->session->set_userdata('username', $post['fullname']);
					$this->session->set_userdata('useremail', $post['email']);
					$this->session->set_userdata('isAdmin', 0);
					$this->session->set_userdata('userphoto', 'default');

					if( isset($get['redirect_after']) ) {
						$this->session->set_userdata('redirect_now', true);
						$this->session->set_userdata('redirect_after', $get['redirect_after']);
					}

					$message = 'Successfully signed up.';
					$status = 'success';
				} else {
					$this->setCustomError('email', 'Email has been registerd. Please try another email.');
				}
			}
		}

		$this->load->vars(array(
			'redirect_after' => isset( $get['redirect_after'] ) ? $get['redirect_after'] : false,
			'countries' => $countries,
		));

		if( $this->input->is_ajax_request() ) {
			loadMessage($message, $status);
		} else {
			$this->load->vars(array(
				'site_title' => 'Register',
			));
		}

		$this->render($post);
	}

	function logout(){
		$this->load->helper('url');
		$this->session->sess_destroy();
		redirect($this->domain.'/pages');
	}
}