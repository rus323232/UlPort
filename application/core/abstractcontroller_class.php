<?php

abstract class AbstractController {
	
	protected $view;

	
	public function __construct($view) {

		$this->view = $view;
		
	}
	
	abstract protected function render($str);
	abstract protected function action404();
	
	# protected function authUser() {
	#	return null;
	# }
	
	#protected function access() {
	#	return true;
	#}
	
	final protected function notFound() {
		$this->action404();
	}
	
	final protected function redirect($url) {
		header("Location: $url");
		exit;
	}
	
	final protected function renderData($modules, $layout, $params = array()) {
		if (!is_array($modules)) return false;
		foreach ($modules as $key => $value) {
			$params[$key] = $value;
		}
		return $this->view->render($layout, $params, true);
	}
	
}

?>