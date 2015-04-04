<?php 
	class Controller {

		protected function view($name,$data) {
			$info = $data;
			include "$name";

		}
	}
?>