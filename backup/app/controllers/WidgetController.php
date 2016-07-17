<?php

use Phalcon\Mvc\Controller;

class WidgetController extends Controller
{

	public function initialize(){
	}
	
    public function indexAction()
    {
    }
    public function workshopAction()
    {
		$this->view->setTemplateAfter("widget-workshop");
    }
}