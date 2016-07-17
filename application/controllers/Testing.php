<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function gplus()
	{
		$this->load->view('gpl');
	}
	public function viewTemplate($jsonPage=""){
		//Terima data halaman [bisa json,xml,txt,string,dsb]
		$json = '{"title":"Testing Page 1",
					"body":[
						{"tag":"div","style":"border:1px solid black;width:100px;height:100px","closedTag":1},
						{"tag":"input","closedTag":0,
							"extraTag":[["type","text"]]}
						]}';
		$pageData = json_decode($json,true);
		//Mungkin prossesing datanya dulu lalu kirim ke view
		$this->load->view('preview',$pageData);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */