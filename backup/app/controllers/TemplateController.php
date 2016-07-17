<?php

use Phalcon\Mvc\Controller;

class TemplateController extends Controller
{

    public function indexAction()
    {
		$this->view->setVar("greet","Hello");
    }
}