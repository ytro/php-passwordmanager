<?php

/* --
Author: Yann Trottier
File  : libs/controller.class.php
Desc. : Allows child controllers to access the models, assign
		which information to output, and output views.
*/

class Controller
{
	private $variables;
	
    function loadModel($model) {
    	require_once (ROOTDIR . '/models/' . $model . '.php');
        $this->$model = new $model;
    }
    
    function loadView($file, $include_headers = true) {
    
		extract($this->variables);

		$headerPath = ROOTDIR . '/views/header.php';
		$footerPath = ROOTDIR . '/views/footer.php';
		$viewPath   = ROOTDIR . '/views/' . $file . '.php';

		ob_start();
		if ($include_headers)
			if (file_exists($headerPath)) 
				require($headerPath);
		if (file_exists($viewPath)) require($viewPath);
		if ($include_headers)
			if (file_exists($footerPath)) 
				require($footerPath);
		ob_end_flush();
    }
	
	function sendToView($name, $value) {
		$this->variables[$name] = $value;
	}
}