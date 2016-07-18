<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing extends ABN_Controller {

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
		$domRender = $this->renderDOM($pageData);
	}
	private function renderDOM($json){
		$page = new DOMDocument();
		$page->normalizeDocument();
		$page->formatOutput = true;

		$html = $page->createElement('html');
		$head = $page->createElement('head');
		$title = $page->createElement('title');
		$bootstrap = $page->createElement('link');
		
		$body = $page->createElement('body');

		$title_text = $page->createTextNode($json["title"]);
		$title->appendChild($title_text);
		$meta = $page->createElement('meta');
		$meta->setAttribute("http-equiv","Content-Type");
		$meta->setAttribute("content","text/html; charset=utf-8");
		$meta = $head->appendChild($meta);
		
		$bootstrap->setAttribute("rel","stylesheet");
		$bootstrap->setAttribute("href",$this->domain."/assets/css/bootstrap/bootstrap.css");

		$head->appendChild($title);
		$head->appendChild($bootstrap);
		
		$html->appendChild($head);
		$html->appendChild($body);
		$page->appendChild($html);
		
		$countB = count($json["body"]);
		for($i=0;$i<$countB;$i++){
			$tempEl = $page->createElement($json["body"][$i]["tag"]);
			$countAttr = isset($json["body"][$i]["attribute"])?count($json["body"][$i]["attribute"]):0;
			for($j=0;$j<$countAttr;$j++){
				$tempEl->setAttribute($json["body"][$i]["attribute"][$j][0],$json["body"][$i]["attribute"][$j][1]);
				if($json["body"][$i]["attribute"][$j][0]=="id"){
					$tempEl->setIdAttribute($json["body"][$i]["attribute"][$j][0],true);
				}
			}
			if(!$tempEl->hasAttribute("id")){
				$tempEl->setAttribute("id",$json["body"][$i]["tag"].$body->getElementsByTagName($json["body"][$i]["tag"])->length);
			}
			if(isset($json["body"][$i]["text"])){
				$tempEl->appendChild($page->createTextNode($json["body"][$i]["text"]));
			}
			if(isset($json["body"][$i]["parent"])){
				$parent = $page->getElementById($json["body"][$i]["parent"]);
				$parent->appendChild($tempEl);
			}
			else{
				$body->appendChild($tempEl);
			}
		}
		$html->appendChild($head);
		$html->appendChild($body);
		$page->appendChild($html);
		echo "<!DOCTYPE html>" .html_entity_decode($page->saveHTML());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */