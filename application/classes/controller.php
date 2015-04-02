<?php 
	class Controller {

		protected function view($name) {
			eval ('?>' . file_get_contents ("$name"));

		}
	}
?>