<?php 
class JobsController extends Controller {
	function __construct() {
		$title = 'noMad Jobs';
		$description = 'A list of seasonal tourism jobs, with the ability to share your experiences and opinions about each';
		$keywords = 'livethenomadlife, seasonal employment, seasonal jobs, nomad, nomadic lifestyle, modern nomad, tourism industry, tourism, survey, ski resort, beach town, ski, beach, snowboard, vacation, my life is your vacation';
		$data = array('title'=>$title, 'description'=>$description, 'keywords'=>$keywords);
$this->view('nomad_jobs.php', $data);
	}
}


?>