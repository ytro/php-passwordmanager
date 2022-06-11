<?php

/* --
Author: Yann Trottier
File  : index.php
Desc. : Dispatches the request to the appropriate controller.
*/

define(ROOTDIR, dirname(__FILE__));
include 'config/config.php';
include 'libs/model.class.php';
include 'libs/controller.class.php';

class Init {
	
	private $_url;
	private $_controller;
	private $_method;
	private $_params;
	
	function start() {
		$url = isset($_GET['url']) ? $_GET['url'] : 'password/home';
		$url = rtrim($url, "/");
	
		if(!empty($url)) {
			$_url = explode("/",$url);
			$_controller = $_url[0];
			$_method = isset($_url[1]) ? $_url[1]:'';
			$_params = isset($_url[2]) ? $_url[2]:'';
		}
		else {
			$_controller = "password";
			$_method = "home";
			$_params = '';
		}	
		$file = 'controllers/' . $_controller . '.controller.php';
		
		if (!file_exists($file)) return false;
		include $file;				
		$controller = new $_controller;
	
		if (method_exists($_controller, $_method))
			$controller->{$_method}($_params);
	}
}

$init = new Init();
$init->start();

