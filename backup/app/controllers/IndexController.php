<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

	public function initialize(){
		//kalau butuh pake template lain(folder template ada di "app/views/templates/")
		//$this->view->setTemplateAfter("main");
	}
	
    public function indexAction()
    {
		$this->view->setVar("greet","Hello");
    }
}