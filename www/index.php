<?php 
/**
*  MVC Router
* Route Structure
*  /controller/method/args...
*/

	class Router {
		//  Route Object:
		private static $_instance;
		private $route;
		/* 
		* Builds a route object from the current URI
		*/
		public function __construct() {
			self::$_instance = $this;
			$this->route = new stdClass();
			$uri = $_SERVER['REQUEST_URI'];
			$pieces = explode('/', $uri);
			array_shift($pieces);
			foreach ($pieces as $key=>$value){
				if ($key === 0) {
					(!empty($value)) ? $this->route->controller = $this->load_controller($value) : null;
				} elseif ($key === 1) {
					(!empty($value)) ? $this->route->method = $this->load_method($value) : null;
				} else {
					if (isset($this->route->arguments)){
						array_push($this->route->arguments, $value);
					} else {
						$this->route->arguments = array($value);
					}
				}
			}
			$this->activate_route();
		}

		/** 
		*Attempts to find and load the controller
		*/
		private function load_controller($name){
			require_once '../application/classes/controller.php';
			$path = '../application/controllers/'. strtolower($name).'.php';
				if (file_exists($path)) {
				require_once $path;
				$name = str_replace('-',' ', $name);
				$name = ucwords($name);
				$name = str_replace(' ', '', $name);
				$name .= 'Controller';
				if  (class_exists($name)){
					$class = new $name();
					return $class;
				}
			}
			  return false;
		}
	private function load_method($name) {
		var_dump($name);
		return method_exists($this->route->controller, strtolower($name)) ? $name : false;
	}

	public function instance(){
		
		return self::$_instance;
	}
	private function activate_route() {
		$controller = isset($this->route->controller)? $this->route->controller : false;
		$method = isset($this->route->method) ? $this->route->method : false;
		$args = isset($this->route->arguments) ? $this->route->arguments :false;
		if ($controller === false) { require_once '../www/nomad_index.php';}
		if ($method !== false) {
			if ($args !== false) {
				$controller->$method($args);
			} else {
				$controller->$method();
			}
		}
	}
}

	new Router();

?>