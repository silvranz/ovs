<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('renderDOM')) {
	function renderDOM($json){
		$CI = get_instance();
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
		$bootstrap->setAttribute("href",$CI->domain."/assets/css/bootstrap/bootstrap.css");

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