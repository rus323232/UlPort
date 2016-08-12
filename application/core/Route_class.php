<?php

class Route {
	
	public static function start() {
		$ca_names = URLhandler::getControllerAndAction();
		$controller_name = $ca_names[0]."Controller";
		$action_name = "action".$ca_names[1];
		try {
			if (class_exists($controller_name)) $controller = new $controller_name();
			if (method_exists($controller, $action_name)) $controller->$action_name();
		} catch  (Exception $e) {
			$controller->action404();
		}
	}
	
}



?>

