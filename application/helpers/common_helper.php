<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('loadSubview')) {

    function loadSubview( $view, $data = false ) { 
	    $CI = &get_instance();
	    return $CI->load->view( 'Elements/Subview/'.$view, $data );
	}
}

if ( ! function_exists('loadModal')) {

    function loadModal( $view, $data = false) {
        $CI = &get_instance();
	    return $CI->load->view( 'Elements/Modal/'.$view, $data );
	}
}

if ( ! function_exists('tag')) {

	function tag( $tag, $text = false, $attributes = array() ) {
		$stringify_attributes = '';
		$wrapTag = false;
		$stringify_wrapper_attributes = '';

		if( !empty($attributes) ) {
			foreach ($attributes as $attribute => $value) {
				if( $attribute == 'wrapTag' ) {
					$wrapTag = $value;
				} else if( $attribute == 'wrapAttributes' ) {
					foreach ($value as $wrapperAttribute => $wrapperValue) {
						$stringify_wrapper_attributes .= " $wrapperAttribute='$wrapperValue'";
					}
				} else {
					$stringify_attributes .= " $attribute='$value'";
		    	}
		    }
		}

		$tag = "<$tag" . $stringify_attributes . ">$text</$tag>";
		if( !empty($wrapTag) ) {
			$tag = "<$wrapTag" . $stringify_wrapper_attributes . ">$tag</$wrapTag>";
		}

	    return $tag;
	}
}

if ( ! function_exists('load_script')) {

	function load_script( $scripts = array() ) {
		$stringify_script = '';
		$CI = get_instance();

		if( !empty($scripts) ) {
			foreach ($scripts as $script) {
				$stringify_script .= "<script type='text/javascript' src='".$CI->config->item('domain').'/assets/js/'.$script.".js'></script>";
		    }
		}
	    
	    echo $stringify_script;
	}
}

if ( ! function_exists('load_css')) {

	function load_css( $scripts = array() ) {
		$stringify_script = '';
		$CI = get_instance();

		if( !empty($scripts) ) {
			foreach ($scripts as $script) {
		        $stringify_script .= "<link href='".$CI->config->item('domain').'/assets/css/'.$script.".css' rel='stylesheet'>";
		    }
		}
	    echo $stringify_script;
	}
}

if ( ! function_exists('debug')) {

	function debug( $param ){
		echo '<pre>';
		print_r($param);
		echo '</pre>';
	}
}

if ( ! function_exists('isLoggedIn')) {

	function isLoggedIn(){
		$CI = & get_instance();
		return ( $CI->session->userdata('loggedin') != NULL ) ? true : false;
	}
}

if ( ! function_exists('loadMessage')) {

	function loadMessage( $message = 'Field yang dibutuhkan tidak valid', $status = 'error', $display_on_error = false ) {
		$data = array(
			'message' => $message,
			'status' => $status,
			'display_on_error' => $display_on_error,
		);
		$CI = get_instance();
	    $CI->load->vars(array(
	    	'alert' => $CI->load->view( 'Elements/Message/message', $data, TRUE )
	    ));
	}
}

if ( ! function_exists('divider')) {

	function divider( $tag = 'li' ) {
		return "<$tag class='divider'></$tag>";
	}
}

if ( ! function_exists('tableCell')) {

	function tableCell( $data = array() ) {
		$tableData = '';
		foreach ($data as $value) {
			$tableData .= "<td>$value</td>";
		}
		$tableRow = "<tr>".$tableData."</tr>";
	    return $tableRow;
	}
}

if ( ! function_exists('seoURL')) {

	function seoURL($string) {
	    //Lower case everything
	    $string = strtolower($string);
	    //Make alphanumeric (removes all other characters)
	    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	    //Clean up multiple dashes or whitespaces
	    $string = preg_replace("/[\s-]+/", " ", $string);
	    //Convert whitespaces and underscore to dash
	    $string = preg_replace("/[\s_]/", "-", $string);
	    
	    return $string;
	}
}

if ( ! function_exists('isMobile')) {
	
	function isMobile() {
	    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
}