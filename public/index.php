<?php

try {

   //Register an autoloader
   $loader = new \Phalcon\Loader();
   $loader->registerDirs(array(
       '../app/controllers/'
   ))->register();

   //Create a DI
   $di = new Phalcon\DI\FactoryDefault();


	//Register Volt as a service
	$di->set('volt', function($view, $di) {

		$volt = new Phalcon\Mvc\View\Engine\Volt($view, $di);

		$volt->setOptions(array(
			"compileAlways" => true
		));

		return $volt;
	});

	//Register Volt as template engine
	$di->set('view', function() {

		$view = new \Phalcon\Mvc\View();

		$view->setViewsDir('../app/views/');
		//hasilnya folder layout  = "../app/views/templates/";
        $view->setLayoutsDir('layouts/');
		//hasilnya = "../app/views/templates/main";
		$view->setTemplateAfter('main');
		$view->registerEngines(array(
			".volt" => 'volt'
		));

		return $view;
	});

   //Setup a base URI so that all generated URIs include the "tutorial" folder
   $di->set('url', function(){
       $url = new \Phalcon\Mvc\Url();
       $url->setBaseUri('/Ovs/');
       //$url->setStaticBaseUri('http://www.ovs.my.id/');
       $url->setStaticBaseUri('http://localhost/ovs');
       return $url;
   });

   //Handle the request
   $application = new \Phalcon\Mvc\Application($di);

   echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}