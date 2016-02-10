<?php

use Phalcon\Mvc\Controller;

class WebController extends Controller
{

	public function initialize(){
	}
	
    public function indexAction()
    {
    }
    public function workshopAction()
    {
		$this->view->setTemplateAfter("web-workshop");
		$this->view->setVar("customScript","web-workshop");
    }
}