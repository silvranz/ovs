<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends ABN_Controller {

	public function find() {
		$this->load->vars(array(
			'site_title' => 'Find Template',
		));
		$this->render();
	}
	public function preview($jsonName) {
		$this->load->helper('preview');
		$json = '{"title":"Testing Page 1",
					"body":[
						{"tag":"nav","attribute":[["class","navbar navbar-default"],["id","header"]]},
						{"tag":"div","attribute":[["class","collapse navbar-collapse"],["id","navbar"]],"parent":"header"},
						{"tag":"ul","attribute":[["class","nav navbar-nav navbar-left"],["id","menuList"]],"parent":"navbar"},
						{"tag":"li","attribute":[["id","menu1"]],"parent":"menuList"},
						{"tag":"a","attribute":[["href","http://google.com"]],"parent":"menu1","text":"Google"},
						{"tag":"li","attribute":[["id","menu2"]],"parent":"menuList"},
						{"tag":"a","attribute":[["href","http://facebook.com"]],"parent":"menu2","text":"Facebook"},
						{"tag":"input","attribute":[["type","text"]]},
						{"tag":"input","attribute":[["type","button"],["value","button1"]]}
						]}';
		$pageData = json_decode($json,true);
		renderDOM($pageData);
	}
}