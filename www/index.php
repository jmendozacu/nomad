<?php 
	
	$request = $_SERVER['REQUEST_URI'];
	$request = explode('/',$request);
	
	 if(file_exists("./nomad/{$request[1]}.php")){
		 require "./nomad/{$request[1]}.php";
	 }

		
	
else {
require "./nomad_index.php";
}
?>
