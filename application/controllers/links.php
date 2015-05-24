<?php 
class LinksController extends Controller {
	function __construct() {
		$title = 'noMad Links';
		$description = 'A list of links that can be of help to working seasonally';
		$keywords = 'livethenomadlife, seasonal employment, seasonal jobs, nomad, nomadic lifestyle, modern nomad, tourism industry, tourism, survey, ski resort, beach town, ski, beach, snowboard, vacation, my life is your vacation';
		$data = array('title'=>$title, 'description'=>$description, 'keywords'=>$keywords);
$this->view('nomad_links.php', $data);
	}
}


?>